<?php //netteCache[01]000408a:2:{s:4:"time";s:21:"0.32077700 1359241368";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:86:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Homepage\default.latte";i:2;i:1359241367;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Homepage\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'j6r2w30nq0')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb749b19be21_content')) { function _lb749b19be21_content($_l, $_args) { extract($_args)
?>        <div class="blankSeparator"></div>

        <div class="centerContainer">

            <div id="leftContainer" class="fl">
                <h5 class="sectionHeading">Actual <span class="label label-info" style="padding:5px;">news</span> </h5>
                <ul id="newsList">
                    <li>
                        <h6>20. Januar 2013</h6>
                        <h5><a href="http://wayra.org/" target="_blank"> We are part of Wayra project</a></h5>
                        <small> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>   <br />
                        <a href="http://wayra.org/" target="_blank" class="readMoreLink">More</a>
                    </li>
                    <li>
                        <h6>18. October 2012</h6>
                        <h5><a href="http://www.venture-lab.org/" target="_blank"> We are part of Stanford project</a></h5>
                        <small> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small> <br />
                        <a href="http://www.venture-lab.org/" target="_blank" class="readMoreLink">More</a>
                    </li>
            </div><!--end of leftContainer-->

            <div id="rightContainer" class="fr">
                
                <div id="productVideo">
                    <iframe src="http://player.vimeo.com/video/57792959?title=0&amp;byline=0&amp;portrait=0" width="458" height="350" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>

                <img src="<?php echo htmlSpecialChars($basePath) ?>/img/tablet.png" alt="CleverFrogs" />

                <div class="fillContainerXXS"></div>
                <h5 class="sectionHeading">About Project</h5>

                <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

                <blockquote> 
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                        sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. 
                        Ut enim ad minim veniam.
                    </p> 
                </blockquote>
                <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, 
                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>



            </div><!--end of rightContainer-->

        </div><!--end of centerContainer-->

        <div class="fillContainerS"></div>

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