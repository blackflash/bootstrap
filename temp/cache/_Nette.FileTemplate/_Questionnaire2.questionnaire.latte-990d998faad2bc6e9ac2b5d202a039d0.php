<?php //netteCache[01]000420a:2:{s:4:"time";s:21:"0.39309200 1364508997";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:98:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Questionnaire2\questionnaire.latte";i:2;i:1364508996;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Questionnaire2\questionnaire.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'vsct1wwyjr')
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
<div class="st-container" id="BigQuestionnaire" ng-controller="QuestionsCounter">
<!--ANGULAR-->
    <script type="text/javascript">

        /*------------------- AJAX -----------------------*/

        $.showEmos = { 
            emo0 : 0, 
            emo1 : 0, 
            emo2 : 0, 
            emo3 : 0, 
            emo4 : 0,
            showed: 0,
            language: "sk",
            questionnaireId: 0,
        }; 

        // prepare data
        function prepareQuestionnaire(questionnaire_id, lang){
            
            $("#ajax_loader").show();

            $.ajax({    //create an ajax request to load_page.php
              type: "POST",
              url: "?do=jsonPrepareQuestionnaire",
              data: { questionnaire_id: questionnaire_id, language: lang},
              dataType: "html",   //expect html to be returned
              success: function(msg){ 

                  if(parseInt(msg)!=0)    //if no errors
                  {
                    var myObject = JSON.parse(msg);
                    $.showEmos.questionnaireId = myObject;
                  }

                  if(parseInt(msg) == 0){
                    console.log("problem");
                    return false;
                  }

              }
          });
        }

         function ajaxStartPrepare(lang){
           var questionnaire_id = <?php echo Nette\Templating\Helpers::escapeJs($questionnaire->questionnaire_id) ?>;
           prepareQuestionnaire(questionnaire_id,lang);
           return false;
        }


        // update data
        function updateQuestionnaire(r_questionnaire_id, question_id,rate){
            
            $("#ajax_loader").show();

            $.ajax({    //create an ajax request to load_page.php
              type: "POST",
              url: "?do=jsonUpdateQuestionnaire",
              data: { r_questionnaire_id: r_questionnaire_id, question_id: question_id, rate: rate},
              dataType: "html",   //expect html to be returned
              success: function(msg){ 

                  if(parseInt(msg)!=0)    //if no errors
                  {
                    var myObject = JSON.parse(msg);
                  }

                  if(parseInt(msg) == 0){
                    console.log("problem");
                    return false;
                  }

              }
          });
        }

        function ajaxStartUpdate(r_questionnaire_id,question_id,rate){
           updateQuestionnaire(r_questionnaire_id,question_id,rate);
           return false;
        }


        // update summaryEva after submit ok
        function updateSummaryEvaluation(r_questionnaire_id,room,summaryEva,score){
            
            $("#ajax_loader").show();

            $.ajax({    //create an ajax request to load_page.php
              type: "POST",
              url: "?do=jsonUpdateSummaryEvaluationQuestionnaire",
              data: { r_questionnaire_id: r_questionnaire_id, room: room,summaryEva: summaryEva, score: score},
              dataType: "html",   //expect html to be returned
              success: function(msg){ 

                  if(parseInt(msg)!=0)    //if no errors
                  {
                    var myObject = JSON.parse(msg);
                  }

                  if(parseInt(msg) == 0){
                    console.log("problem");
                    return false;
                  }

              }
          });
        }

         function ajaxStartUpdateSummaryEvaluation(r_questionnaire_id,room,summaryEva,score){
           updateSummaryEvaluation(r_questionnaire_id,room,summaryEva,score);
           return false;
        }
        /*---------------- end of AJAX -------------------*/

        

        function QuestionsCounter($scope){

            $scope.getLanguage = function(){
                $.showEmos.language = $scope.myLanguage;
                return $.myLanguage;
            }

            $scope.setLanguage = function(lang){
                ajaxStartPrepare(lang);
                setFirstEmo(lang);
                $scope.myLanguage = lang;
                $.myLanguage = lang;
            }
            
            function setFirstEmo(lang){
                 if(lang == "sk"){ 
                    $('.tooltip_emoticon').css('display',"block");
                    $('.tooltip_emoticon').addClass('animated tada');

                    $('#firstTooltip').attr("title","Začnite voľbou sekcie, ktorú chcete ohodnotiť.");
                    $('#firstTooltip').tooltip('show');
                }else if(lang == "en"){
                    $('.tooltip_emoticon').css('display',"block");
                    $('.tooltip_emoticon').addClass('animated tada');

                    $('#firstTooltip').attr("title","Start with section you would like to evaluate.");
                    $('#firstTooltip').tooltip('show');
                }
            }

            function checkLanguage(){
                if($.myLanguage == "sk"){ 
                    $('#secondTooltip').attr("title","Ak máte záujem môžete ohodnotiť aj ďalšie sekcie.");
                    $('#secondTooltip').tooltip('show');
                    $(".roomInput").attr("placeholder","Vaše číslo izby");
                }else if($.myLanguage == "en"){
                    $('#secondTooltip').attr("title","You can evaluate also other sections.");
                    $('#secondTooltip').tooltip('show');
                    $(".roomInput").attr("placeholder","Your room number");
                }
            }

            $scope.checkShowEmo = function(){

                if($.showEmos.emo0 == 4 && $.showEmos.showed == 0){
                    checkLanguage();
                    $(".goAheadTooltip").css("display","block");
                    $(".goAheadTooltip").addClass("animated tada");
                    $.showEmos.showed = 1;
                } else if($.showEmos.emo1 == 3 && $.showEmos.showed == 0){
                    checkLanguage();
                    $(".goAheadTooltip").css("display","block");
                    $(".goAheadTooltip").addClass("animated tada");
                    $.showEmos.showed = 1;
                } else if($.showEmos.emo2 == 4 && $.showEmos.showed == 0){
                    checkLanguage();
                    $(".goAheadTooltip").css("display","block");
                    $(".goAheadTooltip").addClass("animated tada");
                    $.showEmos.showed = 1;
                } else if($.showEmos.emo3 == 6 && $.showEmos.showed == 0){
                    checkLanguage();
                    $(".goAheadTooltip").css("display","block");
                    $(".goAheadTooltip").addClass("animated tada");
                    $.showEmos.showed = 1;
                } else if($.showEmos.emo4 == 6 && $.showEmos.showed == 0){
                    checkLanguage();
                    $(".goAheadTooltip").css("display","block");
                    $(".goAheadTooltip").addClass("animated tada");
                    $.showEmos.showed = 1;
                }
                return $.showEmos;
            }
        }
    </script>

    <script type="text/javascript">


    </script>

    <!--end of <div id="langChanger">
        <a href="javascript:window.lang.change('sk');" class="changeLangSK" ng-click="setLanguage('sk')">Switch to Slovak</a>
        | 
        <a href="javascript:window.lang.change('en');" class="changeLangEN" ng-click="setLanguage('en')">Switch to English</a> 
    </div>-->


    <div class="emoSummary" style="display:none;" >{{ checkShowEmo()}}</div>
    <!--end of <div id="searchTitle" class="sectionTitle" >{{ getLanguage()}}</div>-->
    
    <div id="modal_language" class="modal hide fade language" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <img class="logoCompanySubmit" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire2/logo_thumb.png" />
        </div>
        <div class="modal-body">

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($language_pack) as $pack): ?>

                <div class="span5 flagsContainer_<?php echo htmlSpecialChars($iterator->counter) ?>">
                    <div class="flags">
                        <img class="flag" src="<?php echo htmlSpecialChars($basePath) ?>
