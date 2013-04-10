<?php //netteCache[01]000414a:2:{s:4:"time";s:21:"0.64618700 1365427752";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:92:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Questionnaire2\default.latte";i:2;i:1364750585;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Questionnaire2\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 's853v1e78l')
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
<!DOCTYPE html>
<html lang="en" ng-app>
	<head>
	<!-- META -->
	<meta charset = "utf-8" />
	<meta name = "viewport" content = "width=device-width, minimum-scale=1, maximum-scale=1" />
	<meta name = "apple-mobile-web-app-capable" content = "yes" /> 
	<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
        <title>CleverFrogs - <?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <link rel="shortcut icon" href="<?php echo htmlSpecialChars($basePath) ?>/favicon.ico" /> 
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/component_questionnaire2/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/component_questionnaire2/slider.css" />
        <!-- jQuery library -->
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/component_questionnaire2/jquery-ui.css" />
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/jquery-1.9.1.min.js"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/jquery-ui.min.js"></script>
        <script src = "<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/jquery.blockUI.js"></script>
        <script src = "<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/vendor/bootstrap.js"></script>
        <!-- iosSlider plugin -->
        <script src = "<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/jquery.iosslider.min.js"></script>
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/animate.css" />
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/jquery-lang.js" charset="utf-8" type="text/javascript"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/www/langpacks/1/en.js" charset="utf-8" type="text/javascript"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.5/angular.min.js"></script>
        <script src = "<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/initialization.js" type="text/javascript"></script>
	</head>
	<body>
<?php Nette\Latte\Macros\CoreMacros::includeTemplate($page, $template->getParameters(), $_l->templates['s853v1e78l'])->render() ?>
	</body>
</html>