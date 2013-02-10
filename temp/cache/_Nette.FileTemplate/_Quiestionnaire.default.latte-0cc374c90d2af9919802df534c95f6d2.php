<?php //netteCache[01]000414a:2:{s:4:"time";s:21:"0.06933500 1360040271";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:92:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Quiestionnaire\default.latte";i:2;i:1360040270;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Quiestionnaire\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'rtbd5p80fp')
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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content="CleverFrogs" />
<?php if (isset($robots)): ?>    <meta name="robots" content="<?php echo htmlSpecialChars($robots) ?>" />
<?php endif ?>
    <meta name="viewport" content="width=device-width" />
    <META name="robots" content="all,follow,index" />
    <META content="en" http-equiv="Content-language" />
    <META name="resource-type" content="phpfile" />

    <title>Quiestionnaire</title>

     <!-- Mobile viewport optimized: h5bp.com/viewport -->
    <meta name="viewport" content="width=device-width" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
    <LINK rel="icon" type="image/x-icon" href="./favicon.ico" />
    <LINK rel="shortcut icon" type="image/x-icon" href="<?php echo htmlSpecialChars($basePath) ?>/favicon.ico" />


    <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/bootstrap-responsive.css" />
    

    <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/netteForms.js"></script>
</head>

<body>

    <div class="container">

        <center><h2 class="form-signin-heading">Which type of dish you welcome in our menu in the future ?</h2></center>
        <br />
        <form name="Quiestionnaire" method="POST" action="?do=feedback1">

        <div class="row-fluid">
            <div class="span12">
                    <div class="row-fluid">
                        <div class="span6">
                            <button type="submit" name="button" value="1" ><img  src="<?php echo htmlSpecialChars($basePath) ?>/img/feedbacks/exa_1.jpg" /></button>
                        </div>
                        <div class="span6">
                            <button type="submit" name="button" value="2"><img  src="<?php echo htmlSpecialChars($basePath) ?>/img/feedbacks/exa_2.jpg" /></button>
                        </div>
                    </div>

                    <br />

                    <div class="row-fluid">
                        <div class="span6">
                            <button type="submit" name="button" value="3"><img  src="<?php echo htmlSpecialChars($basePath) ?>/img/feedbacks/exa_3.jpg" /></button>
                        </div>
                        <div class="span6">
                            <button type="submit" name="button" value="4"><img  src="<?php echo htmlSpecialChars($basePath) ?>/img/feedbacks/exa_4.jpg" /></button>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    </form>

    </div> <!-- /container -->

    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/plugins.js"></script>

    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/cufon.js" type="text/javascript"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/Aller_400.font.js" type="text/javascript"></script>

    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js"></script>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo Nette\Templating\Helpers::escapeJs($basePath) ?>/js/vendor/jquery-1.9.0.min.js"><\/script>')</script>

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