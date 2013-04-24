<?php //netteCache[01]000399a:2:{s:4:"time";s:21:"0.88755600 1366764819";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:77:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\@layout.latte";i:2;i:1366764818;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\@layout.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '61vq248nr6')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb4ecce43e4f_title')) { function _lb4ecce43e4f_title($_l, $_args) { extract($_args)
;echo Nette\Templating\Helpers::escapeHtml($basic->website_title, ENT_NOQUOTES) ?>
 <?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ;
}}

//
// block head
//
if (!function_exists($_l->blocks['head'][] = '_lbae7773e986_head')) { function _lbae7773e986_head($_l, $_args) { extract($_args)
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

	<meta name="description" content="<?php echo htmlSpecialChars($basic->website_title) ?>" />
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
    <!--end of <script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtmlComment($basePath) ?>/js/cssrefresh.js"></script>-->

    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/vendor/bootstrap.min.js"></script>

    <!-- LIGHTBOX -->
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

                <a href="http://cleverfrogs.com" class="logo fl"><img src="<?php echo htmlSpecialChars($basePath) ?>
/uploads/basic/<?php echo htmlSpecialChars($basic->logo) ?>" alt="CleverFrogs" /></a>
                
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
<?php $_input = is_object("username") ? "username" : $_form["username"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?>
                                    <div class="span5 pull-left"><?php $_input = (is_object("username") ? "username" : $_form["username"]); echo $_input->getControl()->addAttributes(array()) ?></div>
<?php $_input = is_object("password") ? "password" : $_form["password"]; if ($_label = $_input->getLabel()) echo $_label->addAttributes(array()) ?>
                                    <div class="span2 pull-left input_password"><?php $_input = (is_object("password") ? "password" : $_form["password"]); echo $_input->getControl()->addAttributes(array()) ?></div>
                                    <div class="span1 pull-left">
                                        <input id="frmsignInForm-login" class="btn btn-primary" type="submit" value="Login" name="login" />
                                    </div>
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
                        <div class="title">you are loged in. | <a href="<?php echo htmlSpecialChars($_control->link("Admin:default")) ?>
">Admin</a></div>
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
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Action<span><?php echo Nette\Templating\Helpers::escapeHtml($basic->website_title, ENT_NOQUOTES) ?></span></a>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                            <li><a tabindex="-1" href="#">Action</a></li>
                                            <li><a tabindex="-1" href="#">Another action</a></li>
                                            <li><a tabindex="-1" href="#">Something else here</a></li>
                                        </ul>
                                </li>
                                <li><a href="http://cleverfrogs.com">Home<span><?php echo Nette\Templating\Helpers::escapeHtml($basic->website_title, ENT_NOQUOTES) ?></span></a></li>
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
                        <p class="subInfo">
                            Get the latest information about our project.
                        </p>
                        <fieldset>
                            <div class="input-append">
                                <input class="span2" name="req1" id="appendedInputButton" type="text" id="inputWarning" autocomplete="OFF" />
                                <button type="submit" class="btn subscription" type="button">Subscribe</button>
                            </div>
                        </fieldset>
                        <a href="#" class="policy">Terms & conditions</a>
                    </div><!--end of span4-->

                    <div class="span4  lastCol">
                        <h5 class="colorWhite">Contact Us</h5>
                        <p>
                            Contact us by <a href="<?php echo htmlSpecialChars($_control->link("Contact:")) ?>">Contact formular</a>.
                        </p>
                        <p>
                            <div id="fb-root"></div>
                            <script>(function(d, s, id) {
                              var js, fjs = d.getElementsByTagName(s)[0];
                              if (d.getElementById(id)) return;
                              js = d.createElement(s); js.id = id;
                              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
                              fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));</script>

                            <div class="fb-like" data-href="http://www.facebook.com/pages/Cleverfrogs/486886951375098" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="lucida grande"></div>
                            
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
        <?php if($title != "Gallery" && $title != "Home" ){  
            echo '<script src="http://code.jquery.com/jquery-2.0.0.min.js"></script>';
        }
?>


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

            function validateEmail($email) {
              var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
              if( !emailReg.test( $email ) ) {
                return false;
              } else {
                return true;
              }
            }

            function saveSubscription(email){
                $.ajax({    
                  type: "POST",
                  url: "?do=jsonSaveSubscription",
                  data: {email:email},
                  dataType: "html",   
                  success: function(msg){ 
                      if(parseInt(msg)!=0)    
                      {
                        $('.subInfo').html("Thank you for subscription. <br> Your email was saved to database.");
                        $('.subInfo').css("color","#81bc00");
                        $('.subInfo').css("font-size","12px");
                        $("#appendedInputButton").val("");
                        $("#appendedInputButton").attr("disabled","true");
                        $(".subscription").attr("disabled","true");
                        return false;
                      }
                  }
                }); 
            }

            $(".subscription").click(function() {
                if( validateEmail($("#appendedInputButton").val()) && $("#appendedInputButton").val() != "") { 
                    saveSubscription($("#appendedInputButton").val());
                    return false;
                }
                else {
                    $('.subInfo').html("Please enter valid email adress.");
                    $('.subInfo').css("color","red");
                    $('.subInfo').css("font-size","15px");
                }
            });


        </script>

        

</body>
</html>