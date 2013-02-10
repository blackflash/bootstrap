<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

include("admin/header.php"); 
include("admin/sidebar.php"); 
$link = "admin/".$admin;
include($link); 
include("admin/footer.php"); 

?>