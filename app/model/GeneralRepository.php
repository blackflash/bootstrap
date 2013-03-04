<?php

namespace Todo;

use Nette;
use Nette\Application\UI\Form;
use Nette\Application\BadRequestException;
use Nette\Application\ForbiddenRequestException;



class GeneralRepository extends Repository
{

	/**
	 * Vrací seznam nehotových úkolů.
	 * @return Nette\Database\Table\Selection
	 */
	public function findIncomplete()
	{
		return $this->findBy(array('done' => false))->order('created ASC');
	}
	
	public function getByTable($tableName){
		return $this->connection->table($tableName);
	}

	public function getByTableWithOrder($tableName,$orderColumnName,$ordering){
		return $this->connection->table($tableName)->order($orderColumnName,$ordering);
	}

	/*---------------- COUNTERS ----------------*/
	public function getCountOfFeedbacksbyTime($table,$column,$time){
		return $this->connection->query("Select count(*) as feedbacks from ".$table." WHERE ".$column." BETWEEN CURRENT_TIMESTAMP - INTERVAL '".$time."' DAY AND CURRENT_TIMESTAMP")->fetch()->feedbacks;
	}

	public function getCountOfRowsByTable($tableName){
		return $this->connection->table($tableName)->count();
	}

	public function getCountOfRowsByTableAndId($tableName,$column,$value){
		return $this->connection->table($tableName)->where(array($column => $value))->count();
	}

	public function getCountOfRowsByTableMultiCon($tableName,$data){
		return $this->connection->table($tableName)->where($data)->count();
	}
	/*---------------- end of counters -------------*/



	public function getByTableAndId($tableName,$column, $id){
		return $this->connection->table($tableName)->where(array($column => $id));
	}

	public function getByTableAndIdWithOrder($tableName,$column, $gallery_id,$orderColumnName,$ordering){
		return $this->connection->table($tableName)->where(array($column => $gallery_id))->order($orderColumnName,$ordering);
	}

	public function getLastInsertedId($table,$column){
		return $this->connection->table($table)->max($column);
	}

	public function insertRowByTable($tableName,$data){
		return $this->connection->table($tableName)->insert($data);
	}
	
	public function findBy(array $by)
	{
		return $this->getTable()->where($by);
	}

	public function updateTableById($tableName, $rowName, $rowId, $data)
	{
		return $this->connection->table($tableName)->where($rowName,$rowId)->update($data);
	}

	public function deleteRowByTableAndId($tableName,$column,$value){
		return $this->connection->table($tableName)->where(array($column => $value))->delete();
	}

	

	/*--------- delete process ---------*/

	// delete photo from folder and table
	public function deleteImage($table,$column,$id) {
		$this->deleteFile($table,$column,$id);
	}

	
	/**
	 * Deletes image file.
	 * 
	 * @param int $id Image ID
	 */
	protected function deleteFile($table,$column,$id) {


		$result = $this->getByTableAndId($table,$column,$id)->fetch();

		if (!$result) {
			throw new InvalidArgumentException('Photo with ID [' . $id . '] was not found.');
		}

		$filename = $result['image'];
		$category_id = $result['category_id'];

		$filepath_regular = $this->getPathImage($category_id, $filename);

		if (file_exists($filepath_regular["image"]) && is_file($filepath_regular["image"])) {
			unlink($filepath_regular["image"]);
		}
		
		if (file_exists($filepath_regular["thumb"]) && is_file($filepath_regular["thumb"])) {
			unlink($filepath_regular["thumb"]);
		}

	}

	public function getPathImage($category_id, $filename) {
		
		$data = array(
			'image' => "uploads/ps/".$category_id."/".$filename, 
			'thumb' => "uploads/ps/".$category_id."/thumbs/".$filename
		);

		return $data;
	}


}
