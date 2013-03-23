<?php //netteCache[01]000414a:2:{s:4:"time";s:21:"0.79755400 1364076595";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:92:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Questionnaire2\default.latte";i:2;i:1364076566;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Questionnaire2\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'qmts489g9o')
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
        <script src = "<?php echo htmlSpecialChars($basePath) ?>/js/cssrefresh.js"></script>

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
		
		<script type="text/javascript">

            $(document).ready(function() {
                
                $('.iosSlider').iosSlider({
                    scrollbar: true,
                    scrollbarDrag: false,
                    snapSlideCenter: false,
                    desktopClickDrag: false,
                    infiniteSlider: false, 
                    navSlideSelector: $('.iosSliderButtons .button'),
                    scrollbarHeight: '2',
                    scrollbarBorderRadius: '0',
                    scrollbarOpacity: '0.5',
                    onSlideChange: slideContentChange,
                    onSliderLoaded: slideContentChange,
                    keyboardControls: false,
                    snapToChildren: true
                });

                
                $('.submitButton').css('display',"none");
                $(".bottomBar").css("height","120px");
                $(".iosSliderButtons").css("marginTop","55px");
                
                $('img.star').click(function(){
                    
                    $('.submitButton').css('display',"block");

                    $(".iosSliderButtons").animate({ 
                        marginTop: "-0px"
                    }, 500 );

                    /*$(".iosSliderButtons").animate({ 
                        marginTop: "60px"
                    }, 500 );

                    $('.submitButton').addClass('animated fadeInUp');*/
                }); 

                $('#firstTooltip').tooltip({
                    placement : 'top',
                    title : 'Začnite voľbou sekcie, ktorú chete ohodnotiť. ',
                });

                $('#firstTooltip').tooltip('show');

                $(".iosSliderButtons").hover(function(){

                    $('#firstTooltip').tooltip('hide');

                });

                $('img.star').click(function(){

                    $('#firstTooltip').tooltip('hide');

                 });
                
                /*$(".iosSliderButtons").animate({ 
                    marginTop: "55px"
                }, 500 );*/

                //$('#myModal2').modal('show');
                
                

                
                for (i = 4; i >= 0; i--) {
                  $('.iosSliderButtons #item'+i).click();
                }

                function slideContentChange(args) {
                    /* indicator */
                    $('.iosSliderButtons .button').removeClass('selected');

                    $('.iosSliderButtons .button:eq(' + (args.currentSlideNumber - 1) + ')').addClass('selected');
                }
                
                 $('.btnStart').click();
                

            });

            function startCountDown(counter){
                setTimeout("location.href = 'http://cleverfrogs.com/questionnaire2/'", counter);
            } 

            function summarySend(){
                //$(".modal-body").replaceWith(".timer");
                $('#myModal').modal('hide');
                $.blockUI({ message: $('.timer') }); 
                startCountDown(1000);
            }


        
          
		</script>
		
	</head>
	<body>
		<div class="st-container">

           

            <div class="timer" style="display: none;">
                <div class="summaryThanksSpinner">Ďakujeme za Váš názor</div>
                <img class="spinner" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/spinner2.gif" />
                <div class="summaryTextComp">Dáta sa spracovávajú...</div>
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


		    <!-- Button to trigger modal -->
            <a href="#myModal" role="button" class="btnFinish" style="display: none" data-toggle="modal"></a>
		    <a href="#myModal@" role="button" class="btnStart" style="display: none" data-toggle="modal"></a>
		     
		    <!-- Modal -->
		    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    <h3 id="myModalLabel"><img class="logoCompanySubmit" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire2/logo_thumb.png" /></h3>
			    </div>
			    <div class="modal-body">
                    <div class="summaryCompetition">
                        <div class="summaryThanks"><h3>Ďakujeme za Vašu spätnú väzbu !</h3></div>

                        <div>
                            <div class="summaryText">Aké je Vaše celkové hodnotenie ?</div>
                            <div class="summaryStar">
                                <img class="button561 star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" g="5" question="6" rate="1" />
                                <img class="button562 star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" g="5" question="6" rate="2" />
                                <img class="button563 star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" g="5" question="6" rate="3" />
                                <img class="button564 star" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" g="5" question="6" rate="4" />
                            </div>
                            <div class="attention a00" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                        </div>

                        <center><div class="summaryTextComp">Prosíme vyplňte Vaše číslo izby.</div></center>
                        <div class="summaryEmail">
                            <input class="span4" type="text" placeholder="číslo izby" required />
                        </div>
                    </div><!--end of summaryCompetition-->
                    

			    </div>
			    <div class="modal-firstTooltipter">
			     <button class="btn btn-large btn-block btn-primary" onclick="summarySend();">Odoslať</button>
			    </div>
		    </div>


			<div class="score" style="display:none;">Score: <div class="scoreValue">0</div></div>
			<img class="logoCompany" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire2/logo_thumb.png" />

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
                                    <img class="star button001" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png"  g="0" q="00" question="0" rate="1" />
                                    <img class="star button002" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png"  g="0" q="00" question="0" rate="2" />
                                    <img class="star button003" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png"  g="0" q="00" question="0" rate="3" />
                                    <img class="star button004" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png"  g="0" q="00" question="0" rate="4" />
                                </div>
                                <div class="attention a00" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row g0q1">
                                <div class="span2">
                                    <p class="color1">Presnosť:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button011" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="01" g="0" question="1" rate="1" />
                                    <img class="star button012" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="01" g="0" question="1" rate="2" />
                                    <img class="star button013" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="01" g="0" question="1" rate="3" />
                                    <img class="star button014" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="01" g="0" question="1" rate="4" />
                                </div>
                                <div class="attention a01" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row g0q2">
                                <div class="span2">
                                    <p class="color2">Ochota pomôcť a priateľskosť:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button021" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="02" g="0" question="2" rate="1" />
                                    <img class="star button022" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="02" g="0" question="2" rate="2" />
                                    <img class="star button023" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="02" g="0" question="2" rate="3" />
                                    <img class="star button024" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="02" g="0" question="2" rate="4" />
                                </div>
                                <div class="attention a02" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                             <div class="row g0q3">
                                <div class="span2">
                                    <p class="color3">Znalosť rezervačného agenta:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button031" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="03" g="0" question="3" rate="1" />
                                    <img class="star button032" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="03" g="0" question="3" rate="2" />
                                    <img class="star button033" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="03" g="0" question="3" rate="3" />
                                    <img class="star button034" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="03" g="0" question="3" rate="4" />
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
                                    <img class="star button101" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="10" g="1" question="0" rate="1" />
                                    <img class="star button102" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="10" g="1" question="0" rate="2" />
                                    <img class="star button103" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="10" g="1" question="0" rate="3" />
                                    <img class="star button104" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="10" g="1" question="0" rate="4" />
                                </div>
                                <div class="attention a10" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row g1q1">
                                <div class="span2">
                                    <p class="color1">Proces odubytovania – check out :</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button111" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="11" g="1" question="1" rate="1" />
                                    <img class="star button112" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="11" g="1" question="1" rate="2" />
                                    <img class="star button113" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="11" g="1" question="1" rate="3" />
                                    <img class="star button114" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="11" g="1" question="1" rate="4" />
                                </div>
                                <div class="attention a11" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row g1q2">
                                <div class="span2">
                                    <p class="color2">Ochota pomôcť a priateľskosť:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button121" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="12" g="1" question="2" rate="1" />
                                    <img class="star button122" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="12" g="1" question="2" rate="2" />
                                    <img class="star button123" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="12" g="1" question="2" rate="3" />
                                    <img class="star button124" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="12" g="1" question="2" rate="4" />
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
                                    <img class="star button201" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="20" g="2" question="0" rate="1" />
                                    <img class="star button202" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="20" g="2" question="0" rate="2" />
                                    <img class="star button203" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="20" g="2" question="0" rate="3" />
                                    <img class="star button204" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="20" g="2" question="0" rate="4" />
                                </div>
                                <div class="attention a20" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q1">
                                <div class="span2">
                                    <p class="color1">Vybavenie izby:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button211" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="21"  g="2" question="1" rate="1" />
                                    <img class="star button212" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="21"  g="2" question="1" rate="2" />
                                    <img class="star button213" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="21"  g="2" question="1" rate="3" />
                                    <img class="star button214" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="21"  g="2" question="1" rate="4" />
                                </div>
                                <div class="attention a21" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q2">
                                <div class="span2">
                                    <p class="color2">Atmosféra v hoteli:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button221" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="22" g="2" question="2" rate="1" />
                                    <img class="star button222" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="22" g="2" question="2" rate="2" />
                                    <img class="star button223" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="22" g="2" question="2" rate="3" />
                                    <img class="star button224" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="22" g="2" question="2" rate="4" />
                                </div>
                                <div class="attention a22" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                             <div class="row q3">
                                <div class="span2">
                                    <p class="color3">Večerný program:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button231" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="23" g="2" question="3" rate="1" />
                                    <img class="star button232" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="23" g="2" question="3" rate="2" />
                                    <img class="star button233" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="23" g="2" question="3" rate="3" />
                                    <img class="star button234" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="23" g="2" question="3" rate="4" />
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
                                    <img class="star button301" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="30" g="3" question="0" rate="1" />
                                    <img class="star button302" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="30" g="3" question="0" rate="2" />
                                    <img class="star button303" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="30" g="3" question="0" rate="3" />
                                    <img class="star button304" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="30" g="3" question="0" rate="4" />
                                </div>
                                <div class="attention a30" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q1">
                                <div class="span2">
                                    <p class="color1">Raňajkový bufet:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button311" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="31" g="3" question="1" rate="1" />
                                    <img class="star button312" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="31" g="3" question="1" rate="2" />
                                    <img class="star button313" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="31" g="3" question="1" rate="3" />
                                    <img class="star button314" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="31" g="3" question="1" rate="4" />
                                </div>
                                <div class="attention a31" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q2">
                                <div class="span2">
                                    <p class="color2">Kvalita a kreativita večerného menu:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button321" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="32" g="3" question="2" rate="1" />
                                    <img class="star button322" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="32" g="3" question="2" rate="2" />
                                    <img class="star button323" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="32" g="3" question="2" rate="3" />
                                    <img class="star button324" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="32" g="3" question="2" rate="4" />
                                </div>
                                <div class="attention a32" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                             <div class="row q3">
                                <div class="span2">
                                    <p class="color3">Ponuka vína:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button331" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="33" g="3" question="3" rate="1" />
                                    <img class="star button332" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="33" g="3" question="3" rate="2" />
                                    <img class="star button333" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="33" g="3" question="3" rate="3" />
                                    <img class="star button334" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="33" g="3" question="3" rate="4" />
                                </div>
                                <div class="attention a33" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q4">
                                <div class="span2">
                                    <p class="color3">Bar a kaviareň:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button341" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="34" g="3" question="4" rate="1" />
                                    <img class="star button342" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="34" g="3" question="4" rate="2" />
                                    <img class="star button343" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="34" g="3" question="4" rate="3" />
                                    <img class="star button344" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="34" g="3" question="4" rate="4" />
                                </div>
                                <div class="attention a34" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q5">
                                <div class="span2">
                                    <p class="color3">Ochota pomôcť a priateľskosť:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button351" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="35" g="3" question="5" rate="1" />
                                    <img class="star button352" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="35" g="3" question="5" rate="2" />
                                    <img class="star button353" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="35" g="3" question="5" rate="3" />
                                    <img class="star button354" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="35" g="3" question="5" rate="4" />
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
                                    <img class="star  button401" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="40" g="4" question="0" rate="1" />
                                    <img class="star  button402" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="40" g="4" question="0" rate="2" />
                                    <img class="star  button403" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="40" g="4" question="0" rate="3" />
                                    <img class="star  button404" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="40" g="4" question="0" rate="4" />
                                </div>
                                <div class="attention a40" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q1">
                                <div class="span2">
                                    <p class="color1">Dostatok uterákov a plachiet:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button411" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="41" g="4" question="1" rate="1" />
                                    <img class="star button412" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="41" g="4" question="1" rate="2" />
                                    <img class="star button413" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="41" g="4" question="1" rate="3" />
                                    <img class="star button414" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="41" g="4" question="1" rate="4" />
                                </div>
                                <div class="attention a41" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q2">
                                <div class="span2">
                                    <p class="color2">Ponuka odpočívadiel a oddychových častí:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button421" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="42" g="4" question="2" rate="1" />
                                    <img class="star button422" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="42" g="4" question="2" rate="2" />
                                    <img class="star button423" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="42" g="4" question="2" rate="3" />
                                    <img class="star button424" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="42" g="4" question="2" rate="4" />
                                </div>
                                <div class="attention a42" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                             <div class="row q3">
                                <div class="span2">
                                    <p class="color3">Atmosféra a dekorácie:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button431" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="43" g="4" question="3" rate="1" />
                                    <img class="star button432" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="43" g="4" question="3" rate="2" />
                                    <img class="star button433" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="43" g="4" question="3" rate="3" />
                                    <img class="star button434" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="43" g="4" question="3" rate="4" />
                                </div>
                                <div class="attention a43" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q4">
                                <div class="span2">
                                    <p class="color3">Ponuka masáži a procedúr:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button441" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="44" g="4" question="4" rate="1" />
                                    <img class="star button442" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="44" g="4" question="4" rate="2" />
                                    <img class="star button443" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="44" g="4" question="4" rate="3" />
                                    <img class="star button444" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="44" g="4" question="4" rate="4" />
                                </div>
                                <div class="attention a44" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>

                            <div class="row q5">
                                <div class="span2">
                                    <p class="color3">Ochota pomôcť a priateľstkosť:</p>
                                </div>
                                
                                <div class="span10 pull-right margin">
                                    <img class="star button451" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" q="45" g="4" question="5" rate="1" />
                                    <img class="star button452" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" q="45" g="4" question="5" rate="2" />
                                    <img class="star button453" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" q="45" g="4" question="5" rate="3" />
                                    <img class="star button454" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" q="45" g="4" question="5" rate="4" />
                                </div>
                                <div class="attention a45" style="display: none;">Prosíme ohodnoťte aj túto otázku</div>
                            </div>
                            
                        </div><!--end of starRatingSystem-->
						
					</div>
				
				</div>
				
			</div>
		</div>

        <div class="tooltips">
            <div id="firstTooltip" class="tooltip_1" rel="tooltip"></div>
        </div>




        <div class="bottomBar">

            <div class = 'iosSliderButtons'>
                    <div class = 'button' id = 'item0'>
                        <div class="navigationMenu">Rezervácie</div>
                    </div>                  
                    <div class = 'button' id = 'item1'>
                        <div class="navigationMenu">Recepcia</div>
                    </div>
                    <div class = 'button' id = 'item2'>
                        <div class="navigationMenu">Ubytovanie</div>
                    </div>
                    <div class = 'button' id = 'item3'>
                        <div class="navigationMenu">Reštaurácia</div>
                    </div>
                    <div class = 'button' id = 'item4'>
                        <div class="navigationMenu">Wellness</div>
                    </div>
            </div>
            <button class="btn btn-large btn-block submitButton" onclick="submit();">Odoslať</button>
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

            var g,question,rate;
        	var readyToSend = false;

        	var score0 = 0,score1 = 0,score2 = 0,score3 = 0,score4 = 0, finalScore = 0;

            //function to handle the clicks on the stars
            $('img.star').click(function(){

                 $(".bottomBar").css("height","125px");

                 var options = {};
                // $( ".submitButton" ).toggle( "slide", options, 500 );

            	var host = <?php echo Nette\Templating\Helpers::escapeJs($basePath) ?>;
                var rate = $(this).attr("rate");
                var g = $(this).attr("g");
                var question = $(this).attr("q");
                var question_img = $(this).attr("question");
                var item;

                for (var i = 1 ; i < 5; i++) {
                   item = g+question_img+i;
                   $(".button"+item).attr("src",host+"/www/img/Emoticons/128x128/"+i+".png");
                }

                $(this).attr("src",host+"/www/img/Emoticons/128x128/"+rate+"_selected.png");

                //$(this).attr("src",host+"/img/component_questionnaire2/star_C.png");
                
                //$(this).prevAll().attr("src",host+"/img/component_questionnaire2/star_C.png");
                //$(this).prevAll().attr("class","star");
                //$(this).nextAll().attr("class","star");
                //$(this).nextAll().attr("src",host+"/img/component_questionnaire2/star_BW.png");



                //$('#rating' + $(this).attr("q")).text($(this).attr("rate"));
                /*$(this).prevAll().attr("value","");
                $(this).nextAll().attr("value","");
                $(this).attr("value","1");*/


               //console.log("group: " + g + " question: " + question + " question value: " + rate);
                
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
            	if(readyToSend) $(".btnFinish").click();
            };

            function calculateScore(){
            	var finalScore = 0;
            	finalScore = score0+score1+score2+score3+score4
            	//$(".scoreValue").html(finalScore)
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
        </script>

	</body>
</html>