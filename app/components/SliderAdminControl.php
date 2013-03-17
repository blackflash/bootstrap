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

class sliderAdminControl extends UI\Control {

    /** @var Nette\Database\Table\Selection */
	private $selected;

	/** @var TaskRepository */
	private $generalRepository;

    public function __construct(GeneralRepository $generalRepository)
	{
		parent::__construct(); // vždy je potřeba volat rodičovský konstruktor
		$this->generalRepository = $generalRepository;
	}

	public function getslider(){
		//return $this->context->generalRepository->getByTable("component_slider");
	}

	public function render()
    {
        $this->template->setFile(__DIR__ . '/SliderAdmin.latte');
        $this->template->slider = $this->generalRepository->getByTable("component_slider");
        $this->template->render();
    }

    public function handleactivate($id,$value){
    	$activate =  ($value == 1) ? 0 : 1;
		$this->generalRepository->updateTableById("component_slider","id",$id,array("is_active" => $activate));
		$this->presenter->redirect('this');
    }

    public function handlejsonDelete($id){
		$jsondata = $this->generalRepository->deleteRowByTableAndId("component_slider","id",$id);
		unlink("uploads/slider/".$_POST["image"]);
        echo json_encode($jsondata);
        die();
	}

	public function handlejsonUpdate(){
		$data = $_POST;

		$success = $this->generalRepository->updateTableById("component_slider", "id", $data["id"], 
			array($data));

		$jsondata = array(
			'success'   => $success, 
			"id"        => $data["id"],
			"title"     => $data["title"],
			"text"      => $data["text"],
			"paragraph" => $data["paragraph"],
			"link"      => $data["link"]
		);
        echo json_encode($jsondata);
        die();
	}

	public function handleaddslider(){

		$name = "component_slider";
		$data = $_POST;
		$file = $_FILES;

		$this->generalRepository->insertRowByTable($name,$data);

		$dir = "uploads/slider/";
		$this->saveImage($dir,$data["id"],false);

		$this->handlejsonUpdateImage();
		
		$this->presenter->redirect('Admin:default',array( "title"=>"CleverFrogs - Slider","page"=>"component_slider", "success" => "1"));
	}

	public function handlejsonUpdateImage(){
		$data = $_POST;
		$dir = "uploads/slider/";
		$this->saveImage($dir,$data["id"],true);
		
		$this->presenter->redirect('Admin:default',array( "title"=>"CleverFrogs - Slider","page"=>"component_slider", "success" => "1"));
		
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
				$image->resize(200, 240,Image::FIT);
				$image->save($upload_dir.$picture['name']);

				//rename file
				if(!$reupload)
					$lastIndex = $this->generalRepository->getLastInsertedId("component_slider","id");
				else
					$lastIndex = $id;
				
				$file = $upload_dir.$lastIndex.".jpg";

				rename($upload_dir.$picture['name'],$file);

				$this->generalRepository->updateTableById("component_slider","id",$lastIndex,array('image' => $lastIndex.".jpg"));


				return;
			}
			
		}

		return;
		$this->exit_status('Something went wrong with your upload! '.$_FILES['pic']['error']);
	}

}