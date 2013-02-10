<?php //netteCache[01]000416a:2:{s:4:"time";s:21:"0.33155700 1351339323";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:94:"C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Products\materialovaAnalyza.latte";i:2;i:1351339314;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f8aa369 released on 2012-08-30";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Products\materialovaAnalyza.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'qfdy5269jc')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb1e9596564e_content')) { function _lb1e9596564e_content($_l, $_args) { extract($_args)
?> <div id="breadCrumbsContainer">
            <div class="centerContainer">
                <p>Nachádzate sa tu:
                    <a href="<?php echo htmlSpecialChars($_control->link("HomePage:")) ?>">Domov</a>
                    &nbsp; / &nbsp;
                    <a href="<?php echo htmlSpecialChars($_control->link("Products:")) ?>">Produkty</a>
                    &nbsp; / &nbsp;
                    <strong><?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ?></strong>
                </p>
            </div><!--end of centerContainer-->
        </div><!--end of sliderContainer-->


        <div class="blankSeparator"></div>

        <div class="centerContainer">

<?php Nette\Latte\Macros\CoreMacros::includeTemplate("sidebar.latte", $template->getParameters(), $_l->templates['qfdy5269jc'])->render() ?>

            <div id="mainContainer" class="fr">
               <img src="<?php echo htmlSpecialChars($basePath) ?>/img/materialova_analyza.png" alt="produkty" />
                <p class="introTextProducts">
                    Spoločnosť CEIT-KE je zameraná na výskumno-vývojové aktivity v oblasti biomedicínskeho inžinierstva, 
                    diagnostiky a merania pre priemyselnú prax, a aktivity projektového manažmentu.  
                    Vďaka kooperácii spoločnosti CEIT-KE a TUKE, 
                    katedrou biomedicínskeho inžinierstva a merania, ponúkame nasledovné služby:
                </p>

                <div class="sepContainer"></div>

                <h2>Oblasť korózie a protikoróznej ochrany:</h2>
                <p class="mainTextProducts">
                    <ul>
                        <li>- Voltalab - meranie koróznych charakteristík podľa Tafela a Sterna
                            <ul>
                                <li> - stanovenie okamžitej rýchlosti korózie, korózneho potenciálu, polarizačného prúdu</li>
                                <li>- impedančné merania</li>
                                <li>- stanovenie koróznych charakteristík bimetalických spojov</li>
                            </ul>
                        </li>
                        <li>- Časová závislosť korózneho potenciálu v modelových elektrolytoch na zariadení Digit Multimeter</li>
                        <li>- Korózne skúšky v kondenzačnej komore.</li>
                        <li>- Posúdenie príčin koróznej degradácie materiálov</li>
                        <li>- Ochrana materiálov povlakmi, stanovenie ich koróznej odolnosti.</li>
                    </ul>
                </p>

                <h2>Oblasť mechanického skúšania materiálov:</h2>
                <p>
                    <ul>
                        <li>- trhacie a únavové skúšky</li>
                        <li>- skúška vrubovej húževnatosti</li>
                        <li>- meranie tvrdosti</li>
                    </ul>
                </p>

                <h2>Oblasť svetelnej a elektrónovej mikroskópie:</h2>
                <p>
                    <ul>
                        <li>- Svetelná miktoskopia vzoriek</li>
                        <li>
                            - Elektrónová mikroskopia vzoriek
                            <ul>
                                <li>- transmisná elektrónová mikroskopia</li>
                                <li>- rastrovacia elektrónová mikroskopia</li>
                            </ul>
                        </li>
                    </ul>
                </p>

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