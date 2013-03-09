<?php

namespace Todo;

use Nette\Application\UI,
	Nette\Security as NS,
	Nette\Application\UI\Form,
	Nette\Database\Connection;
use Nette\Image;
use Nette\Http\Request;
use Nette\Http\FileUpload;
use Nette\Http\Url;

class compactNewsAdminControl extends UI\Control {

    /** @var Nette\Database\Table\Selection */
	private $selected;

	/** @var TaskRepository */
	private $generalRepository;

    public function __construct(GeneralRepository $generalRepository)
	{
		parent::__construct(); // vždy je potřeba volat rodičovský konstruktor
		$this->generalRepository = $generalRepository;
	}

	public function getNews(){
		//return $this->context->generalRepository->getByTable("component_compact_news");
	}

	public function render()
    {
        $this->template->setFile(__DIR__ . '/CompactNewsAdmin.latte');
        $this->template->news = $this->generalRepository->getByTable("component_compact_news");
        $this->template->render();
    }

    public function handleactivate($id,$value){
    	$activate =  ($value == 1) ? 0 : 1;
		$this->generalRepository->updateTableById("component_compact_news","id",$id,array("is_active" => $activate));
		$this->presenter->redirect('this');
    }

    public function handlejsonDelete($id){
		$jsondata = $this->generalRepository->deleteRowByTableAndId("component_compact_news","id",$id);
		unlink("uploads/news/".$_POST["image"]);
        echo json_encode($jsondata);
        die();
	}

	public function handlejsonUpdate(){
		$data = $_POST;
		$success = $this->generalRepository->updateTableById("component_compact_news", "id", $data["id"], 
			array($data));

		$jsondata = array(
			'success' => $success, 
			"id"      => $data["id"],
			"title"   => $data["title"],
			"text"    => $data["text"],
			"link"    => $data["link"]
		);
        echo json_encode($jsondata);
        die();
	}

	public function handleaddNews(){

		$name = "component_compact_news";
		$data = $_POST;
		$file = $_FILES;


		$this->generalRepository->insertRowByTable($name,$data);

		$dir = "uploads/news/";
		$this->saveImage($dir,$data["id"],false);

		$this->handlejsonUpdateImage();
		
		$this->presenter->redirect('Admin:default',array( "title"=>"CleverFrogs - News","page"=>"component_compact_news", "success" => "1"));
	}

	public function handlejsonUpdateImage(){
		$data = $_POST;
		$dir = "uploads/news/";
		$this->saveImage($dir,$data["id"],true);
		
		$this->presenter->redirect('Admin:default',array( "title"=>"CleverFrogs - News","page"=>"component_compact_news", "success" => "1"));
		
	}

	function saveImage($dir,$id,$reupload){

		$upload_dir = $dir;
		$allowed_ext = array('jpg','jpeg','png','gif');
		$pic = array();

		$id_G = $id;
		$namespace_id_G = $category_id;

		if(strtolower($_SERVER['REQUEST_METHOD']) != 'post'){
			exit_status('Error! Wrong HTTP method!');
		}

		if(array_key_exists('image',$_FILES) && $_FILES['image']['error'] == 0 ){
			
			$picture = $_FILES['image'];

			$filename = $picture['name'];
			$extension = pathinfo($filename, PATHINFO_EXTENSION);

			if(!in_array($extension,$allowed_ext)){
				$this->exit_status('Only '.implode(',',$allowed_ext).' files are allowed!');
			}	
			
			// Move the uploaded file from the temporary 
			// directory to the uploads folder:
			if(move_uploaded_file($picture['tmp_name'], $upload_dir.$picture['name'])){

				$image = Image::fromFile($upload_dir.$picture['name']);
				$image->resize(220, 120,Image::EXACT);
				$image->save($upload_dir.$picture['name']);

				//rename file
				if(!$reupload)
					$lastIndex = $this->generalRepository->getLastInsertedId("component_compact_news","id");
				else
					$lastIndex = $id;
				
				$file = $upload_dir.$lastIndex.".jpg";

				rename($upload_dir.$picture['name'],$file);

				$this->generalRepository->updateTableById("component_compact_news","id",$lastIndex,array('image' => $lastIndex.".jpg"));


				return;
			}
			
		}

		return;
		$this->exit_status('Something went wrong with your upload! '.$_FILES['pic']['error']);
	}

}