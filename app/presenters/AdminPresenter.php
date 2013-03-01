<?php

use Nette\Application\UI\Form;
use Nette\Image;
use Nette\Http\Request;
use Nette\Http\FileUpload;
use Nette\Http\Url;
require LIBS_DIR . '/mpdf/mpdf.php';
require LIBS_DIR . '/docgen/docgen.php';

/**
 * Presenter, který zajišťuje výpis seznamů úkolů.
 */
class AdminPresenter extends BasePresenter
{

	/** @var @var Todo\ListRepository */
	private $userRepository;

	protected function startup()
	{
	    parent::startup();
	    if (!$this->getUser()->isLoggedIn()) {
	        $this->redirect('Homepage:');
	    }
	}

	public function renderDefault($title = "CleverFrogs - dashboard",$page = "dashboard", $success = "0", $gallery_id = "none")
	{
		$user = $this->getUser();
		$this->template->user = $user;
	    $this->template->title = $title;
	    $this->template->success = $success;
	    $this->template->gallery_id = $gallery_id;

	    switch ($title) {

	    	case 'CleverFrogs - dashboard':
	    		$this->template->dishFeedbacks = $this->context->galleryRepository->getCountOfRowsByTable("questionnaire");
    		break;

	    	case 'CleverFrogs - users':
	    		$this->template->users   = $this->context->userRepository->getAllUsers();
				$this->template->projects= $this->context->projectRepository->getTable();
				$this->template->commits = $this->get_commits("CleverFrogs", "blackflash");
	    	break;

	    	case 'CleverFrogs - campaigns':
	    		$this->template->users   = $this->context->userRepository->getAllUsers();
				$this->template->campaign = $this->context->projectRepository->getTable();
	    	break;
	    	
	    	case 'CleverFrogs - commit history':
	    		$this->template->commits = $this->get_commits("CleverFrogs", "blackflash");
				$this->template->users   = $this->context->userRepository->getAllUsers();
				$this->template->projects= $this->context->projectRepository->getTable();
    		break;

    		case 'CleverFrogs - tasks':
    			$this->template->tasks   = $this->context->taskRepository->getTable();
				$this->template->users   = $this->context->userRepository->getAllUsers();
				$this->template->projects= $this->context->projectRepository->getTable();
			break;

			case 'CleverFrogs - feedbacks':
				$this->template->tasks   = $this->context->taskRepository->getTable();
				$this->template->users   = $this->context->userRepository->getAllUsers();
				$this->template->projects= $this->context->projectRepository->getTable();
			break;

			case 'CleverFrogs - Gallery':
				$this->template->gallery = $this->context->galleryRepository->getAllGalleries();
				$this->template->namespaces = $this->context->galleryRepository->getByTable("gallery_namespace");
				$this->template->video = $this->context->galleryRepository->getByTableAndId("gallery_video","gallery_id",$gallery_id);
				$this->template->gallery_photo = $this->context->galleryRepository->getByTableAndId("gallery_photo","gallery_id",$gallery_id);
				$this->template->gallery_photo_exist = $this->template->gallery_photo->fetch();
				$this->template->gallery_photo_exist .= $this->template->video->fetch();
			break;

			case 'CleverFrogs - Locations':
				$this->template->cities   = $this->context->generalRepository->getByTable("city");
				$this->template->locations   = $this->context->generalRepository->getByTable("location");
			break;

	    	default:
	    		$this->template->includeBoard = $page.".latte";
	    	break;
	    }
	   
        $this->template->includeBoard = $page.".latte";
	}

	/*------------------ LOCATIONS ----------------*/

	public function handleaddCity(){

		$name = "city";
		$data = $this->request->getPost();

		$this->context->generalRepository->insertRowByTable($name,$data);
		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - Locations","page"=>"locations", "success" => "1"));
	}

	public function handleaddLocation(){

		$name = "location";
		$data = $this->request->getPost();

		$this->context->generalRepository->insertRowByTable($name,$data);
		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - Locations","page"=>"locations", "success" => "1"));
	}

