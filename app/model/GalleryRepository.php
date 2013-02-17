<?php
namespace Todo;
use \Nette\InvalidStateException,
	\Nette\InvalidArgumentException,
	\Nette\Http\FileUpload;

/**
 * Contains basic implementation for item model.
 */
class GalleryRepository extends Repository {


	public function create(array $data) {
		$insert_data = array(
			'is_active' => true,
		);

		foreach ($data as $key => $value) {
			if (!$value) {
				unset($data[$key]);
			} elseif ($key != static::FILE_KEY) {
				$insert_data[$key] = $value;
			}
		}

		/* @var $difference array */
		if (!($difference = array_diff(static::$basicColumns, array_keys($insert_data)))) {
			throw new InvalidStateException('Missing required fields ['.implode(', ', $difference).'].');
		}
		
		$file = $data[static::FILE_KEY];
		if (!$file->isImage()) {
			throw new InvalidArgumentException('Given file is not image. It is [' . $file->getContentType() . '].');
		}

		// Save image
		$extension = $this->detectExtension($file);
		$filename = sha1($file->name) . '.' . $extension;
		$filepath = $this->getPathImage($data['gallery_id'], $filename);
		$file->move($filepath);

		$insert_data['filename'] = $filename;
		
		$photo_id = $this->connection->createItem($insert_data, $data['gallery_id']);
		
		return $photo_id;
	}

	/**
	 * Updates photo. It means only extended info. New image should be created, not updated.
	 * 
	 * @param array $data
	 */
	public function update(array $data) {
		if (!array_key_exists('photo_id', $data)) {
			throw new InvalidArgumentException('Given data do not contain photo_id.');
		}

		$photo_id = $data['photo_id'];
		$previous_data = $this->getPhotoById($photo_id);
		
		$update_data = array();
		foreach ($data as $key => $value) {
			if ($key != static::FILE_KEY && $previous_data[$key] != $value) {
				$update_data[$key] = $value;
			}
		}
		
		$this->connection->updateItem($photo_id, $update_data);
		
		return $photo_id;
	}

	/**
	 * Detects extension by file content type. (Only for images.)
	 * 
	 * @param HttpUploadedFile $file
	 * @return string Extension (without dot)
	 */
	protected function detectExtension(FileUpload $file) {
		$content_type = $file->getContentType();
		switch ($content_type) {
			case 'image/gif':
				return 'gif';
				break;
			case 'image/png':
				return 'png';
				break;
			case 'image/jpeg':
				return 'jpg';
				break;
			default:
				throw new InvalidArgumentException('Given file [' . $content_type . '] is not supported image type.');
		}
	}

	public function toggleActive($id) {
		$this->connection->toggleActiveItem($id);
	}

	public function moveLeft($id) {
		$left_id = $this->connection->getLeftItemBy($id);
		$this->swapPhotos($id, $left_id);
	}

	public function moveRight($id) {
		$right_id = $this->connection->getRightItemBy($id);
		$this->swapPhotos($id, $right_id);
	}

	/**
	 * Swaps ordering between given photos.
	 * 
	 * @param int $photo_id_1 Photo ID
	 * @param int $photo_id_2 Photo ID
	 */
	protected function swapPhotos($photo_id_1, $photo_id_2) {
		$this->connection->swapItems($photo_id_1, $photo_id_2);
	}

	public function getByGallery($id, $admin = false) {
		return $this->connection->getItemsByGroup($id, $admin);
	}


	/*------------------------------ MY functions  ------------------------------*/


	/*--------- delete process ---------*/

	// delete photo from folder and table
	public function delete($id) {
		$this->deleteFile($id);
		$this->deleteRowByTableAndId("gallery_photo","photo_id",$id);
	}

	
	/**
	 * Deletes photo file.
	 * 
	 * @param int $id Photo ID
	 */
	protected function deleteFile($id) {
		$result = $this->getPhotoById($id)->fetch();

		if (!$result) {
			throw new InvalidArgumentException('Photo with ID [' . $id . '] was not found.');
		}

		$filename = $result['filename'];
		$gallery_id = $result['gallery_id'];
		$namespace_id = $result['namespace_id'];

		$filepath_regular = $this->getPathImage($namespace_id, $gallery_id, $filename);

		if (file_exists($filepath_regular["photo"]) && is_file($filepath_regular["photo"])) {
			unlink($filepath_regular["photo"]);
		}
		
		if (file_exists($filepath_regular["thumb"]) && is_file($filepath_regular["thumb"])) {
			unlink($filepath_regular["thumb"]);
		}


	}

	public function getPathImage($namespace_id, $gallery_id, $filename) {
		
		$data = array(
			'photo' => "uploads/gallery/".$namespace_id."/".$gallery_id."/".$filename, 
			'thumb' => "uploads/gallery/".$namespace_id."/".$gallery_id."/thumbs/".$filename
		);

		return $data;
	}

	public function deleteRowByTableAndId($tableName,$column,$gallery_id){
		return $this->connection->table($tableName)->where(array($column => $gallery_id))->delete();
	}

	public function deleteGallery($tableName,$column,$gallery_id){

		$data = $this->getByTableAndId("gallery","gallery_id",$gallery_id)->fetch();
		$thumbs = "uploads/gallery/".$data->namespace_id."/".$data->gallery_id."/thumbs/";
		$dir = "uploads/gallery/".$data->namespace_id."/".$data->gallery_id;

		$this->deleteDirectory($thumbs);
		$this->deleteDirectory($dir);
			
		return $this->connection->table($tableName)->where(array($column => $gallery_id))->delete();
		
		
	}

	function deleteDirectory($dir) {
	    if (!file_exists($dir)) return true;
	    if (!is_dir($dir)) return unlink($dir);
	    foreach (scandir($dir) as $item) {
	        if ($item == '.' || $item == '..') continue;
	        if (!$this->deleteDirectory($dir.DIRECTORY_SEPARATOR.$item)) return false;
	    }
	    return rmdir($dir);
	}

	public function getAllGalleries(){
		return $this->getTable();
	}

	public function getByTable($tableName){
		return $this->connection->table($tableName);
	}

	public function getCountOfRowsByTable($tableName){
		return $this->connection->table($tableName)->count();
	}

	// get photo by ID
	public function getPhotoById($id) {
		return $this->connection->table("gallery_photo")->where('photo_id', $id);
	}

	public function getByTableAndId($tableName,$column, $gallery_id){
		return $this->connection->table($tableName)->where(array($column => $gallery_id));
	}

	public function getByTableAndIdWithOrder($tableName,$column, $gallery_id,$orderColumnName,$ordering){
		return $this->connection->table($tableName)->where(array($column => $gallery_id))->order($orderColumnName,$ordering);
	}

	public function insertRowByTable($tableName,$data){
		return $this->connection->table($tableName)->insert($data);
	}

	public function getLastInsertedId($table,$column){
		return $this->connection->table($table)->max($column);
	}

	public function findBy(array $by)
	{
		return $this->getTable()->where($by);
	}

	public function updateTableById($tableName, $rowName, $rowId, $data)
	{
		return $this->connection->table($tableName)->where($rowName,$rowId)->update($data);
	}

	public function markDoneByTable($gallery_id,$is_active,$tableName)
	{	
		return $this->connection->table($tableName)->where(array('gallery_id' => $gallery_id))->update(array('is_active' => $is_active));
		//return $this->connection->table($tableName)->findBy(array('gallery_id' => $gallery_id))->update($data);
	}


}
