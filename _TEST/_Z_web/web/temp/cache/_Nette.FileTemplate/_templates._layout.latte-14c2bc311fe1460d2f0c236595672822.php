<?php //netteCache[01]000395a:2:{s:4:"time";s:21:"0.90127000 1353427388";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:73:"C:\Program Files (x86)\VertrigoServ\www\_tswp\app\templates\@layout.latte";i:2;i:1353427385;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\_tswp\app\templates\@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'd1gmg0q7ni')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbcf60605b5a_title')) { function _lbcf60605b5a_title($_l, $_args) { extract($_args)
?>TSWP ▪ 2 <?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ;
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbdda19a1408_head')) { function _lbdda19a1408_head($_l, $_args) { extract($_args)
;
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
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="description" content="TSWP ▪ 2" />
<?php if (isset($robots)): ?>	<meta name="robots" content="<?php echo htmlSpecialChars($robots) ?>" />
<?php endif ?>
    <meta name="viewport" content="width=device-width" />
    <META name="robots" content="all,follow,index" />
    <META content="cs" http-equiv="Content-language" />
    <META name="resource-type" content="phpfile" />

	<title><?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
ob_start(); call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()); echo $template->strip($template->stripTags(ob_get_clean()))  ?></title>

	<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/default.css" type="text/css" />

	<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/cssrefresh.js"></script>

    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/vendor/modernizr-2.6.1.min.js"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/cufon.js" type="text/javascript"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/Aller_400.font.js" type="text/javascript"></script>

    <!-- LIGHTBOX -->
    <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/lightbox.css" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Fredoka+One|Open+Sans:400,700' rel='stylesheet' type='text/css' />

    <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/netteForms.js"></script>
	<?php call_user_func(reset($_l->blocks['head']), $_l, get_defined_vars())  ?>

</head>

<body>
	 <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="topContainer">
            <div class="centerContainer">
                <a href="<?php echo htmlSpecialChars($_control->link("HomePage:")) ?>
" class="logo fl"><img src="<?php echo htmlSpecialChars($basePath) ?>/img/logo.png" alt="CEIT-KE" /></a>
                
<?php if (!$user->isLoggedIn()): ?>
                <div id="topContactInfo" class="fr">
                    <ul>
                        <li>
<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = (is_object("signInForm") ? "signInForm" : $_control["signInForm"]), array()) ?>
                                <div class="sign-in-form">
                                    

                                    <div class="pair">
<?php if ($_label = $_form["username"]->getLabel()) echo $_label->addAttributes(array()) ?>
                                        <div class="input"><?php echo $_form["username"]->getControl()->addAttributes(array()) ?></div>
                                    </div>
                                    <div class="pair">
<?php if ($_label = $_form["password"]->getLabel()) echo $_label->addAttributes(array()) ?>
                                        <div class="input"><?php echo $_form["password"]->getControl()->addAttributes(array()) ?></div>
                                    </div>

                                    <div class="pair">
                                        <div class="input"><?php echo $_form["login"]->getControl()->addAttributes(array()) ?></div>
                                    </div>
                                </div>
<?php if (is_object($form)) $_ctrl = $form; else $_ctrl = $_control->getComponent($form); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render('errors') ;Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ?>
                        </li>
                    </ul>
                </div> <!-- end of topContactInfo-->
<?php endif ?>

<?php if ($user->isLoggedIn()): ?>
                        <div id="loginPanel"  class="fr">
<?php $iterations = 0; foreach ($flashes as $flash): ?>                            <div class="flash <?php echo htmlSpecialChars($flash->type) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ?>
                            <div class="title">Ste prihlásený</div>
                            <div class="user">
                                <span class="icon user"><?php echo Nette\Templating\Helpers::escapeHtml($user->getIdentity()->name, ENT_NOQUOTES) ?></span> |
                                <a href="<?php echo htmlSpecialChars($_control->link("signOut!")) ?>
">Odhlásiť sa</a>
                            </div>
                        </div>
