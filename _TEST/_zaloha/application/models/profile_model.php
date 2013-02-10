<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model {

  public function getCountOfCurrentMonthFeedbacks($user_id) {
     $query = $this->db->query('SELECT * from feedback where `added` between "'.date("Y-m-")."01".'"  AND CURDATE() AND user_id = '.$user_id.' AND activated like 1');
      if($query->num_rows()>0) {
        $row = $query->result(); 
        return count($row);
      }
      
      return null;
  }

  public function getCountOfAllFeedbacks($user_id) {
     $query = $this->db->query('SELECT * from feedback where user_id = '.$user_id.' AND activated like 1');
      if($query->num_rows()>0) {
        $row = $query->result(); 
        return count($row);
      }
      
      return null;
  }

  public function getAllFeedbacks($user_id) {
     $query = $this->db->query('SELECT * from feedback where user_id = '.$user_id.' AND activated like 1');
      if($query->num_rows()>0) {
        return $query->result(); 
      }
      
      return null;
  }
  
}