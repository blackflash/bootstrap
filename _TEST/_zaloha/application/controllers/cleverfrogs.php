<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require_once('auth.php');

class Cleverfrogs extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper("form");
		$this->load->helper("typography");
		$this->load->library('image_lib');
		$this->load->library('pagination');
		$this->load->library('tank_auth');
		$this->load->library('form_validation');
		$this->load->model("notes_model");
		$this->load->helper('text');
		

		$this->mainTitle = "Cleverfrogs ";
  		$this->data["main_controller"] = "cleverfrogs";
	}

	/*
	public function changePass($arg){
		$this->ci =& get_instance();
		$hasher = new PasswordHash( $this->ci->config->item('phpass_hash_strength', 'tank_auth'), $this->ci->config->item('phpass_hash_portable', 'tank_auth'));
      	pre_r($hasher->HashPassword($arg));
	}
	*/

	public function index($language = "SK")
	{	
		$this->category_id = "1";

		$data["feedback"] = $this->notes_model->getRowById2("feedback","id",$page);

		$data["basicInfo"] = array(
			'title' => $this->mainTitle.$data["feedback"]->title, 
			'view' => $menuLink->category_link.".php",
			'page' => $data["category"]->type,
			'pop' => $pop,
			'main_controller' => $this->data["main_controller"]
		);

		if(empty($this->pop)){
			$this->pop = "";
		}

		switch ($language) {
			case 'SK':
				$this->lang->load('cleverfrogs', 'slovak');
				$data = array(
					'title' => "Cleverfrogs home", 
					'logo' => "logo.png", 
					'enterCompany' => "vstupFirmy.png", 
					'enterUser' => "vstupSpotrebitelia.png", 
					'view' => "includes/home.php",
					'pop' => $this->pop
				);
				break;
			case 'EN':
				$this->lang->load('cleverfrogs', 'english');
				$data = array(
					'title' => "Cleverfrogs home", 
					'logo' => "logo.png",
					'view' => "includes/home.php",
					'pop' => $this->pop
				);
				break;
			default:
				$data = array(
					'title' => "Cleverfrogs home", 
					'logo' => "logo.png",
					'view' => "includes/home.php"
				);
				break;
		}
		
		$this->session->keep_flashdata('error');

		if (!$this->tank_auth->is_logged_in()) {
			$this->load->view('template',$data);
			//redirect("");
		} else {
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();

			if($data['username'] == "admin" && $data['user_id'] == 1){
				$data["feedback"] = $this->notes_model->getTable("feedback");
				$data["admin"] = "feedback.php";
				$this->load->view('templateAdmin',$data);
			}else $this->load->view('template',$data);

		}
		
	}

	public function feedback($language){

		if($language == "sk"){
			$this->lang->load('cleverfrogs', 'slovak');
			$data = array(
				"category"        => "Kategória",
				"provider"        => "Poskytovateľ",
				"value"           => "Hodnotenie",
				"date"            => "Dátum",
				"comment"         => "Komentár",
				"tidiness"        => "Čistota",
				"personnel"       => "Personál",
				"service_quality" => "Kvalita jedla/služby",
				"prize"           => "Cena"
			);
		}
		else{
			$this->lang->load('cleverfrogs', 'english');
			$data = array(
				"category"        => "Category",
				"provider"        => "Provider",
				"value"           => "Value",
				"date"            => "Date",
				"comment"         => "Comment",
				"tidiness"        => "Čistota",
				"personnel"       => "Personál",
				"service_quality" => "Kvalita jedla/služby",
				"prize"           => "Cena"
			);
		}

		if(isset($_GET["category"]))
		$_POST["category"] = $_GET["category"];
		$_POST["date"] = $_GET["date"];
		$_POST["comment"] = $_GET["comment"];
		$_POST["provider"] = $_GET["provider"];
		if(isset($_GET["value"]))
		$_POST["value"] = $_GET["value"];
		if(isset($_GET["tidiness"]))
		$_POST["tidiness"] = $_GET["tidiness"];
		if(isset($_GET["personnel"]))
		$_POST["personnel"] = $_GET["personnel"];
		if(isset($_GET["service_quality"]))
		$_POST["service_quality"] = $_GET["service_quality"];
		if(isset($_GET["prize"]))
		$_POST["prize"] = $_GET["prize"];

		$this->form_validation->set_rules("category", $data["category"], 'required|xss_clean');
		$this->form_validation->set_rules("provider", $data["provider"], 'required|xss_clean');
		$this->form_validation->set_rules("value", $data["value"], 'required|xss_clean');
		$this->form_validation->set_rules("date", $data["date"], 'required|xss_clean');
		$this->form_validation->set_rules("comment", $data["comment"], 'required|xss_clean');

		$this->form_validation->set_rules("tidiness", $data["tidiness"], 'xss_clean');
		$this->form_validation->set_rules("personnel", $data["personnel"], 'xss_clean');
		$this->form_validation->set_rules("service_quality", $data["service_quality"], 'xss_clean');
		$this->form_validation->set_rules("prize", $data["prize"], 'xss_clean');

		if ($this->form_validation->run()) {

			if($this->tank_auth->is_logged_in()){
				$user_id	= $this->tank_auth->get_user_id();
			}

			$data = array(
				'user_id'     	  => $user_id, 
				'category_id'     => strtolower($_POST["category"]), 
				'provider'        => $_POST["provider"], 
				'date'            => strtolower($_POST["date"]),
				'stars'           => strtolower($_POST["value"]), 
				'comment'         => strtolower($_POST["comment"]),
				'tidiness'        => strtolower($_POST["tidiness"]),
				'personnel'       => strtolower($_POST["personnel"]),
				'service_quality' => strtolower($_POST["service_quality"]),
				'prize'           => strtolower($_POST["prize"])
			);

			$place_id = $this->notes_model->getNameById("places",$data["provider"]);

			if(!empty($place_id))
				$data["place_id"] = $place_id->place_id;

			$_POST["provider"] = $_GET["category"];
			$_POST["provider"] = $_GET["date"];
			$_POST["provider"] = $_GET["comment"];
			$_POST["provider"] = $_GET["provider"];
			if(isset($_GET["value"]))
			$_POST["value"] = $_GET["value"];

			if(isset($_GET["tidiness"]))
			$_POST["tidiness"] = $_GET["tidiness"];
			if(isset($_GET["personnel"]))
			$_POST["personnel"] = $_GET["personnel"];
			if(isset($_GET["service_quality"]))
			$_POST["service_quality"] = $_GET["service_quality"];
			if(isset($_GET["prize"]))
			$_POST["prize"] = $_GET["prize"];



			$this->notes_model->insertDataByTable("feedback",$data);
			if($language == "sk")
			redirect(base_url().$language."/index/domov/1");
			if($language == "en")
			redirect(base_url().$language."/index/home/1");
	 	}else {	
			$data['errors'] = array();	
			$this->form_validation->set_error_delimiters('<div id="errorMessage">', '</div>');
			$errors = $this->tank_auth->get_error_message();
			foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
		}

		if($language == "sk") $view = "spatna_vazba";
		else $view = "give_feedback";

		$data = array(
			'login'        => "login".strtoupper($language).".png", 
			'title'        => "Cleverfrogs ".$view, 
			'logo'         => "logo.png", 
			'enterCompany' => "vstupFirmy.png", 
			'enterUser'    => "vstupSpotrebitelia.png", 
			'view'         => "includes/".$view.".php"
		);

		if(isset($_GET["value"]))
			$value = $_GET["value"];
		else $value = "0";
		if(isset($_GET["category"]))
			$category = $_GET["category"];
		else $category = "0";

		if(isset($_GET["tidiness"]))
		$tidiness = $_GET["tidiness"];
		else $tidiness = "0";

		if(isset($_GET["personnel"]))
		$personnel = $_GET["personnel"];
		else $personnel = "0";

		if(isset($_GET["service_quality"]))
		$service_quality = $_GET["service_quality"];
		else $service_quality = "0";

		if(isset($_GET["prize"]))
		$prize = $_GET["prize"];
		else $prize = "0";

		$data["basicInfo"] = array(
			'category'        => $category, 
			'provider'        => $_POST["provider"], 
			'date'            => strtolower($_POST["date"]),
			'comment'         => strtolower($_POST["comment"]),
			'value'           => $value,
			'tidiness'        => $tidiness,
			'personnel'       => $personnel,
			'service_quality' => $service_quality,
			'prize'           => $prize
		);

		if($this->tank_auth->is_logged_in()){
			$data['user_id']	= $this->tank_auth->get_user_id();
			$data['username']	= $this->tank_auth->get_username();
			$data["user_profile"] = $this->notes_model->getRowById2("user_profiles","user_id",$this->tank_auth->get_user_id());
		}

		//pre_r($data);

		$this->load->view('template',$data);
	}

	public function setCategoryItems($category_id){
		$this->category_id = $category_id;
		$itemsOfCategory = $this->notes_model->getTableByCategoryId("places",$category_id);
		$this->itemsOfCategory = array();

		$valueOfname = "";

		foreach ($itemsOfCategory as $key => $value) {
			foreach ($value as $key => $value) {
				if($key == "name"){
					$valueOfname = $value;
				}
				if($key == "place_id"){
					$this->itemsOfCategory[$valueOfname] = $value;
				}
			}
		}
		//pre_r($this->itemsOfCategory);
		return $this->itemsOfCategory;
	}

	public function getCategoryInfo($category_id){
		$q = strtolower($_GET["term"]);
		if (!$q) return;
		$items = $this->setCategoryItems($category_id);

		$result = array();
		foreach ($items as $key=>$value) {
			if (strpos(strtolower($key), $q) !== false) {
				array_push($result, array("id"=>$value, "label"=>$key, "value" => strip_tags($key)));
			}
			if (count($result) > 11)
				break;
		}
		echo $this->makeJsonArray($result); 
	}

	public function makeJsonArray( $array ){
	    if( !is_array( $array ) ){
	        return false;
	    }

	    $associative = count( array_diff( array_keys($array), array_keys( array_keys( $array )) ));
	    if( $associative ){

	        $construct = array();
	        foreach( $array as $key => $value ){

	            // We first copy each key/value pair into a staging array,
	            // formatting each key and value properly as we go.

	            // Format the key:
	            if( is_numeric($key) ){
	                $key = "key_$key";
	            }
	            $key = "\"".addslashes($key)."\"";

	            // Format the value:
	            if( is_array( $value )){
	                $value = $this->makeJsonArray( $value );
	            } else if( !is_numeric( $value ) || is_string( $value ) ){
	                $value = "\"".addslashes($value)."\"";
	            }

	            // Add to staging array:
	            $construct[] = "$key: $value";
	        }

	        // Then we collapse the staging array into the JSON form:
	        $result = "{ " . implode( ", ", $construct ) . " }";

	    } else { // If the array is a vector (not associative):

	        $construct = array();
	        foreach( $array as $value ){

	            // Format the value:
	            if( is_array( $value )){
	                $value = $this->makeJsonArray( $value );
	            } else if( !is_numeric( $value ) || is_string( $value ) ){
	                $value = "'".addslashes($value)."'";
	            }

	            // Add to staging array:
	            $construct[] = $value;
	        }

	        // Then we collapse the staging array into the JSON form:
	        $result = "[ " . implode( ", ", $construct ) . " ]";
	    }

	    return $result;
	}



	public function sendOpinion(){

		if($this->input->post("myradio") == "áno"){
			$this->form_validation->set_rules("myradio", "Áno", 'trim|required|xss_clean');
		}
		else if($this->input->post("myradio") == "nie"){
			$this->form_validation->set_rules("myradio", "Nie", 'trim|required|xss_clean');
			$this->form_validation->set_rules("text", "Text", 'xss_clean|trim');

		}else {
			redirect("");
		}

		if ($this->form_validation->run()) {
			$this->load->library('email');

			$data = "Názor: ".$this->input->post("myradio")."\n".
					"Text: ".$this->input->post("text");

			$this->load->library('email');
			$this->email->set_newline("\r\n");
			$this->email->clear(TRUE);
			
			$this->email->from("web@cleverfrogs.com");
			$this->email->to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
			$this->email->subject('Správa odoslaná z webu www.cleverfrogs.com');
			$this->email->message($data);	

			$this->email->send();

			//pre_r($this->email->print_debugger());

			redirect();
		}else {	
				$data['errors'] = array();	
				$this->form_validation->set_error_delimiters('<div id="errorMessage">', '</div>');
				$errors = $this->tank_auth->get_error_message();
				foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
		}

		redirect("");

	}

	public function loadPage($page){
		$this->index($page);
	}

	function activate($table,$what,$id,$redirect){

		if($this->checkAdmin()){

			$toActivate = $this->notes_model->getRowById2($table,$what,$id);
			$activate =  ($toActivate->activated == 1) ? 0 : 1;
			$this->notes_model->activateByTable2($table,$what,$id,$activate);
			$this->loadAdminPage($redirect);

		}else {
			redirect("");
		}
	}

	function activate2($table,$what,$id,$orderColumn,$order){

		if($this->checkAdmin()){

			$kategoria = $this->notes_model->getRowById2($table,$what,$id);
			$activate =  ($kategoria->activated == 1) ? 0 : 1;
			$this->notes_model->activateByTable2($table,$what,$id,$activate);
			redirect($this->data["main_controller"]."/loadAdminPageWithPagination2/".$table."/".$orderColumn."/".$order);
		} else redirect("");
	}

	public function sendEmail($language,$redirect){

		$this->form_validation->set_rules("meno", "Vaše meno", 'trim|required|xss_clean');
		$this->form_validation->set_rules("email", "Email", 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules("text", "Krátky komentár", 'required|xss_clean');
		

		if ($this->form_validation->run()) {

			$this->load->library('email');
	        $config['charset'] = 'utf-8';
	        $config['wordwrap'] = TRUE;
	        $config['mailtype'] = 'text';
	        $config['newline'] = '\r\n';
	        $config['crlf'] = '\r\n'; 

			$this->email->initialize($config);
			
			$data = array (
				"meno" => $this->input->post("meno"),
				"email" => $this->input->post("email"),
				"emailto" => $this->config->item('webmaster_email', 'tank_auth'),
				"text" => $this->input->post("text")
			);

			$message = 
			"Dobrý deň,
                    \n\nToto je automaticky vyegenerovaná zpráva: 
                    
                    \nOdosielateľ: ".$this->input->post("meno")."
                    \nEmail: ".$this->input->post("email")."
                    \nKomentár:\n\n".$this->input->post("text");


			$this->load->library('email');
			$this->email->clear(TRUE);
			
			$this->email->from($this->input->post("email"));
			$this->email->to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
			$this->email->subject('Správa odoslaná z webu www.'.$this->data["main_controller"].'.sk');
			$this->email->message($message);	

			
			$this->email->send();

			if($language == "sk")
			redirect($language."/index/domov/2");
			else 
			redirect($language."/index/home/2");

		}else {	
				$data['errors'] = array();	
				$this->form_validation->set_error_delimiters('<div id="errorMessage">', '</div>');
				$errors = $this->tank_auth->get_error_message();
				foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
		}

			$view = "includes/".$redirect.".php";

		switch ($language) {
			case 'sk':
				$this->lang->load('cleverfrogs', 'slovak');
				$this->lang->load('tank_auth', 'slovak');
				$data = array(
					'title' => "Cleverfrogs kontakt", 
					'logo' => "logo.png", 
					'enterCompany' => "vstupFirmy.png", 
					'enterUser' => "vstupSpotrebitelia.png", 
					'view'  => $view,
					'meno' => $this->input->post("meno"),
					'email' => $this->input->post("email"),
					'text' => $this->input->post("text"),
				);
				break;
			case 'en':
				$this->lang->load('cleverfrogs', 'english');
				$this->lang->load('tank_auth', 'english');
				$data = array(
					'title' => "Cleverfrogs contact", 
					'logo' => "logo.png",
					'view'  => $view,
					'meno' => $this->input->post("meno"),
					'email' => $this->input->post("email"),
					'text' => $this->input->post("text"),
				);
				break;
			default:
				$this->lang->load('tank_auth', 'slovak');
				$data = array(
					'title' => "Cleverfrogs kontakt", 
					'logo'  => "logo.png",
					'meno'  => $this->input->post("meno"),
					'email' => $this->input->post("email"),
					'text'  => $this->input->post("text"),
					'view'  => $view
				);
				break;
		}

		$this->load->view('template',$data);
	}

	public function loadAdminPage($page,$id = ""){
		if ($this->tank_auth->is_logged_in()) {

			$data['username']	= $this->tank_auth->get_username();
			$data['user_id']	= $this->tank_auth->get_user_id();

			if($data['username'] == "admin" && $data['user_id'] == 1){

				$data["basicInfo"] = array(
					'title' => $this->mainTitle.$page, 
					'view' => $page.".php",
					'page' => $page,
					'link' => $this->uri->segment(3),
					'main_controller' => $this->data["main_controller"]

				);

				if($page == "feedback") {
					$data[$page] = $this->notes_model->getTable($page);
					
					//add username to feedback
					foreach ($data[$page] as $key1 => $value1) {
						foreach ($value1 as $key2 => $value2) {
							if($key2 == "user_id")
								if (isset($value2) && $value2 != "0") {
									$user = $this->notes_model->getRowById2("users","id",$value2);
									$value1->username = $user->username;
								}
						}
					}
				}

				if($page == "banner") {
					$data[$page] = $this->notes_model->getTable($page);
				}


				if($page == "users") {
					$data[$page] = $this->notes_model->getUsersAndProfiles("user");
				}


				if($page == "pridat_user"){

					$data['use_username'] = $this->config->item('use_username', 'tank_auth');
					$data['captcha_registration'] = $this->config->item('captcha_registration', 'tank_auth');
					$data['use_recaptcha'] = $this->config->item('use_recaptcha', 'tank_auth');

					$email_activation = $this->config->item('email_activation', 'tank_auth');
					$activated = $this->config->item('activated', 'tank_auth');

					$this->form_validation->set_rules('username', 'Prihlasovacie meno', 'trim|required|xss_clean');
					$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
					$this->form_validation->set_rules('gender', 'Pohlavie', 'trim|required|xss_clean');
					$this->form_validation->set_rules('birthdate', 'Dátum narodenia', 'trim|required|xss_clean|numeric|exact_length[4]');
					$this->form_validation->set_rules('password', 'Heslo', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
					$this->form_validation->set_rules('confirm_password', 'Overenie hesla', 'trim|required|xss_clean|matches[password]');
					$data['errors'] = array();

					if ($this->form_validation->run()) {
					if (!is_null($data = $this->tank_auth->create_user(
							$this->form_validation->set_value('username'),
							$this->form_validation->set_value('email'),
							$this->form_validation->set_value('password'),
							$email_activation,$activated))) {
							//update profile
							$profile = array();
							$profile["user_id"] = $data["user_id"];
							$profile["birthdate"] = $this->form_validation->set_value('birthdate');
							$profile["gender"] = $this->form_validation->set_value('gender');
							$this->notes_model->insertDataByTable("user_profiles",$profile);

							$data['site_name'] = $this->config->item('website_name', 'tank_auth');

							if ($email_activation) {
								unset($data['password']);
							} else {
								if ($this->config->item('email_account_details', 'tank_auth')) {
									$auth = new auth();
									$auth->_send_email('welcome', $data['email'], $data);
								}
								unset($data['password']);
								redirect(base_url()."cleverfrogs/loadAdminPage/users");
							}
						} else {
							$errors = $this->tank_auth->get_error_message();
							foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
						}
						$data["basicInfo"] = array(
							'title'           => "cleverfrogs - pridať užívateľa", 
							'main_controller' => $this->data["main_controller"]
						);
						$data['use_username'] = $this->config->item('use_username', 'tank_auth');
						$data['captcha_registration'] = $this->config->item('captcha_registration', 'tank_auth');
						$data['use_recaptcha'] = $this->config->item('use_recaptcha', 'tank_auth');
						$data["chyby"] = $errors;
					}
				}

				if($page == "pridat_company"){

					$data['use_username'] = $this->config->item('use_username', 'tank_auth');
					$data['captcha_registration'] = $this->config->item('captcha_registration', 'tank_auth');
					$data['use_recaptcha'] = $this->config->item('use_recaptcha', 'tank_auth');

					$email_activation = $this->config->item('email_activation', 'tank_auth');
					$activated = $this->config->item('activated', 'tank_auth');

					$this->form_validation->set_rules('username', 'Prihlasovacie meno', 'trim|required|xss_clean');
					$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
					$this->form_validation->set_rules('gender', 'Pohlavie', 'trim|required|xss_clean');
					$this->form_validation->set_rules('place_id', 'ID Miesta', 'trim|required|xss_clean');
					$this->form_validation->set_rules('birthdate', 'Dátum narodenia', 'trim|required|xss_clean|numeric|exact_length[4]');
					$this->form_validation->set_rules('password', 'Heslo', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
					$this->form_validation->set_rules('confirm_password', 'Overenie hesla', 'trim|required|xss_clean|matches[password]');
					$data['errors'] = array();

					if ($this->form_validation->run()) {
					if (!is_null($data = $this->tank_auth->create_user(
							$this->form_validation->set_value('username'),
							$this->form_validation->set_value('email'),
							$this->form_validation->set_value('password'),
							$email_activation,$activated))) {
							//update profile
							$profile = array();
							$profile["user_id"] = $data["user_id"];
							$profile["birthdate"] = $this->form_validation->set_value('birthdate');
							$profile["gender"] = $this->form_validation->set_value('gender');
							$profile["place_id"] = $this->form_validation->set_value('place_id');
							$profile["user_type"] = "company";
							$this->notes_model->insertDataByTable("user_profiles",$profile);

							$data['site_name'] = $this->config->item('website_name', 'tank_auth');

							if ($email_activation) {
								unset($data['password']);
							} else {
								if ($this->config->item('email_account_details', 'tank_auth')) {
									$auth = new auth();
									$auth->_send_email('welcome', $data['email'], $data);
								}
								unset($data['password']);
								redirect(base_url()."cleverfrogs/loadAdminPage/companies");
							}
						} else {
							$errors = $this->tank_auth->get_error_message();
							foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
						}
						$data["basicInfo"] = array(
							'title'           => "cleverfrogs - pridať užívateľa", 
							'main_controller' => $this->data["main_controller"]
						);
						$data['use_username'] = $this->config->item('use_username', 'tank_auth');
						$data['captcha_registration'] = $this->config->item('captcha_registration', 'tank_auth');
						$data['use_recaptcha'] = $this->config->item('use_recaptcha', 'tank_auth');
						$data["chyby"] = $errors;
					}
				}

				if($page == "companies") {
					$companiestWithPlace = $this->notes_model->getUsersAndProfiles2("company");
					$companiesWithoutPlace = $this->notes_model->getUsersAndProfiles3("company");
					$data[$page] = array_merge($companiestWithPlace,$companiesWithoutPlace);

				}

				if($page == "pridat_menu")
					$data["feedback"] = $this->notes_model->getTable("feedback");

				if($page == "fotky") {
					$data[$page] = $this->notes_model->getRowById2("fotky","vozidlo_id",$id);
					$data["vozidlo_id"] = $id;
				}

				$data["admin"] = $page.".php";
				$this->load->view('templateAdmin',$data);
			}else redirect("");
		}else redirect("");
	}



	public function updateAdminPage($page,$table,$id){
		if($this->checkAdmin()){
			$data["basicInfo"] = array(
				"chyby"           => $errors,
				'title'           => $this->mainTitle.$table, 
				'view'            => $table.".php",
				'page'            => $table,
				'main_controller' => $this->data["main_controller"]

			);
			$data["vozidlo"] = $this->notes_model->getRowById($table,$id);
			$data["admin"] = $page.".php";


			$this->load->view('templateAdmin',$data);

		} else redirect("");
		
	}

	public function loadAdminPageWithPagination($page){

		if ($this->tank_auth->is_logged_in()) {

			$data['username']	= $this->tank_auth->get_username();
			$data['user_id']	= $this->tank_auth->get_user_id();

			if($data['username'] == "admin" && $data['user_id'] == 1){

				$data["basicInfo"] = array(
					'title' => $this->mainTitle.$page, 
					'view' => $page.".php",
					'main_controller' => $this->data["main_controller"]
				);		
				
				$data[$page] = $this->notes_model->getTable($page);

				$data["admin"] = $page.".php";
				$this->load->view('templateAdmin',$data);
			}else redirect("");
		}else redirect("");
	}

	public function loadAdminPageWithPagination2($page,$orderColumn,$order){

		if ($this->tank_auth->is_logged_in()) {

			$data['username']	= $this->tank_auth->get_username();
			$data['user_id']	= $this->tank_auth->get_user_id();

			if($data['username'] == "admin" && $data['user_id'] == 1){

			$data["basicInfo"] = array(
				'title' => $this->mainTitle.$page, 
				'view' => $page.".php",
				'main_controller' => $this->data["main_controller"]
			);		
			
			$data[$page] = $this->notes_model->getTable2($page,$orderColumn,$order);
			$data["admin"] = $page.".php";
			$this->load->view('templateAdmin',$data);
			}else redirect("");
		}else redirect("");
	}

	public function updateTableEditor($table,$id,$column){
		if($this->checkAdmin()){
			$editor = $this->input->post("editor");
			$data[$column] = $this->input->post($editor);
		

			$this->notes_model->updateRowById($table,$id,$data);

			if($data[$column] == ""){
				$this->session->set_flashdata('error','Pozor v aktualizovanej časti nie je pravdepodobne žiaden text !');
				redirect($this->data["main_controller"]."/loadAdminPage/".$table);
			}
			else {

				$this->session->set_flashdata('success','Operácia prebehla úspešne !');
				redirect($this->data["main_controller"]."/loadAdminPage/".$table);
			}
		} else redirect("");
		
	}

	public function updateHome(){
		if($this->checkAdmin()){
			$setupData = $this->input->post("inputs");
			
			$counter = 1;
			foreach ($this->input->post("inputs") as $key => $value) {
				
				if($counter > 3){
					$this->form_validation->set_rules($key, $value, 'trim|required|xss_clean');
				}
				
				$counter++;
			}

			if ($this->form_validation->run()) {								// validation ok
					
					$counter = 1;
					foreach ($this->input->post("inputs") as $key => $value) {
						
						if($counter > 3){
							$data[$key] = $this->input->post($key);
						}
						$counter++;
					}

					$this->notes_model->updateRowById($setupData["table"],$setupData["id"],$data);
					$this->session->set_flashdata('success_'.$setupData["successNumber"],'Aktualizácia prebehla úspešne');
					redirect("");

				} else {	
					$data['errors'] = array();	
					$this->form_validation->set_error_delimiters('<div id="errorMessage">', '</div>');
					$errors = $this->tank_auth->get_error_message();
					foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
				}


			$data["basicInfo"] = array(
				'title' => $this->mainTitle."domov", 
				'view' => "home.php",
				'main_controller' => $this->data["main_controller"]
			);
			$data["kontakt"] = $this->notes_model->getRowById("kontakt","1");
			$data["admin"] = "home.php";
			$this->load->view('templateAdmin',$data);
		}else redirect("");
	}

	function subscribe(){
		$data["email"] = $this->input->post("subscribeEmail");
		$language = $this->input->post("language");

		$check = $this->notes_model->getRowById2("newsletter","email",$data["email"]);
		$check = $check->email;

		if(isset($check)){
			if($language == "sk")
			redirect($language."/index/domov/3");
			else 
			redirect($language."/index/home/3");
		}
		else 
		$this->notes_model->insertDataByTable("newsletter",$data);

		if($language == "sk")
		redirect($language."/index/domov/2");
		else 
		redirect($language."/index/home/2");
	}

	function deleteAccount($table,$id,$redirect) {
	
		$row = $this->notes_model->getRowById($table,$id);

		$this->notes_model->deleteRowById($table,$id);
		$this->notes_model->deleteRowById2("user_profiles","user_id",$id);

		redirect($this->data["main_controller"]."/loadAdminPage/".$redirect);
	}


	private function checkAdmin(){
		if ($this->tank_auth->is_logged_in()) {

			$data['username']	= $this->tank_auth->get_username();
			$data['user_id']	= $this->tank_auth->get_user_id();

			if($data['username'] == "admin" && $data['user_id'] == 1){

				return true;	
			
			}	else return false;
		}	else return false;
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */