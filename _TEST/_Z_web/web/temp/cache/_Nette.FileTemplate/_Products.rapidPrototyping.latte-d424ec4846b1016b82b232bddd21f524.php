<?php //netteCache[01]000414a:2:{s:4:"time";s:21:"0.44362300 1351342510";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:92:"C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Products\rapidPrototyping.latte";i:2;i:1351339350;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f8aa369 released on 2012-08-30";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Products\rapidPrototyping.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'o85hgk2153')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbee54ba1856_content')) { function _lbee54ba1856_content($_l, $_args) { extract($_args)
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

<?php Nette\Latte\Macros\CoreMacros::includeTemplate("sidebar.latte", $template->getParameters(), $_l->templates['o85hgk2153'])->render() ?>

            <div id="mainContainer" class="fr">
               <img src="<?php echo htmlSpecialChars($basePath) ?>/img/rapid_prototyping.png" alt="produkty" />
                <p class="introTextProducts">
                    Rapid prototyping predstavuje špičkovú aditívnu technológiu výroby prototypov pomocou 3D tlače, 
                    kde na základe konštrukčného CAD návrhu vzniká jeho reálny hmotný model.
                </p>
                <p class="introTextProducts">
                    Firma CEIT-KE má k dispozícii Eden 260V, ktorý pracuje na báze PolyJet, 
                    čiže úplného vytvrdenia fotopolymérnych materiálov na báze kvapaliny. Materiály, 
                    ktoré táto technológia využíva, simulujú vlastnosti konečného produktu, 
                    ako je uvedené na obrázkovej schéme (Simulácia štandardných a technických plastov).
                </p>

                <div class="sepContainer"></div>

                <h2>Additive manufacturing - 3D tlač</h2>
                <p>
                    <ul>
                        <li>- vstupný formát *.STL alebo*.SCL</li>
                        <li>- presnosť 600x600x1600 [dpi]</li>
                        <li>- nanášanie ultratenkých 16µ vrstiev (0.0006")</li>
                        <li>- najtenšia hrúbka steny len 0.6 mm (0.024")</li>
                        <li>- rozmery tlače 260x260x200 [mm]</li>
                    </ul>
                </p>

                <p class="mainTextProducts">
                    Na jedno vytlačenie sme schopní vyrobiť prototyp v maximálnych rozmeroch 260x260x200 [mm]. 
                    Ak sa jedná o rozmerovo väčší objekt, 3D model sa rozdelí a vytlačí sa po častiach. 
                    Hotový prototyp je možné povrchovo upravovať tzn. farbiť, lakovať aj lepiť.
                </p>

                <img class="priemyselna_tomografia_banner" src="<?php echo htmlSpecialChars($basePath) ?>/img/rapid_prototyping_poster.jpg" alt="produkty" />

                <h2>Oblasti využitia technológie</h2>
                <p class="mainTextProducts">
                    <ul>
                        <li>- priemyselný dizajn</li>
                        <li>- automobilový priemysel</li>
                        <li>- architektúra</li>
                        <li>- spotrebiteľský tovar</li>
                        <li>- obuvníctvo</li>
                        <li>- medicína</li>
                    </ul>
                </p>

                <h2>Hlavné výhody technológie Rapid Prototyping</h2>

                <p class="mainTextProducts">
                    Zhmotňovanie konštrukčných CAD modelov v neuveriteľne rýchlom čase, bez použitia obrábacích a iných nástrojov.
                </p>

                <p class="mainTextProducts">
                    Hotový prototyp je stavaný s presnosťou 600dpi, takže úplne zodpovedá konštrukčnému nákresu od zadávateľa. 
                    Navyše, zvolením vhodného typu tlačeného materiálu, sa prototyp dokáže priblížiť aj materiálovým vlastnostiam konečného produktu, 
                    čím sa stáva plne funkčným. Funkčné prototypy vytvorené technológiami Rapid Prototyping sú ideálnou voľbou pre urýchlenie celého 
                    výrobného procesu a zníženia nákladov. Technológia PolyJet sa využíva predovšetkým v prípadoch vysokých nárokov na presnosť, 
                    povrchovú úpravu, detail a pevnosť finálneho modelu. Kvalita povrchového prevedenia umožňuje výrobu master modelov na výrobu 
                    polyuretánových foriem alebo priamo na výrobu foriem na voskové odliatky.
                </p>
                <p>
                    Predstavte si, že sa vaše dizajnérske predstavy zhmotnia za jedinú noc, namiesto zdĺhavého čakania na finálny prototyp z vývojárskej dielne.
                </p>

                <img class="priemyselna_tomografia_banner" src="<?php echo htmlSpecialChars($basePath) ?>/img/rapid_prototyping_2.png" alt="produkty" />

                <h2>Uplatnenie technológie Rapid Prototyping</h2>
                <p class="mainTextProducts">
                    Tlač umožňuje získať veľmi rýchlo a jednoducho spätnú väzbu od vývojových inžinierov až po konečného spotrebiteľa, 
                    pre ktorého je produkt určený. Vytlačený prototyp je praktickou pomôckou vo fáze schvaľovania dizajnového návrhu. 
                    Je vhodný na testovanie a overovanie mechanických vlastností a funkčnosti budúceho produktu. 
                    Vďaka nemu je možné vychytať nedostatky a vytvárať alternatívne projektové riešenia v neuveriteľne rýchlom čase a na reálnom objekte.
                </p>

                <p class="mainTextProducts">
                    Technologický pokrok a vývoj nových materiálov umožnili využívať aditívne technológie nielen na prototypovú výrobu, 
                    ale aj na výrobu malých sérií výrobkov od niekoľko stoviek až do tisíc kusov. Zdĺhavý proces výroby foriem, vákuové 
                    odlievanie alebo lisovanie plástov (injekčné vstrekovanie) sú nahradené priamou výrobou šetriacou čas aj finančné prostriedky. 
                    Aditívne technológie je možné použiť na výrobu master modelov, na výrobu foriem a tvorbu odliatkov. Pri tvarovo komplikovaných 
                    súčiastkach ide o najrýchlejšie a finančne najvýhodnejšie riešenie výroby prototypu.
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