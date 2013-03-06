<?php //netteCache[01]000412a:2:{s:4:"time";s:21:"0.77873300 1362533113";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:90:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\PhotoGallery\default.latte";i:2;i:1362533113;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\PhotoGallery\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '55qs0jhupc')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbd9d207c94b_content')) { function _lbd9d207c94b_content($_l, $_args) { extract($_args)
?><link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/photoGallery.css" media="screen" />
<!--end of <script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtmlComment($basePath) ?>/js/cssrefresh.js"></script>-->

 <div id="breadCrumbsContainer">
            <div class="container">
                <p>You are here:
                    <a href="http://cleverfrogs.com">Home</a>
                    &nbsp; / &nbsp;
                    <strong><?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ?></strong>
                </p>
            </div><!--end of centerContainer-->
        </div><!--end of sliderContainer-->

        <div class="blankSeparator"></div>

        <div class="row-fluid">
            <div class="container">

<?php Nette\Latte\Macros\CoreMacros::includeTemplate($includeBoard, $template->getParameters(), $_l->templates['55qs0jhupc'])->render() ?>

            </div>        
        </div><!--end of row-fluid-->     
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 