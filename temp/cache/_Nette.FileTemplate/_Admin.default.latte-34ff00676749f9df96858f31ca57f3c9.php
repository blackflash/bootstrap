<?php //netteCache[01]000405a:2:{s:4:"time";s:21:"0.77788100 1362219548";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:83:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\default.latte";i:2;i:1362219547;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'omp3vwvx2s')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Viewport metatags -->
<meta name="HandheldFriendly" content="true" />
<meta name="MobileOptimized" content="320" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<!-- iOS webapp metatags -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />

<!-- iOS webapp icons -->
<link rel="apple-touch-icon" href="touch-icon-iphone.html" />
<link rel="apple-touch-icon" sizes="72x72" href="touch-icon-ipad.html" />
<link rel="apple-touch-icon" sizes="114x114" href="touch-icon-retina.html" />

<!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
<LINK rel="icon" type="image/x-icon" href="./favicon.ico" />
<LINK rel="shortcut icon" type="image/x-icon" href="<?php echo htmlSpecialChars($basePath) ?>/favicon.ico" />

<!-- CSS Reset -->
<link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/reset_admin.css" media="screen" />
<!--  Fluid Grid System -->
<link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/fluid.css" media="screen" />
<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/dandelion.theme.css" media="screen" />
<!--  Main Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/dandelion.css" media="screen" />
<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/demo.css" media="screen" />

<link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/admin.css" media="screen" />
<!--end of <script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtmlComment($basePath) ?>/js/cssrefresh.js"></script>-->

<!-- jQuery JavaScript File -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery-1.7.2.min.js"></script>

<!-- jQuery-UI JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/jui/js/jquery-ui-1.8.20.min.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/jui/js/jquery.ui.timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/jui/js/jquery.ui.touch-punch.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/jui/css/jquery.ui.all.css" media="screen" />

<!-- Plugin Files -->

<!-- FileInput Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.fileinput.js"></script>
<!-- Placeholder Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.placeholder.js"></script>
<!-- Mousewheel Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.mousewheel.min.js"></script>
<!-- Scrollbar Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.tinyscrollbar.min.js"></script>
<!-- Tooltips Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/tipsy/jquery.tipsy-min.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/tipsy/tipsy.css" />

<!-- Validation Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/validate/jquery.validate.js"></script>

<!-- Statistic Plugin JavaScript Files (requires metadata and excanvas for IE) -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.metadata.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtmlComment($basePath) ?>/js/excanvas.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/core/plugins/dandelion.circularstat.min.js"></script>

<!-- Wizard Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/core/plugins/dandelion.wizard.min.js"></script>

<!-- Fullcalendar Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/fullcalendar/fullcalendar.min.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/fullcalendar/gcal.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/fullcalendar/fullcalendar.css" media="screen" />
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/fullcalendar/fullcalendar.print.css" media="print" />

<!-- Load Google Chart Plugin -->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
	// Load the Visualization API and the piechart package.
	google.load('visualization', '1.0', {'packages':['corechart']});

</script>
<!-- Debounced resize script for preventing to many window.resize events
      Recommended for Google Charts to perform optimally when resizing -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.debouncedresize.js"></script>

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.dashboard.js"></script>

<!-- Core JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/core/dandelion.core.js"></script>

<!-- Customizer JavaScript File (remove if not needed) -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/core/dandelion.customizer.js"></script>

<title><?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ?></title>

</head>

<body>

<?php Nette\Latte\Macros\CoreMacros::includeTemplate("options.latte", $template->getParameters(), $_l->templates['omp3vwvx2s'])->render() ?>

	<!-- Main Wrapper. Set this to 'fixed' for fixed layout and 'fluid' for fluid layout' -->
	<div id="da-wrapper" class="fluid">
    
<?php Nette\Latte\Macros\CoreMacros::includeTemplate("header.latte", $template->getParameters(), $_l->templates['omp3vwvx2s'])->render() ?>
        
        <!-- Content -->
        <div id="da-content">
            
            <!-- Container -->
            <div class="da-container clearfix">
                
	            <!-- Sidebar Separator do not remove -->
                <div id="da-sidebar-separator"></div>
                
<?php Nette\Latte\Macros\CoreMacros::includeTemplate("sidebar.latte", $template->getParameters(), $_l->templates['omp3vwvx2s'])->render() ?>
                
                <!-- Main Content Wrapper -->
                <div id="da-content-wrap" class="clearfix">
                
<?php Nette\Latte\Macros\CoreMacros::includeTemplate($includeBoard, $template->getParameters(), $_l->templates['omp3vwvx2s'])->render() ?>
            
        </div>
        
        <!-- Footer -->
        <div id="da-footer">
        	<div class="da-container clearfix">
            	<p>Copyright 2013.
            </div>
        </div>
        
    </div>
    
</body>

</html>