/www/img/flags/<?php echo htmlSpecialChars($pack->image) ?>" />
                    </div>
                    <div class="span5 languageText_<?php echo htmlSpecialChars($iterator->counter) ?>"  lang="sk">
                        <?php echo Nette\Templating\Helpers::escapeHtml($pack->text, ENT_NOQUOTES) ?>

                    </div>
                </div>

<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>

        </div><!--end of modal-body-->

        <div class="summaryCompetition">
            <button class="btn btn-large btn-primary button_SK" data-dismiss="modal" onclick="window.lang.change('sk');" 
            type="button" ng-click="setLanguage('sk')">Začat hodnotiť</button>
            <button class="btn btn-large btn-primary button_EN" data-dismiss="modal" type="button" onclick="window.lang.change('en');" 
            ng-click="setLanguage('en')">Start evaluation</button>
        </div><!--end of summaryCompetition-->
    </div><!--end of modal language-->
     
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    <div class="modal-header">
	    <h3 id="myModalLabel"><img class="logoCompanySubmit" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire2/logo_thumb.png" /></h3>
	    </div>
	    <div class="modal-body">
            <form class="cmxform" id="questionnaireForm" method="get" action="">
                <div class="summaryCompetition">
                    <div class="summaryThanks"><h3 lang="sk">Ďakujeme za Vašu spätnú väzbu !</h3></div>

                    <div class="summaryTextComp" lang="sk">Prosíme vyplňte Vaše číslo izby.</div>
                    <div class="summaryEmail">
                        <div class="roomCheck">
                            <div class="attention a57" style="display: none;" lang="sk">Prosíme vyplňte číslo izby správne.</div>
                        </div>
                        <div class="clearfix"></div>
                        <input class="input-xlarge roomInput" pattern="[0-9]*" type="number" id="field" maxlength="4" placeholder="Vaše číslo izby" />
                    </div>
                    <div>
                        <div class="summaryText" lang="sk">Aké je Vaše celkové hodnotenie našeho hotela ?</div>
                        <div class="summaryStar">
                            <img class="button561 star summaryEvaluation" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" g="5" question="6" rate="1" />
                            <img class="button562 star summaryEvaluation" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" g="5" question="6" rate="2" />
                            <img class="button563 star summaryEvaluation" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" g="5" question="6" rate="3" />
                            <img class="button564 star summaryEvaluation" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" g="5" question="6" rate="4" />
                        </div>
                        <div class="attention a56" style="display: none;" lang="sk">Prosíme ohodnoťte túto otázku</div>
                    </div>
                </div><!--end of summaryCompetition-->
            </form>
	    </div>
	    <div class="modal-footer">
            <button class="btn btn-large btn-block" data-dismiss="modal" aria-hidden="true" lang="sk">Späť k hodnoteniu</button>
            <button class="btn btn-large btn-block btn-primary" class="submit" type="submit" onclick="summarySend();" lang="sk">Potvrdiť</button>
        </div>
    </div>

    <div class="timer" style="display: none;">
        <div class="logoCleverFrogs" ><img src="<?php echo htmlSpecialChars($basePath) ?>/www/img/logoB.png" /></div>
        <div class="summaryThanksSpinner" lang="sk">Ďakujeme za Váš názor</div>
        <img class="spinner" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/spinner2.gif" />
        <div class="summaryTextComp" lang="sk">Dáta sa spracovávajú...</div>
        <div class="summaryThanksSpinner_2" lang="sk">Prajeme Vám príjemny zvyšok dňa. Dovidenia.</div>
    </div><!--end of timer-->

	<div class="score" style="display:none;">Score: <div class="scoreValue">0</div></div>
    <div class="questionnaireId" value="" style="display:none;"></div>

    <img class="logoCompany" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire2/logo_thumb.png" />

	<div class = 'iosSlider'>
		<div class = 'slider'>
			<div class = 'item' id = 'item0'>
				<p class="question" lang="sk">Ako ste boli spokojní s rezervačným oddelením ?</p>

				<div class=" starsRatingSystem g0">
                    <div class="row g0q0">
                        <div class="span2">
                            <p class="color0" style="width: 35%;" lang="sk">Rýchlosť a profesionalita:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <div class="smileEva">
                                <small lang="sk">veľmi nespokojný</small>
                                <img class="star button001" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="2"  g="0" q="00" question="0" rate="1" ng-click />
                            </div>
                            <div class="smileEva">
                                <small lang="sk">nespokojný</small>
                                <img class="star button002" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="2"  g="0" q="00" question="0" rate="2" ng-click />
                            </div>
                            <div class="smileEva">
                                <small lang="sk">spokojný</small>
                                <img class="star button003" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="2"  g="0" q="00" question="0" rate="3" ng-click />
                            </div>
                            <div class="smileEva">
                                <small lang="sk">veľmi spokojný</small>
                                <img class="star button004" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="2"  g="0" q="00" question="0" rate="4" ng-click />
                            </div>
                        </div>
                        <div class="attention a00" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                    <div class="row g0q1">
                        <div class="span2">
                            <p class="color1" style="width: 35%;" lang="sk">Presnosť:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <img class="star button011" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="3" q="01" g="0" question="1" rate="1" ng-click />
                            <img class="star button012" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="3" q="01" g="0" question="1" rate="2" ng-click />
                            <img class="star button013" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="3" q="01" g="0" question="1" rate="3" ng-click />
                            <img class="star button014" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="3" q="01" g="0" question="1" rate="4" ng-click />
                        </div>
                        <div class="attention a01" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                    <div class="row g0q2">
                        <div class="span2">
                            <p class="color2" style="width: 35%;" lang="sk">Ochota pomôcť a priateľskosť:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <img class="star button021" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="4" q="02" g="0" question="2" rate="1" ng-click />
                            <img class="star button022" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="4" q="02" g="0" question="2" rate="2" ng-click />
                            <img class="star button023" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="4" q="02" g="0" question="2" rate="3" ng-click />
                            <img class="star button024" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="4" q="02" g="0" question="2" rate="4" ng-click />
                        </div>
                        <div class="attention a02" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                     <div class="row g0q3">
                        <div class="span2">
                            <p class="color3" style="width: 35%;" lang="sk">Znalosť rezervačného agenta:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <img class="star button031" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="5" q="03" g="0" question="3" rate="1" ng-click />
                            <img class="star button032" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="5" q="03" g="0" question="3" rate="2" ng-click />
                            <img class="star button033" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="5" q="03" g="0" question="3" rate="3" ng-click />
                            <img class="star button034" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="5" q="03" g="0" question="3" rate="4" ng-click />
                        </div>
                        <div class="attention a03" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>
                    
                </div><!--end of starRatingSystem-->
			</div><!--end of item0-->
			
			<div class = 'item' id = 'item1'>
				<p class="question" lang="sk">Ako hodnotíte prácu recepcie a príchod do hotela ?</p>
				
				<div class="container starsRatingSystem g1">
                    <div class="row g1q0">
                        <div class="span2">
                            <p class="color0" style="width: 35%;" lang="sk">Proces registrácie – check in:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <div class="smileEva">
                                <small lang="sk">veľmi nespokojný</small>
                                <img class="star button101" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="6" q="10" g="1" question="0" rate="1" ng-click />
                            </div>
                            <div class="smileEva">
                                <small lang="sk">nespokojný</small>
                                <img class="star button102" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="6" q="10" g="1" question="0" rate="2" ng-click />
                            </div>
                            <div class="smileEva">
                                <small lang="sk">spokojný</small>
                                <img class="star button103" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="6" q="10" g="1" question="0" rate="3" ng-click />
                            </div>
                            <div class="smileEva">
                                <small lang="sk">veľmi spokojný</small>
                                <img class="star button104" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="6" q="10" g="1" question="0" rate="4" ng-click />
                            </div>
                        </div>
                        <div class="attention a10" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                    <div class="row g1q1">
                        <div class="span2">
                            <p class="color1" style="width: 35%;" lang="sk">Proces odubytovania – check out:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <img class="star button111" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="7" q="11" g="1" question="1" rate="1" ng-click />
                            <img class="star button112" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="7" q="11" g="1" question="1" rate="2" ng-click />
                            <img class="star button113" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="7" q="11" g="1" question="1" rate="3" ng-click />
                            <img class="star button114" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="7" q="11" g="1" question="1" rate="4" ng-click />
                        </div>
                        <div class="attention a11" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                    <div class="row g1q2">
                        <div class="span2">
                            <p class="color2" style="width: 35%;" lang="sk">Ochota pomôcť a priateľskosť:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <img class="star button121" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="8" q="12" g="1" question="2" rate="1" ng-click />
                            <img class="star button122" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="8" q="12" g="1" question="2" rate="2" ng-click />
                            <img class="star button123" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="8" q="12" g="1" question="2" rate="3" ng-click />
                            <img class="star button124" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="8" q="12" g="1" question="2" rate="4" ng-click />
                        </div>
                        <div class="attention a12" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                </div><!--end of starRatingSystem-->
			</div><!--end of item1 -->
			
			<div class = 'item' id = 'item2'>
				<p class="question" lang="sk">Ako hodnotíte ubytovanie a kvalitu izieb ?</p>

				<div class="container starsRatingSystem group2">
                    <div class="row q0">
                        <div class="span2">
                            <p class="color0" style="width: 35%;" lang="sk">Čistota izby:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <div class="smileEva">
                                <small lang="sk">veľmi nespokojný</small>
                                <img class="star button201" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="9" q="20" g="2" question="0" rate="1" ng-click />
                            </div>
                            <div class="smileEva">
                                <small lang="sk">nespokojný</small>
                                <img class="star button202" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="9" q="20" g="2" question="0" rate="2" ng-click />
                            </div>
                            <div class="smileEva">
                                <small lang="sk">spokojný</small>
                                <img class="star button203" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="9" q="20" g="2" question="0" rate="3" ng-click />
                            </div>
                            <div class="smileEva">
                                <small lang="sk">veľmi spokojný</small>
                                <img class="star button204" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="9" q="20" g="2" question="0" rate="4" ng-click />
                            </div>
                        </div>
                        <div class="attention a20" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                    <div class="row q1">
                        <div class="span2">
                            <p class="color1" style="width: 35%;" lang="sk">Vybavenie izby:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <img class="star button211" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="10" q="21"  g="2" question="1" rate="1" ng-click />
                            <img class="star button212" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="10" q="21"  g="2" question="1" rate="2" ng-click />
                            <img class="star button213" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="10" q="21"  g="2" question="1" rate="3" ng-click />
                            <img class="star button214" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="10" q="21"  g="2" question="1" rate="4" ng-click />
                        </div>
                        <div class="attention a21" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                    <div class="row q2">
                        <div class="span2">
                            <p class="color2" style="width: 35%;" lang="sk">Atmosféra v hoteli:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <img class="star button221" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="11" q="22" g="2" question="2" rate="1" ng-click />
                            <img class="star button222" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="11" q="22" g="2" question="2" rate="2" ng-click />
                            <img class="star button223" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="11" q="22" g="2" question="2" rate="3" ng-click />
                            <img class="star button224" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="11" q="22" g="2" question="2" rate="4" ng-click />
                        </div>
                        <div class="attention a22" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                     <div class="row q3">
                        <div class="span2">
                            <p class="color3" style="width: 35%;" lang="sk">Večerný program:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <img class="star button231" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="12" q="23" g="2" question="3" rate="1" ng-click />
                            <img class="star button232" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="12" q="23" g="2" question="3" rate="2" ng-click />
                            <img class="star button233" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="12" q="23" g="2" question="3" rate="3" ng-click />
                            <img class="star button234" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="12" q="23" g="2" question="3" rate="4" ng-click />
                        </div>
                        <div class="attention a23" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>
                </div><!--end of starRatingSystem-->
			</div><!--end of item2 -->
			
			<div class = 'item' id = 'item3'>
				<p class="question" lang="sk">Ako hodnotíte prácu reštaurácie ?</p>

				<div class="container starsRatingSystem group3">
                    <div class="row q0">
                        <div class="span2">
                            <p class="color0" style="width: 35%;" lang="sk">Atmosféra a dekorácie:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <div class="smileEva">
                                <small lang="sk">veľmi nespokojný</small>
                                <img class="star button301" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="13" q="30" g="3" question="0" rate="1" ng-click />
                            </div>
                            <div class="smileEva">
                                <small lang="sk">nespokojný</small>
                                <img class="star button302" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="13" q="30" g="3" question="0" rate="2" ng-click />
                            </div>
                            <div class="smileEva">
                                <small lang="sk">spokojný</small>
                                <img class="star button303" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="13" q="30" g="3" question="0" rate="3" ng-click />
                            </div>
                            <div class="smileEva">
                                <small lang="sk">veľmi spokojný</small>
                                <img class="star button304" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="13" q="30" g="3" question="0" rate="4" ng-click />
                            </div>
                        </div>
                        <div class="attention a30" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                    <div class="row q1">
                        <div class="span2">
                            <p class="color1" style="width: 35%;" lang="sk">Raňajkový bufet:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <img class="star button311" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="14" q="31" g="3" question="1" rate="1" ng-click />
                            <img class="star button312" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="14" q="31" g="3" question="1" rate="2" ng-click />
                            <img class="star button313" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="14" q="31" g="3" question="1" rate="3" ng-click />
                            <img class="star button314" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="14" q="31" g="3" question="1" rate="4" ng-click />
                        </div>
                        <div class="attention a31" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                    <div class="row q2">
                        <div class="span2">
                            <p class="color2" style="width: 35%;" lang="sk">Kvalita a kreativita večerného menu:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <img class="star button321" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="15" q="32" g="3" question="2" rate="1" ng-click />
                            <img class="star button322" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="15" q="32" g="3" question="2" rate="2" ng-click />
                            <img class="star button323" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="15" q="32" g="3" question="2" rate="3" ng-click />
                            <img class="star button324" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="15" q="32" g="3" question="2" rate="4" ng-click />
                        </div>
                        <div class="attention a32" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                     <div class="row q3">
                        <div class="span2">
                            <p class="color3" style="width: 35%;" lang="sk">Ponuka vína:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <img class="star button331" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="16" q="33" g="3" question="3" rate="1" ng-click />
                            <img class="star button332" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="16" q="33" g="3" question="3" rate="2" ng-click />
                            <img class="star button333" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="16" q="33" g="3" question="3" rate="3" ng-click />
                            <img class="star button334" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="16" q="33" g="3" question="3" rate="4" ng-click />
                        </div>
                        <div class="attention a33" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                    <div class="row q4">
                        <div class="span2">
                            <p class="color3" style="width: 35%;" lang="sk">Bar a kaviareň:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <img class="star button341" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="17" q="34" g="3" question="4" rate="1" ng-click />
                            <img class="star button342" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="17" q="34" g="3" question="4" rate="2" ng-click />
                            <img class="star button343" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="17" q="34" g="3" question="4" rate="3" ng-click />
                            <img class="star button344" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="17" q="34" g="3" question="4" rate="4" ng-click />
                        </div>
                        <div class="attention a34" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                    <div class="row q5">
                        <div class="span2">
                            <p class="color3" style="width: 35%;" lang="sk">Ochota pomôcť a priateľskosť:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <img class="star button351" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="18" q="35" g="3" question="5" rate="1" ng-click />
                            <img class="star button352" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="18" q="35" g="3" question="5" rate="2" ng-click />
                            <img class="star button353" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="18" q="35" g="3" question="5" rate="3" ng-click />
                            <img class="star button354" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="18" q="35" g="3" question="5" rate="4" ng-click />
                        </div>
                        <div class="attention a35" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>
                    
                </div><!--end of starRatingSystem-->
			</div><!--end of item3 -->

			<div class = 'item' id = 'item4'>
				<p class="question" lang="sk">Ako hodnotíte wellness hotela ?</p>

				<div class="container starsRatingSystem group4">
                    <div class="row q0">
                        <div class="span2">
                            <p class="color0" style="width: 35%;" lang="sk">Čistota wellness:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <div class="smileEva">
                                <small lang="sk">veľmi nespokojný</small>
                                <img class="star  button401" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="19" q="40" g="4" question="0" rate="1" ng-click />
                            </div>
                            <div class="smileEva">
                                <small lang="sk">nespokojný</small>
                                <img class="star  button402" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="19" q="40" g="4" question="0" rate="2" ng-click />
                            </div>
                            <div class="smileEva">
                                <small lang="sk">spokojný</small>
                                <img class="star  button403" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="19" q="40" g="4" question="0" rate="3" ng-click />
                            </div>
                            <div class="smileEva">
                                <small lang="sk">veľmi spokojný</small>
                                <img class="star  button404" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="19" q="40" g="4" question="0" rate="4" ng-click />
                            </div>
                        </div>
                        <div class="attention a40" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                    <div class="row q1">
                        <div class="span2">
                            <p class="color1" style="width: 35%;" lang="sk">Dostatok uterákov a plachiet:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <img class="star button411" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="20" q="41" g="4" question="1" rate="1" ng-click />
                            <img class="star button412" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="20" q="41" g="4" question="1" rate="2" ng-click />
                            <img class="star button413" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="20" q="41" g="4" question="1" rate="3" ng-click />
                            <img class="star button414" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="20" q="41" g="4" question="1" rate="4" ng-click />
                        </div>
                        <div class="attention a41" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                    <div class="row q2">
                        <div class="span2">
                            <p class="color2" style="width: 35%;" lang="sk">Ponuka odpočívadiel a oddychových častí:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <img class="star button421" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="21" q="42" g="4" question="2" rate="1" ng-click />
                            <img class="star button422" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="21" q="42" g="4" question="2" rate="2" ng-click />
                            <img class="star button423" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="21" q="42" g="4" question="2" rate="3" ng-click />
                            <img class="star button424" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="21" q="42" g="4" question="2" rate="4" ng-click />
                        </div>
                        <div class="attention a42" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                     <div class="row q3">
                        <div class="span2">
                            <p class="color3" style="width: 35%;" lang="sk">Atmosféra a dekorácie:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <img class="star button431" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="22" q="43" g="4" question="3" rate="1" ng-click />
                            <img class="star button432" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="22" q="43" g="4" question="3" rate="2" ng-click />
                            <img class="star button433" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="22" q="43" g="4" question="3" rate="3" ng-click />
                            <img class="star button434" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="22" q="43" g="4" question="3" rate="4" ng-click />
                        </div>
                        <div class="attention a43" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                    <div class="row q4">
                        <div class="span2">
                            <p class="color3" style="width: 35%;" lang="sk">Ponuka masáži a procedúr:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <img class="star button441" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="23" q="44" g="4" question="4" rate="1" ng-click />
                            <img class="star button442" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="23" q="44" g="4" question="4" rate="2" ng-click />
                            <img class="star button443" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="23" q="44" g="4" question="4" rate="3" ng-click />
                            <img class="star button444" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="23" q="44" g="4" question="4" rate="4" ng-click />
                        </div>
                        <div class="attention a44" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>

                    <div class="row q5">
                        <div class="span2">
                            <p class="color3" style="width: 35%;" lang="sk">Ochota pomôcť a priateľstkosť:</p>
                        </div>
                        
                        <div class="span10 pull-right margin">
                            <img class="star button451" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/1.png" questionId="24" q="45" g="4" question="5" rate="1" ng-click />
                            <img class="star button452" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/2.png" questionId="24" q="45" g="4" question="5" rate="2" ng-click />
                            <img class="star button453" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/3.png" questionId="24" q="45" g="4" question="5" rate="3" ng-click />
                            <img class="star button454" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128x128/4.png" questionId="24" q="45" g="4" question="5" rate="4" ng-click />
                        </div>
                        <div class="attention a45" style="display: none;" lang="sk">Prosíme ohodnoťte aj túto otázku</div>
                    </div>
                    
                </div><!--end of starRatingSystem-->
			</div><!--end of item4 -->
		
		</div>
		
	</div>
