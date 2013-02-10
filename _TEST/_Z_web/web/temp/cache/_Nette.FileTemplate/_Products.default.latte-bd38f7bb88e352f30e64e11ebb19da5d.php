<?php //netteCache[01]000405a:2:{s:4:"time";s:21:"0.41105400 1351359334";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:83:"C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Products\default.latte";i:2;i:1351339305;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Products\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'vazrs3tuka')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb2b3be40441_content')) { function _lb2b3be40441_content($_l, $_args) { extract($_args)
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

<?php Nette\Latte\Macros\CoreMacros::includeTemplate("sidebar.latte", $template->getParameters(), $_l->templates['vazrs3tuka'])->render() ?>

            <div id="mainContainer" class="fr">
               <img src="<?php echo htmlSpecialChars($basePath) ?>/img/servicesPageImg.png" alt="produkty" />
                <p class="introTextProducts">
                    Spoločnosť CEIT-KE je zameraná na výskumno-vývojové aktivity v oblasti biomedicínskeho inžinierstva, 
                    diagnostiky a merania pre priemyselnú prax, a aktivity projektového manažmentu.  
                    Vďaka kooperácii spoločnosti CEIT-KE a TUKE, 
                    katedrou biomedicínskeho inžinierstva a merania, ponúkame nasledovné služby:
                </p>

                <div class="sepContainer"></div>

                <ul id="serviceList">
                    <li>
                        <img src="<?php echo htmlSpecialChars($basePath) ?>/img/icon1.png" alt="Produkty" class="fl" />
                        <h3>Priemyselná tomografia & Metrotomografia </h3>
                        <p>
                            Pojem metrotomografia zaviedla firma Carl Zeiss pri uvedení svojho prístroja Metrotom 1500. 
                            Samotné slovo je akronymom dvoch slov - metrology (metrológia) a tomography (tomografia). 
                            Je to pojem popisujúci novú technológiu v oblasti merania. 
                            Počítačová tomografia bola doposiaľ rozšírená len v oblasti medicínskej. 
                            Zvyšovanie presnosti a zlepšovanie technologických možností spolu s požiadavkami priemyslu 
                            na kontrolu komplikovaných dielov vyústilo v produkciu počítačových tomografov pre priemyselné využitie.
                        </p>
                        <a class="readMoreLink" href="<?php echo htmlSpecialChars($_control->link("Products:loadPage", array('title'=>"Priemyselná tomografia",'page'=>"priemyselnaTomografia"))) ?>
">viac</a>
                    </li>
                    <li>
                        <img src="<?php echo htmlSpecialChars($basePath) ?>/img/icon4b.png" alt="Produkty" class="fl" />
                        <h3>Súradnicová metrológia </h3>
                        <p>
                            Kontrola rozmerov súčiastok z oblasti strojárstva, automobilového priemyslu, elektrotechniky 
                            a ďalších oborov je realizovateľná na špičkovom súradnicovom meracom stroji Contura G2 od firmy Carl Zeiss.
                            Súradnicový merací stroj (SMS) Contura G2 je portálový SMS pre vysokorýchlostné skenovanie. 
                        </p>
                        <a class="readMoreLink" href="<?php echo htmlSpecialChars($_control->link("Products:loadPage", array('title'=>"Súradnicová metrológia",'page'=>"suradnicovaMetrologia"))) ?>
">viac</a>
                    </li>
                    <li>
                        <img src="<?php echo htmlSpecialChars($basePath) ?>/img/icon6.png" alt="Produkty" class="fl" />
                        <h3>Materiálová analýza </h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                        <a class="readMoreLink" href="<?php echo htmlSpecialChars($_control->link("Products:loadPage", array('title'=>"Metalografia", 'page'=>"materialovaAnalyza"))) ?>
">viac</a>
                    </li>
                    <li>
                        <img src="<?php echo htmlSpecialChars($basePath) ?>/img/icon5.png" alt="Produkty" class="fl" />
                        <h3>Termovízna diagnostika </h3>
                        <p>
                            Spoločnosť CEIT-KE vie zabezpečiť špičkovú termovíznu diagnostiku prevádzanú termokamerou, 
                            v súčasnosti s najvyšším možným rozlíšením 640x480, ktorej teplotná citlivosť 
                            ( &lt;30mK ) zachytí najjemnejšie detaily obrazu a teplotný rozdiel informácií. 
                            Poprípade termokameru s rozlíšením 320x240 pixelov (t.j. 76800 pixelov), 
                            ktorej teplotná citlivosť je 0,05°C pri 30°C. Počas každého snímania 
                            je za účelom prepočtu emisivity snímaného objektu a okolia, 
                            monitorovaná teplota prostredia prostredníctvom pyrometra  
                            v bezprostrednej vzdialenosti od elektroniky kamery.
                        </p>
                        <a class="readMoreLink" href="<?php echo htmlSpecialChars($_control->link("Products:loadPage", array('title'=>"Termografická diagnostika",'page'=>"termoviznaDiagnostika"))) ?>
">viac</a>
                    </li>
                    <li class="noBorderBottom">
                        <img src="<?php echo htmlSpecialChars($basePath) ?>/img/icon2.png" alt="Produkty" class="fl" />
                        <h3>Additive manufacturing - 3D tlač</h3>
                        <p>
                            Rapid prototyping predstavuje špičkovú aditívnu technológiu výroby prototypov pomocou 3D tlače, 
                            kde na základe konštrukčného CAD návrhu vzniká jeho reálny hmotný model.
                        </p>
                        <a class="readMoreLink" href="<?php echo htmlSpecialChars($_control->link("Products:loadPage", array('title'=>"Príprava a výroba 3D modelov",'page'=>"rapidPrototyping"))) ?>
">viac</a>
                    </li>
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