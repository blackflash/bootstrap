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
	    		$this->template->campaigns  = $this->context->generalRepository->getByTable("campaign");
				$this->template->locations  = $this->context->generalRepository->getByTableWithOrder("location","title","ASC");
				$this->template->cities     = $this->context->generalRepository->getByTableWithOrder("city","title","ASC");
	    			
				$this->template->totalFeedbacks = $this->context->generalRepository->getCountOfRowsByTable("campaign_result"); 
				$this->template->totalFeedbacksLast7days = $this->context->generalRepository->getCountOfFeedbacksbyTime("campaign_result","submit_time","7");


	    		$category_ids = array();
	    		$images = array();

	    		foreach ($this->template->campaigns as $key => $value) {
	    			$category_ids += array($value->category_id => $value->category_id);
	    		}

	    		foreach ($category_ids as $key => $value) {
	    			$images += array($key => $this->context->galleryRepository->getByTableAndId("campaign_ps","category_id",$value)->fetch()->image);
	    		}

	    		$this->template->pictures = $images;

	    		/*------------- ACTUAL RESULTS CAMPAIGNS --------------*/
				$this->template->actual_results_campaign = $this->calculatePiechartData(10);

    		break;

	    	case 'CleverFrogs - users':
	    		$this->template->users   = $this->context->userRepository->getAllUsers();
				$this->template->projects= $this->context->projectRepository->getTable();
				$this->template->commits = $this->get_commits("CleverFrogs", "blackflash");
	    	break;

	    	case 'CleverFrogs - campaigns':
				$this->template->campaigns  = $this->context->generalRepository->getByTable("campaign");
				$this->template->cities     = $this->context->generalRepository->getByTable("city");
				$this->template->locations  = $this->context->generalRepository->getByTable("location");
				$this->template->categories = $this->context->generalRepository->getByTable("campaign_ps_category");
	    	break;

	    	case 'CleverFrogs - categories':
				$this->template->campaign_ps_category = $this->context->generalRepository->getByTable("campaign_ps_category");
				$this->template->campaign_ps          = $this->context->generalRepository->getByTable("campaign_ps");
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
			case 'CleverFrogs - News':
				$this->template->news   = $this->context->generalRepository->getByTable("component_compact_news");
			break;

	    	default:
	    		$this->template->includeBoard = $page.".latte";
	    	break;
	    }
	   
        $this->template->includeBoard = $page.".latte";
	}

	/*----------------DASHBOAR DATA CALCULACTION --------------*/

	
	public function handlejsonUpdateSummaryData($campaign_id){
		if ($this->isAjax()) {
			$data = $this->context->generalRepository->getCountOfRowsByTableAndId("campaign_result","campaign_id",$campaign_id);
	        echo json_encode($data);
	        die();
	    }
	}

	public function handlejsonGetChartData($campaign_id){
		if ($this->isAjax()) {

			$data = $this->calculatePiechartData($campaign_id);

	        echo json_encode($data);
	        die();
	    }
	}

	protected function calculatePiechartData($campaign_id){
		$campaign    = $this->context->generalRepository->getByTableAndId("campaign","campaign_id",$campaign_id)->fetch();
		$campaign_id = $campaign->campaign_id;
		$allRows = $this->context->generalRepository->getByTableAndId("campaign_result","campaign_id",$campaign_id);

		$COUNTALL   = $this->context->generalRepository->getCountOfRowsByTableAndId("campaign_result","campaign_id",$campaign_id);
		$MULTIPLIER = round(100/$COUNTALL, 3, PHP_ROUND_HALF_UP);


		

		$resultsOfps = array();
		$nameOfps = array();
		$completeArrayOfPS = array();

		// make array with count of every PS - tu je chyba lebo ja potrebujem count sice vsetkych produktov ale aj podla kampane !
		$tempForPS = array();
		foreach ($allRows as $key => $value) {
			$data = array(
				'ps_id' => $value->ps_id,
				"campaign_id" => $value->campaign_id
			);

			$count = $this->context->generalRepository->getCountOfRowsByTableMultiCon("campaign_result",$data);
			$tempForPS += array($value->ps_id => $count);
		}

		foreach ($tempForPS as $key => $value) {
			$completeArrayOfPS += array($key => array("percentage" => $MULTIPLIER*$value));
		}

		foreach ($completeArrayOfPS as $key => $value) {
			$temp = $this->context->generalRepository->getByTableAndId("campaign_ps","ps_id",$key)->fetch()->title;

			$completeArrayOfPS[$key] += array("title" => $temp);

		}

		return $completeArrayOfPS;
	}

	/*----------------CAMPAIGN------------------*/

	public function handlecreateCampaign()
	{	
	    try {

	    	$name = "campaign";
			$data = $this->request->getPost();


			$data["date_start"] = $this->parseDate($data["date_start"]);
			$data["date_finish"] = $this->parseDate($data["date_finish"]);


	        $this->context->generalRepository->insertRowByTable($name,$data);
	        
			$this->redirect('Admin:default',array( "title"=>"CleverFrogs - campaigns","page"=>"campaigns"));

	    } catch (NS\AuthenticationException $e) {
	        $form->addError('Something went wrong !');
	    }
	}

	public function handlejsonDeleteCampaign($campaign_id){
		if ($this->isAjax()) {

			$jsondata = $this->context->generalRepository->deleteRowByTableAndId("campaign","campaign_id",$campaign_id);

	        echo json_encode($jsondata);
	        die();
	    }
	}

	/*------------------ CATEGORIES ----------------*/
	public function handleaddCategory(){

		$name = "campaign_ps_category";
		$data = $this->request->getPost();

		$this->context->generalRepository->insertRowByTable($name,$data);
		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - categories","page"=>"categories_ps", "success" => "1"));
	}

	public function handleaddPS(){

		$name = "campaign_ps";
		$data = $this->request->getPost();
		$file = $this->request->getFiles("image");

		$this->context->generalRepository->insertRowByTable($name,$data);

		$this->uploadPS($ps_id,$data["category_id"]);
		
		//$this->redirect('Admin:default',array( "title"=>"CleverFrogs - categories","page"=>"categories_ps", "success" => "1"));
	}

	function handlereuploadImage(){

		$data = $this->request->getPost();

		$dir_category = "uploads/ps/".$data["category_id"]."/";



		$this->savePSImage($dir_category,$data["category_id"],$data["ps_id"],true);

		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - categories","page"=>"categories_ps", "success" => "1"));
		
	}

	function uploadPS($ps_id,$category_id){

		$dir_category = "uploads/ps/".$category_id."/";
		if(!is_dir($dir_category)){ 
			mkdir($dir_category,0777);
			mkdir($dir_category."thumbs/",0777);
		}


		$this->savePSImage($dir_category,$category_id,$ps_id,false);

		$this->redirect('Admin:default',array( "title"=>"CleverFrogs - categories","page"=>"categories_ps", "success" => "1"));
	}

	function savePSImage($dir_category,$category_id,$ps_id,$reupload){

		$upload_dir = $dir_category;
		$allowed_ext = array('jpg','jpeg','png','gif');
		$pic = array();

		$ps_id_G = $ps_id;
		$namespace_id_G = $category_id;

		if(strtolower($_SERVER['REQUEST_METHOD']) != 'post'){
			exit_status('Error! Wrong HTTP method!');
		}

		if(array_key_exists('image',$_FILES) && $_FILES['image']['error'] == 0 ){
			
			$picture = $_FILES['image'];

			if(!in_array($this->get_extension($picture['name']),$allowed_ext)){
				$this->exit_status('Only '.implode(',',$allowed_ext).' files are allowed!');
			}	
			
			// Move the uploaded file from the temporary 
			// directory to the uploads folder:
			if(move_uploaded_file($picture['tmp_name'], $upload_dir.$picture['name'])){

				$image = Image::fromFile($upload_dir.$picture['name']);
				$image->resize(720, NULL,Image::SHRINK_ONLY);
				$image->save($upload_dir.$picture['name']);

				//rename file
				if(!$reupload)
					$lastIndex = $this->context->generalRepository->getLastInsertedId("campaign_ps","ps_id");
				else
					$lastIndex = $ps_id;
				
				$file = $upload_dir.$lastIndex.".jpg";

				rename($upload_dir.$picture['name'],$file);

				$this->context->generalRepository->updateTableById("campaign_ps","ps_id",$lastIndex,array('image' => $lastIndex.".jpg"));

				$thumb = $upload_dir."thumbs/".$lastIndex.".jpg";

				if(!copy($file, $thumb)){
					$this->exit_status('Error copy file!');
				}

				$image = Image::fromFile($thumb);
				$image->resize(150, NULL,Image::SHRINK_ONLY);
				$image->save($thumb);

				return;
			}
			
		}

		return;
		$this->exit_status('Something went wrong with your upload! '.$_FILES['pic']['error']);
	}

	function handlejsonUpdatePS($ps_id, $title, $description, $category_id, $image){
		if ($this->isAjax()) {

			//make sure that after change category image fill be moved too
			$row = $this->context->generalRepository->getByTableAndId("campaign_ps", "ps_id", $ps_id)->fetch();
			$old_upload_dir = "uploads/ps/".$row->category_id."/";
			$old_upload_dir_thumb = "uploads/ps/".$row->category_id."/thumbs/";

			$new_upload_dir = "uploads/ps/".$category_id."/";
			$new_upload_dir_thumb = "uploads/ps/".$category_id."/thumbs/";

			if(!is_dir($new_upload_dir)) 
				mkdir($new_upload_dir,0777);
			if(!is_dir($new_upload_dir_thumb)) 
				mkdir($new_upload_dir_thumb,0777);


			if($row->category_id != $category_id){
				copy($old_upload_dir.$row->image, $new_upload_dir.$row->image);
				copy($old_upload_dir_thumb.$row->image, $new_upload_dir_thumb.$row->image);

				if (file_exists($old_upload_dir.$row->image) && is_file($old_upload_dir.$row->image)) {
					unlink($old_upload_dir.$row->image);
				}
				
				if (file_exists($old_upload_dir_thumb.$row->image) && is_file($old_upload_dir_thumb.$row->image)) {
					unlink($old_upload_dir_thumb.$row->image);
				}
			}

			//update table with modified data
			$success = $this->context->galleryRepository->updateTableById("campaign_ps", "ps_id", $ps_id, 
				array( "title" => $title, "description" => $description, "category_id" => $category_id));

			$jsondata = array(
				'success'     => $success, 
				"ps_id"       => $ps_id,
				"title"       => $title,
				"description" => $description,
				"category_id" => $category_id
			);

	        echo json_encode($jsondata);
	        die();
	    }
	}

	public function handlejsonDeletePS($ps_id){
		if ($this->isAjax()) {

			$this->context->generalRepository->deleteImage("campaign_ps","ps_id",$ps_id);
			$jsondata = $this->context->generalRepository->deleteRowByTableAndId("campaign_ps","ps_id",$ps_id);

	        echo json_encode($jsondata);
	        die();
	    }
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

	function handlejsonUpdateLocation($location_id, $title, $description, $city_id){
		if ($this->isAjax()) {

			$success = $this->context->galleryRepository->updateTableById("location", "location_id", $location_id, 
				array( "title" => $title, "description" => $description, "city_id" => $city_id));

			$jsondata = array(
				'success'     => $success, 
				"location_id"    => $location_id,
				"title"       => $title,
				"description" => $description,
				"city_id" => $city_id
			);

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