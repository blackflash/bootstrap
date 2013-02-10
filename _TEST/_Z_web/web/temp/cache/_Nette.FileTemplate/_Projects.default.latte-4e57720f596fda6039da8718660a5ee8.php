<?php //netteCache[01]000405a:2:{s:4:"time";s:21:"0.11683100 1351359336";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:83:"C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Projects\default.latte";i:2;i:1351346344;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Projects\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '5cu5dk3vf7')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb6caeb81ebb_content')) { function _lb6caeb81ebb_content($_l, $_args) { extract($_args)
?> <div id="breadCrumbsContainer">
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
            <p class="introTextProducts">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

            <div class="sepContainer"></div>

                
                <div id="RDleftContainer">
                    <h1>Výskum a vývoj</h1>
                    <h2><a href="http://www.ceitke-stimuly.sk" target="_blank">STIMULY</a></h2>
                    <a href="http://www.ceitke-stimuly.sk" target="_blank">
                        <img class="RDbanner" src="<?php echo htmlSpecialChars($basePath) ?>/img/banner_projekty.png" alt="Veda a výskum 1" />
                    </a>
                </div>

                <div id="RDrightContainer">
                    <ul class="RDInfo">
                        <li>
                            <h6>Ministerstvo školstva Slovenskej republiky</h6>
                        </li>
                        <li>
                            <h6><b>CEIT-KE</h6>
                        </li>
                    </ul>
                    
                    <div class="clearfix"></div>

                    <p class="RDtext mainTextProjects">
                        Predkladaný projekt s názvom "Výskum nových diagnostických metód v invazívnej implantológií" rieši návrh, 
                        diagnostiku a výrobu implantátov pre oblasť hlavy a maxillo-faciálnu oblasť. 
                        <br /><br />
                        Ide o základný výskum 
                        v oblasti implantačných materiálov, sofistikované počítačové riešenie a analýza rozmerových 
                        a mechanických vlastností a návrh novej metodiky výroby implantátov v podmienkach klinických aplikácií a legislatívy EU. 
                    </p>    
                </div>

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