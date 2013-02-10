<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class en extends CI_Controller {

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
		$this->lang->load('cleverfrogs', 'english');
		$this->lang->load('tank_auth', 'english');
		$this->load->library('tank_auth');
		$this->load->model("notes_model");
		$this->load->helper('text');

		$this->mainTitle = "Cleverfrogs ";
  		$this->data["main_controller"] = "cleverfrogs";

	}

	public function returnTest($a,$b){
		return $a+$b;
	}

	public function index($page = "home",$pop = "")
	{	
		$title = $page;
		$page = "includes/".$page;

		$data = array(
			'title' => "Cleverfrogs ".$title, 
			'logo' => "logo.png", 
			'enterCompany' => "enterCompany.png", 
			'enterUser' => "enterCustomer.png", 
			'view' => $page.".php",
			'login' => "loginEN.png", 
			'page' => $page,
			'pop' => $pop
		);
		
		$data['banner'] = $this->notes_model->getRowById4("banner",array("language" => "en"));

		if (!$this->tank_auth->is_logged_in()) {
			$this->load->view('template',$data);
			//redirect("");
		} else {
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

				$data["admin"] = "feedback.php";
				$data["feedback"] = $this->notes_model->getTable("feedback");
				$this->load->view('templateAdmin',$data);
			}else $this->load->view('template',$data);
		}
	}

	public function company(){
		$data = array(
			'title' => "Cleverfrogs company", 
			'logo' => "logo.png", 
			'login' => "loginEN.png", 
			'view' => "includes/company.php"
		);
		
		$this->load->view('template',$data);
	}

	public function loadPage($page){

		$this->index($page);
	}

	public function customer(){
		$data = array(
			'title' => "Cleverfrogs customer", 
			'logo' => "logo.png", 
			'login' => "loginEN.png", 
			'view' => "includes/customer.php"
		);
		
		$this->load->view('template',$data);
	}

}