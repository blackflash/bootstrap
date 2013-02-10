<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!-- Consider adding a manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/i/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title><?php echo $title; ?></title>
  <!-- META TAGY -->
  <META name="robots" content="all,follow,index">
  <META content="cs" http-equiv="Content-language">
  <META name="description" content="cleverfrogs.com - Navrhovanie a vytvaranie riešení pre mobilnú zákaznicku spätnú väzbu. Zber, spracovanie a analýza zákaznickej spätnej väzby.">
  <META name="keywords" content="spätná väzba, názor, reštaurácie, bufety, dotazník, hodnotenie">
  <META name="copyright" content="cleverfrogs.com 2012">
  <META name="author" content="cleverfrogs.com 2012">
  <META name="resource-type" content="phpfile">
    <meta property="og:image" content="http://test.cleverfrogs.com/img/logoSK.png"/> 

  <!-- Mobile viewport optimized: h5bp.com/viewport -->
  <meta name="viewport" content="width=device-width">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="<?php echo base_url(); ?>default.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery.rating.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/custom-theme/jquery-ui-1.8.22.custom.css" type="text/css" />
  <script src="<?php echo base_url(); ?>js/cssrefresh.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/feedbackStyle.css">
  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except this Modernizr build.
       Modernizr enables HTML5 elements & feature detects for optimal performance.
       Create your own custom Modernizr build: www.modernizr.com/download/ -->
  <script src="<?php echo base_url(); ?>js/libs/modernizr-2.5.3.min.js"></script>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
  <!--<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script> -->
  <script src="<?php echo base_url(); ?>js/jquery.easy-confirm-dialog.js"></script>
  <script src="<?php echo base_url()?>js/scriptaculous.js?load=effects,builder"   type="text/javascript"  ></script>
  


  <script src='http://jquery-star-rating-plugin.googlecode.com/svn/trunk/jquery.MetaData.js' type="text/javascript" language="javascript"></script>
  <script src='http://jquery-star-rating-plugin.googlecode.com/svn/trunk/jquery.rating.js' type="text/javascript" language="javascript"></script>
  <script src='http://jquery-fyneworks.googlecode.com/svn/trunk/documentation/documentation.js' type="text/javascript"></script>

</head>
<!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
       mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-34299154-1'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>
<body>
  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  
  <div id="lineTop">
    <div id="greenTop">
     <?php if($title == "Cleverfrogs firma" || $title == "Cleverfrogs spotrebitelia"
        || $title == "Cleverfrogs aplikacie" || $title == "Cleverfrogs statistiky" || $title == "Cleverfrogs produkty"
        || $title == "Cleverfrogs spatna_vazba" || $title == "Cleverfrogs FAQsk" || $title == "Cleverfrogs registracia"
        || $title == "Cleverfrogs kontakt" || $title == "Cleverfrogs domov" || $title == "Cleverfrogs prihlásiť sa" || $title == "Cleverfrogs profil"){ ?>
        <div id="menu">
            <?php include("includes/menuSK.php"); ?>
        </div><!-- end of menu-->
      <?php } ?>

      <?php if($title == "Cleverfrogs company" || $title == "Cleverfrogs customer" 
            || $title == "Cleverfrogs apps" || $title == "Cleverfrogs statistics"|| $title == "Cleverfrogs products"
            || $title == "Cleverfrogs FAQ" || $title == "Cleverfrogs give_feedback"
            || $title == "Cleverfrogs contact" || $title == "Cleverfrogs home" || $title == "Cleverfrogs login"){ ?>
          <div id="menu">
            <?php include("includes/menuEN.php"); ?>
          </div><!-- end of menu-->
      <?php } ?>

    </div> 

    <div id="pinkTop"></div> 
    <a href="<?php echo base_url(); ?>"> 
      <img src="<?php echo base_url() ?>img/<?php echo $logo; ?>" class="logoSK" alt="cleverfrogs">
    </a>

    <div id="login">
      <?php 
        if(!isset($username)){
          echo '<a href="#" class="loginLink">Prihlásenie</a>';
        } else  
          echo '<div class="logoutLink">Vitaj, '.$username.' <a href="'.base_url().'auth/logout"  >Odhlásiť</a></div>';
      ?>
      <?php  if(!isset($username)){ ?>
      <a href="<?php echo base_url(); ?>auth/register/<?php echo $this->uri->segment(1); ?>" class="registerLink">Registrácia</a>
       <?php  } ?>
    </div>

    <?php 
      
        if($this->uri->segment(1) == "en"){
            
          if(isset($pop))
          switch ($pop) {
            case '1':
            include("includes/dialogEn1.php");
            break;
            case '2':
            include("includes/dialogSubscriptionEn.php");
            break;
            case '3':
            include("includes/dialogNoSubscriptionEn.php");
            break;
            case 'notActivated':
            include("includes/dialogNoActivated.php");
            break;
            case 'registerSuccess':
            include("includes/dialogRegisterSuccess.php");
            break;
          }

          if(isset($pop)) if($pop != "1")
              include("includes/dialogEnLogin.php"); 
        }

        if($this->uri->segment(1) == "sk" || $this->uri->segment(1) == ""){
          if(isset($pop))
          switch ($pop) {
            case '1':
              include("includes/dialog1.php"); 
            break;
            case '2':
              include("includes/dialogSubscriptionSk.php"); 
            break;
            case '3':
              include("includes/dialogNoSubscriptionSk.php"); 
            break;
            case 'notActivated':
            include("includes/dialogNoActivated.php");
            break;
            case 'registerSuccess':
            include("includes/dialogRegisterSuccess.php");
            break;
          }
              if(isset($pop)) if($pop != "1")
              include("includes/dialogLogin.php"); 

        }
      
     include("includes/header.php"); ?>

  </div>
  
  <div id="container">
  
      <div role="main">
        <?php include($view);?>
      </div><!-- end of main-->
      
  </div><!-- end of container-->

 <div id="copyright">
  <?php 
      if($this->uri->segment(1) == "sk"){
          include("includes/copyright.php"); 
      }else {
          include("includes/copyrightEN.php"); 
      }
  ?>
 </div>

  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>js/libs/jquery-1.7.1.min.js"><\/script>')</script>
  <script src="<?php echo base_url()?>js/jquery-ui-1.8.22.custom.min.js"   type="text/javascript"  ></script>
  
  <script src="<?php echo base_url()?>js/functions.js" type="text/javascript"></script>
  <script src="<?php echo base_url()?>js/jCarouselLite.js" type="text/javascript"></script>
        
  <script type="text/javascript">
      Cufon.replace("h1, h3", {hover: true});
      Cufon.replace("ul#nav li a", {hover: true});
      Cufon.replace('div#homeBottomRegister form [type="submit"]', {hover: true});    
      Cufon.replace("blockquote p"); 
  </script>


  <!-- end scripts -->

  
</body>
</html>