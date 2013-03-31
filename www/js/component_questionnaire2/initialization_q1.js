/*------------------- TIMER ----------------------*/
        var myTimeShow = 190;
        var myTimeOut;

        function tick () {
            if (document.getElementById ('counter').firstChild.data > 0) {
                document.getElementById ('counter').firstChild.data = document.getElementById ('counter').firstChild.data - 1;
                setTimeout ('tick()', 1000)
            }else {
                $.blockUI({ message: $('.timer') }); 
                $("#counter").css("display","none");
            }
        }

        if (document.getElementById) onload = function () {
            var t = document.createTextNode (myTimeShow)
            var p = document.createElement ('small')
            p.appendChild (t)
            p.setAttribute ('id', 'counter')
            var body = document.getElementsByTagName ('specialcounter')[0]
            var firstChild = body.getElementsByTagName ('*')[0]
            body.insertBefore (p, firstChild)
            tick()
        }
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
              url: "http://www.cleverfrogs.com/questionnaire2/?do=jsonPrepareQuestionnaire",
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
           var questionnaire_id = {$questionnaire->questionnaire_id};
           prepareQuestionnaire(questionnaire_id,lang);
           return false;
        }


        // update data
        function updateQuestionnaire(r_questionnaire_id, question_id,rate){
            
            $("#ajax_loader").show();

            $.ajax({    //create an ajax request to load_page.php
              type: "POST",
              url: "http://www.cleverfrogs.com/questionnaire2/?do=jsonUpdateQuestionnaire",
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
              url: "http://www.cleverfrogs.com/questionnaire2/?do=jsonUpdateSummaryEvaluationQuestionnaire",
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

            // TVRDYCH 200
            $scope.setLanguage = function(lang){
                //startCountDown(200000);
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
                    $(".tooltip_arrow").css("display","block");
                    $(".goAheadTooltip").addClass("animated tada");
                    $.showEmos.showed = 1;
                } else if($.showEmos.emo1 == 3 && $.showEmos.showed == 0){
                    checkLanguage();
                    $(".goAheadTooltip").css("display","block");
                    $(".tooltip_arrow").css("display","block");
                    $(".goAheadTooltip").addClass("animated tada");
                    $.showEmos.showed = 1;
                } else if($.showEmos.emo2 == 4 && $.showEmos.showed == 0){
                    checkLanguage();
                    $(".goAheadTooltip").css("display","block");
                    $(".tooltip_arrow").css("display","block");
                    $(".goAheadTooltip").addClass("animated tada");
                    $.showEmos.showed = 1;
                } else if($.showEmos.emo3 == 6 && $.showEmos.showed == 0){
                    checkLanguage();
                    $(".goAheadTooltip").css("display","block");
                    $(".tooltip_arrow").css("display","block");
                    $(".goAheadTooltip").addClass("animated tada");
                    $.showEmos.showed = 1;
                } else if($.showEmos.emo4 == 6 && $.showEmos.showed == 0){
                    checkLanguage();
                    $(".goAheadTooltip").css("display","block");
                    $(".tooltip_arrow").css("display","block");
                    $(".goAheadTooltip").addClass("animated tada");
                    $.showEmos.showed = 1;
                }
                return $.showEmos;
            }
        }

        /*--------------------- focus input -------------*/
        $(document).ready(function () {
            startCountDown(200000);
            $(".clickHere").css("display","none");
            $(".roomInput").focus(function(){
                $(".clickHere").css("display","block");
                if($.myLanguage == "sk"){
                    $(".clickHere").attr("src",host + "/www/img/component_questionnaire2/done_sk.png");
                }else {
                    $(".clickHere").attr("src",host +"/www/img/component_questionnaire2/done_en.png");
                }
            });

            $(".roomInput").focusout(function(){
                $(".clickHere").css("display","none");
            });
        });