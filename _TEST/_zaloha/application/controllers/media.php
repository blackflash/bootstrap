<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Media extends CI_Controller {
		
/* 		private $dataS = array(
			'dir' => array(
				'original' => 'assets/uploads/original/',
				'thumb' => 'assets/uploads/thumbs/'
			),
			'total' => 0,
			'images' => array(),
			'error' => ''
		); */
		
	
function __construct()
{
	parent::__construct();

	$this->load->helper('url');
	$this->load->library('tank_auth');
	$this->load->model("notes_model");
	$this->load->helper("form");
	$this->load->helper("url");
	$this->load->helper("typography");
	$this->load->library('image_lib');
	$this->load->library('pagination');
	$this->load->library('form_validation');
	$this->load->library('session');
	$this->load->helper('inflector');
	$this->load->helper('text');

	$this->data["main_controller"] = "cleverfrogs";
}

function pridatMp3($id = ""){
	if (!$this->tank_auth->is_logged_in()){

	redirect();

}else {
	$data['user_id']	= $this->tank_auth->get_user_id();
	$data['username']	= $this->tank_auth->get_username();
	if($data['username'] == "admin" && $data['user_id'] == 1){
			if($id != ""){
				
				$data["mp3Data"] = $this->notes_model->getRowById("mp3",$id);

				$hodnota = $this->updateMp3($id);
				if($hodnota == true) redirect("main/mp3");

				$data["notes"]   = $this->notes_model->getNotes();

				$data["basicInfo"] = array(
					'title' => "B.D. Alternativa Club - editovať mp3", 

				);
				$data["header"] = "B.D. Alternativa Club - editovať mp3";
				$data["admin"] = "pridatMp3.php";

				$this->load->view('templateAdmin',$data);
			}

			if($id == ""){
				$this->form_validation->set_message('required', '<small style="color:red;">Táto položka je povinná</small>');
				$this->form_validation->set_message('min_length', '<small style="color:red;">Je vyžadovaný minimálny počet znakov - '.$this->config->item('password_min_length', 'tank_auth').'</small>');


				$this->form_validation->set_rules('nazov_mp3', 'nazov_mp3', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']');
				$this->form_validation->set_rules('nazov_skupiny', 'nazov_skupiny', 'trim|required|xss_clean|min_length['.$this->config->item('password_min_length', 'tank_auth').']');
				$this->form_validation->set_rules('mp3', 'mp3', 'xss_clean');
				$this->form_validation->set_rules('subor', 'subor', 'xss_clean');


				if ($this->form_validation->run()) {	
						$data = array (
							"id"        =>	NULL,
							"activated" =>	0,
							"name"      =>	$this->form_validation->set_value('nazov_mp3'),
							"name2"     =>	$this->form_validation->set_value('nazov_skupiny'),
						); 


						$this->id = $this->notes_model->insertDataByTable("mp3",$data);
						

						if(isset($_FILES["subor"]["name"])){

							if($_FILES["subor"]["name"] != ""){
								$image = $this->addImage("picture","mp3");
							}
							
						}

						if(isset($_FILES["audio"]["name"])){

							if($_FILES["audio"]["name"] != ""){
								$mp3 = $this->addMp3("audio","mp3");
							}
							
						}

						redirect($this->data["main_controller"]."/mp3");
						//if(!is_dir("uploads/mp3/".$id."/")) mkdir("uploads/mp3/".$id."/",0777);
						
				}

				$data["notes"]   = $this->notes_model->getNotes();
				
				$data["basicInfo"] = array(
					'title' => "B.D. Alternativa Club - pridať mp3", 

				);
				$data["header"] = "B.D. Alternativa Club - pridať mp3";
				$data["admin"] = "pridatMp3.php";

				$this->load->view('templateAdmin',$data);
			}
		}
	}
}

function addMp3($file_name,$folder){
	
	$this->load->library("form_validation");
	$this->form_validation->set_rules("text","Chyba vstupu","trim");
		//kotrola validacie
		if ($this->form_validation->run())
		{	
			
			 if($_FILES["audio"]){	

				$linkToMp3 = $this->uploadMp3();
				$fileType = substr($linkToMp3, -4);
				rename($linkToMp3,'uploads/'.$folder.'/'.$file_name.$this->id.$fileType);
				
				$linkToMp3 = 'uploads/'.$folder.'/'.$file_name.$this->id.$fileType;
				
				$data = array(
					"id"	=>	$this->id,
					"mp3" => $linkToMp3
				); 
				
				$this->notes_model->updateRowById("mp3",$this->id,$data);

				return $data;
				}
		}
		else 
		{	
			$this->pridatMp3();
		}
}

// uploadne mp3
public function uploadMp3() {
	
	$config['upload_path'] = './uploads/mp3/';
	$config['allowed_types'] = 'mp3|ogg|aac';
	$config['max_size'] = '0';
	$config['overwrite'] = TRUE;
	
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	
	if($this->upload->do_upload("audio"))
	{	
		$data = $this->upload->data();
		$linkToImage = "uploads/mp3/".$data["file_name"];
		
		return $linkToImage;
		
	} else echo $this->image_lib->display_errors();
	return false;
}

function updateMp3($id){

	$hodnota = false;

	if(isset($_POST["mp3_edit"])){
				$this->toUpdate["name"] = $_POST["mp3_edit"];
				$this->notes_model->updateRowById("mp3",$id,$this->toUpdate);
				$hodnota = true;
			}
			
			if(isset($_POST["mp3_edit2"])){
				$this->toUpdate["name2"] = $_POST["mp3_edit2"];
				$this->notes_model->updateRowById("mp3",$id,$this->toUpdate);
				$hodnota = true;
			}
			
			if(isset($_FILES["subor"])){
				if($_FILES["subor"]["name"] != NULL){
					$this->id = $id;
					$image = $this->addImage("picture","mp3");
				}
			}

			if(isset($_FILES["audio"])){
				if($_FILES["audio"]["name"] != NULL){
					$this->id = $id;			
					$mp3 = $this->addMp3("mp3","mp3");
				}
			}

	return $hodnota;
}

function addVideo(){

	$data = array(
		"video" => $_POST["Video"]
	); 
	//pre_r($data);
	$this->notes_model->updateVideo($data);
	redirect();						
}

function addBanner($folder,$column){
	$this->load->library("form_validation");
	$this->form_validation->set_rules("subor","Chyba vstupu","trim | required | xss_clean | htmlspecialchars");

		//kotrola validacie
		if ($this->form_validation->run())
		{	
			if($_FILES["subor"] && $_FILES["subor"]["size"] > 0){	
				
				$last_id = $this->notes_model->getLastIdOfTable($folder);
				$last_id++;

				$file_name = $column."_".$last_id;
				$linkToImage = $this->uploadImage($file_name,$folder,"subor");	

				rename($linkToImage,'uploads/'.$folder.'/'.$file_name.".jpg");
				$linkToImage = 'uploads/'.$folder.'/'.$file_name.".jpg";

			 	$data = array (
						$column => $linkToImage,
						"link" => $this->input->post("link"),
						"language"	=> $this->input->post("language")
			 	);
			    $this->notes_model->insertDataByTable($folder,$data);
			    $this->session->set_flashdata('success','Aktualizácia prebehla úspešne');
			    redirect($this->data["main_controller"]."/loadAdminPage/banner");
					  	 
			}
			else 
			{	
				$this->session->set_flashdata('message','Nebol pridaný žiaden obrázok');
				redirect($this->data["main_controller"]);
			}
		}else {
			return false;
		}
}

function editFotoById($table,$id){
	$data[$table] = $this->notes_model->getRowById($table,$id);

	$page = "editFoto";

		$data["basicInfo"] = array(
			'title' => $this->data["main_controller"]." - editácia fotografie", 
			'view' => $page.".php",
			'page' => $page,
			'table' => $table,
			'main_controller' => $this->data["main_controller"]
		);

		$data["admin"] = $page.".php";
		$this->load->view('templateAdmin',$data);
}

function updateFotka($table,$foto_id){

	$this->load->library("form_validation");
	$this->form_validation->set_rules("subor","Chyba vstupu","trim | xss_clean | htmlspecialchars");

		//kotrola validacie
		if ($this->form_validation->run())
		{	
			if($_FILES["subor"] && $_FILES["subor"]["size"] > 0){	

				$folder = "banner/";
				$file_name = $foto_id;
				$linkToImage = $this->uploadImage($file_name,$folder,"subor");	

				rename($linkToImage,'uploads/'.$folder.'/'.$file_name.".jpg");
				$linkToImage = 'uploads/'.$folder.'/'.$file_name.".jpg";

			 	$data = array (
						"image" => $linkToImage,
						"link" => $this->input->post("link")
			 	);

			    $this->notes_model->updateRowById($table,$foto_id,$data);
			    
			    $this->session->set_flashdata('success','Aktualizácia prebehla úspešne');
			    redirect($this->data["main_controller"]."/loadAdminPage/".$table);
			}
			else 
			{	

			 	$data = array (
						"link" => $this->input->post("link")
			 	);

			    $this->notes_model->updateRowById($table,$foto_id,$data);

				$this->session->set_flashdata('success','Aktualizácia prebehla úspešne');
			    redirect($this->data["main_controller"]."/loadAdminPage/".$table);
			}
		}else {
			return false;
		}

}

function addFotky($vozidlo_id){


	for ($i=0; $i < count($_FILES["userfile"]["name"]); $i++) { 
		$_FILES["subor"]["name"] = $_FILES["userfile"]["name"][$i];
		$_FILES["subor"]["type"] = $_FILES["userfile"]["type"][$i];
		$_FILES["subor"]["tmp_name"] = $_FILES["userfile"]["tmp_name"][$i];
		$_FILES["subor"]["error"] = $_FILES["userfile"]["error"][$i];
		$_FILES["subor"]["size"] = $_FILES["userfile"]["size"][$i];

		$this->addFotka("fotky",$vozidlo_id);
	}

	redirect($this->data["main_controller"]."/loadAdminPage/fotky/".$vozidlo_id);
}

function addFotka($table,$car_id){
	$this->load->library("form_validation");
	$this->form_validation->set_rules("subor","Chyba vstupu","trim | required | xss_clean | htmlspecialchars");

		//kotrola validacie
		if ($this->form_validation->run())
		{	
			if($_FILES["subor"] && $_FILES["subor"]["size"] > 0){	

				$last_id = $this->notes_model->getLastIdOfTable("fotky");
				$last_id++;

				$folder = "vozidla/".$car_id;
				$file_name = $last_id;
				$linkToImage = $this->uploadImage($file_name,$folder,"subor");	
				rename($linkToImage,'uploads/'.$folder.'/'.$file_name.".jpg");
				$linkToImage = 'uploads/'.$folder.'/'.$file_name.".jpg";

			 	$data = array (
						"image" => $linkToImage,
						"vozidlo_id" => $car_id,
						"popis" => $this->input->post("popis")
			 	);
			    $this->notes_model->insertDataByTable($table,$data);
			    $this->session->set_flashdata('success','Aktualizácia prebehla úspešne');
			    //redirect($this->data["main_controller"]."/loadAdminPage/fotky/".$car_id);
			}
			else 
			{	
				$this->session->set_flashdata('message','Nebol pridaný žiaden obrázok');
				//redirect($this->data["main_controller"]);
			}
		}else {
			return false;
		}
}

function addImage($folder,$column){

	$this->load->library("form_validation");
	$this->form_validation->set_rules("subor","Chyba vstupu","trim | required | xss_clean | htmlspecialchars");

		//kotrola validacie
		if ($this->form_validation->run())
		{	
			if($_FILES["subor"] && $_FILES["subor"]["size"] > 0){	
				
				$file_name = $column;
				
				$linkToImage = $this->uploadImage($file_name,$folder,"subor");	

				$linkToImage = 'uploads/'.$folder.'/'.$file_name.".jpg";

				$vozidla = substr($folder, 0,7);

				switch ($folder) {
					case "banner":

					 	$data = array (
								$column => $linkToImage
					 	);
					    $this->notes_model->insertDataByTable($folder,$data);
					    $this->session->set_flashdata('success','Aktualizácia prebehla úspešne');
					    redirect($this->data["main_controller"]."/loadAdminPage/banner");
					 break;	
					 case "home":
					 	$data = array (
								"id"      => $this->input->post("id"),
								$column => $linkToImage
					 	);
					    $this->notes_model->uploadImageByTable($folder,$data);
					    $this->session->set_flashdata('success','Aktualizácia prebehla úspešne');
					    redirect("");
					 break;
					 case "oSpolocnosti":

					 	$data = array (
								"id"      => $this->input->post("id"),
								$column => $linkToImage
					 	);

					    $this->notes_model->uploadImageByTable($folder,$data);
					    $this->session->set_flashdata('success','Aktualizácia prebehla úspešne');
					    redirect($this->data["main_controller"]."/loadAdminPage/oSpolocnosti");
					 break;	 	 
					 case $vozidla:

					 	$newFolder = $this->notes_model->getLastIdOfTable("vozidla");

					 	$data = array (
								"id"      => $this->input->post("id"),
								$column => $linkToImage
					 	);

					    $this->notes_model->uploadImageByTable($folder,$data);
					    $this->session->set_flashdata('success','Aktualizácia prebehla úspešne');
					    redirect($this->data["main_controller"]."/loadAdminPageWithPagination/vozidla");
					 break;	
				}
			}
			else 
			{	
				$this->session->set_flashdata('message','Nebol pridaný žiaden obrázok');
				redirect($this->data["main_controller"]);
			}
		}else {
			return false;
		}
}

function uploadImage($file_name,$folder,$subor) {

	$path = './uploads/'.$folder;
	$config['upload_path'] = $path;
	$config['allowed_types'] = 'gif|jpg|png';
	$config['overwrite'] = TRUE;
	$config['max_size']	= '0';
	$config['max_width']  = '0';
	$config['max_height']  = '0';

	$this->load->library('upload', $config);

	if($this->upload->do_upload($subor))
	{	
		$data = $this->upload->data();
		$linkToImage = $path."/".underscore($data["file_name"]);
		$config['image_library'] = 'gd2';
		$config['source_image'] = "./uploads/".$folder."/".underscore($data["file_name"]);
		$config['maintain_ratio'] = TRUE;
		$config['thumb_marker']  = '_orig';
		$config['width'] = 690 ;
		$config['height'] = 305;
		$this->image_lib->initialize($config);
		if($this->image_lib->resize()){
			return $config['source_image'];
		}else{
			$this->session->set_flashdata('message',$this->image_lib->display_errors());
			echo $this->image_lib->display_errors();
		}
	}
	else $this->upload->display_errors();
	return false;
}

function deleteColumnByName($table,$id,$column) {
	
	$row = $this->notes_model->getRowById($table,$id);

	if($row != null){
		$file = $row->o_spolocnosti_image;
		@unlink($file);
	}
	
	$this->notes_model->deleteColumnByName($table,$id,$column);
	redirect($this->data["main_controller"]."/loadAdminPage/".$table);
}

function deleteImageByRow($table,$id) {
	
	$row = $this->notes_model->getRowById($table,$id);

	if($row != null){
		$file = $row->image;
		@unlink($file);
	}
	
	$this->notes_model->deleteRowById($table,$id);
	redirect($this->data["main_controller"]."/loadAdminPage/".$table);
}

function deleteFotkaById($table,$id,$vozidlo_id) {
	
	$row = $this->notes_model->getRowById($table,$id);

	if($row != null){
		$file = $row->image;
		@unlink($file);
	}

	$data[$page] = $this->notes_model->getRowById2("fotky","vozidlo_id",$vozidlo_id);
	$data["vozidlo_id"] = $id;

	$this->notes_model->deleteRowById($table,$id);
	redirect($this->data["main_controller"]."/loadAdminPage/".$table."/".$vozidlo_id);
}

function deleteImageAndTableById($table,$whatID,$id) {
	
	$row = $this->notes_model->getRowById2($table,$whatID,$id);

	if($row != null && $table == "kategorie"){
		$file = $row->thumb;
		@unlink($file);
	}
	
	$this->notes_model->deleteRowById2($table,$whatID,$id);

	$page = $table;
	$data["basicInfo"] = array(
		'title' => $this->data["main_controller"]." ".$page, 
		'view' => $page.".php",
		'main_controller' => $this->data["main_controller"]
	);		
	
	$data[$table] = $this->notes_model->getTable($table);

	$data["admin"] = $page.".php";
	$this->load->view('templateAdmin',$data);
}

function doupload() {
		$name_array = array();
		$count = count($_FILES['userfile']['size']);
		foreach($_FILES as $key=>$value)
		for($s=0; $s<=$count-1; $s++) {
		$_FILES['userfile']['name']=$value['name'][$s];
		$_FILES['userfile']['type']    = $value['type'][$s];
		$_FILES['userfile']['tmp_name'] = $value['tmp_name'][$s];
		$_FILES['userfile']['error']       = $value['error'][$s];
		$_FILES['userfile']['size']    = $value['size'][$s];   
		    $config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '100';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
		$this->load->library('upload', $config);
		$this->upload->do_upload();
		$data = $this->upload->data();
		$name_array[] = $data['file_name'];
			}
			$names= implode(',', $name_array);
/*			$this->load->database();
			$db_data = array('id'=> NULL,
							 'name'=> $names);
		$this->db->insert('testtable',$db_data);
*/			pre_r($names);
	}

	public function change_order($table,$direction,$id){

		$tabulka = $table;
		$table= $this->notes_model->getTable2($table,"order_id","asc");
		$temp;
		foreach ($table as $key1 => $value1) {
			foreach ($value1 as $key2 => $value2) {
				if($key2 == "id" && $value2 == $id)
					$temp = $key1;
			}
		}
		$temp = intval($temp);
		$fromMenu = $table[$temp];

		if($direction == "prev") $temp--;
		if($direction == "next") $temp++;
		
		if(!empty($table[$temp])){
			$toMenu = $table[$temp];

			$temp = $toMenu->order_id;
			$toMenu->order_id = $fromMenu->order_id;
			$fromMenu->order_id = $temp;
			
			$data["order_id"] = $toMenu->order_id;
			$this->notes_model->updateRowById2($tabulka,"id",$toMenu->id,$data);

			$data["order_id"] = $fromMenu->order_id;
			$this->notes_model->updateRowById2($tabulka,"id",$fromMenu->id,$data);
			
			redirect("cleverfrogs/loadAdminPageWithPagination2/menu/order_id/asc");
		}
		else return redirect("cleverfrogs/loadAdminPageWithPagination2/menu/order_id/asc");

	}

	public function pridat_feedback(){

		$this->form_validation->set_rules("category_id", "Category ID", 'trim|required|xss_clean|numeric');
		$this->form_validation->set_rules("provider", "Provider", 'trim|required');
		$this->form_validation->set_rules("place_id", "Place ID", 'trim|xss_clean|numeric');
		$this->form_validation->set_rules("date", "ID miesta", 'trim|xss_clean|required|numeric');
		$this->form_validation->set_rules("stars", "Stars", 'trim|xss_clean|required|numeric');
		$this->form_validation->set_rules("comment", "Comment", 'xss_clean|required');
		$page = "pridat_feedback";

		if ($this->form_validation->run()) {


			$data = array (
				'category_id' => $this->input->post("category_id"),
				'provider' => $this->input->post("provider"),
				'place_id' => $this->input->post("place_id"),
				'date' => $this->input->post("date"),
				'stars' => $this->input->post("stars"),
				'comment' => $this->input->post("comment")
			);

			$this->notes_model->insertDataByTable("feedback",$data);

			redirect($this->data["main_controller"]."/loadAdminPageWithPagination/feedback");

		}else {	
				$data['errors'] = array();	
				$this->form_validation->set_error_delimiters('<div id="errorMessage">', '</div>');
				$errors = $this->tank_auth->get_error_message();
				foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
		}

		$page = "pridat_feedback";

		$data["basicInfo"] = array(
			'title' => $this->data["main_controller"]." - pridať feedback", 
			'view' => $page.".php",
			'link' => $this->uri->segment(2),
			'page' => $page,
			'places' => $this->notes_model->getTable("places"),
			'main_controller' => $this->data["main_controller"]
		);

		$data["admin"] = $page.".php";
		$this->load->view('templateAdmin',$data);
	}

	public function upravit_feedback($table,$whatID,$id){

		$this->form_validation->set_rules("category_id", "Category ID", 'trim|required|xss_clean|numeric');
		$this->form_validation->set_rules("provider", "Provider", 'trim|required');
		$this->form_validation->set_rules("place_id", "Place ID", 'trim|xss_clean');
		$this->form_validation->set_rules("date", "ID miesta", 'trim|xss_clean|required');
		$this->form_validation->set_rules("stars", "Stars", 'trim|xss_clean|required');
		$this->form_validation->set_rules("comment", "Comment", 'xss_clean|required');


		if ($this->form_validation->run()) {

			$data = array (
				'category_id' => $this->input->post("category_id"),
				'provider' => $this->input->post("provider"),
				'place_id' => $this->input->post("place_id"),
				'date' => $this->input->post("date"),
				'stars' => $this->input->post("stars"),
				'comment' => $this->input->post("comment")
			);

			$this->notes_model->updateRowById2($table,$whatID,$id,$data);
				
			redirect($this->data["main_controller"]."/loadAdminPageWithPagination/".$table);

		}else {	
				$data['errors'] = array();	
				$this->form_validation->set_error_delimiters('<div id="errorMessage">', '</div>');
				$errors = $this->tank_auth->get_error_message();
				foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
		}

		$page = "pridat_feedback";
		$data["feedback"] = $this->notes_model->getRowById2($table,$whatID,$id);

		$data["basicInfo"] = array(
			'title' => $this->data["main_controller"]." - feedback", 
			'view' => $page.".php",
			'link' => $this->uri->segment(2),
			'page' => $page,
			'main_controller' => $this->data["main_controller"]
		);
		$data["admin"] = $page.".php";
		$this->load->view('templateAdmin',$data);
	}

	public function pridat_places(){

		$this->form_validation->set_rules("category_id", "Category ID", 'trim|required|xss_clean|numeric');
		$this->form_validation->set_rules("description", "description", 'trim|xss_clean|required');
		$this->form_validation->set_rules("name", "name", 'trim|xss_clean|required');

		if ($this->form_validation->run()) {

			$data = array (
				'category_id' => $this->input->post("category_id"),
				'description' => $this->input->post("description"),
				'name' => $this->input->post("name"),
			);

			$this->notes_model->insertDataByTable("places",$data);

			redirect($this->data["main_controller"]."/loadAdminPageWithPagination/places");

		}else {	
				$data['errors'] = array();	
				$this->form_validation->set_error_delimiters('<div id="errorMessage">', '</div>');
				$errors = $this->tank_auth->get_error_message();
				foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
		}

		$page = "pridat_places";

		$data["basicInfo"] = array(
			'title' => $this->data["main_controller"]." - pridať places", 
			'view' => $page.".php",
			'link' => $this->uri->segment(2),
			'page' => $page,
			'places' => $this->notes_model->getTable("places"),
			'main_controller' => $this->data["main_controller"]
		);

		$data["admin"] = $page.".php";
		$this->load->view('templateAdmin',$data);
	}

	public function upravit_places($table,$whatID,$id){

		$this->form_validation->set_rules("category_id", "Category ID", 'trim|required|xss_clean|numeric');
		$this->form_validation->set_rules("description", "description", 'trim|xss_clean|required');
		$this->form_validation->set_rules("name", "name", 'trim|xss_clean|required');

		if ($this->form_validation->run()) {

			$data = array (
				'category_id' => $this->input->post("category_id"),
				'description' => $this->input->post("description"),
				'name' => $this->input->post("name"),
			);

			$this->notes_model->updateRowById2($table,$whatID,$id,$data);
				
			redirect($this->data["main_controller"]."/loadAdminPageWithPagination/".$table);

		}else {	
				$data['errors'] = array();	
				$this->form_validation->set_error_delimiters('<div id="errorMessage">', '</div>');
				$errors = $this->tank_auth->get_error_message();
				foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
		}

		$page = "pridat_places";
		$data["places"] = $this->notes_model->getRowById2($table,$whatID,$id);

		$data["basicInfo"] = array(
			'title' => $this->data["main_controller"]." - places", 
			'view' => $page.".php",
			'link' => $this->uri->segment(2),
			'page' => $page,
			'main_controller' => $this->data["main_controller"]
		);
		$data["admin"] = $page.".php";
		$this->load->view('templateAdmin',$data);
	}

	public function pridat_menu(){

		$this->form_validation->set_rules("status", "Kategória", 'trim|required|xss_clean');
		$this->form_validation->set_rules("text", "Názov odkazu", 'trim|required|xss_clean');
		$this->form_validation->set_rules("position", "Pozícia menu", 'trim|required|xss_clean');

		if ($this->form_validation->run()) {

			$id = $this->notes_model->insertDataByTable("menu",array("category_id" => $this->input->post("status")));
			$category = $this->notes_model->getRowById2("kategorie","category_id",$this->input->post("status"));
			$order_id =	$this->notes_model->getLastIdOfTable2("menu","order_id");
			$order_id++;
			$data = array (
				'category_id' => $this->input->post("status"),
				'order_id' => $order_id++,
				'category_link' => "includes/".$category->type,
				'position' => $this->input->post("position"),
				'text' => $this->input->post("text"),
			);

			$this->notes_model->updateRowById2("menu","id",$id,$data);

			redirect($this->data["main_controller"]."/loadAdminPageWithPagination2/menu/order_id/asc");

		}else {	
				$data['errors'] = array();	
				$this->form_validation->set_error_delimiters('<div id="errorMessage">', '</div>');
				$errors = $this->tank_auth->get_error_message();
				foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
		}

		$page = "pridat_menu";

		$data["kategorie"] = $this->notes_model->getTable("kategorie");

		$data["basicInfo"] = array(
			'title' => $this->data["main_controller"]." - pridať menu", 
			'view' => $page.".php",
			'page' => $page,
			'link' => $this->uri->segment(3),
			'main_controller' => $this->data["main_controller"]

		);

		$data["admin"] = $page.".php";
		$this->load->view('templateAdmin',$data);
	}

	public function upravit_menu($table,$whatID,$id){

		$this->form_validation->set_rules("status", "Kategória", 'trim|required|xss_clean');
		$this->form_validation->set_rules("text", "Názov odkazu", 'trim|required|xss_clean');
		$this->form_validation->set_rules("position", "Pozícia menu", 'trim|required|xss_clean');
		
		//pre_r($this->input->post("status"));

		if ($this->form_validation->run()) {

			$category = $this->notes_model->getRowById2("kategorie","category_id",$this->input->post("status"));
			
			$data = array (
				'category_id' => $this->input->post("status"),
				'category_link' => "includes/".$category->type,
				'position' => $this->input->post("position"),
				'text' => $this->input->post("text"),
			);

			$this->notes_model->updateRowById2($table,$whatID,$id,$data);

			redirect($this->data["main_controller"]."/loadAdminPageWithPagination2/menu/order_id/asc");

		}else {	
				$data['errors'] = array();	
				$this->form_validation->set_error_delimiters('<div id="errorMessage">', '</div>');
				$errors = $this->tank_auth->get_error_message();
				foreach ($errors as $k => $v)	$data['errors'][$k] = $this->lang->line($v);
		}

		$page = "pridat_menu";
		$data["menu"] = $this->notes_model->getRowById2($table,$whatID,$id);

		$data["kategorie"] = $this->notes_model->getTable("kategorie");

		$data["basicInfo"] = array(
			'title' => $this->data["main_controller"]." - upraviť menu", 
			'view' => $page.".php",
			'page' => $page,
			'link' => $this->uri->segment(2),
			'main_controller' => $this->data["main_controller"]

		);

		$data["admin"] = $page.".php";
		$this->load->view('templateAdmin',$data);
	}

}

?>