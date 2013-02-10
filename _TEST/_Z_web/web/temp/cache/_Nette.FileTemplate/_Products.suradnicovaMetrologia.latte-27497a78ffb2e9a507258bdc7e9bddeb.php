<?php //netteCache[01]000419a:2:{s:4:"time";s:21:"0.32492200 1351339368";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:97:"C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Products\suradnicovaMetrologia.latte";i:2;i:1351339363;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f8aa369 released on 2012-08-30";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Products\suradnicovaMetrologia.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'nkk58lnxjj')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb31afea5b0e_content')) { function _lb31afea5b0e_content($_l, $_args) { extract($_args)
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

<?php Nette\Latte\Macros\CoreMacros::includeTemplate("sidebar.latte", $template->getParameters(), $_l->templates['nkk58lnxjj'])->render() ?>

            <div id="mainContainer" class="fr">
               <img src="<?php echo htmlSpecialChars($basePath) ?>/img/suradnicova_metrologia.png" alt="produkty" />
                <p class="introTextProducts">
                    Kontrola rozmerov súčiastok z oblasti strojárstva, automobilového priemyslu, 
                    elektrotechniky a ďalších oborov je realizovateľná na špičkovom súradnicovom 
                    meracom stroji Contura G2 od firmy Carl Zeiss.
                </p>

                <div class="sepContainer"></div>
                    <p class="mainTextProducts">
                        Súradnicový merací stroj (SMS) Contura G2 je portálový SMS pre vysokorýchlostné skenovanie. 
                        Je určený pre meranie špecifických prvkov, v množstve polôh s rôznymi uhlami a pre konfigurácie malých snímačov. 
                        Otočná meracia hlava Zeiss RDS umožňuje meranie v 20736 polohách a natáča sa s krokom 2,5° 
                        a s podporou technológie Vast XXT dokáže skenovať vo všetkých polohách. Technológia počítačom podporovanej presnosti 
                        (CAA) zabezpečuje korektúru kinematických odchýlok pre dosiahnutie extrémne presných výsledkov.
                    </p>

                    <p class="mainTextProducts">
                        Súradnicový merací stroj využíva pre dotykové meranie otočnú snímaciu hlavu VAST XXT 
                        a pre bezdotykové meranie kamerový systém ViScan.
                    </p>

                    <img class="priemyselna_tomografia_banner" src="<?php echo htmlSpecialChars($basePath) ?>/img/suradnicova_metrologia_2.png" alt="produkty" />

                    <p class="mainTextProducts">
                        Univerzálna metóda kontroly geometrie súčiastok využitím súradnicového meracieho stroja 
                        ponúka meranie rôznorodých charakteristík na jedinom prístroji. Meranie dĺžok, uhlov, odchýlok tvaru, 
                        polohy, orientácie či hádzania vykonané s vysokou spoľahlivosťou. Maximálna dovolená chyba prístroja 
                        je MPEE = (1,8 + L/300) μm.
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