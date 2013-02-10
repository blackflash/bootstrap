<?php //netteCache[01]000405a:2:{s:4:"time";s:21:"0.45979700 1351359334";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:83:"C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Products\sidebar.latte";i:2;i:1351205890;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Products\sidebar.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'n8bh1g3i99')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>
<div id="sidebarContainer" class="fl">
    <div class="sidebarItem">
        <div class="sidebarHeading">
            <h3>Čo ponúkame</h3>
        </div>
        <ul class="arrowList">
            <li <?php if ($title == "Produkty"): ?>                      id="activeCategory" <?php endif ?>
 ><a href="<?php echo htmlSpecialChars($_control->link("Products:default")) ?>">Prehľad</a></li>
            <li <?php if ($title == "Priemyselná tomografia"): ?>        id="activeCategory" <?php endif ?>
 ><a href="<?php echo htmlSpecialChars($_control->link("Products:loadPage", array('title'=>"Priemyselná tomografia",          'page'=>"priemyselnaTomografia"))) ?>
"> Priemyselná tomografia</a></li>
            <li <?php if ($title == "Súradnicová metrológia"): ?>        id="activeCategory" <?php endif ?>
 ><a href="<?php echo htmlSpecialChars($_control->link("Products:loadPage", array('title'=>"Súradnicová metrológia",          'page'=>"suradnicovaMetrologia"))) ?>
"> Súradnicová metrológia</a></li>
            <li <?php if ($title == "Metalografia"): ?>                  id="activeCategory" <?php endif ?>
 ><a href="<?php echo htmlSpecialChars($_control->link("Products:loadPage", array('title'=>"Metalografia",                    'page'=>"materialovaAnalyza"))) ?>
">    Metalografia</a></li>
            <li <?php if ($title == "Spektroskopia"): ?>                 id="activeCategory" <?php endif ?>
 ><a href="<?php echo htmlSpecialChars($_control->link("Products:loadPage", array('title'=>"Spektroskopia",                   'page'=>"materialovaAnalyza"))) ?>
">    Spektroskopia</a></li>
            <li <?php if ($title == "Elektrónová mikroskopia"): ?>       id="activeCategory" <?php endif ?>
 ><a href="<?php echo htmlSpecialChars($_control->link("Products:loadPage", array('title'=>"Elektrónová mikroskopia",         'page'=>"materialovaAnalyza"))) ?>
">    Elektrónová mikroskopia</a></li>
            <li <?php if ($title == "Meranie drsnosti povrchov"): ?>     id="activeCategory" <?php endif ?>
 ><a href="<?php echo htmlSpecialChars($_control->link("Products:loadPage", array('title'=>"Meranie drsnosti povrchov",       'page'=>"materialovaAnalyza"))) ?>
">    Meranie drsnosti povrchov</a></li>
            <li <?php if ($title == "Meranie tvrdosti"): ?>              id="activeCategory" <?php endif ?>
 ><a href="<?php echo htmlSpecialChars($_control->link("Products:loadPage", array('title'=>"Meranie tvrdosti",                'page'=>"materialovaAnalyza"))) ?>
">    Meranie tvrdosti</a></li>
            <li <?php if ($title == "Termografická diagnostika"): ?>     id="activeCategory" <?php endif ?>
 ><a href="<?php echo htmlSpecialChars($_control->link("Products:loadPage", array('title'=>"Termografická diagnostika",       'page'=>"termoviznaDiagnostika"))) ?>
"> Termografická diagnostika</a></li>
            <li <?php if ($title == "Príprava a výroba 3D modelov"): ?>  id="activeCategory" <?php endif ?>
 ><a href="<?php echo htmlSpecialChars($_control->link("Products:loadPage", array('title'=>"Príprava a výroba 3D modelov",    'page'=>"rapidPrototyping"))) ?>
">      Príprava a výroba 3D modelov</a></li>
        </ul>
    </div><!--end of sidebarItem -->
    
</div><!--end of sidebarContainer-->