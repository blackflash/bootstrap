<?php //netteCache[01]000418a:2:{s:4:"time";s:21:"0.66584400 1365427752";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:96:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Questionnaire2\slideshow_2.latte";i:2;i:1364750690;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Questionnaire2\slideshow_2.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'uvq7d51wzx')
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
<link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/component_questionnaire2/slideshow/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/component_questionnaire2/slideshow/slideshow_2.css" />
<div class="slideshow">
    <ul class="cb-slideshow">
        <li><span>Image 01</span><div></div></li>
        <li><span>Image 02</span><div></div></li>
        <li><span>Image 03</span><div></div></li>
        <li><span>Image 04</span><div></div></li>
        <li><span>Image 05</span><div></div></li>
        <li><span>Image 06</span><div></div></li>
    </ul>
    <div class="containerSlide">
        <!-- Codrops top bar -->
        <header>
            <a class="start_button" href="<?php echo htmlSpecialChars($_control->link("Questionnaire2:default", array('questionnaire_id'=>2, 'page'=>"questionnaire_2"))) ?>
"><img src="<?php echo htmlSpecialChars($basePath) ?>/img/component_questionnaire2/start.png" /></a>
            <h1>Hotel Grand****</h1>
            <h2>Jasná, Nízke Tatry</h2>
            <div class="loader" style="display:none;">
                <h1>Loading...</h1>
            </div>
        </header>
    </div>
</div>
<script type="text/javascript">
    
    $('.start_button').click(function(){
        $(this).css("display","none");   
        $(".loader").css("display","block");
    });
</script>