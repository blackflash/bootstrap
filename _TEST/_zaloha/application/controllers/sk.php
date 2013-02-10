<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once('en.php');

class sk extends CI_Controller {
 	
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper("form");
		$this->load->library("uri");
		$this->load->helper("typography");
		$this->load->library('image_lib');
		$this->load->library('pagination');
		$this->load->library('form_validation');
		$this->lang->load('cleverfrogs', 'slovak');
		$this->load->library('tank_auth');
		$this->load->model("notes_model");
		$this->load->model("profile_model");
		$this->load->helper('text');


		$this->mainTitle = "Cleverfrogs ";
  		$this->data["main_controller"] = "cleverfrogs";

	}

	public function index($page = "domov",$pop = "")
	{				

		$title = $page;
		$page = "includes/".$page;

		$data = array(
			'title' => "Cleverfrogs ".$title, 
			'logo' => "logo.png", 
			'enterCompany' => "vstupFirmy.png", 
			'enterUser' => "vstupSpotrebitelia.png", 
			'title' => "Cleverfrogs ".$title, 
			'view' => $page.".php",
			'login' => "loginSK.png", 
			'page' => $page,
			'pop' => $pop
		);

		$data['banner'] = $this->notes_model->getRowById4("banner",array("language" => "sk"));
		
		if (!$this->tank_auth->is_logged_in()) {
			$this->load->view('template',$data);
			//redirect("");
		} else if($this->tank_auth->is_logged_in()) {

			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();

			if($data['username'] == "admin" && $data['user_id'] == 1){
				$data["basicInfo"] = array(
					'title' => $this->mainTitle."feedback", 
					'view' => $page.".php",
					'page' => $page,
					'pop' => "",
					'main_controller' => $this->data["main_controller"]
				);


				$data["admin"] = "users.php";
				$data["users"] = $this->notes_model->getTable("users");

				
				redirect("cleverfrogs/loadAdminPage/users");
				//$this->load->view('templateAdmin',$data);
			}

			// check user_type and redirect
			$data["user_profile"] = $this->notes_model->getRowById2("user_profiles","user_id",$this->tank_auth->get_user_id());
			
			if($data["user_profile"] ->user_type == "company"){
				
				$data["title"] = $this->mainTitle." profil";
				$this->load->view('template',$data);
				
			}else if($data["user_profile"] ->user_type == "user"){		// load data for user
				
				$data["title"] = $this->mainTitle."profil";
				$data["CountCurrentMonth"] = $this->profile_model->getCountOfCurrentMonthFeedbacks($this->tank_auth->get_user_id());
				$data["CountAllFeedbacks"] = $this->profile_model->getCountOfAllFeedbacks($this->tank_auth->get_user_id());
				$data["allFeedbacks"] = $this->profile_model->getAllFeedbacks($this->tank_auth->get_user_id());

				$this->load->view('template',$data);
				
			}else redirect("");
		}
	}

	public function loadPage($page){

		if($page == "profil_uzivatel" || $page == "profil_firma"){
			if (!$this->tank_auth->is_logged_in()) {
				redirect("");
			}
		}

		$this->index($page);
	}

	public function firma(){
		$data = array(
			'title' => "Cleverfrogs firma", 
			'logo' => "logo.png", 
			'login' => "loginSK.png", 
			'view' => "includes/firma.php"
		);
		
		$this->load->view('template',$data);
	}

	public function spotrebitelia(){
		$data = array(
			'title' => "Cleverfrogs spotrebitelia", 
			'logo' => "logo.png", 
			'login' => "loginSK.png", 
			'view' => "includes/spotrebitelia.php"
		);
		
		$this->load->view('template',$data);
	}

}