<?php endif ?>
                

            </div><!--end of centerContainer-->
        </div> <!-- end of topContainer -->

        <div id="menuContainer">
            <div class="centerContainer">

                <ul id="nav">

                    <li><a href="<?php echo htmlSpecialChars($_control->link("HomePage:")) ?>">Domov<span>TSWP 2</span></a></li>
                    <li><a href="<?php echo htmlSpecialChars($_control->link("Team:")) ?>">Tím<span>členovia</span></a></li>
                    <li><a href="<?php echo htmlSpecialChars($_control->link("Contact:")) ?>">Kontakt<span>napíšte nám</span></a></li>
                </ul>
            </div><!--end of centerContainer-->
        </div><!--end of menuContainer-->

<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>

        <div class="blankSeparator"></div>

        <div id="footerContainer">
            <div class="centerContainer">

                <div class="oneThirdCol">
                    <div id="footerProducts">
                        <h3>Informácie o projekte</h3>
                        <a href="<?php echo htmlSpecialChars($_control->link("#")) ?>
">novinky</a>
                    </div><!--end of footerProducts-->
                    <div id="footerProjects">
                        <h3>Projekty</h3>
                        <a href="#">zadanie z tswp</a>
                    </div>
                </div><!--end of oneThirdCol-->

                <div class="oneThirdCol">
                    <h3>Prihláste sa k odberu noviniek</h3>
                    <p>
                        Ak máte záujem o získanie informácií v rámci noviniek,
                        ktoré ponúkame príhlásiť sa môžte nižšie.
                    </p>

                    <form action="" id="subscribeForm" method="get">
                        <fieldset>
                            <div>
                                <input type="text" id="subscribeEmail" class="fl" placeholder="Vaša emailová adresa" autocomplete="OFF" />
                                <a href="#" id="newsletterSignup" class="blueButton">
                                    <img src="<?php echo htmlSpecialChars($basePath) ?>/img/blueButtonArrow.png" />
                                </a>
                            </div>
                        </fieldset>
                    </form>
                    <a href="#" class="policy">Pravidlá odoberania noviniek</a>
                </div><!--end of oneThirdCol-->

                <div class="oneThirdCol  lastCol">
                    <h3>Kontaktujte nás</h3>
                    <p>
                        Môžete nás kontaktovať využitím informácií nižšie,
                        alebo použite <a href="<?php echo htmlSpecialChars($_control->link("Contact:")) ?>">kontaktný formulár</a>.
                    </p>
                    <ul id="bottomContactInfo">
                        <li>
                            <p>andrej.gaspar@student.tuke.sk</p>
                        </li>
                    </ul>
                </div><!--end of oneThirdCol-->

            </div><!--end of centerContainer-->
        </div><!--end of footerContainer-->

        <div id="copyrightContainer">
            <div class="centerContainer">
                <p id="bottomCopyright" class="fl">
                    <a class="loginButton fl" href="<?php echo htmlSpecialChars($_control->link("Sign:")) ?>
"><img src="<?php echo htmlSpecialChars($basePath) ?>/img/icons/disk.png" alt="login" /></a>
                    &copy; Copyrig 2012 Andrej Gaspar All right reserved 
                </p>
                <ul class="socialIcons fr">
                    <li><a href="#"><img src="<?php echo htmlSpecialChars($basePath) ?>/img/social/twitter.png" alt="twitter" /></a></li>
                    <li><a href="#"><img src="<?php echo htmlSpecialChars($basePath) ?>/img/social/facebook.png" alt="facebook" /></a></li>
                    <li><a href="#"><img src="<?php echo htmlSpecialChars($basePath) ?>/img/social/rss.png" alt="rss" /></a></li>
                </ul>
            </div><!--end of centerContainer-->
        </div><!--end of copyrigtContainer-->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/plugins.js"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/main.js"></script>
       
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/jCarouselLite.js" type="text/javascript"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/functions.js" type="text/javascript"></script>
        
        <!-- LIGHTBOX JS -->
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.smooth-scroll.min.js"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/lightbox.js"></script>

         
        <script type="text/javascript">
            Cufon.replace("ul#nav li a", {hover: true})  
            Cufon.replace("blockquote p")  
        </script>

        <script type="text/javascript">

        jQuery(document).ready(function($) {
            $('a').smoothScroll({
                speed: 1000,
                easing: 'easeInOutCubic'
            });

            $('.showOlderChanges').on('click', function(e){
                $('.changelog .old').slideDown('slow');
                $(this).fadeOut();
                e.preventDefault();
            })
          });

        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

        <script type="text/javascript">
            Cufon.now();
        </script>
</body>
</html>