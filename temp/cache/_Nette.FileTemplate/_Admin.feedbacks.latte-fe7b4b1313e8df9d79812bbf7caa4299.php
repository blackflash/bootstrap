<?php //netteCache[01]000407a:2:{s:4:"time";s:21:"0.57036900 1362096980";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:85:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\feedbacks.latte";i:2;i:1359482600;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\feedbacks.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'd4ahlgjxvr')
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

<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/jquery.countdown.css" media="screen" />
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.countdown.js"></script>

<!-- DataTables Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/datatables/jquery.dataTables.min.js"></script>

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.tables.js"></script>

<!-- jGrowl Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/jgrowl/jquery.jgrowl.min.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/jgrowl/jquery.jgrowl.css" media="screen" />

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.ui.js"></script>
<!-- Validation Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/validate/jquery.validate.min.js"></script>

<!-- Chosen Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/chosen/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/chosen/chosen.css" media="screen" />

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.validation.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.nette.js"></script>

<!-- Chosen Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/chosen/chosen.jquery.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/chosen/chosen.css" media="screen" />

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/elastic/jquery.elastic.min.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.form.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.ui.js"></script>

<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>


<!-- Content Area -->     
    
    <div class="grid_4">
        <div class="da-panel collapsible collapsed">
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/16/computer_imac.png" alt="Panel" />
                    Feedback type 1
                </span>
                
            </div>
            <div class="da-panel-content with-padding">

                <div id="iPad">
                    <div id="feedbackWindow">
                        <form class="da-form" enctype="multipart/form-data" method="post" action="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=feedback1">
                            
                                
                                <div id="left">
                                    <p class="feedbackTopic">What do you shop in our supermarket ?</p>
                                    <img src="<?php echo htmlSpecialChars($basePath) ?>/img/feedbacks/hc2.jpg" />
                                    <div class="da-form-row">
                                        <textarea rows="auto" cols="auto" name="feedback_1">Sample text 1</textarea>
                                    </div>
                                </div>
                                
                                <div id="right">
                                    <p class="feedbackTopic">Is there anything you don´t like ?</p>
                                    <img src="<?php echo htmlSpecialChars($basePath) ?>/img/feedbacks/hc.jpg" />
                                    <div class="da-form-row">
                                        <textarea rows="auto" cols="auto" name="feedback_2">Sample text 2</textarea>
                                    </div>
                                </div>
                            
                           

                            <div id="bottom">
                                
                                <div id="top">
                                    <p class="feedbackTopic">How likely you recommend our shop to a friend or colleague ?</p>
                                    <div class="da-form-item">
                                        <span id="da-ex-slider-range-fixed-info" class="formNote left">Percentage: <span class="da-highlight">1</span></span>
                                        <div id="da-ex-slider-range-fixed"></div>
                                    </div>
                                </div>
                                
                                <div id="bottom">
                                    <input type="button" class="da-button green feedbackSubmit" value="Send Feedback" />
                                </div>
                            
                            </div><!--end of bottom-->
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="grid_4">
        <div class="da-panel collapsible collapsed">
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/16/computer_imac.png" alt="Panel" />
                    Feedback type 2
                </span>
                
            </div>
            <div class="da-panel-content with-padding">

                <div id="iPad">
                    <div id="feedbackWindow">
                        <form class="da-form" enctype="multipart/form-data" method="post" action="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=feedback1">
                            
                                <h1>Which product do you like more ?</h1>
                                
                                <div id="left">
                                    <p class="feedbackTopic">Exotic sand ?</p>
                                    <a href="#" class="feedbackImage2" ><img  src="<?php echo htmlSpecialChars($basePath) ?>/img/feedbacks/example_1.png" style="width: 250px;" /></a>
                                </div>
                                
                                <div id="right">
                                    <p class="feedbackTopic">Blue butterfly ?</p>
                                    <a href="#" class="feedbackImage2b"><img src="<?php echo htmlSpecialChars($basePath) ?>/img/feedbacks/example_2.png" style="width: 150px;" /></a>
                                </div>
                            
                           

                            <div id="bottom">
                                
                                <div id="top">
                                    
                                </div>
                                
                                <div id="bottom">
                                </div>
                            
                            </div><!--end of bottom-->
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="grid_4">
        <div class="da-panel collapsible collapsed">
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/16/computer_imac.png" alt="Panel" />
                    Feedback type 3
                </span>
                
            </div>
            <div class="da-panel-content with-padding">

                <div>
                    <script>
                        $(function() {
                            $( "#catalog" ).accordion();
                            $( "#catalog li" ).draggable({
                                appendTo: "body",
                                helper: "clone"
                            });
                            $( "#cart ol" ).droppable({
                                activeClass: "ui-state-default",
                                hoverClass: "ui-state-hover",
                                accept: ":not(.ui-sortable-helper)",
                                drop: function( event, ui ) {
                                    $( this ).find( ".placeholder" ).remove();
                                    $( "<li></li>" ).text( ui.draggable.text() ).appendTo( this );
                                }
                            }).sortable({
                                items: "li:not(.placeholder)",
                                sort: function() {
                                    // gets added unintentionally by droppable interacting with sortable
                                    // using connectWithSortable fixes this, but doesn't allow you to customize active/hoverClass options
                                    $( this ).removeClass( "ui-state-default" );
                                }
                            });
                        });
                        </script>

                </div>  

                <div id="iPad">
                    <div id="feedbackWindow">
                        <form class="da-form" enctype="multipart/form-data" method="post" action="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=feedback1">
                                <h1>Tell us what do you think...</h1>
                                
                                <div id="left2">
                                    
                                    <img src="<?php echo htmlSpecialChars($basePath) ?>/img/feedbacks/hc2.jpg" />

                                </div>
                                
                                <div id="right2">
                                    <div class="da-form-row vocabulary">
                                        <p class="feedbackTopic">Dragable words</p>
                                        <div id="catalog">
                                            <ul>
                                                <li>Brilliant</li>
                                                <li>Crazy</li>
                                                <li>Awful</li>
                                                <li>Awful</li>
                                                <li>Dull</li>
                                                <li>Good</li>
                                                <li>Bad</li>
                                                <li>Other type in..</li>
                                            </ul>
                                        </div>

                                        <p class="feedbackTopic2">What I don´t like / don´t understand</p>
                                        
                                        <div id="cart">
                                            <div class="ui-widget-content">
                                                <ol>
                                                    <li class="placeholder">Add your words here</li>
                                                </ol>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            
                           
                            <div id="bottom">
                                <div id="top" class="box">
                                    <p class="feedbackTopic">Will you participate ?</p>
                                    <div class="da-form-item">
                                        <span id="da-ex-slider-range-fixed-info2" class="formNote left">Percentage: <span class="da-highlight">1</span></span>
                                        <div id="da-ex-slider-range-fixed2"></div>
                                    </div>
                                </div>
                                
                                <div id="bottom">
                                    <input type="button" class="da-button green feedbackSubmit" value="Send Feedback" />
                                </div>
                            
                            </div><!--end of bottom-->
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    </div>
</div>

