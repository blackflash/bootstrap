<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes_model extends CI_Model {
	/*------------MENU---------------------*/
	function getTableByActivatedWithOrder($table,$activated,$orderColum,$order)
	{	
		$this ->db-> where('activated', $activated);
		$query = $this->db->order_by($orderColum,$order)->get_where($table);
		
		return $query->result();
	}

	/*------------HOME BASICS----------------*/

	function getLastIdOfTable($table){
	
		$this->db->select_max('id');
		$query = $this->db->get($table);
		
		$id = $query->row()->id;

		return $id;
	}

	function getLastIdOfTable2($table,$what){
	
		$this->db->select_max($what);
		$query = $this->db->get($table);
		
		$id = $query->row()->$what;

		return $id;
	}

	function getUserProfileById($ID){
		$this -> db -> where('user_id', $ID);
		$query = $this -> db -> get('user_profiles');
		
		return $query->row();
	}

	function insertDataByTable($table,$data){
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	function getTable($table)
	{
		$query = $this->db->get($table);
		
		 return $query->result();
	}

	function getTable2($table,$orderColum,$order)
	{	
		$this->db->order_by($orderColum, $order);
		$query = $this->db->get($table);
		
		 return $query->result();
	}

	function getTableWidthOffset($table,$limit=0,$offset = 0)
	{
		$query = $this->db->get($table,$limit,$offset);
		
		 return $query->result();
	}

	function getRandomRowsWidthOffset($table,$limit=0,$offset = 0)
	{	
		$this->db->order_by('id', 'RANDOM');
		$query = $this->db->get($table,$limit,$offset);
		
		 return $query->result();
	}

	function getRowById($table,$id){
		return $this->db->where("id",$id)->get($table)->row();
	}

	function getRowById2($table,$what,$id){
		$query = $this->db->where($what,$id)->get($table);
		return $query->row();
	}

	function getNameById($table,$id){
		$this->db->select("place_id");
		$query = $this->db->where("name",$id)->get($table);
		return $query->row();
	}

	function getRowById3($table,$data){
		$query = $this->db->where($data)->get($table);
		return $query->row();
	}

	function getRowById4($table,$data){
		$query = $this->db->where($data)->get($table);
		return $query->result();
	}

	function getTableByCategoryId($table,$category_id){
		$query = $this->db->where("category_id",$category_id)->get($table);
		return $query->result();
	}

	function deleteRowById($table,$id){
		$this->db->delete($table, array('id' => $id)); 
	}

	function deleteRowById2($table,$what,$id){
		$this->db->delete($table, array($what => $id)); 
	}

	function deleteColumnByName($table,$id,$column){
		$this->db->where('id', $id);
		return $this->db->update($table, array($column => ""));  
	}

	function updateRowById($table,$id,$data){
		$this->db->where('id', $id);
		return $this->db->update($table, $data); 
	}

	function updateRowById2($table,$whatID,$id,$data){
		$this->db->where($whatID, $id);
		return $this->db->update($table, $data); 
	}

	function activateByTable($id,$table,$act){
		$this->db->where('id', $id);
		return $this->db->update($table, array('activated' => $act)); 
	}

	function activateByTable2($table,$whatID,$id,$act){
		$this->db->where($whatID, $id);
		return $this->db->update($table, array('activated' => $act)); 
	}

	function getCountOfRowsbyTable($table){
		return $this->db->count_all_results($table);
	}

	function getFilteredDatas($table,$function_name,$offset = 0,$category = 0){
		//$this->db->select('*');
		//$this->db->like('name', $function_name); 
		//$query = $this->db->get($table,$offset,$category);

		$query = $this->db->query("select * from ".$table." where name like '".$function_name."%'");
		return $query->result();
	}

	function getSearchedDatas($function_name){
		$this->db->select('*');
		$this->db->like('name', $function_name); 
		$query1 = $this->db->get("skupiny")->result();

		$this->db->select('*');
		$this->db->like('name', $function_name); 
		$query2 = $this->db->get("mp3")->result();

		$query = array_merge($query1, $query2);

		return $query;
	}

	function getCountOfFilteredDatas($table,$function_name){
		$this->db->select('*');
		$this->db->like('name', $function_name); 
		$query = $this->db->get($table);


		return $query->num_rows();
	}


	/*----------BDA skupiny---------*/
	function getNotesPagination($id,$limit=0,$offset = 0,$category = 0)
	{
		$query = $this->db->order_by("created","asc")->get_where('notes',array("category_id" => $category),$limit,$offset);
		
		/* echo "<pre>";
		print_r($query);
		echo "</pre>";
		die(); */
		 return $query->result();
	}
	
	function getUser()
	{
		$query = $this->db->get('user');
		
		 return $query->result();
	}

	function getUsersAndProfiles($user_type){
		
		return 	$this->db->query('SELECT user_id, activated, username, user_type,email FROM users, user_profiles where users.id = user_profiles.user_id 
				AND user_profiles.user_type like "'.$user_type.'"')->result();
	}

	function getUsersAndProfiles2($user_type){
		
		return 	$this->db->query('SELECT user_id, name, activated, username, user_type,email FROM users, user_profiles, places 
				where users.id = user_profiles.user_id AND user_profiles.place_id = places.place_id  AND user_profiles.user_type like "'.$user_type.'"
				 ')->result();
	}

	function getUsersAndProfiles3($user_type){
		
		return 	$this->db->query('SELECT user_id, activated, username, user_type,email FROM users, user_profiles where users.id = user_profiles.user_id 
				AND user_profiles.place_id = 0 AND user_profiles.user_type like "'.$user_type.'"')->result();
	}

	function getDataByTableColumnWhat($table,$column,$what)
	{	
		$this->db->where($column,$what);
		$query = $this->db->get($table);
		
		 return $query->result();
	}
	
	function setLog($setLogin) {
		
		
		/*echo "<pre>";
		echo $setLogin;
		echo "</pre>";
		die();*/
		
		$data = array(
			'logged' => $setLogin
		);
		
		$this->db->where('id', 1);
		$this->db->update('user', $data); 
		
		return;
	}
	
	function selectCategory($category = 0)
	{
		$query = $this->db->order_by("created","asc")->get_where('notes',array("category_id" => $category));
		
		/* echo "<pre>";
		print_r($query);
		echo "</pre>";
		die(); */
		return $query->result();
	}
	
	// zrata pocet zaznamov v danej tabulke
	/*function getCountOfRows($table){
		if($table == "audio") {
			$query = $this->db->count_all_results($table);
			return $query;
		}
	}*/
	
	function addNote($data){
		
		$this->db->insert("notes",$data);
		redirect("notes");
	}
	
	function uploadImage($linkToImage,$filename,$folder) {
		
		$data = array(
			'id' => 0,
			$filename => $linkToImage
		);
		
		$this->db->where('id', 0);
		$this->db->update('notes', $data); 
	}

	function uploadImageByTable($table,$data) {
		if(count($data) > 1){
			$this->db->where('id', $data["id"]);
			$this->db->update($table, $data); 
		}
	}
	
	function geTableRow($table){
		return $this->db->get($table)->row();
	}

	function getsk(){
		return $this->db->get("spolocnekoncertovanie")->result();
	}

	function updateMenuOdkazy($odkaz){
		$this->db->where('id', 1);
		$this->db->update('menu_odkazy', $odkaz); 
	}
	
	function getSkupinaById($id){
		return $this->db->where("id",$id)->get("spolocne_koncertovanie")->row();
	}
	
	function getAudioById($id){
		return $this->db->where("id",$id)->get("audio")->row();
	}
	
	function deleteSkupina($id){
		$this->db->delete('spolocne_koncertovanie', array('id' => $id)); 
		redirect("notes/spolocneKoncertovanie");
	}
	
	function deleteAudio($id){
		$this->db->delete('audio', array('id' => $id)); 
		redirect("notes/audio");
	}
	
	function getBasicInfo(){
		return $this->db->get("notes")->row();
	}
	
	function getAudio(){
		return $this->db->get("audio")->result();
	}
	
	function getCd(){
		return $this->db->get("cd")->result();
	}
	
	function getTricka(){
		return $this->db->get("tricka_nasivky")->result();
	}
	
	function getKupaCd(){
		return $this->db->get("kupa_cd")->result();
	}
	
	function updateBasicInfo($data){
	
		$this->db->where('id', 1);
		$this->db->update('notes', $data); 
	
	}
	
	function deleteOldImageCD($oldFile){
	
		$data = array(
			'cd' => $oldFile
		);
		
		$this->db->where('plagat', $data["plagat"]);
		$this->db->update('notes', $data); 
		
		//redirect("notes");
	}
	
	function getImageCD(){
	
	$query = $this->db->get_where('notes',array("cd" => $cd));
	
	$row = $query->row_array();

	/* echo $row["cd"];
	
	die();
	return $row["cd"]; */
	
	}
	
	function uploadImageCover($linkToImage) {
		
		$data = array(
			'id' => "1",
			'cover' => $linkToImage
		);
		/*
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		die();*/
		
		$this->db->where('id', $data["id"]);
		$this->db->update('notes', $data); 
		
		redirect("notes");
	}
	
	function uploadImageCover2($data) {

			$this->db->insert('spolocne_koncertovanie', $data); 
		
		redirect("notes/spolocneKoncertovanie");
	}
	
	function uploadAudio($data) {

			$this->db->insert('audio', $data); 
		
		redirect("notes/audio");
	}
	
	/*---------kupaCd----------*/
	
	function getMaxIdKupaCd(){
	
		$this->db->select_max('id', 'id');
		return $this->db->get('kupa_cd')->row();
	
	}
	
	function uploadKupaCd($data) {

			$this->db->insert('kupa_cd', $data); 
		
		redirect("notes/kupaCd");
	}
	
	function getKupaCdById($id){
	
		return $this->db->where("id",$id)->get("kupa_cd")->row();
	
	}
	
	function deleteKupaCdById($id){
		
		$this->db->delete('kupa_cd', array('id' => $id)); 

	}
	
	/*---------tricko----------*/
	
	function getMaxIdTricko(){
	
		$this->db->select_max('id', 'id');
		return $this->db->get('tricka_nasivky')->row();
	
	}
	
	function uploadTricka($data) {

			$this->db->insert('tricka_nasivky', $data); 
		
		redirect("notes/trickaAdmin");
	}
	
	function getTrickoById($id){
	
		return $this->db->where("id",$id)->get("tricka_nasivky")->row();
	
	}
	
	function deleteTrickaById($id){
		
		$this->db->delete('tricka_nasivky', array('id' => $id)); 

	}
	
	/*--------------cd--------*/
	
	function uploadCd($data) {

			$this->db->insert('cd', $data); 
		
		redirect("notes/cd");
	}
	
	function getMaxIdCd(){
	
		$this->db->select_max('id', 'id');
		return $this->db->get('cd')->row();
	
	}
	
	function getAlbumById($id){
	
		return $this->db->where("id",$id)->get("cd")->row();
	
	}
	
	function deleteAlbumById($id){
		
		$this->db->delete('cd', array('id' => $id)); 

	}
	
	//------------------------------------------------------------------------- PLAGAT
	
	function uploadImagePlagat($linkToImage) {
		
		$data = array(
			'id' => "1",
			'plagat' => $linkToImage
		);
		/*
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		die();*/
		
		$this->db->where('id', $data["id"]);
		$this->db->update('notes', $data); 
		
		redirect("notes");
	}
	
	function deleteOldImagePlagat($oldFile){
	
		$data = array(
			'plagat' => $oldFile
		);
	
		$this->db->where('plagat', $data["plagat"]);
		$this->db->update('notes', $data); 
		
		//redirect("notes");
	}
	
	function getImagePlagat(){
	
	$query = $this->db->get_where('notes',array("plagat" => $plagat));
	
	$row = $query->row_array();

	/* echo $row["cd"];
	
	die();
	return $row["cd"]; */
	
	}
	
	//-------------------------------------------------------------------------- END OF PLAGAT
	
	function updateVideo($data){
	
		$data = array(
			   'id' => "1",
               'video' => $data["video"]
            );
		$this->db->where('id', $data["id"]);
		$this->db->update('vozidla', $data); 

	}
	
	function updateNote($data){
	
		$data = array(
				"id" => $data["id"],
               'category_id' => $data["category_id"],
               'image' => $data["image"],
               'text' => $data["text"]
            );
			
		/*echo "<pre>";
		print_r($data);
		echo "</pre>";*/

		$this->db->where('id', $data["id"]);
		$this->db->update('notes', $data); 

		redirect("notes");
	}
	
	function getText($id){
	
	$query = $this->db->get_where('notes',array("id" => $id));
	
	$row = $query->row_array();

	//echo $row["text"];
	
	return $row["text"];
	
	}
	
	function deleteNote($data){
		
		$this->db->delete('notes', array('id' => $data)); 
		redirect("notes");
	}
	

	
}