<?php //netteCache[01]000408a:2:{s:4:"time";s:21:"0.20011000 1366765390";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:86:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Campaign\default.latte";i:2;i:1366765389;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Campaign\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'hisn1shjw9')
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
        <title>CleverFrogs - Campaign</title>
        <link rel="shortcut icon" href="../favicon.ico" /> 
        <link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/campaign/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/campaign/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/campaign/custom.css" />
        <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/campaign/modernizr.custom.79639.js"></script>
        <!--end of <script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtmlComment($basePath) ?>/js/cssrefresh.js"></script>-->
        <noscript>
            <link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/campaign/styleNoJS.css" />
        </noscript>

    </head>
    <body>
        
        <script type="text/javascript">

            function submitFeedback(ps_id,campaign_id){
                $.ajax({    
                  type: "POST",
                  url: "?do=jsonsubmitFeedback",
                  data: { ps_id: ps_id, campaign_id: campaign_id},
                  dataType: "json",   
                  success: function(msg){ 
                      if(parseInt(msg)!=0)    
                      {
                        console.log("ok");
                        return false;
                      }
                  }
                }); 
                return false;
            }
        </script>

        <div class="container demo-2">
            <header class="clearfix">
                <h1>Campaign <span><?php echo Nette\Templating\Helpers::escapeHtml($campaign->title, ENT_NOQUOTES) ?></span></h1>
                <img src="<?php echo htmlSpecialChars($basePath) ?>/img/logoB.png" alt="CleverFrogs" style="width: 300px; float: right; " />
            </header>

            <div id="slider" class="sl-slider-wrapper">

                <div class="sl-slider">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($products_services) as $ps): ?>
                        <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                            <div class="sl-slide-inner">
                                <div class="bg-img bg-img-<?php echo htmlSpecialChars($iterator->counter) ?>">
<?php if ($show_description == 1): ?>
                                    <a class="thumbnail" id="product_service" onclick="JavaScript:submitFeedback(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($ps->ps_id)) ?>
,<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($campaign_id)) ?>)">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>
/www/uploads/ps/<?php echo htmlSpecialChars($ps->category_id) ?>/<?php echo htmlSpecialChars($ps->image) ?>" />
                                    </a>
<?php endif ?>

<?php if ($show_description == 0): ?>
                                    <a class="fullSize" id="product_service" onclick="JavaScript:submitFeedback(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($ps->ps_id)) ?>
,<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($campaign_id)) ?>)">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>
/www/uploads/ps/<?php echo htmlSpecialChars($ps->category_id) ?>/<?php echo htmlSpecialChars($ps->image) ?>" />
                                    </a>
<?php endif ?>

                                </div>
<?php if ($show_title == 1): ?>
                                <h2><?php echo Nette\Templating\Helpers::escapeHtml($ps->title, ENT_NOQUOTES) ?></h2>
<?php endif ;if ($show_description == 1): ?>
                                        <blockquote><p><?php echo Nette\Templating\Helpers::escapeHtml($ps->description, ENT_NOQUOTES) ?></p></blockquote>
<?php endif ?>
                            </div>
                        </div>
<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>

                    <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
                        <div class="sl-slide-inner">
                            <div class="bg-img bg-img-1"></div>
                            <h2>A bene placito.</h2>
                            <blockquote><p>You have just dined, and however scrupulously the slaughterhouse is concealed in the graceful distance of miles, there is complicity.</p><cite>Ralph Waldo Emerson</cite></blockquote>
                        </div>
                    </div>

                </div><!-- /sl-slider -->

                <nav id="nav-dots" class="nav-dots">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($products_services) as $ps): ?>
                        <span <?php if ($iterator->first): ?>class="nav-dot-current"<?php endif ?> /></span>
<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
                </nav>

            </div><!-- /slider-wrapper -->

            <div class="content-wrapper">
                <h2>About</h2>
                <p><?php echo Nette\Templating\Helpers::escapeHtml($campaign->description, ENT_NOQUOTES) ?></p>
            </div>

        </div>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/campaign/jquery.ba-cond.min.js"></script>
        <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/campaign/jquery.slitslider.js"></script>
        <script type="text/javascript"> 
            $(function() {
            
                var Page = (function() {

                    var $nav = $( '#nav-dots > span' ),
                        slitslider = $( '#slider' ).slitslider( {
                            onBeforeChange : function( slide, pos ) {
                                $nav.removeClass( 'nav-dot-current' );
                                $nav.eq( pos ).addClass( 'nav-dot-current' );
                            }
                        } ),

                        init = function() {
                            initEvents();
                        },
                        initEvents = function() {
                            $nav.each( function( i ) {
                            
                                $( this ).on( 'click', function( event ) {
                                    
                                    var $dot = $( this );
                                    
                                    if( !slitslider.isActive() ) {
                                        $nav.removeClass( 'nav-dot-current' );
                                        $dot.addClass( 'nav-dot-current' );
                                    }
                                    slitslider.jump( i + 1 );
                                    return false;
                                });
                            } );
                        };
                        return { init : init };
                })();

                Page.init();

                /**
                 * Notes: example how to add items:
                 */
                var $items  = $('<div class="sl-slide sl-slide-color-2" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1"><div class="sl-slide-inner bg-1"><div class="sl-deco" data-icon="t"></div><h2>some text</h2><blockquote><p>bla bla</p><cite>Margi Clarke</cite></blockquote></div></div>');
                
                // call the plugin's add method
                ss.add($items);
            
            });
        </script>
    </body>
</html>