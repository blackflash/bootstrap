<?php //netteCache[01]000399a:2:{s:4:"time";s:21:"0.13006400 1364465681";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:77:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\components\Slider.latte";i:2;i:1363000483;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\components\Slider.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'st0s2pf3ql')
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
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/component_slider/component_slider.css" media="screen" />

<div id="sliderContainer">
    <div class="container" style="width: 960px;">

        <div id="sliderBtnPrev">
            <img src="<?php echo htmlSpecialChars($basePath) ?>/img/component_slider/btnPrev.png" alt="Previous" />
        </div>

        <div id="mainSlider">
            <ul> 
<?php $iterations = 0; foreach ($slider as $slide): ?>
                    <li>
                        <div class="imageContainer">
                            <img src="<?php echo htmlSpecialChars($basePath) ?>/uploads/slider/<?php echo htmlSpecialChars($slide->image) ?>"  class="slideImg fl img-rounded" />
                        </div>
                        <h2><a href="<?php echo htmlSpecialChars($slide->link) ?>
" target="_blank" class="sectionHeading"><?php echo Nette\Templating\Helpers::escapeHtml($slide->title, ENT_NOQUOTES) ?></a></h2>
                        <p class="slideParagraph">
                            <small>
                                <?php echo Nette\Templating\Helpers::escapeHtml($slide->text, ENT_NOQUOTES) ?>

                            </small>
                        </p>
                        <div class="slideParagraph2">
                            <small>
                                <?php echo Nette\Templating\Helpers::escapeHtml($slide->paragraph, ENT_NOQUOTES) ?>

                            </small>              
                        </div>
                    </li>
<?php $iterations++; endforeach ?>
            </ul>
        </div>

        <div id="sliderBtnNext">
            <img src="<?php echo htmlSpecialChars($basePath) ?>/img/component_slider/btnNext.png" alt="Next" />
        </div>

    </div><!--end of centerContainer-->
</div><!--end of sliderContainer-->