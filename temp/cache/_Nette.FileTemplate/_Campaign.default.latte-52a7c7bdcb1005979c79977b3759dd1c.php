<?php //netteCache[01]000408a:2:{s:4:"time";s:21:"0.65824400 1362281880";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:86:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Campaign\default.latte";i:2;i:1362281868;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Campaign\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'j853i68vll')
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
<html ng-app>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content="CleverFrogs" />
<?php if (isset($robots)): ?>    <meta name="robots" content="<?php echo htmlSpecialChars($robots) ?>" />
<?php endif ?>
    <meta name="viewport" content="width=device-width" />
    <META name="robots" content="all,follow,index" />
    <META content="en" http-equiv="Content-language" />
    <META name="resource-type" content="phpfile" />

    <title>CleverFrogs <?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ?></title>

     <!-- Mobile viewport optimized: h5bp.com/viewport -->
    <meta name="viewport" content="width=device-width" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->
    <LINK rel="icon" type="image/x-icon" href="./favicon.ico" />
    <LINK rel="shortcut icon" type="image/x-icon" href="<?php echo htmlSpecialChars($basePath) ?>/favicon.ico" />

    <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/reset.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/campaign_formular.css" type="text/css" />
    <!--end of <script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtmlComment($basePath) ?>/js/cssrefresh.js"></script>-->

    <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/bootstrap-responsive.css" />
    
    <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery-1.7.2.min.js"></script>
    
    <link href='http://fonts.googleapis.com/css?family=Fredoka+One|Open+Sans:400,700' rel='stylesheet' type='text/css' />

    <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/netteForms.js"></script>
</head>

<body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <script type="text/javascript">
        function submitFeedback(ps_id,campaign_id){
            ajaxStartSubmitFeedback(ps_id,campaign_id);
        }

        function ajaxStartSubmitFeedback(ps_id, campaign_id){
           ajaxSubmitFeedback(ps_id,campaign_id);
           return false;
        }

        function ajaxSubmitFeedback(ps_id,campaign_id){
            
            $.ajax({    //create an ajax request to load_page.php
              type: "POST",
              url: "?do=jsonSubmitFeedback",
              data: { ps_id: ps_id, campaign_id: campaign_id },
              dataType: "html",   //expect html to be returned
              success: function(msg){ 

                  if(parseInt(msg)!=0)    //if no errors
                  {
                    console.log("DONE");
                  }

              }
          });
        }
    </script>

    <div class="container">
        <ul class="thumbnails">
<?php $iterations = 0; foreach ($products_services as $ps): ?>
                <li class="span6">
                    <div class="span6">
                        <a class="thumbnail" id="product_service" onclick="JavaScript:submitFeedback(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($ps->ps_id)) ?>
,<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($campaign_id)) ?>)"">
                            <img src="<?php echo htmlSpecialChars($basePath) ?>/www/uploads/ps/<?php echo htmlSpecialChars($ps->category_id) ?>
/<?php echo htmlSpecialChars($ps->image) ?>" />
                        </a>
                    </div>
                    <div class="span6">
                        <h3><?php echo Nette\Templating\Helpers::escapeHtml($ps->title, ENT_NOQUOTES) ?></h3>
                        <p class="description"><?php echo Nette\Templating\Helpers::escapeHtml($ps->description, ENT_NOQUOTES) ?></p>
                    </div>
                </li>
<?php $iterations++; endforeach ?>
        </ul>
    </div>

    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/plugins.js"></script>

    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/cufon.js" type="text/javascript"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/Aller_400.font.js" type="text/javascript"></script>

    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js"></script>

    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/vendor/bootstrap.js"></script>

    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/jCarouselLite.js" type="text/javascript"></script>
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/functions.js" type="text/javascript"></script>
    
    <!-- LIGHTBOX JS -->
    <script src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.smooth-scroll.min.js"></script>

    
</body>
</html>