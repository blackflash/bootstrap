<?php //netteCache[01]000414a:2:{s:4:"time";s:21:"0.78977900 1364173449";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:92:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Questionnaire2\default.latte";i:2;i:1364173399;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Questionnaire2\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'lyhzljh779')
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
        <title>Questionnaire</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
        <link rel="shortcut icon" href="<?php echo htmlSpecialChars($basePath) ?>/favicon.ico" /> 
		
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/component_questionnaire2/bootstrap.css" />
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/component_questionnaire2/slider.css" />
        <!--end of <script src = "<?php echo Nette\Templating\Helpers::escapeHtmlComment($basePath) ?>/js/cssrefresh.js"></script>-->

        <link href='http://fonts.googleapis.com/css?family=Josefin+Slab:400,700' rel='stylesheet' type='text/css' />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css' />

        <!-- jQuery library -->
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/component_questionnaire2/jquery-ui.css" />
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/jquery-1.9.1.js"></script>
        <script src="<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/jquery-ui.js"></script>
        
        <script src = "<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/jquery.blockUI.js"></script>
        <script src = "<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/vendor/bootstrap.min.js"></script>

        <!-- iosSlider plugin -->
        <script src = "<?php echo htmlSpecialChars($basePath) ?>/js/component_questionnaire2/jquery.iosslider.js"></script>
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/animate.css" />
		
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js"></script>

        <script type="text/javascript">

            $(document).ready(function() {
                
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



                function clickOnButton(id){
                    $('.iosSliderButtons #item'+id).click();
                }
                

                $(".iosSlider").css("display","none");

                 $(".iosSlider").animate({ 
                        left: "1920px"
                    }, 0 );

                $(".iosSlider").css("display","block");
               

                $('#firstTooltip').tooltip({
                    placement : 'top',
                    title : 'Začnite voľbou sekcie, ktorú chete ohodnotiť. ',
                });

                $('#secondTooltip').tooltip({
                    placement : 'top',
                    title : 'Ak máte záujem môžete ohodnotiť aj ďalšie sekcie. ',
                });
                $('#secondTooltip').tooltip('show');

                $(".goAheadTooltip").css("display","none");

                $('#firstTooltip').tooltip('show');
                $('.tooltip_emoticon').addClass('animated tada');
                $('.tooltip_arrow').addClass('animated bounce');

                var counter = 0;
                for (i = 4; i >= 0; i--) {
                  clickOnButton(i);
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
            });

            function finishEvaluationModal(){
                    $('#myModal').modal({
                        keyboard: false,
                        backdrop: 'static'
                    });
                    $('#myModal').modal('show');
            }

            function finishSummaryModal(){
                    $('#myModal@').modal({
                        keyboard: false,
                        backdrop: 'static'
                    });
                    $('#myModal@').modal('show');
            }

            function slideContentChange(args) {
                /* indicator */
                $('.iosSliderButtons .button').removeClass('selected');
                $('.iosSliderButtons .button:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
            }
            finishSummaryModal();
        </script>

	</head>
	<body>
		<div class="st-container">

            <div class="timer" style="display: none;">
                <div class="summaryThanksSpinner">Ďakujeme za Váš názor.</div>
                <img class="spinner" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/spinner2.gif" />
                <div class="summaryTextComp">Dáta sa spracovávajú...</div>
                <div class="summaryThanksSpinner_2">Prajeme Vám príjemny zvyšok dňa.</div>
            </div><!--end of timer-->
            
            <div id="myModal2" class="modal hide fade language" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-header">
                <h3 id="myModalLabel"><img class="logoCompanySubmit" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire2/logo_thumb.png" /></h3>
                </div>
                <div class="modal-body">
                    <div class="summaryCompetition">
                        <div class="summaryThanks"><h3>Zvoľte jazyk</h3></div>
                        <div class="flags">
                            <div class="flag_uk">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">
                                    <img src="<?php echo htmlSpecialChars($basePath) ?>/www/img/flags/uk.png" />
                                </button>
                            </div>
                            <div class="flag_uk">
                                <button class="btn" data-dismiss="modal" aria-hidden="true">
                                    <img src="<?php echo htmlSpecialChars($basePath) ?>/www/img/flags/sk.png" />
                                </button>
                            </div>
                        </div>
                    </div><!--end of summaryCompetition-->
                </div>
            </div>
		     
		    <!-- Modal -->
		    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-header">
			    <h3 id="myModalLabel"><img class="logoCompanySubmit" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire2/logo_thumb.png" /></h3>
			    </div>
			    <div class="modal-body">
                    <div class="summaryCompetition">
                        <div class="summaryThanks"><h3>Ďakujeme za Vašu spätnú väzbu !</h3></div>

                        <div class="summaryTextComp">Prosíme vyplňte Vaše číslo izby.</div>
                        <div class="summaryEmail">
                            <input class="input-xxlarge roomInput" type="text" placeholder="Vaše číslo izby" required />
                        </div>
                        <div>
                            <div class="summaryText">Aké je Vaše celkové hodnotenie ?</div>
                            <div class="summaryStar">
                                <img class="button561 star summaryEvaluation" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" g="5" question="6" rate="1" />
                                <img class="button562 star summaryEvaluation" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" g="5" question="6" rate="2" />
                                <img class="button563 star summaryEvaluation" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" g="5" question="6" rate="3" />
                                <img class="button564 star summaryEvaluation" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" g="5" question="6" rate="4" />
                            </div>
                            <div class="attention a56" style="display: none;">Prosíme ohodnoťte túto otázku</div>
                        </div>

                    </div><!--end of summaryCompetition-->
			    </div>
			    <div class="modal-footer">
                    <button class="btn btn-large btn-block" data-dismiss="modal" aria-hidden="true">Späť k hodnoteniu</button>
                    <button class="btn btn-large btn-block btn-primary" onclick="summarySend();">Potvrdiť</button>
                </div>
		    </div>

			<div class="score" style="display:none;">Score: <div class="scoreValue">0</div></div>
            <img class="logoCompany" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire2/logo_thumb.png" />

            <!--                                      ANGULAR                                         -->
            <script type="text/javascript">

                $.showEmos = { 
                    emo0 : 0, 
                    emo1 : 0, 
                    emo2 : 0, 
                    emo3 : 0, 
                    emo4 : 0,
                    showed: 0,
                }; 

                function QuestionsCounter($scope){
                    $scope.checkShowEmo = function(){
                        if($.showEmos.emo0 == 4 && $.showEmos.showed == 0){
                            $(".goAheadTooltip").css("display","block");
                            $(".goAheadTooltip").addClass("animated tada");
                            $.showEmos.showed = 1;
                        } else if($.showEmos.emo1 == 3 && $.showEmos.showed == 0){
                            $(".goAheadTooltip").css("display","block");
                            $(".goAheadTooltip").addClass("animated tada");
                            $.showEmos.showed = 1;
                        } else if($.showEmos.emo2 == 4 && $.showEmos.showed == 0){
                            $(".goAheadTooltip").css("display","block");
                            $(".goAheadTooltip").addClass("animated tada");
                            $.showEmos.showed = 1;
                        } else if($.showEmos.emo3 == 6 && $.showEmos.showed == 0){
                            $(".goAheadTooltip").css("display","block");
                            $(".goAheadTooltip").addClass("animated tada");
                            $.showEmos.showed = 1;
                        } else if($.showEmos.emo4 == 6 && $.showEmos.showed == 0){
                            $(".goAheadTooltip").css("display","block");
                            $(".goAheadTooltip").addClass("animated tada");
                            $.showEmos.showed = 1;
                        }
                            

                        return $.showEmos;
                    }
                }
            </script>

            <div class="emoSummary" style="display: none;" ng-controller="QuestionsCounter">{{ checkShowEmo()}}</div>

			<div class = 'iosSlider'>
				<div class = 'slider'>
					<div class = 'item' id = 'item0'>
						<p class="question">Ako ste boli spokojní s rezervačným oddelením ?</p>

						<div class=" starsRatingSystem g0">
                            <div class="row g0q0">
                                <div class="span2">
                                    <p class="color0" style="width: 35%;">Rýchlosť a profesionalita:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button001" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png"  g="0" q="00" question="0" rate="1" ng-click />
                                    <img class="star button002" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png"  g="0" q="00" question="0" rate="2" ng-click />
                                    <img class="star button003" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png"  g="0" q="00" question="0" rate="3" ng-click />
                                    <img class="star button004" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png"  g="0" q="00" question="0" rate="4" ng-click />
                                </div>
                                <div class="attention a00" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row g0q1">
                                <div class="span2">
                                    <p class="color1" style="width: 35%;">Presnosť:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button011" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="01" g="0" question="1" rate="1" ng-click />
                                    <img class="star button012" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="01" g="0" question="1" rate="2" ng-click />
                                    <img class="star button013" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="01" g="0" question="1" rate="3" ng-click />
                                    <img class="star button014" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="01" g="0" question="1" rate="4" ng-click />
                                </div>
                                <div class="attention a01" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row g0q2">
                                <div class="span2">
                                    <p class="color2" style="width: 35%;">Ochota pomôcť a priateľskosť:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button021" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="02" g="0" question="2" rate="1" ng-click />
                                    <img class="star button022" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="02" g="0" question="2" rate="2" ng-click />
                                    <img class="star button023" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="02" g="0" question="2" rate="3" ng-click />
                                    <img class="star button024" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="02" g="0" question="2" rate="4" ng-click />
                                </div>
                                <div class="attention a02" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                             <div class="row g0q3">
                                <div class="span2">
                                    <p class="color3" style="width: 35%;">Znalosť rezervačného agenta:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button031" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="03" g="0" question="3" rate="1" ng-click />
                                    <img class="star button032" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="03" g="0" question="3" rate="2" ng-click />
                                    <img class="star button033" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="03" g="0" question="3" rate="3" ng-click />
                                    <img class="star button034" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="03" g="0" question="3" rate="4" ng-click />
                                </div>
                                <div class="attention a03" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>
                            
                        </div><!--end of starRatingSystem-->

						
					</div>
					
					<div class = 'item' id = 'item1'>
						<p class="question">Ako hodnotíte prácu recepcie a príchod do hotela ?</p>
						
						<div class="container starsRatingSystem g1">
                            <div class="row g1q0">
                                <div class="span2">
                                    <p class="color0" style="width: 35%;">Proces registrácie – check in:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button101" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="10" g="1" question="0" rate="1" ng-click />
                                    <img class="star button102" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="10" g="1" question="0" rate="2" ng-click />
                                    <img class="star button103" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="10" g="1" question="0" rate="3" ng-click />
                                    <img class="star button104" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="10" g="1" question="0" rate="4" ng-click />
                                </div>
                                <div class="attention a10" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row g1q1">
                                <div class="span2">
                                    <p class="color1" style="width: 35%;">Proces odubytovania – check out :</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button111" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="11" g="1" question="1" rate="1" ng-click />
                                    <img class="star button112" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="11" g="1" question="1" rate="2" ng-click />
                                    <img class="star button113" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="11" g="1" question="1" rate="3" ng-click />
                                    <img class="star button114" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="11" g="1" question="1" rate="4" ng-click />
                                </div>
                                <div class="attention a11" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row g1q2">
                                <div class="span2">
                                    <p class="color2" style="width: 35%;">Ochota pomôcť a priateľskosť:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button121" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="12" g="1" question="2" rate="1" ng-click />
                                    <img class="star button122" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="12" g="1" question="2" rate="2" ng-click />
                                    <img class="star button123" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="12" g="1" question="2" rate="3" ng-click />
                                    <img class="star button124" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="12" g="1" question="2" rate="4" ng-click />
                                </div>
                                <div class="attention a12" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                        </div><!--end of starRatingSystem-->

					</div>
					
					<div class = 'item' id = 'item2'>
						<p class="question">Ako hodnotíte ubytovanie a kvalitu izieb ?</p>

						<div class="container starsRatingSystem group2">
                            <div class="row q0">
                                <div class="span2">
                                    <p class="color0" style="width: 35%;">Čistota izby:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button201" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="20" g="2" question="0" rate="1" ng-click />
                                    <img class="star button202" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="20" g="2" question="0" rate="2" ng-click />
                                    <img class="star button203" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="20" g="2" question="0" rate="3" ng-click />
                                    <img class="star button204" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="20" g="2" question="0" rate="4" ng-click />
                                </div>
                                <div class="attention a20" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q1">
                                <div class="span2">
                                    <p class="color1" style="width: 35%;">Vybavenie izby:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button211" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="21"  g="2" question="1" rate="1" ng-click />
                                    <img class="star button212" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="21"  g="2" question="1" rate="2" ng-click />
                                    <img class="star button213" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="21"  g="2" question="1" rate="3" ng-click />
                                    <img class="star button214" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="21"  g="2" question="1" rate="4" ng-click />
                                </div>
                                <div class="attention a21" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q2">
                                <div class="span2">
                                    <p class="color2" style="width: 35%;">Atmosféra v hoteli:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button221" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="22" g="2" question="2" rate="1" ng-click />
                                    <img class="star button222" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="22" g="2" question="2" rate="2" ng-click />
                                    <img class="star button223" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="22" g="2" question="2" rate="3" ng-click />
                                    <img class="star button224" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="22" g="2" question="2" rate="4" ng-click />
                                </div>
                                <div class="attention a22" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                             <div class="row q3">
                                <div class="span2">
                                    <p class="color3" style="width: 35%;">Večerný program:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button231" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="23" g="2" question="3" rate="1" ng-click />
                                    <img class="star button232" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="23" g="2" question="3" rate="2" ng-click />
                                    <img class="star button233" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="23" g="2" question="3" rate="3" ng-click />
                                    <img class="star button234" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="23" g="2" question="3" rate="4" ng-click />
                                </div>
                                <div class="attention a23" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>
                        </div><!--end of starRatingSystem-->

					</div>
					
					<div class = 'item' id = 'item3'>
						<p class="question">Ako hodnotíte prácu reštaurácie  ?</p>

						<div class="container starsRatingSystem group3">
                            <div class="row q0">
                                <div class="span2">
                                    <p class="color0" style="width: 35%;">Atmosféra a dekorácie:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button301" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="30" g="3" question="0" rate="1" ng-click />
                                    <img class="star button302" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="30" g="3" question="0" rate="2" ng-click />
                                    <img class="star button303" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="30" g="3" question="0" rate="3" ng-click />
                                    <img class="star button304" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="30" g="3" question="0" rate="4" ng-click />
                                </div>
                                <div class="attention a30" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q1">
                                <div class="span2">
                                    <p class="color1" style="width: 35%;">Raňajkový bufet:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button311" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="31" g="3" question="1" rate="1" ng-click />
                                    <img class="star button312" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="31" g="3" question="1" rate="2" ng-click />
                                    <img class="star button313" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="31" g="3" question="1" rate="3" ng-click />
                                    <img class="star button314" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="31" g="3" question="1" rate="4" ng-click />
                                </div>
                                <div class="attention a31" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q2">
                                <div class="span2">
                                    <p class="color2" style="width: 35%;">Kvalita a kreativita večerného menu:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button321" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="32" g="3" question="2" rate="1" ng-click />
                                    <img class="star button322" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="32" g="3" question="2" rate="2" ng-click />
                                    <img class="star button323" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="32" g="3" question="2" rate="3" ng-click />
                                    <img class="star button324" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="32" g="3" question="2" rate="4" ng-click />
                                </div>
                                <div class="attention a32" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                             <div class="row q3">
                                <div class="span2">
                                    <p class="color3" style="width: 35%;">Ponuka vína:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button331" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="33" g="3" question="3" rate="1" ng-click />
                                    <img class="star button332" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="33" g="3" question="3" rate="2" ng-click />
                                    <img class="star button333" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="33" g="3" question="3" rate="3" ng-click />
                                    <img class="star button334" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="33" g="3" question="3" rate="4" ng-click />
                                </div>
                                <div class="attention a33" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q4">
                                <div class="span2">
                                    <p class="color3" style="width: 35%;">Bar a kaviareň:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button341" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="34" g="3" question="4" rate="1" ng-click />
                                    <img class="star button342" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="34" g="3" question="4" rate="2" ng-click />
                                    <img class="star button343" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="34" g="3" question="4" rate="3" ng-click />
                                    <img class="star button344" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="34" g="3" question="4" rate="4" ng-click />
                                </div>
                                <div class="attention a34" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q5">
                                <div class="span2">
                                    <p class="color3" style="width: 35%;">Ochota pomôcť a priateľskosť:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button351" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="35" g="3" question="5" rate="1" ng-click />
                                    <img class="star button352" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="35" g="3" question="5" rate="2" ng-click />
                                    <img class="star button353" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="35" g="3" question="5" rate="3" ng-click />
                                    <img class="star button354" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="35" g="3" question="5" rate="4" ng-click />
                                </div>
                                <div class="attention a35" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>
                            
                        </div><!--end of starRatingSystem-->
						
					</div>

					<div class = 'item' id = 'item4'>
						<p class="question">Ako hodnotíte wellness hotela ?</p>

						<div class="container starsRatingSystem group4">
                            <div class="row q0">
                                <div class="span2">
                                    <p class="color0" style="width: 35%;">Čistota wellness:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star  button401" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="40" g="4" question="0" rate="1" ng-click />
                                    <img class="star  button402" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="40" g="4" question="0" rate="2" ng-click />
                                    <img class="star  button403" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="40" g="4" question="0" rate="3" ng-click />
                                    <img class="star  button404" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="40" g="4" question="0" rate="4" ng-click />
                                </div>
                                <div class="attention a40" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q1">
                                <div class="span2">
                                    <p class="color1" style="width: 35%;">Dostatok uterákov a plachiet:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button411" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="41" g="4" question="1" rate="1" ng-click />
                                    <img class="star button412" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="41" g="4" question="1" rate="2" ng-click />
                                    <img class="star button413" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="41" g="4" question="1" rate="3" ng-click />
                                    <img class="star button414" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="41" g="4" question="1" rate="4" ng-click />
                                </div>
                                <div class="attention a41" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q2">
                                <div class="span2">
                                    <p class="color2" style="width: 35%;">Ponuka odpočívadiel a oddychových častí:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button421" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="42" g="4" question="2" rate="1" ng-click />
                                    <img class="star button422" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="42" g="4" question="2" rate="2" ng-click />
                                    <img class="star button423" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="42" g="4" question="2" rate="3" ng-click />
                                    <img class="star button424" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="42" g="4" question="2" rate="4" ng-click />
                                </div>
                                <div class="attention a42" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                             <div class="row q3">
                                <div class="span2">
                                    <p class="color3" style="width: 35%;">Atmosféra a dekorácie:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button431" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="43" g="4" question="3" rate="1" ng-click />
                                    <img class="star button432" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="43" g="4" question="3" rate="2" ng-click />
                                    <img class="star button433" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="43" g="4" question="3" rate="3" ng-click />
                                    <img class="star button434" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="43" g="4" question="3" rate="4" ng-click />
                                </div>
                                <div class="attention a43" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q4">
                                <div class="span2">
                                    <p class="color3" style="width: 35%;">Ponuka masáži a procedúr:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button441" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="44" g="4" question="4" rate="1" ng-click />
                                    <img class="star button442" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="44" g="4" question="4" rate="2" ng-click />
                                    <img class="star button443" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="44" g="4" question="4" rate="3" ng-click />
                                    <img class="star button444" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="44" g="4" question="4" rate="4" ng-click />
                                </div>
                                <div class="attention a44" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q5">
                                <div class="span2">
                                    <p class="color3" style="width: 35%;">Ochota pomôcť a priateľstkosť:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button451" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="45" g="4" question="5" rate="1" ng-click />
                                    <img class="star button452" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="45" g="4" question="5" rate="2" ng-click />
                                    <img class="star button453" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="45" g="4" question="5" rate="3" ng-click />
                                    <img class="star button454" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="45" g="4" question="5" rate="4" ng-click />
                                </div>
                                <div class="attention a45" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>
                            
                        </div><!--end of starRatingSystem-->
						
					</div>
				
				</div>
				
			</div>
		</div>

        <div class="tooltips">
            <div id="firstTooltip" class="tooltip_1" rel="tooltip">
            </div>
            <img class="tooltip_emoticon" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128/10.png" />
        </div>

        <div class="goAheadTooltip">
            <div id="secondTooltip" class="tooltip_2" rel="tooltip">
            </div>
            <img class="tooltip_emoticon_2" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128/10.png" />
        </div>

        <div class="bottomBar">

            <div class = 'iosSliderButtons'>
                    <div class = 'button' id = 'item0'>
                        <img class="tooltip_arrow" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire2/arrow.png" />
                        <div class="navigationMenu">Rezervácie</div>
                    </div>                  
                    <div class = 'button' id = 'item1'>
                        <img class="tooltip_arrow" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire2/arrow.png" />
                        <div class="navigationMenu">Recepcia</div>
                    </div>
                    <div class = 'button' id = 'item2'>
                        <img class="tooltip_arrow" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire2/arrow.png" />
                        <div class="navigationMenu">Ubytovanie</div>
                    </div>
                    <div class = 'button' id = 'item3'>
                        <img class="tooltip_arrow" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire2/arrow.png" />
                        <div class="navigationMenu">Reštaurácia</div>
                    </div>
                    <div class = 'button' id = 'item4'>
                        <img class="tooltip_arrow" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire2/arrow.png" />
                        <div class="navigationMenu">Wellness</div>
                    </div>
            </div>
            <button class="btn btn-large btn-block submitButton" onclick="submit();">Ukončiť a odoslať</button>
        </div>

        <script>
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

            var g,question,rate,actualValue,question_img,item;
        	var readyToSend = false;

        	var score0 = 0,score1 = 0,score2 = 0,score3 = 0,score4 = 0, finalScore = 0;
            var finalScore = 0;
            var host = <?php echo Nette\Templating\Helpers::escapeJs($basePath) ?>;
            var page = "/questionnaire2/";
            var options = {};

            //function to handle the clicks on the stars
            $('img.star').click(function(){

                 $(".bottomBar").css("height","125px");

                rate = $(this).attr("rate");
                g = $(this).attr("g");
                question = $(this).attr("q");
                question_img = $(this).attr("question");
                item;

                for (var i = 1 ; i < 5; i++) {
                   item = g+question_img+i;
                   $(".button"+item).attr("src",host+"/www/img/Emoticons/128x128/"+i+".png");
                }

                $(this).attr("src",host+"/www/img/Emoticons/128x128/"+rate+"_selected.png");

               //----- CHECK GROUP 0 -----*/
                if(g == 0){
                	for (var i = 0 ; i < question_count_g0; i++) {
	                	if(i == question.substring(1)){
	                		holder0[i] = rate;
	                	}
	                	group0complete = false;
                    }

        			score0 = 0;
        			checker0 = question_count_g0;
	                for (var i = 0 ; i < question_count_g0; i++) {
	                	if(typeof(holder0[i]) != "undefined"){
	                		checker0--;
	                		score0++;
                            $.showEmos.emo0 = score0;
                            $(".emoChecker").click();
	                	}
                    }
                    if(checker0 == 0) group0complete = true;
                }

                //----- CHECK GROUP 1 -----*/
                if(g == 1) {
                	for (var i = 0 ; i < question_count_g1; i++) {
	                	if(i == question.substring(1)){
	                		holder1[i] = rate;
	                	}
	                	group1complete = false;
                    }
	                
	                score1 = 0;
                    checker1 = question_count_g1;
	                for (var i = 0 ; i < question_count_g1; i++) {
	                	if(typeof(holder1[i]) != "undefined"){
	                		checker1--;
	                		score1++;
                            $.showEmos.emo1 = score1;
	                	}
                    }
                     if(checker1 == 0) group1complete = true;
                }	

                //----- CHECK GROUP 2 -----*/
                if(g == 2) {
                	for (var i = 0 ; i < question_count_g2; i++) {
	                	if(i == question.substring(1)){
	                		holder2[i] = rate;
	                	}
	                	group2complete = false;
                    }
	                
	                score2 = 0;
                    checker2 = question_count_g2;
	                for (var i = 0 ; i < question_count_g2; i++) {
	                	if(typeof(holder2[i]) != "undefined"){
	                		checker2--;
	                		score2++;
                            $.showEmos.emo2 = score2;
	                	}
                    }
                     if(checker2 == 0) group2complete = true;
                }	

                //----- CHECK GROUP 3 -----*/
                if(g == 3) {
                	for (var i = 0 ; i < question_count_g3; i++) {
	                	if(i == question.substring(1)){
	                		holder3[i] = rate;
	                	}
	                	group3complete = false;
                    }
	                
	                score3 = 0;
                    checker3 = question_count_g3;
	                for (var i = 0 ; i < question_count_g3; i++) {
	                	if(typeof(holder3[i]) != "undefined"){
	                		checker3--;
	                		score3++;
                            $.showEmos.emo3 = score3;
	                	}
                    }
                     if(checker3 == 0) group3complete = true;
                }	

                //----- CHECK GROUP 4 -----*/
                if(g == 4) {
                	for (var i = 0 ; i < question_count_g4; i++) {
	                	if(i == question.substring(1)){
	                		holder4[i] = rate;
	                	}
	                	group4complete = false;
                    }
	                
	                score4 = 0;
                    checker4 = question_count_g4;
	                for (var i = 0 ; i < question_count_g4; i++) {
	                	if(typeof(holder4[i]) != "undefined"){
	                		checker4--;
	                		score4++;
                            $.showEmos.emo4 = score4;
	                	}
                    }
                     if(checker4 == 0) group4complete = true;
                }

                //remove the error box
                calculateScore();
                if($(".scoreValue").html().length == 2){
                	$(".scoreValue").css("margin-left", "30%");
                }

                $('.a' + $(this).attr("q")).css("display","none");

            });

            //submit the results to the server
            function submit() {
            	calculateScore();
            	readyToSend = checkReady();
                if(readyToSend) finishEvaluationModal();
            };

            function calculateScore(){
                finalScore = 0;
            	finalScore = score0+score1+score2+score3+score4
            }

            function checkReady(){
            	if(group0complete == true && group1complete == true && group2complete == true){
            		if(checker0 == 0 || typeof(checker0) == "undefined"){
            			if(checker1 == 0 || typeof(checker1) == "undefined"){
            				if(checker2 == 0 || typeof(checker2) == "undefined"){
            					if(checker3 == 0 || typeof(checker3) == "undefined"){
	            					if(checker4 == 0 || typeof(checker4) == "undefined"){
            							readyToSend = true;
	            						//console.log("OK to POST !");
	            					}
	            				}
            				}
            			}
            		}
            	}

            	if(group0complete == false ) {
            		if(checker0 <= question_count_g0) $('.iosSliderButtons #item0').click();
            		readyToSend = false;
            		
            		//check unevaluated questions and popup error message
            		for (var i = 0 ; i < question_count_g0; i++) {
	                	if(typeof(holder0[i]) === "undefined"){
	                		$(".a0"+i).css("display","block");
	                	}
                    }
            	}

	            if(group1complete == false ) {
            		if(checker1 <= question_count_g1) $('.iosSliderButtons #item1').click();
            		readyToSend = false;

            		//check unevaluated questions and popup error message
            		for (var i = 0 ; i < question_count_g1; i++) {
	                	if(typeof(holder1[i]) === "undefined"){
	                		$(".a1"+i).css("display","block");
	                	}
                    }
            	}

            	if(group2complete == false ) {
            		if(checker2 <= question_count_g2) $('.iosSliderButtons #item2').click();
            		readyToSend = false;

            		//check unevaluated questions and popup error message
            		for (var i = 0 ; i < question_count_g2; i++) {
	                	if(typeof(holder2[i]) === "undefined"){
	                		$(".a2"+i).css("display","block");
	                	}
                    }
            	}

            	if(group3complete == false ) {
            		if(checker3 <= question_count_g3) $('.iosSliderButtons #item3').click();
            		readyToSend = false;

            		//check unevaluated questions and popup error message
            		for (var i = 0 ; i < question_count_g3; i++) {
	                	if(typeof(holder3[i]) === "undefined"){
	                		$(".a3"+i).css("display","block");
	                	}
                    }
            	}

            	if(group4complete == false ) {
            		if(checker4 <= question_count_g4) $('.iosSliderButtons #item4').click();
            		readyToSend = false;

            		//check unevaluated questions and popup error message
            		for (var i = 0 ; i < question_count_g4; i++) {
	                	if(typeof(holder4[i]) === "undefined"){
	                		$(".a4"+i).css("display","block");
	                	}
                    }
            	}

            	/*one formular must be evaluated
            	if(group1complete == false || typeof(checker0) == "undefined") {
            		if(checker0 != 0) $('.iosSliderButtons #item0').click();
            		readyToSend = false;

            		//check unevaluated questions and popup error message
            		for (var i = 0 ; i < question_count_g0; i++) {
	                	if(typeof(holder0[i]) === "undefined"){
	                		$(".a0"+i).css("display","block");
	                	}
                    }
            	}*/
            	return readyToSend;
            };


            //check showed emo and hide him forever
            $(".button").click(function(){
                if($.showEmos.showed == 1) $(".goAheadTooltip").css("display","none");
            });

            function startCountDown(counter){
                setTimeout("location.href = '" + host + page + "'", counter);
            } 
            var summaryEvaluation = 0;

            $(".summaryEvaluation").click(function(){
               summaryEvaluation = $(this).attr("rate");
               $(".a56").css("display","none");
            });

            function summarySend(){
                if(summaryEvaluation != 0 && summaryEvaluation != "undefined"){
                    //$(".modal-body").replaceWith(".timer");
                    $('#myModal').modal('hide');
                    $.blockUI({ message: $('.timer') }); 
                    startCountDown(1000);
                }else {
                    $(".a56").css("display","block");
                }
                return false;
            }
        </script>

	</body>
</html>