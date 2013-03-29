<?php //netteCache[01]000414a:2:{s:4:"time";s:21:"0.73835200 1364525170";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:92:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Questionnaire2\default.latte";i:2;i:1364524187;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Questionnaire2\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'lfyol2rmgm')
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
<html lang="en" ng-app>
	<head>
		<!-- META -->
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, minimum-scale=1, maximum-scale=1" />
		<meta name = "apple-mobile-web-app-capable" content = "yes" /> 
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /> 
        <title>CleverFrogs - <?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <link rel="shortcut icon" href="<?php echo htmlSpecialChars($basePath) ?>/favicon.ico" /> 
		
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/component_questionnaire2/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/component_questionnaire2/slider.css" />
        <script src = "<?php echo htmlSpecialChars($basePath) ?>/js/cssrefresh.js"></script>

        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css' />

        <!-- jQuery library -->
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/component_questionnaire2/jquery-ui.css" />
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/jquery-1.9.1.js"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/jquery-ui.js"></script>
        
        <script src = "<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/jquery.blockUI.js"></script>
        <script src = "<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/vendor/bootstrap.js"></script>

        <!-- iosSlider plugin -->
        <script src = "<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/jquery.iosslider.js"></script>
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/animate.css" />
		
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/jquery-lang.js" charset="utf-8" type="text/javascript"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/langpack/en.js" charset="utf-8" type="text/javascript"></script>

        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js"></script>

        <script type="text/javascript">

            window.lang = new jquery_lang_js();

            $(document).ready(function() {

                window.lang.run();
                window.lang.change('en');
                $.myLanguage = 'en';

                $('.iosSlider').iosSlider({
                    scrollbar: false,
                    scrollbarDrag: false,
                    snapSlideCenter: false,
                    desktopClickDrag: false,
                    infiniteSlider: true, 
                    navSlideSelector: $('.iosSliderButtons .button'),
                    scrollbarHeight: '2',
                    scrollbarBorderRadius: '0',
                    scrollbarOpacity: '0.5',
                    onSlideChange: slideContentChange,
                    onSliderLoaded: slideContentChange,
                    scrollbarElasticPullResistance: 0,
                    keyboardControls: false,
                    snapToChildren: false,
                    preventXScroll: true
                });

                $(".bottomBar").css("height","120px");
                $(".iosSliderButtons").css("marginTop","55px");
                $('.submitButton').css('display',"none");
                
                $('img.star').click(function(){
                    
                    $('.submitButton').css('display',"block");

                    $(".iosSliderButtons").animate({ 
                        marginTop: "0px"
                    }, 500 );
                }); 

                $(".iosSlider").css("display","none");

                $(".iosSlider").animate({ 
                    left: "1920px"
                }, 0 );

                $(".iosSlider").css("display","block");
                $(".goAheadTooltip").css("display","none");
                $('.tooltip_emoticon').css('display',"none");

                for (i = 4; i >= 0; i--) {
                  $('.iosSliderButtons #item'+i).click();
                }

                $(".iosSliderButtons > #item0").removeClass("button selected");
                $(".iosSliderButtons > #item0").attr("class","button ");

                $(".button").click(function(){
                    var sectionId = $(this).attr("id").substr(4);
                    
                    $(".tooltips").css("left","75%");
                    $(".tooltips").css("top","-10%");
                    
                    $('#firstTooltip').tooltip('hide');
                    $('.tooltip_emoticon').css("display","none");
                    $('.tooltip_arrow').css("display","none");

                    $(".iosSlider").animate({ 
                        left: "0px"
                    }, 500 );

                    if(sectionId == "0"){
                       $(".iosSliderButtons > #item0").attr("class","button selected");
                    }
                });

                function languageModal(){
                    $('#modal_language').modal({
                        keyboard: false,
                        backdrop: 'static'
                    });
                    $('#modal_language').modal('show');
                }
                languageModal();

            });

            function finishEvaluationModal(){
                    $('#myModal').modal({
                        keyboard: false,
                        backdrop: 'static'
                    });
                    $('#myModal').modal('show');
            }

            function finishSummaryModal(){
                    $('#myModal').modal({
                        keyboard: false,
                        backdrop: 'static'
                    });
                    $('#myModal').modal('show');
            }
            finishSummaryModal();

            function slideContentChange(args) {
                /* indicator */
                $('.iosSliderButtons .button').removeClass('selected');
                $('.iosSliderButtons .button:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
            }
        </script>

	</head>
	<body>
<?php Nette\Latte\Macros\CoreMacros::includeTemplate($page, $template->getParameters(), $_l->templates['lfyol2rmgm'])->render() ?>
	</body>
</html>