	public function handlejsonDeleteLocation($location_id){
		if ($this->isAjax()) {

			$jsondata = $this->context->generalRepository->deleteRowByTableAndId("location","location_id",$location_id);

	        echo json_encode($jsondata);
	        die();
	    }
	}

	/*------------------- TASKS ----------------*/

	public function handleactivateTask($taskId,$activate){
		$activate =  ($activate == 1) ? 0 : 1;
		$this->context->taskRepository->markDone($taskId,$activate);
		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - tasks","page"=>"tasks"));
	}

	public function handledeleteTask($taskId){
		$this->context->userRepository->deleteRowByColumn("task","id",$taskId);
		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - tasks","page"=>"tasks"));
	}

	public function handleaddTask(){
		$description = $_POST["description"];
		$this->context->taskRepository->createTask($description);
		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - tasks","page"=>"tasks"));
	}

	function get_json($url){
	  $base = "https://api.github.com/";
	  $curl = curl_init();
	  curl_setopt($curl, CURLOPT_URL, $base . $url);
	  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	  curl_setopt($curl, CURLOPT_TIMEOUT, 30);
	  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

	    //curl_setopt($curl, CONNECTTIMEOUT, 1);
	  $content = curl_exec($curl);
	  curl_close($curl);
	  return $content;
	}

	function get_commits($repo, $user){
	  // Get the name of the repo that we'll use in the request url
	  $repoName = $repo;  
	  return json_decode($this->get_json("repos/$user/$repoName/commits"),true);
	}

	public function handleregisterForm()
	{	
	    try {

	        $data = array(
				'name'        => $_POST["name"], 
				'username'   => $_POST["username"], 
				'password'    => $this->calculateHash($_POST["pass2"]), 
				'email'       => $_POST["email"], 
				'description' => $_POST["description"]
	        );

	        $this->context->userRepository->insertRowByTable("user",$data);
	        
			$this->redirect('Admin:default',array( "title"=>"CleverFrogs - users","page"=>"users"));

	    } catch (NS\AuthenticationException $e) {
	        $form->addError('Vyskytla sa chyba počas registrácie');
	    }
	}

	private function parseDate($date){
			$date = str_replace("/", "-", $date);

			$year = substr(substr($date, 6),0,-6);
	    	$monthAndDay = substr($date, 0,-11);
	    	$time = substr($date, 11);

	    	return $year."-".$monthAndDay." ".$time.":00";
	}

	public function handlecreateProject()
	{	
	    try {

	    	$_POST["date_finish"] = $this->parseDate($_POST["date_finish"]);
	    	$_POST["date_start"] = $this->parseDate($_POST["date_start"]);

	        $this->context->projectRepository->insertRowByTable("project",$_POST);
	        
			$this->redirect('Admin:default',array( "title"=>"CleverFrogs - projects","page"=>"projects"));

	    } catch (NS\AuthenticationException $e) {
	        $form->addError('Vyskytla sa chyba počas registrácie');
	    }
	}

	public static function calculateHash($password, $salt = null)
	{
	    if ($salt === null) {
	        $salt = '$2a$07$' . Nette\Utils\Strings::random(32) . '$';
	    }
	    return crypt($password, $salt);
	}

	public function handledeleteUser($userId){
		$this->context->userRepository->deleteRowByColumn("user","id",$userId);
		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - users","page"=>"users"));
	}


	public function handlejsonAddUsersToProject($projectId){
		if ($this->isAjax()) {
			
	        echo json_encode($this->context->projectRepository->getUsersByProject("user_profile",$projectId));
	        die();
	    }
	}

	public function handleaddUsersToProject($projectId){
		echo "<pre>";
		print_r($_POST);
		echo "</pre>";
		die();
	}

	public function handlegeneratePDFdocumentation($data){

		$projectName = $_POST;

		file_put_contents("uploads/documentation/sql/01.jpg", file_get_contents($_FILES["sqlImage"]["tmp_name"]));
		file_put_contents("uploads/documentation/sql/02.jpg", file_get_contents($_FILES["alternativeImage"]["tmp_name"]));


		$mpdf = new mPDF();
		$mpdf = new mPDF('utf-8', 'A4');
		$stylesheet = file_get_contents(__DIR__.'\..\..\www\css\documentation.css');

		$data = $_POST;
		$data["analizationImage_1"] = "uploads/documentation/analyzation/01.jpg";
		$data["analizationImage_2"] = "uploads/documentation/analyzation/02.jpg";
		$data["sqlImage"] = "uploads/documentation/sql/01.jpg";
		$data["alternativeImage"] = "uploads/documentation/sql/02.jpg";

		$docgen = new docgen();
		$html = $docgen->parseDocument($data);

		$mpdf->WriteHTML($stylesheet,1);
		$mpdf->WriteHTML($html, 2);
		$mpdf->Output();
		exit;
	}

	/*--------------- Gallery ------------------*/

	public function handleaddNamespace(){
		$data["name"] = $_POST["name"];
		$name = "gallery_namespace";

		$this->context->galleryRepository->insertRowByTable($name,$data);
		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - Gallery","page"=>"gallery", "success" => "1"));
	}

	public function handleaddGallery(){
		$data = array(
			'title' => $_POST["title"], 
			'description' => $_POST["description"], 
			'namespace_id' => $_POST["namespace_id"]
		);
		
		$name = "gallery";

		$this->context->galleryRepository->insertRowByTable($name,$data);
		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - Gallery","page"=>"gallery", "success" => "1"));
	}

	public function handleaddVideoToGallery(){

		$data = array(
			'title' => $_POST["title_reqField"], 
			'description' => $_POST["description_reqField"], 
			'link' => $_POST["videoLink_reqField"], 
			'gallery_id' => $_POST["namespace_id"]
		);
		
		$name = "gallery_video";


		$this->context->galleryRepository->insertRowByTable($name,$data);
		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - Gallery","page"=>"gallery", "success" => "1"));
	}



	public function handleactivateByTableAndRow($gallery_id,$activate,$table){
		$activate =  ($activate == 1) ? 0 : 1;
		$success = $this->context->galleryRepository->markDoneByTable($gallery_id,$activate,$table);
		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - Gallery","page"=>"gallery", "success" => $success));
	}

	public function handleshowGallery($gallery_id){
		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - Gallery","page"=>"gallery", "success" => $success, "gallery_id" => $gallery_id));
	}

	public function handleuploadPictures($url,$namespace_id,$gallery_id){

		$dir_namespace = $url.$namespace_id."/";
		if(!is_dir($dir_namespace)) mkdir($dir_namespace,0777);

		$dir_gallery = $url.$namespace_id."/".$gallery_id."/";
		
		if(!is_dir($dir_gallery)){

			mkdir($dir_gallery,0777);
			mkdir($dir_gallery."thumbs/",0777);
		} 

		$this->savePictures($dir_gallery,$namespace_id,$gallery_id);
	}

