<?php //netteCache[01]000399a:2:{s:4:"time";s:21:"0.23304600 1362529818";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:77:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\@layout.latte";i:2;i:1362529664;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 's7a1mbdi36')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb91c713fa5a_title')) { function _lb91c713fa5a_title($_l, $_args) { extract($_args)
?>CleverFrogs <?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ;
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lb3cb590aa2a_head')) { function _lb3cb590aa2a_head($_l, $_args) { extract($_args)
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
<html ng-app>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<meta name="description" content="CleverFrogs" />
<?php if (isset($robots)): ?>	<meta name="robots" content="<?php echo htmlSpecialChars($robots) ?>" />
<?php endif ?>
    <meta name="viewport" content="width=device-width" />
    <META name="robots" content="all,follow,index" />
    <META content="en" http-equiv="Content-language" />
    <META name="resource-type" content="phpfile" />

	<title><?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
ob_start(); call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()); echo $template->strip($template->stripTags(ob_get_clean()))  ?></title>

     <!-- Mobile viewport optimized: h5bp.com/viewport -->
    <meta name="viewport" content="width=device-width" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
    <LINK rel="icon" type="image/x-icon" href="./favicon.ico" />
    <LINK rel="shortcut icon" type="image/x-icon" href="<?php echo htmlSpecialChars($basePath) ?>/favicon.ico" />

    <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/default.css" type="text/css" />

    <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/bootstrap-responsive.css" />
    <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/cssrefresh.js"></script>

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
            <div class="container">

                <a href="http://cleverfrogs.com" class="logo fl"><img src="<?php echo htmlSpecialChars($basePath) ?>/img/logoB.png" alt="CEIT-KE" /></a>
                
<?php if (!$user->isLoggedIn()): ?>
                <div id="topContactInfo" class="fr">

                    <ul>
                        <li>
<?php Nette\Latte\Macros\FormMacros::renderFormBegin($form = $_form = (is_object("signInForm") ? "signInForm" : $_control["signInForm"]), array()) ;$iterations = 0; foreach ($form->errors as $error): ?>                                <div class="alert alert-error loginError">
<?php if ($error): ?>
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Warning!</strong> 
<?php if ($form->hasErrors()): ?>                                    <ul class="errors">
                                            <li><?php echo Nette\Templating\Helpers::escapeHtml($error, ENT_NOQUOTES) ?></li>
                                    </ul>
<?php endif ;endif ?>
                                </div>
<?php $iterations++; endforeach ?>
                                
                                <div class="sign-in-form">
<?php if ($_label = $_form["username"]->getLabel()) echo $_label->addAttributes(array()) ?>
                                    <div class="span5 pull-left"><?php echo $_form["username"]->getControl()->addAttributes(array()) ?></div>
<?php if ($_label = $_form["password"]->getLabel()) echo $_label->addAttributes(array()) ?>
                                    <div class="span2 pull-left input_password"><?php echo $_form["password"]->getControl()->addAttributes(array()) ?></div>
                                    <div class="span1 pull-left"><?php echo $_form["login"]->getControl()->addAttributes(array()) ?></div>
                                </div>
<?php Nette\Latte\Macros\FormMacros::renderFormEnd($_form) ?>
                        </li>
                    </ul>
                </div> <!-- end of topContactInfo-->
<?php endif ?>

<?php if ($user->isLoggedIn()): ?>
                    <div id="loginPanel"  class="fr">
<?php $iterations = 0; foreach ($flashes as $flash): ?>                        <div class="flash <?php echo htmlSpecialChars($flash->type) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($flash->message, ENT_NOQUOTES) ?></div>
<?php $iterations++; endforeach ?>
                        <div class="title">you are loged in.</div>
                        <div class="user">
                            <span class="icon user"><?php echo Nette\Templating\Helpers::escapeHtml($user->getIdentity()->name, ENT_NOQUOTES) ?></span> |
                            <a href="<?php echo htmlSpecialChars($_control->link("signOut!")) ?>
">Logout</a>
                        </div>
                    </div>
<?php endif ?>
                
            </div><!--end of centerContainer-->

        <div class="navbar navbar-inverse">
            <div class="navbar-inner">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="nav-collapse collapse">
                    <div class="centerMenu">
                        <ul class="nav" id="nav">
                                <li><a href="<?php echo htmlSpecialChars($basePath) ?>">Home<span>CleverFrogs</span></a></li>
                                <li><a href="<?php echo htmlSpecialChars($_control->link("Team:")) ?>">Team<span>Team members</span></a></li>
                                <li><a href="<?php echo htmlSpecialChars($_control->link("PhotoGallery:")) ?>#slide-main">Gallery<span>photo & video</span></a></li>
                                <li><a href="<?php echo htmlSpecialChars($_control->link("Contact:")) ?>">Contact<span>Contact us</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

<?php Nette\Latte\Macros\UIMacros::callBlock($_l, 'content', $template->getParameters()) ?>

        <div class="blankSeparator"></div>

        <div id="footerContainer">
            <div class="container">
                <div class="row copyrightColumns">
                    <div class="span4">
                        <div id="footerProducts">
                            <h5 class="colorWhite">About project</h5>
                            <a href='#'>news</a>
                        </div><!--end of footerProducts-->
                        <div id="footerProjects">
                            <h5 class="colorWhite">Projects</h5>
                            <a href="#">Project CleverFrogs</a>
                        </div>
                    </div><!--end of span4-->

                    <div class="span4">
                        <h5 class="colorWhite">Newsletter subscription</h5>
                        <p>
                            Get the latest information about our project.
                        </p>

                        <form action="" method="get">
                            <fieldset>
                                <div class="input-append">
                                    <input class="span2" id="appendedInputButton" type="text" />
                                    <button class="btn" type="button">Subscribe</button>
                                </div>
                            </fieldset>
                        </form>
                        <a href="#" class="policy">Terms & conditions</a>
                    </div><!--end of span4-->

                    <div class="span4  lastCol">
                        <h5 class="colorWhite">Contact Us</h5>
                        <p>
                            Contact us by <a href="<?php echo htmlSpecialChars($_control->link("Contact:")) ?>">Contact formular</a>.
                        </p>
                    </div><!--end of span4-->
                </div><!--end of span4-->

            </div><!--end of centerContainer-->
        </div><!--end of footerContainer-->


        <div id="copyrightContainer">
            <div class="container">
                <p id="bottomCopyright" class="fr">
                </p>
                <small class="colorWhite copyrightText">&copy; Copyright AMBI s.r.o. All rights reserved. </small>
            </div><!--end of centerContainer-->
        </div><!--end of copyrigtContainer-->




        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/plugins.js"></script>

        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/cufon.js" type="text/javascript"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/Aller_400.font.js" type="text/javascript"></script>

        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js"></script>

        <!--end of oddelenie js kvoli prettyPhoto.js-->
        <?php if($title != "Gallery"){  
            echo '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>';
        }
?>


        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/vendor/bootstrap.js"></script>

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
        var _gaq=[['_setAccount','UA-34299154-1'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
      </script>

        <script type="text/javascript">
            Cufon.now();
        </script>
</body>
</html>