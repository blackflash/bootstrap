<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mobile extends CI_Controller {

	function __construct()
	{
		parent::__construct();

		$this->lang->load('cleverfrogs', 'english');
		$this->lang->load('tank_auth', 'english');
		$this->load->model("mobile_model");
		$this->load->model("notes_model");
		$this->load->helper('text');
		$this->load->library('encrypt');
		$this->load->helper('string');
		$this->load->helper('date');

		$this->load->helper(array('form', 'url'));
		$this->load->library('security');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
		$this->load->library('form_validation');

    	$this->ci =& get_instance();
	}

	public function index()
	{	
			echo random_string('alnum', 16);
	}
	
	public function login()
	{
	    $this->output->set_content_type('application/json');
	    
	    $user = $this->input->post('login');
	    $password = $this->input->post('password');

	    if(!$user || !$password) return $this->_error();
	    $query =  $this->db->get_where('users', array('username' => $user));//$this->db->query('SELECT id,password FROM users WHERE username = '.$this->db->escape($user));
	    $db_data = $query->result_array();
	    if(count($db_data) == 0) return $this->_error();
	    $db_data = $db_data[0]; 
	    
      $hasher = new PasswordHash( $this->ci->config->item('phpass_hash_strength', 'tank_auth'), $this->ci->config->item('phpass_hash_portable', 'tank_auth'));
      $result = $hasher->CheckPassword($password, $db_data['password']);
    
      if($result) {
        //$time = date("Y-m-d H:i:s", time()+60*60*12);
        $key = random_string('alnum', 16);
        $this->mobile_model->addKey($db_data['id'], $key);
        echo json_encode(array( 'success'=>$result, 'key'=>$key ));
        //$this->mobile_model->clear();
      } 
      else return $this->_error();
  	}	
	
	public function history()
	{
		$this->output->set_content_type('application/json');
		$key = $this->input->post('key');
		if(!$key) return $this->_error();
		$uid = $this->mobile_model->getUserIdByKey($key);
		if($uid!=null) {
			$this->db->order_by('date', 'desc'); 
			$query = $this->db->get_where('feedback', array('user_id'=>$uid), 25);
			$db_data = $query->result_array();
			echo json_encode( array( 'success' => true, 'data'=>$db_data ));
		} 
		else echo json_encode( array( "success" => false )); 
	}
	
	public function profil()
	{
		$this->output->set_content_type('application/json');
		$key = $this->input->post('key');
		if(!$key) return $this->_error();
		$uid = $this->mobile_model->getUserIdByKey($key);
		if($uid!=null) {
			/*$this->db->order_by('date', 'desc'); 
			$query = $this->db->get_where('feedback', array('user_id'=>$uid), 25);
			$db_data = $query->result_array();*/
			$data = array('username'=>'test', 'hotel'=>1, 'pub'=>1, 'kozmetika'=>1, 'doprava'=>1, 'ostatne'=>1, 'sent'=>1000, 'month'=>15, 'reputation'=>1201, 'user_score'=>80);
			echo json_encode( array( 'success' => true, 'data'=>$data ));
		} 
		else echo json_encode( array( "success" => false )); 
	}
   
  	public function logout()
	{
    $this->output->set_content_type('application/json');
    $key = $this->input->post('key');
    if(!$key) return $this->_error();
    
    if($this->mobile_model->isKeyValid($key)) {
      $this->mobile_model->deleteUserKeysByKey($key);
      echo json_encode( array( "success" => true ));
    } 
    else echo json_encode( array( "success" => false ));
	}
	
	public function validate()
	{
		$this->output->set_content_type('application/json');
		$key = $this->input->post('key');
		if(!$key) return $this->_error();
		echo json_encode( array( "success" => $this->mobile_model->isKeyValid($key)) );
	}
	
	public function feedback()
	{
	    $this->output->set_content_type('application/json');
	    $key = $this->input->post('key');
	    $text = $this->input->post('text');
	    if(!$key || !$text) return $this->_error();
	    
	    $uid = $this->mobile_model->getUserIdByKey($key);
	    if($uid!=null) {
	      $this->db->insert('mobile_feedback', array('user_id'=> $uid, 'text'=> $text));
	      echo json_encode( array( "success" => true ));
	    } 
	    else echo json_encode( array( "success" => false ));
	}
   
   
  	public function user_feedback()
	{
	    $this->output->set_content_type('application/json');
	    
	    $this->load->library('form_validation');
		$data["category"]        = $this->input->post('category');
		$data["provider"]        = $this->input->post('provider');
		$data["date"]            = $this->input->post('date');
		$data["value"]           = $this->input->post('value');
		$data["comment"]         = $this->input->post('comment');
		$data["tidiness"]        = $this->input->post('tidiness');
		$data["personnel"]       = $this->input->post('personnel');
		$data["service_quality"] = $this->input->post('service_quality');
		$data["prize"]           = $this->input->post('prize');

		$data["user_id"]		 = $this->mobile_model->getUserIdByKey($this->input->post('key'));

		$this->form_validation->set_rules("category", $data["category"], 'required|xss_clean|numeric');
		$this->form_validation->set_rules("provider", $data["provider"], 'required|xss_clean');
		$this->form_validation->set_rules("value", $data["value"], 'required|xss_clean|numeric');
		$this->form_validation->set_rules("date", $data["date"], 'required|xss_clean');
		$this->form_validation->set_rules("comment", $data["comment"], 'required|xss_clean');

		$this->form_validation->set_rules("tidiness", $data["tidiness"], 'xss_clean|numeric');
		$this->form_validation->set_rules("personnel", $data["personnel"], 'xss_clean|numeric');
		$this->form_validation->set_rules("service_quality", $data["service_quality"], 'xss_clean|numeric');
		$this->form_validation->set_rules("prize", $data["prize"], 'xss_clean|numeric');
		
		$this->form_validation->set_rules("user_id", $data["user_id"], 'xss_clean');


		if ($this->form_validation->run() && !is_null($data["user_id"])) {

			$data = array(
				'category_id'     => strtolower($data["category"]), 
				'provider'        => $data["provider"], 
				'date'            => strtolower($data["date"] ),
				'stars'           => strtolower($data["value"]), 
				'comment'         => strtolower($data["comment"]),

				'tidiness'        => strtolower($data["tidiness"]),
				'personnel'       => strtolower($data["personnel"]),
				'service_quality' => strtolower($data["service_quality"]),
				'prize'           => strtolower($data["prize"]),
				'user_id'         => strtolower($data["user_id"])
			);

			$place_id = $this->notes_model->getNameById("places",$data["provider"]);
			if(!empty($place_id)) $data["place_id"] = $place_id->place_id;

			$this->notes_model->insertDataByTable("feedback",$data);
			echo json_encode( array( "success" => true ));

		}else {


			$data['success'] = false;
			$data['errors'] = $this->setUserFeedbackErrors();
			if(is_null($data["user_id"]))
			$data["errors"]["key"] = "User not exist";

			$this->_errorWithArg($data);
		}

	}
   
   	public function register()
	{	
		$this->load->library('form_validation');

	    $this->output->set_content_type('application/json');
	    $this->data["username"] = $this->input->post('username');
	    $this->data["password"] = $this->input->post('password');
	    $this->data["confirm_password"] = $this->input->post('confirm_password');
	    $this->data["email"] = $this->input->post('email');
	    $this->data["birthdate"] = $this->input->post('birthdate');
	    $this->data["gender"] = $this->input->post('gender');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean|min_length['.$this->config->item('username_min_length', 'tank_auth').']|max_length['.$this->config->item('username_max_length', 'tank_auth').']|alpha_dash');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']|max_length['.$this->config->item('password_max_length', 'tank_auth').']|alpha_dash');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|xss_clean|matches[password]');
		$this->form_validation->set_rules('birthdate', 'Birthdate', 'trim|required|xss_clean|min_length[4]|max_length[4]');
		$this->form_validation->set_rules('gender', 'Gender', 'trim|required|xss_clean|max_length[1]');
		
		$data['errors'] = array();
		$email_activation = FALSE;

		if ($this->form_validation->run()) {		
			// validation ok
			if (!is_null($data = $this->tank_auth->create_user(
					$this->form_validation->set_value('username'),
					$this->form_validation->set_value('email'),
					$this->form_validation->set_value('password'),
					$email_activation))) {									// success
			
			//update profile
			$profile = array();
			$profile["birthdate"] = $this->form_validation->set_value('birthdate');
			$profile["gender"] = $this->form_validation->set_value('gender');
			$this->notes_model->updateRowById2("user_profiles","user_id",$data["user_id"],$profile);

			$data['site_name'] = $this->config->item('website_name', 'tank_auth');

			$this->_send_email('welcome', $data['email'], $data);

			unset($data['password']); // Clear password (just for any case)

			echo json_encode( array( "success" => true ));
				
			} else {
				$data['success'] = false;
				$data['errors'] = $this->setErrors();
				$this->_errorWithArg($data);
			}
		}else {
			$data['success'] = false;
			$data['errors'] = $this->setErrors();
			$this->_errorWithArg($data);
		}
	}
	
	function _error() {
    	echo json_encode(array("success"=>false));
	}

	function _errorWithArg($error) {
    	echo json_encode($error);
	}

	function setUserFeedbackErrors(){
		$data = array();

		$data["category"]        = form_error('category');
		$data["provider"]        = form_error('provider');
		$data["date"]            = form_error('date');
		$data["value"]           = form_error('value');
		$data["comment"]         = form_error('comment');
		$data["tidiness"]        = form_error('tidiness');
		$data["personnel"]       = form_error('personnel');
		$data["service_quality"] = form_error('service_quality');
		$data["prize"]           = form_error('prize');
		$data["user_id"]         = form_error('user_id');

		return $data;

	}

	function setErrors(){

		$data = array();

		$data["username"] = form_error('username');
		$data["password"] = form_error('password');
		$data["confirm_password"] = form_error('confirm_password');
		$data["email"] = form_error('email');
		$data["birthdate"] = form_error('birthdate');
		$data["gender"] = form_error('gender');

		if(!$this->ci->users->is_username_available($this->data["username"]))
			$data["username"] = "this username already exist !";

		if(!$this->ci->users->is_email_available($this->data["email"]))
			$data["email"] = "This email already exist !";

		return $data;
	}

	function _send_email($type, $email, &$data)
	{
		$this->load->library('email');
		$this->email->from($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$this->email->reply_to($this->config->item('webmaster_email', 'tank_auth'), $this->config->item('website_name', 'tank_auth'));
		$this->email->to($email);
		$this->email->subject(sprintf($this->lang->line('auth_subject_'.$type), $this->config->item('website_name', 'tank_auth')));
		$this->email->message($this->load->view('email/'.$type.'-html', $data, TRUE));
		$this->email->set_alt_message($this->load->view('email/'.$type.'-txt', $data, TRUE));
		$this->email->send();
	}

}