	private function savePictures($url,$namespace_id,$gallery_id){
		// If you want to ignore the uploaded files, 
		// set $demo_mode to true;
		$demo_mode = false;
		$upload_dir = $url;
		$allowed_ext = array('jpg','jpeg','png','gif');
		$pic = array();

		$gallery_id_G = $gallery_id;
		$namespace_id_G = $namespace_id;

		if(strtolower($_SERVER['REQUEST_METHOD']) != 'post'){
			exit_status('Error! Wrong HTTP method!');
		}

		if(array_key_exists('pic',$_FILES) && $_FILES['pic']['error'] == 0 ){
			
			$pic = $_FILES['pic'];

			if(!in_array($this->get_extension($pic['name']),$allowed_ext)){
				$this->exit_status('Only '.implode(',',$allowed_ext).' files are allowed!');
			}	

			if($demo_mode){
				
				// File uploads are ignored. We only log them.
				
				$line = implode('		', array( date('r'), $_SERVER['REMOTE_ADDR'], $pic['size'], $pic['name']));
				file_put_contents('log.txt', $line.PHP_EOL, FILE_APPEND);
				
				$this->exit_status('Uploads are ignored in demo mode.');
			}
			
			
			// Move the uploaded file from the temporary 
			// directory to the uploads folder:
			
			if(move_uploaded_file($pic['tmp_name'], $upload_dir.$pic['name'])){

				

				$image = Image::fromFile($upload_dir.$pic['name']);
				$image->resize(1280, NULL,Image::SHRINK_ONLY);
				$image->save($upload_dir.$pic['name']);

				//rename file
				$lastIndex = $this->context->galleryRepository->getLastInsertedId("gallery_photo","photo_id");
				$lastIndex++;

				$file = $upload_dir.$lastIndex.".jpg";

				rename($upload_dir.$pic['name'],$file);

				//insert image to database
				$data = array(
					'gallery_id' => $gallery_id_G, 
					'filename' => $lastIndex.".jpg", 
					'title' => "none", 
					'description' => "", 
					'is_active' => "1", 
					'namespace_id' => $namespace_id_G
				);

				$this->context->galleryRepository->insertRowByTable("gallery_photo",$data);

				$thumb = $upload_dir."thumbs/".$lastIndex.".jpg";

				if(!copy($file, $thumb)){
					$this->exit_status('Error copy file!');
				}

				$image = Image::fromFile($thumb);
				$image->resize(150, NULL,Image::SHRINK_ONLY);
				$image->save($thumb);

				$this->exit_status('File was uploaded successfuly!');
			}
			
		}

		$this->exit_status('Something went wrong with your upload! '.$_FILES['pic']['error']);
	}

	function exit_status($str){
		echo json_encode(array('status'=>$str));
		exit;
	}

	function get_extension($file_name){
		$ext = explode('.', $file_name);
		$ext = array_pop($ext);
		return strtolower($ext);
	}

	public function handlejsonGalleryPhotoEdit($userId){
		if ($this->isAjax()) {
			$jsondata['success'] = $userId;
	        echo json_encode($jsondata);
	        die();
	    }
	}

	public function handlejsonUpdatePhoto($photo_id, $title, $description){
		if ($this->isAjax()) {

			$success = $this->context->galleryRepository->updateTableById("gallery_photo", "photo_id", $photo_id, array( "title" => $title, "description" => $description));

			$jsondata = array(
				'success'     => $success, 
				"photo_id"    => $photo_id,
				"title"       => $title,
				"description" => $description
			);

	        echo json_encode($jsondata);
	        die();
	    }
	}

	public function handlejsonUpdatePhotoOrder($data){
		if ($this->isAjax()) {

			$data = json_decode($data);

			foreach ($data as $key => $value) {

				$data = array(
					'photo_id' => $value["0"], 
					'data_col' => $value["1"], 
					'data_row' => $value["2"] 
				);

				$success = $this->context->galleryRepository->updateTableById("gallery_photo", "photo_id", $value["0"], $data);
			}

			echo json_encode($success);
        	die();
	    }
	}

	// delete photo by ID
	public function handledeletePhoto($photo_id,$gallery_id,$success){	

		$this->context->galleryRepository->delete($photo_id);
		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - Gallery","page"=>"gallery", "success" => $success, "gallery_id" => $gallery_id));	

	}

	// delete photo by ID
	public function handledeleteByTable($table,$column,$row_id,$gallery_id,$success){	

		$this->context->galleryRepository->deleteRowByTableAndId($table,$column,$row_id);
		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - Gallery","page"=>"gallery", "success" => $success, "gallery_id" => $gallery_id));	

	}

	public function handledeleteGallery($gallery_id){
		$success = $this->context->galleryRepository->deleteGallery("gallery","gallery_id",$gallery_id);
		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - Gallery","page"=>"gallery", "success" => $success, "gallery_id" => ""));	
	}

	/*------------ end of Gallery ------------*/


}