</div>

<div class="tooltips">
    <div id="firstTooltip" class="tooltip_1" rel="tooltip"></div>
    <img class="tooltip_emoticon" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128/10.png" />
</div>

<div class="goAheadTooltip">
    <div id="secondTooltip" class="tooltip_2" rel="tooltip" title="test"></div>
    <img class="tooltip_emoticon_2" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/Emoticons/128/10.png" />
</div>

<div class="bottomBar">
    <div class = 'iosSliderButtons'>
            <div class = 'button' id = 'item0'>
                <img class="tooltip_arrow" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire2/arrowB.png" />
                <div class="navigationMenu" lang="sk">Rezervácie</div>
            </div>                  
            <div class = 'button' id = 'item1'>
                <img class="tooltip_arrow" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire2/arrowB.png" />
                <div class="navigationMenu" lang="sk">Recepcia</div>
            </div>
            <div class = 'button' id = 'item2'>
                <img class="tooltip_arrow" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire2/arrowB.png" />
                <div class="navigationMenu" lang="sk">Ubytovanie</div>
            </div>
            <div class = 'button' id = 'item3'>
                <img class="tooltip_arrow" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire2/arrowB.png" />
                <div class="navigationMenu" lang="sk">Reštaurácia</div>
            </div>
            <div class = 'button' id = 'item4'>
                <img class="tooltip_arrow" src="<?php echo htmlSpecialChars($basePath) ?>/www/img/component_questionnaire2/arrowB.png" />
                <div class="navigationMenu" lang="sk">Wellness</div>
            </div>
    </div>
    <button class="btn btn-large btn-block submitButton" onclick="submit();" lang="sk">Ukončiť hodnotenie</button>
