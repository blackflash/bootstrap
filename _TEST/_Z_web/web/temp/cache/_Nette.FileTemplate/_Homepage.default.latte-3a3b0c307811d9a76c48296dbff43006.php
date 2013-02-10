<?php //netteCache[01]000404a:2:{s:4:"time";s:21:"0.92610600 1353190009";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:82:"C:\Program Files (x86)\VertrigoServ\www\_tswp\app\templates\Homepage\default.latte";i:2;i:1353189948;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\_tswp\app\templates\Homepage\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'uzzl3d38ur')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb0fdfa41a64_content')) { function _lb0fdfa41a64_content($_l, $_args) { extract($_args)
?>        <div class="blankSeparator"></div>

        <div id="serviceListContainer">
            <div class="centerContainer">
                
                <div class="oneThirdCol">
                    <img src="img/icon1.png" class="fl" />
                    <h3>Databáza projektov</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                    </p>
                </div><!--end of oneThirdCol-->

                <div class="oneThirdCol">
                    <img src="img/icon2.png" class="fl" />
                    <h3>Spracovanie údajov</h3>
                    <p>
                        Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div><!--end of oneThirdCol-->

                <div class="oneThirdCol lastCol">
                    <img src="img/icon3.png" class="fl" />
                    <h3>Export dokumentácie</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. 
                    </p>
                </div><!--end of oneThirdCol-->
            
            </div><!--end of centerContainer-->
        </div><!--end of serviceListContainer-->


        <div class="centerContainer">
            <div class="sepContainer"></div><!--end of sepContainer-->

            <div id="leftContainer" class="fl">
                <h3 class="sectionHeading">Aktuálna <span>verzia</span> </h3>
                <ul id="newsList">
                    <li>
                        <h6>14. November 2012</h6>
                        <h3><a href="#">Aktualizácia</a></h3>
                        <p>Aktualizácia projektu</p>
                        <a href="" class="readMoreLink">viac</a>
                    </li>
                </ul>
            </div><!--end of leftContainer-->

            <div id="rightContainer" class="fr">
                <h3 class="sectionHeading">O projekte</h3>

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

                <div id="clientListContainer">
                    <ul id="clientList">
                        <li>
                            <p><a href="#"><img src="img/clients/logo.png" /></a></p>
                        </li>
                        <li>
                            <p><a href="#"><img src="img/clients/clientlogo2.png" /></a></p>
                        </li>
                        <li>
                            <p><a href="#"><img src="img/clients/clientlogo1.png" /></a></p>
                        </li>
                        <li>
                            <p><a href="#"></a></p>
                        </li>
                        <li>
                            <p><a href="#"></a></p>
                        </li>
                        <li>
                            <p><a href="#"></a></p>
                        </li>
                        <li>
                            <p><a href="#"></a></p>
                        </li>
                        <li>
                            <p><a href="#"></a></p>
                        </li>
                    </ul>
                </div>
            </div><!--end of rightContainer-->

        </div><!--end of centerContainer-->

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