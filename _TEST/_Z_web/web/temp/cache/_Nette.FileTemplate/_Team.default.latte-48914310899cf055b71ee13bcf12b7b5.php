<?php //netteCache[01]000400a:2:{s:4:"time";s:21:"0.56584600 1354226623";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:78:"C:\Program Files (x86)\VertrigoServ\www\_tswp\app\templates\Team\default.latte";i:2;i:1354226613;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\_tswp\app\templates\Team\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'cwhwczehqs')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb3d1b2db3e7_content')) { function _lb3d1b2db3e7_content($_l, $_args) { extract($_args)
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
                Náš šesť členný tím, ktorý sa pozostáva z prográmatorov, projektového manažéra a runnera, pracoval spoločne na školskom projekte. Každý z tímu mal jedinečnú úlohu, ktorú sa snažil splniť čo najlepšie.  
            </p>

            <div class="sepContainer"></div>

                    <p class="RDtext mainTextProjects">
                    <h2>Členovia:</h2>
                        <p class="introTextProducts" style="line-height: 25px;">
                            <b>Andrej Gašpar</b> - programátor  <br />
                            <b>info:</b> Navrhol a zaviedol základný systém s frameworkom Nette 
                        </p> 
                        <div class="simpleLine"></div>
                        <p class="introTextProducts" style="line-height: 25px;">Peter Jurčišin: projektový manažér  <br />
                            <b>info:</b>  Organizoval čas, ľudí a zdrojov; plánoval a kontroloval úlohy; riadil projektový tím.
                        </p> 
                        <div class="simpleLine"></div>
                        <p class="introTextProducts" style="line-height: 25px;">Martina Benčková:   dokumentácia a koordinátor projektu <br />
                            <b>info:</b> Pripravila projektovú dokumentáciu, príručky a prezentácie.
                        </p> 
                        <div class="simpleLine"></div>
                        <p class="introTextProducts" style="line-height: 25px;">Lenka Szelesová:   runner  <br />
                            <b>info:</b> Koordinovala tímovú prácu, dobrú súčinnosť a náladu v tíme.
                        </p>    
                        <div class="simpleLine"></div>
                        <p class="introTextProducts" style="line-height: 25px;">Peter Štancel:  programátor, designér   <br />
                            <b>info:</b> Pomáhal pri návrhu a implementácií programu.
                        </p>    
                        <div class="simpleLine"></div>
                        <p class="introTextProducts" style="line-height: 25px;">Lukáš Málik:    programátor <br />
                            <b>info:</b> Realizoval parciálne úlohy vyplývajúce z návrhu systému.
                        </p> 
                        
                    </p>    
                </div>

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