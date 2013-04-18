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

class basicInfoAdminControl extends UI\Control {

    /** @var Nette\Database\Table\Selection */
	/** @var TaskRepository */
	private $generalRepository;

    public function __construct(GeneralRepository $generalRepository)
	{
		parent::__construct(); // vždy je potřeba volat rodičovský konstruktor
		$this->generalRepository = $generalRepository;
	}

	public function render()
    {
        $this->template->setFile(__DIR__ . '/basicInfoAdmin.latte');
        $this->template->basic   = $this->generalRepository->getByTableAndId("basic_info","id","1")->fetch();
        $this->template->render();
    }

    public function handlejsonSetBasicInfo(){
		$success = $this->generalRepository->updateTableById("basic_info","id",1,array($_POST["column"] => $_POST["value"]));
		echo json_encode($success);
		die();
	}

	public function handlebasicUpdateLogo(){
		$dir = "uploads/basic/";
		$this->saveImage($dir,1,true);
		$this->presenter->redirect('Admin:default',array("title"=>"CleverFrogs - Basic info","page"=>"basic_info", "success" => "1"));
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
				$image->resize(450, 300,Image::SHRINK_ONLY);
				$image->save($upload_dir.$picture['name']);

				$file = $upload_dir."logo.png";
				rename($upload_dir.$picture['name'],$file);
				return;
			}
		}

		return;
		$this->exit_status('Something went wrong with your upload! '.$_FILES['pic']['error']);
	}

}