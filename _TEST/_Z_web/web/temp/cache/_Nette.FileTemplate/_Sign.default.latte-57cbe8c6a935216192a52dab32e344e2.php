<?php //netteCache[01]000404a:2:{s:4:"time";s:21:"0.85321000 1359241496";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:82:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Sign\default.latte";i:2;i:1359241495;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Sign\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'uycycgday0')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb62cbcd05d3_content')) { function _lb62cbcd05d3_content($_l, $_args) { extract($_args)
?><div id="breadCrumbsContainer">
    <div class="centerContainer">
        <p>Nachádzate sa tu:
            <a href="<?php echo htmlSpecialChars($_control->link("HomePage:")) ?>">Domov</a>
            &nbsp; / &nbsp;
            <strong><?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ?></strong>
        </p>
    </div><!--end of centerContainer-->
</div><!--end of sliderContainer-->


<div class="blankSeparator"></div>

<div class="centerContainer">
    <h1><?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ?></h1>
    
<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = (is_object("signInForm") ? "signInForm" : $_control["signInForm"]), array()) ?>
	<div class="sign-in-form">
<?php $iterations = 0; foreach ($form->errors as $error): ?>	     <div class="alert alert-error loginError">
<?php if ($error): ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Warning!</strong> 
<?php if ($form->hasErrors()): ?>            <ul class="errors">
                    <li><?php echo Nette\Templating\Helpers::escapeHtml($error, ENT_NOQUOTES) ?></li>
            </ul>
<?php endif ;endif ?>
        </div>
<?php $iterations++; endforeach ?>

	    <div class="pair">
<?php if ($_label = $_form["username"]->getLabel()) echo $_label->addAttributes(array()) ?>
	        <div class="input"><?php echo $_form["username"]->getControl()->addAttributes(array()) ?></div>
	    </div>
	    <div class="pair">
<?php if ($_label = $_form["password"]->getLabel()) echo $_label->addAttributes(array()) ?>
	        <div class="input"><?php echo $_form["password"]->getControl()->addAttributes(array()) ?></div>
	    </div>
	    <div class="pair">
	        <div class="input"><?php echo $_form["persistent"]->getControl()->addAttributes(array()) ?>
 <?php if ($_label = $_form["persistent"]->getLabel()) echo $_label->addAttributes(array()) ?></div>
	    </div>

	    <div class="pair">
	        <div class="input"><?php echo $_form["login"]->getControl()->addAttributes(array()) ?></div>
	    </div>
	</div>
<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ?>

</div><!--end of centerContainer-->

<div class="fillContainerM"></div>

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
?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 