<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile_model extends CI_Model {

  public function addKey($userid, $key) {
      $this->db->insert('mobile_auth', array('key'=> $key, 'user_id'=> $userid));
  }
  
  public function isKeyValid($key) {
    $query = $this->db->query('SELECT * FROM mobile_auth WHERE mobile_auth.key = ?', $key);
    if($query->num_rows()>0) return true;
    
    return false;
  }
  
  public function getUserIdByKey($key) {
    $query = $this->db->query('SELECT * FROM mobile_auth WHERE mobile_auth.key = ?', $key);
    if($query->num_rows()>0) {
      $row = $query->row(); 
      return $row->user_id;
    }
    
    return null;
  }
  
  public function deleteUserKeysByKey($key) {
    $query = $this->db->query('SELECT DISTINCT user_id FROM mobile_auth WHERE mobile_auth.key = ?', $key);
    if ($query->num_rows()>0) {
      $user = $query->result_array();
      $user = $user[0]['user_id'];
      $this->deleteUserKeys($user);
    }
  }
  
  public function deleteUserKeys($user) {
    $query = $this->db->query('DELETE FROM mobile_auth WHERE user_id = ?', $user);
  }
  
  /*public function clear() {
    $this->db->query('DELETE FROM mobile_auth WHERE expire < NOW()'); 
  }*/
}