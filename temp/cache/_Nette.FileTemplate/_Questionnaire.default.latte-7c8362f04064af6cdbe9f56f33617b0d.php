<?php //netteCache[01]000413a:2:{s:4:"time";s:21:"0.41391900 1363830373";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:91:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Questionnaire\default.latte";i:2;i:1363822532;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Questionnaire\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '1l1j9si0z4')
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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
        <title>CSS-Only Responsive Layout with Smooth Transitions</title>
        
        <link rel="shortcut icon" href="../favicon.ico" /> 
        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css' />

        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/www/css/component_questionnaire/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/www/css/component_questionnaire/bootstrap-responsive.css" />

        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/www/css/component_questionnaire/demo.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/www/css/component_questionnaire/style.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/www/css/component_questionnaire/main.css" />

        <!-- CSS Reset -->
        <link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/reset_admin.css" media="screen" />
        <!--  Fluid Grid System -->
        <link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/fluid.css" media="screen" />
        <!-- Theme Stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/dandelion.theme.css" media="screen" />
        <!--  Main Stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/dandelion.css" media="screen" />
        <!-- Demo Stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/demo.css" media="screen" />

        <link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/admin.css" media="screen" />
        
        <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire/modernizr.custom.79639.js"></script> 
        <!--[if lte IE 8]>
             <link rel="stylesheet" type="text/css" href="css/simple.css" />
        <![endif]-->
    </head>
    <body>
        <div class="containerQuestionnaire">

                <!-- Button to trigger modal -->
                
        
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <img class="logoCleverFrogs" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/logoB.png" />
               
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            
            <div class="st-container">
                
                <button class="btn btn-large btn-block submitButton" onclick="submit();">Odoslať</button>

                <input type="radio" name="radio-set" class="menu0" checked="checked" id="st-control-1" />
                <a href="#st-panel-1">Rezervácie</a>
                <input type="radio" name="radio-set" id="st-control-2" class="menu1" />
                <a href="#st-panel-2">Recepcia</a>
                <input type="radio" name="radio-set" id="st-control-3" class="menu2" />
                <a href="#st-panel-3">Ubytovanie</a>
                <input type="radio" name="radio-set" id="st-control-4" class="menu3" />
                <a href="#st-panel-4">Reštaurácia</a>
                <input type="radio" name="radio-set" id="st-control-5" class="menu4" />
                <a href="#st-panel-5">Wellness</a>
                
                <div class="st-scroll">
                    <!-- Placeholder text from http://hipsteripsum.me/ -->
                    <section class="st-panel backgroundStripes" id="st-panel-1">
                        <div class="score">Score: <div class="scoreValue">0</div></div>
                        <div class="st-deco"></div>
                        <h2>Rezervácie</h2>
                        <p class="question">Ako ste boli spokojní s rezervačným oddelením ?</p>

                        <div class="container starsRatingSystem g0">
                            <div class="row g0q0">
                                <div class="span2">
                                    <p class="color0">Rýchlosť a profesionalita:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="00" g="0" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="00" g="0" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="00" g="0" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="00" g="0" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="00" g="0" rate="5" />
                                </div>
                                <div class="attention a00" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                            <div class="row g0q1">
                                <div class="span2">
                                    <p class="color1">Presnosť:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="01" g="0" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="01" g="0" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="01" g="0" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="01" g="0" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="01" g="0" rate="5" />
                                </div>
                                <div class="attention a01" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                            <div class="row g0q2">
                                <div class="span2">
                                    <p class="color2">Ochota pomôcť a priateľskosť:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="02" g="0" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="02" g="0" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="02" g="0" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="02" g="0" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="02" g="0" rate="5" />
                                </div>
                                <div class="attention a02" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                             <div class="row g0q3">
                                <div class="span2">
                                    <p class="color3">Znalosť rezervačného agenta:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="03" g="0" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="03" g="0" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="03" g="0" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="03" g="0" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="03" g="0" rate="5" />
                                </div>
                                <div class="attention a03" style="display: none;">Neoznačená odpoveď</div>
                            </div>
                            
                        </div><!--end of starRatingSystem-->
                    </section>
                    
                    <section class="st-panel backgroundTiled" id="st-panel-2">
                        <div class="score">Score: <div class="scoreValue">0</div></div>
                        <div class="st-deco"></div>
                        <h2>Recepcia</h2>
                        <p class="question">Ako hodnotíte prácu recepcie a príchod do hotela ?</p>

                        <div class="container starsRatingSystem g1">
                            <div class="row g1q0">
                                <div class="span2">
                                    <p class="color0">Proces registrácie – check in:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="10" g="1" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="10" g="1" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="10" g="1" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="10" g="1" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="10" g="1" rate="5" />
                                </div>
                                <div class="attention a10" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                            <div class="row g1q1">
                                <div class="span2">
                                    <p class="color1">Proces od ubytovania – check out :</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="11" g="1" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="11" g="1" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="11" g="1" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="11" g="1" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="11" g="1" rate="5" />
                                </div>
                                <div class="attention a11" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                            <div class="row g1q2">
                                <div class="span2">
                                    <p class="color2">Ochotapomôcť a priateľskosť:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="12" g="1" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="12" g="1" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="12" g="1" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="12" g="1" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="12" g="1" rate="5" />
                                </div>
                                <div class="attention a12" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                        </div><!--end of starRatingSystem-->
                    </section>

                    <section class="st-panel backgroundStripes" id="st-panel-3">
                        <div class="score">Score: <div class="scoreValue">0</div></div>
                        <div class="st-deco"></div>
                        <h2>Ubytovanie</h2>
                        <p class="question">Ako hodnotíte ubytovanie a kvalitu izieb ?</p>

                        <div class="container starsRatingSystem group2">
                            <div class="row q0">
                                <div class="span2">
                                    <p class="color0">Čistota izby:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="20" g="2" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="20" g="2" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="20" g="2" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="20" g="2" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="20" g="2" rate="5" />
                                </div>
                                <div class="attention a20" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                            <div class="row q1">
                                <div class="span2">
                                    <p class="color1">Vybavenie izby:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="21"  g="2" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="21"  g="2" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="21"  g="2" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="21"  g="2" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="21"  g="2" rate="5" />
                                </div>
                                <div class="attention a21" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                            <div class="row q2">
                                <div class="span2">
                                    <p class="color2">Atmosféra v hoteli:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="22" g="2" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="22" g="2" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="22" g="2" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="22" g="2" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="22" g="2" rate="5" />
                                </div>
                                <div class="attention a22" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                             <div class="row q3">
                                <div class="span2">
                                    <p class="color3">Večerný program:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="23" g="2" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="23" g="2" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="23" g="2" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="23" g="2" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="23" g="2" rate="5" />
                                </div>
                                <div class="attention a23" style="display: none;">Neoznačená odpoveď</div>
                            </div>
                        </div><!--end of starRatingSystem-->
                    </section>

                    <section class="st-panel backgroundTiled" id="st-panel-4">
                        <div class="score">Score: <div class="scoreValue">0</div></div>
                        <div class="st-deco"></div>
                        <h2>Reštaurácia</h2>
                        <p class="question">Ako hodnotíte prácu reštaurácie  ?</p>

                        <div class="container starsRatingSystem group3">
                            <div class="row q0">
                                <div class="span2">
                                    <p class="color0">Atmosféra a dekorácie:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="30" g="3" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="30" g="3" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="30" g="3" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="30" g="3" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="30" g="3" rate="5" />
                                </div>
                                <div class="attention a30" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                            <div class="row q1">
                                <div class="span2">
                                    <p class="color1">Raňajkový bufet:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="31" g="3" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="31" g="3" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="31" g="3" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="31" g="3" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="31" g="3" rate="5" />
                                </div>
                                <div class="attention a31" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                            <div class="row q2">
                                <div class="span2">
                                    <p class="color2">Kvalita a kreativita večerného menu:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="32" g="3" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="32" g="3" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="32" g="3" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="32" g="3" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="32" g="3" rate="5" />
                                </div>
                                <div class="attention a32" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                             <div class="row q3">
                                <div class="span2">
                                    <p class="color3">Ponuka vína:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="33" g="3" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="33" g="3" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="33" g="3" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="33" g="3" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="33" g="3" rate="5" />
                                </div>
                                <div class="attention a33" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                            <div class="row q4">
                                <div class="span2">
                                    <p class="color4">Bar a kaviareň:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="34" g="3" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="34" g="3" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="34" g="3" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="34" g="3" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="34" g="3" rate="5" />
                                </div>
                                <div class="attention a34" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                            <div class="row q5">
                                <div class="span2">
                                    <p class="color5">Ochota pomôcť a priateľskosť:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="35" g="3" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="35" g="3" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="35" g="3" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="35" g="3" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="35" g="3" rate="5" />
                                </div>
                                <div class="attention a35" style="display: none;">Neoznačená odpoveď</div>
                            </div>
                        </div><!--end of starRatingSystem-->
                    </section>

                    <section class="st-panel backgroundStripes" id="st-panel-5">
                        <div class="score">Score: <div class="scoreValue">0</div></div>
                        <div class="st-deco"></div>
                        <h2>Wellness</h2>
                        <p class="question">Ako hodnotíte wellness hotela ?</p>

                        <div class="container starsRatingSystem group4">
                            <div class="row">
                                <div class="span2">
                                    <p class="color0">Čistota wellness:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="40" g="4" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="40" g="4" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="40" g="4" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="40" g="4" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="40" g="4" rate="5" />
                                </div>
                                <div class="attention a40" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                            <div class="row">
                                <div class="span2">
                                    <p class="color1">Dostatok uterákov a plachiet:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="41" g="4" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="41" g="4" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="41" g="4" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="41" g="4" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="41" g="4" rate="5" />
                                </div>
                                <div class="attention a41" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                            <div class="row">
                                <div class="span2">
                                    <p class="color2">Ponuka odpočívadiel a oddychových častí:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="42" g="4" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="42" g="4" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="42" g="4" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="42" g="4" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="42" g="4" rate="5" />
                                </div>
                                <div class="attention a42" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                             <div class="row">
                                <div class="span2">
                                    <p class="color3">Atmosféra a dekorácie:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="43" g="4" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="43" g="4" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="43" g="4" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="43" g="4" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="43" g="4" rate="5" />
                                </div>
                                <div class="attention a43" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                            <div class="row">
                                <div class="span2">
                                    <p class="color4">Ponuka masáží a procedúr:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="44" g="4" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="44" g="4" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="44" g="4" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="44" g="4" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="44" g="4" rate="5" />
                                </div>
                                <div class="attention a44" style="display: none;">Neoznačená odpoveď</div>
                            </div>

                            <div class="row">
                                <div class="span2">
                                    <p class="color5">Ochotapomôcť a priateľskosť:</p>
                                </div>
                                
                                <div class="span9 pull-right margin">
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="45" g="4" rate="1" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="45" g="4" rate="2" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="45" g="4" rate="3" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="45" g="4" rate="4" />
                                    <img class="star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire/star_BW.png" q="45" g="4" rate="5" />
                                </div>
                                <div class="attention a45" style="display: none;">Neoznačená odpoveď</div>
                            </div>
                        </div><!--end of starRatingSystem-->
                    </section>

                </div><!-- // st-scroll -->
            </div><!-- // st-container -->
        </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo Nette\Templating\Helpers::escapeJs($basePath) ?>/js/component_questionnaire/vendor/jquery-1.9.1.js"><\/script>')</script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire/vendor/bootstrap.min.js"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire/plugins.js"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js//component_questionnairemain.js"></script>

        <script>
            var host = <?php echo Nette\Templating\Helpers::escapeJs($basePath) ?>;

            var question_count_g0 = 4;
            var question_count_g1 = 3;
            var question_count_g2 = 4;
            var question_count_g3 = 6;
            var question_count_g4 = 6;

            var checker0, checker1, checker2, checker3, checker4;

            var holder0 = [];
            var holder1 = [];
            var holder2 = [];
            var holder3 = [];
            var holder4 = [];

            var group0complete = true;
            var group1complete = true;
            var group2complete = true;
            var group3complete = true;
            var group4complete = true;

            var g,question,question_value;
            var readyToSend = false;

            var score0 = 0,score1 = 0,score2 = 0,score3 = 0,score4 = 0;

            //function to handle the clicks on the stars
            $('img.star').click(function(){

                $(this).attr("src",host+"/www/img/component_questionnaire/star_C.png");
                $(this).attr("class","star selected");
                $(this).prevAll().attr("src", host+"/www/img/component_questionnaire/star_C.png");
                $(this).prevAll().attr("class","star selected");
                $(this).nextAll().attr("src", host+"/www/img/component_questionnaire/star_BW.png");
                $(this).nextAll().attr("class","star");

                //$('#rating' + $(this).attr("q")).text($(this).attr("rate"));
                $(this).prevAll().attr("value","");
                $(this).nextAll().attr("value","");
                $(this).attr("value","1");

                g = $(this).attr("g");
                question = $(this).attr("q");
                question_value = $(this).attr("rate");

               //console.log("group: " + g + " question: " + question + " question value: " + question_value);
                
               //----- CHECK GROUP 0 -----*/
                if(g == 0){
                    for (var i = 0 ; i < question_count_g0; i++) {
                        if(i == question.substring(1)){
                            holder0[i] = question_value;
                        }
                        group0complete = false;
                    }

                    score0 = 0;
                    checker0 = question_count_g0;
                    for (var i = 0 ; i < question_count_g0; i++) {
                        if(typeof(holder0[i]) != "undefined"){
                            checker0--;
                            score0++;
                        }
                    }
                    if(checker0 == 0) group0complete = true;
                }


                //----- CHECK GROUP 1 -----*/
                if(g == 1) {
                    for (var i = 0 ; i < question_count_g1; i++) {
                        if(i == question.substring(1)){
                            holder1[i] = question_value;
                        }
                        group1complete = false;
                    }
                    
                    score1 = 0;
                    checker1 = question_count_g1;
                    for (var i = 0 ; i < question_count_g1; i++) {
                        if(typeof(holder1[i]) != "undefined"){
                            checker1--;
                            score1++;
                        }
                    }
                     if(checker1 == 0) group1complete = true;
                }   


                //----- CHECK GROUP 2 -----*/
                if(g == 2) {
                    for (var i = 0 ; i < question_count_g2; i++) {
                        if(i == question.substring(1)){
                            holder2[i] = question_value;
                        }
                        group2complete = false;
                    }
                    
                    score2 = 0;
                    checker2 = question_count_g2;
                    for (var i = 0 ; i < question_count_g2; i++) {
                        if(typeof(holder2[i]) != "undefined"){
                            checker2--;
                            score2++;
                        }
                    }
                     if(checker2 == 0) group2complete = true;
                }   

                //----- CHECK GROUP 3 -----*/
                if(g == 3) {
                    for (var i = 0 ; i < question_count_g3; i++) {
                        if(i == question.substring(1)){
                            holder3[i] = question_value;
                        }
                        group3complete = false;
                    }
                    
                    score3 = 0;
                    checker3 = question_count_g3;
                    for (var i = 0 ; i < question_count_g3; i++) {
                        if(typeof(holder3[i]) != "undefined"){
                            checker3--;
                            score3++;
                        }
                    }
                     if(checker3 == 0) group3complete = true;
                }   

                //----- CHECK GROUP 4 -----*/
                if(g == 4) {
                    for (var i = 0 ; i < question_count_g4; i++) {
                        if(i == question.substring(1)){
                            holder4[i] = question_value;
                        }
                        group4complete = false;
                    }
                    
                    score4 = 0;
                    checker4 = question_count_g4;
                    for (var i = 0 ; i < question_count_g4; i++) {
                        if(typeof(holder4[i]) != "undefined"){
                            checker4--;
                            score4++;
                        }
                    }
                     if(checker4 == 0) group4complete = true;
                }

                /*console.log(checker0);
                console.log("ch1 - " + checker1);
                console.log(checker2);
                console.log(checker3);
                console.log(checker4);
                console.log(group0complete);
                console.log(group1complete);
                console.log(group2complete);
                console.log(group3complete);
                console.log(group4complete);
                console.log("---------------");
                console.log(holder0);*/

                //remove the error box
                //$('.q' + $(this).attr("q")).removeClass('error');
                calculateScore();
                if($(".scoreValue").html().length == 2){
                    $(".scoreValue").css("margin-left", "30%");
                }

                $('.a' + $(this).attr("q")).css("display","none");
                //$('.color' + $(this).attr("q")).css("color","#8b8b8b");
                /*console output
                console.log("-----");
                */
            });

            //submit the results to the server
            function submit() {
                calculateScore();
                readyToSend = checkReady();
                console.log(readyToSend);
            };

            function calculateScore(){
                var finalScore = score0+score1+score2+score3+score4
                $(".scoreValue").html(finalScore)
            }

            function checkReady(){
                if(group0complete == true && group1complete == true && group2complete == true){
                    //console.log("inside !");
                    if(checker0 == 0 || typeof(checker0) == "undefined"){
                        //console.log("checker0 ok");
                        if(checker1 == 0 || typeof(checker1) == "undefined"){
                            //console.log("checker1 ok");
                            if(checker2 == 0 || typeof(checker2) == "undefined"){
                                //console.log("checker2 ok");
                                if(checker3 == 0 || typeof(checker3) == "undefined"){
                                    //console.log("checker3 ok");
                                    if(checker4 == 0 || typeof(checker4) == "undefined"){
                                        //console.log("checker4 ok");
                                        readyToSend = true;
                                        console.log("OK to POST !");
                                    }
                                }
                            }
                        }
                    }
                }


                if(group0complete == false ) {
                    if(checker0 <= question_count_g0) $('.menu0').click();
                    readyToSend = false;
                    
                    //check unevaluated questions and popup error message
                    for (var i = 0 ; i < question_count_g0; i++) {
                        if(typeof(holder0[i]) === "undefined"){
                            $(".a0"+i).css("display","block");
                        }
                    }
                }

                if(group1complete == false ) {
                    if(checker1 <= question_count_g1) $('.menu1').click();
                    readyToSend = false;

                    //check unevaluated questions and popup error message
                    for (var i = 0 ; i < question_count_g1; i++) {
                        if(typeof(holder1[i]) === "undefined"){
                            $(".a1"+i).css("display","block");
                        }
                    }
                }

                if(group2complete == false ) {
                    if(checker2 <= question_count_g2) $('.menu2').click();
                    readyToSend = false;

                    //check unevaluated questions and popup error message
                    for (var i = 0 ; i < question_count_g2; i++) {
                        if(typeof(holder2[i]) === "undefined"){
                            $(".a2"+i).css("display","block");
                        }
                    }
                }

                if(group3complete == false ) {
                    if(checker3 <= question_count_g3) $('.menu3').click();
                    readyToSend = false;

                    //check unevaluated questions and popup error message
                    for (var i = 0 ; i < question_count_g3; i++) {
                        if(typeof(holder3[i]) === "undefined"){
                            $(".a3"+i).css("display","block");
                        }
                    }
                }

                if(group4complete == false ) {
                    if(checker4 <= question_count_g4) $('.menu4').click();
                    readyToSend = false;

                    //check unevaluated questions and popup error message
                    for (var i = 0 ; i < question_count_g4; i++) {
                        if(typeof(holder4[i]) === "undefined"){
                            $(".a4"+i).css("display","block");
                        }
                    }
                }

                //one formular must be evaluated
                if(group1complete == false || typeof(checker0) == "undefined") {
                    if(checker0 != 0) $('.menu0').click();
                    readyToSend = false;

                    //check unevaluated questions and popup error message
                    for (var i = 0 ; i < question_count_g0; i++) {
                        if(typeof(holder0[i]) === "undefined"){
                            $(".a0"+i).css("display","block");
                        }
                    }
                }
                return readyToSend;
            };
        </script>

    </body>
</html>