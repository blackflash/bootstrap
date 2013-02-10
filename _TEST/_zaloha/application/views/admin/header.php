<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
 
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		
	  <!-- META TAGY -->
	  <META name="robots" content="all,follow,index">
	  <META content="cs" http-equiv="Content-language">
	  <META name="description" content="cleverfrogs.com - Navrhovanie a vytvaranie riešení pre mobilnú zákaznicku spätnú väzbu. Zber, spracovanie a analýza zákaznickej spätnej väzby.">
	  <META name="keywords" content="spätná väzba, názor, reštaurácie, bufety, dotazník, hodnotenie">
	  <META name="copyright" content="cleverfrogs.com 2012">
	  <META name="author" content="cleverfrogs.com 2012">
	  <META name="resource-type" content="phpfile">

	  	<!-- MT -->

	  <!-- Mobile viewport optimized: h5bp.com/viewport -->
	  <meta name="viewport" content="width=device-width">

	  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
	  <LINK rel="icon" type="image/x-icon" href="./favicon.ico">
	  <LINK rel="shortcut icon" type="image/x-icon" href="<?php echo base_url(); ?>favicon.ico">

		<title><?php echo $basicInfo["title"]; ?></title>
		
		<!--                       CSS                       -->
	   
		<!-- Reset Stylesheet -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/reset.css" type="text/css" media="screen" />
	  
		<!-- Main Stylesheet -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/styleSimplaAdmin.css" type="text/css" media="screen" />
   		<script type="text/javascript" src="<?php echo base_url(); ?>js/cssrefresh.js"></script>
		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="<?php echo base_url(); ?>js/simpla.jquery.configuration.js"></script>
		
		<!-- jQuery -->
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.3.2.min.js"></script>	

		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="<?php echo base_url(); ?>js/facebox.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.wysiwyg.js"></script>
		
		<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/invalid.css" type="text/css" media="screen" />	
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/blue.css" type="text/css" media="screen" />
		
		<!-- Colour Schemes
	  
		Default colour scheme is green. Uncomment prefered stylesheet to use it.
		
		
		<link rel="stylesheet" href="resources/css/red.css" type="text/css" media="screen" />  
	 
		-->
		
		<!-- Internet Explorer Fixes Stylesheet -->
		
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="resources/css/ie.css" type="text/css" media="screen" />
		<![endif]-->
		
		<!--                       Javascripts                       -->
  
		<!-- jQuery -->
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-1.3.2.min.js"></script>
		
		<!-- jQuery Configuration -->
		<script type="text/javascript" src="<?php echo base_url(); ?>js/simpla.jquery.configuration.js"></script>
		
		<!-- Facebox jQuery Plugin -->
		<script type="text/javascript" src="<?php echo base_url(); ?>js/facebox.js"></script>
		
		<!-- jQuery WYSIWYG Plugin -->
		<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery.wysiwyg.js"></script>
		
		<link href="<?php echo base_url(); ?>css/jquery-ui-1.8.17.custom.css" rel="stylesheet"  type="text/css">

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
		<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/themes/blitzer/jquery-ui.css" type="text/css" />
		<script src="<?php echo base_url(); ?>js/jquery.easy-confirm-dialog.js"></script>

		<!-- Internet Explorer .png-fix -->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="resources/scripts/DD_belatedPNG_0.0.7a.js"></script>
			<script type="text/javascript">
				DD_belatedPNG.fix('.png_bg, img, li');
			</script>
		<![endif]-->

		<style type="text/css">
		.ui-dialog { font-size: 11px; }
		body {
			font-family: Tahoma;
			font-size: 12px;
		}
		#question {
			width: 300px!important;
			height: 60px!important;
			padding: 10px 0 0 10px;
		}
		#question img {
			float: left;
		}
		#question span {
			float: left;
			margin: 20px 0 0 10px;
		}
		</style>
		
        <script type="text/javascript">
			$(function() {
				$(".confirm").easyconfirm();
			});
		</script>

	</head>  

