<?php //netteCache[01]000419a:2:{s:4:"time";s:21:"0.94919600 1352061896";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:97:"C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Products\priemyselnaTomografia.latte";i:2;i:1351339343;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Products\priemyselnaTomografia.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'rv60lh437g')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb9580c02bbf_content')) { function _lb9580c02bbf_content($_l, $_args) { extract($_args)
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

<?php Nette\Latte\Macros\CoreMacros::includeTemplate("sidebar.latte", $template->getParameters(), $_l->templates['rv60lh437g'])->render() ?>

            <div id="mainContainer" class="fr">
               <img src="<?php echo htmlSpecialChars($basePath) ?>/img/priemyselna_tomografia.png" alt="produkty" />
                <p class="introTextProducts">
                    Pojem metrotomografia zaviedla firma Carl Zeiss pri uvedení svojho prístroja Metrotom 1500. 
                    Samotné slovo je akronymom dvoch slov - metrology (metrológia) a tomography (tomografia). 
                    Je to pojem popisujúci novú technológiu v oblasti merania. 
                    Počítačová tomografia bola doposiaľ rozšírená len v oblasti medicínskej. 
                    Zvyšovanie presnosti a zlepšovanie technologických možností spolu s požiadavkami priemyslu 
                    na kontrolu komplikovaných dielov vyústilo v produkciu počítačových tomografov pre priemyselné využitie. 
                    Priemyselné tomografy, medzi ktoré patrí aj Metrotom 1500, dokážu nedeštrukčným spôsobom získať informáciu 
                    o celom objeme snímaného objektu s vysokým rozlíšením a presnosťou. [<a href="http://www.cttc.sk" target="_blank">www.cttc.sk</a>]
                </p>

                <div class="sepContainer"></div>

                <h1>Výhody metrotomografie</h1>

                <p class="mainTextProducts">
                    Rentgénovým prežarovaním súčasti počas jej rotácie a priebežným ukladaním a spracovaním rentgenogramov dokáže 
                    vyhodnocovací systém Metrotomu vygenerovať priestorové mračno bodov reprezentujúce reálny objekt. 
                    Pritom nezáleží na tvarovej komplexnosti súčiastky. Súčiastky nemerateľné bežnými metódami 
                    (optickými, laserovými, dotykovými) sa využitím počítačovej tomografie stávajú merateľné. 
                    Pre rentgenové žiarenie sú viditeľné aj oblasti, ktoré sú pre ľudské oko a konvenčné meracie metódy neviditeľné. 
                    Výhodou priemyselnej počítačovej tomografie je rýchlosť, bezpečnosť a nedeštruktívnosť.
                </p>

                <img class="priemyselna_tomografia_banner" src="<?php echo htmlSpecialChars($basePath) ?>/img/priemyselna_tomografia_2.png" alt="produkty" />

                <h2>Medzi hlavné oblasti využitia metrotomografie patria:</h2>
                <br />
                <ul>
                    <li>- testovanie:</li>
                    <li>- kvalita spojov v zostavách</li>
                    <li>- analýza pórovitosti</li>
                    <li>- analýza porúch a defektov</li>
                    <li>- inšpekcia materiálu</li>
                    <li>- meranie rozmerov vonkajších i vnútorných prvkov</li>
                    <li>- spätné inžinierstvo (získanie CAD modelu z reálnej súčiastky)</li>
                    <li>- porovnávanie celkovej geometrie menovitej s reálnou (zosnímanou)</li>
                </ul>

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