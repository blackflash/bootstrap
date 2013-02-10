<?php

use Nette\Application\UI\Form;
use Nette\Http\Request;
use Nette\Http\FileUpload;
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

	public function renderDefault($title = "CleverFrogs - dashboard",$page = "dashboard", $success = "0")
	{
		$user = $this->getUser();
		$this->template->user = $user;
	    $this->template->title = $title;
	    $this->template->success = $success;

	    if($title == "CleverFrogs - users"){
			$this->template->users   = $this->context->userRepository->getAllUsers();
			$this->template->projects= $this->context->projectRepository->getTable();
			$this->template->commits = $this->get_commits("CleverFrogs", "blackflash");
	    }

	    if($title == "CleverFrogs - projects"){
			$this->template->users   = $this->context->userRepository->getAllUsers();
			$this->template->projects= $this->context->projectRepository->getTable();
	    }

	    if($title == "CleverFrogs - commit history"){
			$this->template->commits = $this->get_commits("CleverFrogs", "blackflash");
			$this->template->users   = $this->context->userRepository->getAllUsers();
			$this->template->projects= $this->context->projectRepository->getTable();
	    }

	    if($title == "CleverFrogs - tasks"){
			$this->template->tasks   = $this->context->taskRepository->getTable();
			$this->template->users   = $this->context->userRepository->getAllUsers();
			$this->template->projects= $this->context->projectRepository->getTable();
	    }

	    if($title == "CleverFrogs - feedbacks"){
			$this->template->tasks   = $this->context->taskRepository->getTable();
			$this->template->users   = $this->context->userRepository->getAllUsers();
			$this->template->projects= $this->context->projectRepository->getTable();
	    }

	    if($title == "CleverFrogs - Gallery"){
			$this->template->gallery = $this->context->galleryRepository->getAllGalleries();
			$this->template->namespaces = $this->context->galleryRepository->getByTable("gallery_namespace");
			$this->template->gallery_photo = $this->context->galleryRepository->getByTable("gallery_photo");
	    }

        $this->template->includeBoard = $page.".latte";
	}

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
			'description' => $_POST["description"], 
			'namespace_id' => $_POST["namespace_id"]
		);
		
		$name = "gallery";

		$this->context->galleryRepository->insertRowByTable($name,$data);
		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - Gallery","page"=>"gallery", "success" => "1"));
	}

	public function handleactivateByTableAndRow($gallery_id,$activate,$table){
		$activate =  ($activate == 1) ? 0 : 1;
		$success = $this->context->galleryRepository->markDoneByTable($gallery_id,$activate,$table);
		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - Gallery","page"=>"gallery", "success" => $success));
	}

	/*------------ end of Gallery ------------*/

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
	
	public function handlejsonPreview($userId){
		if ($this->isAjax()) {
			$jsondata['success'] = $userId;
	        echo json_encode($jsondata);
	        die();
	    }
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

	public function handleuploadPictures($url){
		$this->savePictures($url);
	}

	private function savePictures($url){
		// If you want to ignore the uploaded files, 
		// set $demo_mode to true;
		$demo_mode = false;
		$upload_dir = $url;
		$allowed_ext = array('jpg','jpeg','png','gif');


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
				$this->exit_status('File was uploaded successfuly!');
			}
			
		}

		$this->exit_status('Something went wrong with your upload!');
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


}