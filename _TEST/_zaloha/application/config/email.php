<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Email
| -------------------------------------------------------------------------
| This file lets you define parameters for sending emails.
| Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/libraries/email.html
|
*/
$config['mailtype'] = 'html';

$config['protocol'] 	=	'smtp';
$config['smtp_auth']	=	true;
$config['smtp_host']	=	'ssl://smtp.websupport.sk'; 
$config['smtp_port']	=	'465'; 
$config['smtp_timeout']	=	'30';
$config['smtp_user']	=	'info@cleverfrogs.com'; 
$config['smtp_pass'	]	=	'romp2glor'; 
$config['charset'] 		=	'utf-8';
$config['newline'] 		= 	"\r\n";

/* End of file email.php */
/* Location: ./application/config/email.php */