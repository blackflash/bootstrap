<?php //netteCache[01]000419a:2:{s:4:"time";s:21:"0.62796600 1351339375";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:97:"C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Products\termoviznaDiagnostika.latte";i:2;i:1351339373;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f8aa369 released on 2012-08-30";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Products\termoviznaDiagnostika.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'vxfdft3qok')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbd822dab439_content')) { function _lbd822dab439_content($_l, $_args) { extract($_args)
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

<?php Nette\Latte\Macros\CoreMacros::includeTemplate("sidebar.latte", $template->getParameters(), $_l->templates['vxfdft3qok'])->render() ?>

            <div id="mainContainer" class="fr">
               <img src="<?php echo htmlSpecialChars($basePath) ?>/img/termograficka_diagnostika.png" alt="produkty" />
                <p class="introTextProducts">
                   Spoločnosť CEIT-KE vie zabezpečiť špičkovú termovíznu diagnostiku prevádzanú termokamerou, v súčasnosti s najvyšším možným rozlíšením 640x480, 
                   ktorej teplotná citlivosť (&lt;30mK) zachytí najjemnejšie detaily obrazu a teplotný rozdiel informácií. 
                   Poprípade termokameru s rozlíšením 320x240 pixelov (t.j. 76800 pixelov), ktorej teplotná citlivosť je 0,05°C pri 30°C. 
                   Počas každého snímania je za účelom prepočtu emisivity snímaného objektu a okolia, monitorovaná teplota prostredia
                   prostredníctvom pyrometra  v bezprostrednej vzdialenosti od elektroniky kamery.
                </p>

                <div class="sepContainer"></div>

                <h2>Dôvody využitia infračervenej termografie v priemyselnej praxi</h2>
                <p class="mainTextProducts"> 
                    Najvýznamnejšie rizikové faktory v priemysle sú materiály a výrobné technológie, využívané pri budovaní, 
                    údržbe a opravách distribučnej siete prístrojov a zariadení. Tieto faktory sú rizikové nielen z hľadiska funkcie, 
                    ktorú plnia a kvantity ich realizácií, ale tiež z dôvodu vznikajúcich zmien štruktúrnych vlastností materiálov, 
                    vyvolaných nielen zvolenou technológiou, ale vždy aj synergickým pôsobením rozličných prevádzkových degradačných 
                    procesov stochastického charakteru. Z tohto dôvodu je bezpodmienečne nutné všetky aplikované materiály 
                    a realizované spoje vhodným spôsobom overovať, či už vo fáze ich výstupnej kontroly z výrobného procesu, 
                    pri preberaní od dodávateľa, resp. preventívneho skúšania ich celistvosti a najdôležitejších vlastností 
                    v priebehu prevádzky. Na tento účel je možné použiť termografiu ako metódu nedeštruktívneho skúšania objektov.
                </p>

                <img class="priemyselna_tomografia_banner" src="<?php echo htmlSpecialChars($basePath) ?>/img/termograficka_diagnostika_2.png" alt="produkty" />

                <h2>Výhody termografie:</h2>
                <p class="mainTextProducts">
                    <ul>
                        <li>- bezpečnosť inšpekcie zariadení v prevádzke aj s extrémnymi teplotami, resp. elektrických systémov</li>
                        <li>- bezkontaktnosť, resp. snímanie na diaľku</li>
                        <li>- neinvazívnosť merania</li>
                        <li>- nedeštruktívne overovanie teplotných vlastností objektov</li>
                        <li>- nespôsobuje ožiarenie obsluhe ani skúmanému objektu</li>
                        <li>- umožňuje vizuálne hodnotenie kvality povrchu v reálnom čase aj telies v pohybe</li>
                    </ul>
                </p>
                <br /><br />
                <h6 class="mainTextProducts">
                    Termovízna diagnostika alebo digitálne infračervené tepelné zobrazovanie (Digital Infrared Thermal Imaging - DITI) 
                    predstavuje techniku monitorujúcu stav distribúcie tepla diagnostikovaného telesa. 
                    Je to metóda schopná z merania charakteristiky radiačného tepla emitovaného z telesa stanoviť oblasti alebo body s vyššou, 
                    resp. nižšou emisiou tepla, ktoré môžu poukazovať na prítomnosť určitej poruchy v telese. Ide o typ infračerveného zobrazovania 
                    s detekciou radiácie v infračervenom rozsahu elektromagnetického spektra s produkciou obrazov z tejto radiácie.
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