</div>

<script>
    var question_count_g0 = 4;
    var question_count_g1 = 3;
    var question_count_g2 = 4;
    var question_count_g3 = 6;
    var question_count_g4 = 6;

    var checker0, checker1, checker2, checker3, checker4;
    var r_questionnaire_id, question_id;

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

        //prepare input to ajax update
        r_questionnaire_id = $.showEmos.questionnaireId;
        question_id        = $(this).attr("questionId");
        rate               = $(this).attr("rate");
        g                  = $(this).attr("g");
        question           = $(this).attr("q");
        question_img       = $(this).attr("question");
        
        ajaxStartUpdate(r_questionnaire_id,question_id,rate);

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
                    //$(".emoChecker").click();
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
        var input = $(".roomInput").val();
        var digitOK;

        if(input != ""){
            if(validateDigit(input)){
                $(".a57").css("display","none");
                digitOK = true;
            }else {
                $(".a57").css("display","block");
                digitOK =  false;
            }
        }else {
            $(".a57").css("display","none");
            digitOK = true;
        }

        if(checkSummary() == true && digitOK == true){
            ajaxStartUpdateSummaryEvaluation($.showEmos.questionnaireId,input, summaryEvaluation, finalScore );
            $('#myModal').modal('hide');
            $.blockUI({ message: $('.timer') }); 
            startCountDown(5000);
        }   
    }

    function validateDigit(input){
        var intRegex = /^\d+$/;
        var floatRegex = /^((\d+(\.\d *)?)|((\d*\.)?\d+))$/;
        
        if(intRegex.test(input) || floatRegex.test(input)) {
           return true;
        }else return false;
    }

    function checkSummary(){
        if(summaryEvaluation != 0 && summaryEvaluation != "undefined"){
            //$(".modal-body").replaceWith(".timer");
            return true;
        }else {
            $(".a56").css("display","block");
            return false;
        }
        return false;
    }
</script>