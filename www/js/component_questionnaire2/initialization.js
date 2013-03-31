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