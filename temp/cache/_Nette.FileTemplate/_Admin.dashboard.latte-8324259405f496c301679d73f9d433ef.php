<?php //netteCache[01]000407a:2:{s:4:"time";s:21:"0.48078900 1365113805";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:85:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\dashboard.latte";i:2;i:1363832485;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\dashboard.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'g27zkzgoo8')
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
<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.charts.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/d3/d3.v3.js"></script>

<!--Pie chart-->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>



<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.validation.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/grid/jquery.gridster.js"></script>

<!-- Validation Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/validate/jquery.validate.min.js"></script>

<!-- Chosen Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/chosen/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/chosen/chosen.css" media="screen" />

<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.form.js"></script>


<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.validation.js"></script>


<link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/dandelion.css" media="screen" />

<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/jquery.gridster.css" media="screen" />
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/graphs.css" media="screen" />
<!--<script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtmlComment($basePath) ?>/js/cssrefresh.js"></script>-->


<!--end of ScrollPanel-->
<link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/scrollbarVisibility/style.css" />
<link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/scrollbarVisibility/jquery.jscrollpane.codrops2.css" />
<!-- the jScrollPane script -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/scrollbarVisibility/jquery.jscrollpane.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow&v1' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=PT+Serif+Caption:400,400italic' rel='stylesheet' type='text/css' />

<!--end of news ticker-->
<link href="<?php echo htmlSpecialChars($basePath) ?>/css/newsTicker/jquery.tumblrNewsTicker.css" rel="stylesheet" />
<script src="<?php echo htmlSpecialChars($basePath) ?>/js/newsTicker/jquery.timeago.js"></script>
<script src="<?php echo htmlSpecialChars($basePath) ?>/js/newsTicker/jquery.tumblrNewsTicker.js"></script>
<script src="<?php echo htmlSpecialChars($basePath) ?>/js/newsTicker/script.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/jui/css/jquery.ui.all.css" media="screen" />
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/jui/js/jquery-ui-1.8.20.min.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/jui/js/jquery.ui.timepicker.min.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.ui.js"></script>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>

<!-- jGrowl Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/jgrowl/jquery.jgrowl.min.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/jgrowl/jquery.jgrowl.css" media="screen" />


<button id="da-ex-growl-0" class="da-button pink" style="display: none;">Default Growl</button>

<?php if ($success == 1): ?>
    <script type="text/javascript">
        $(function(){
            $('#da-ex-growl-0').click();
        });
    </script>
<?php endif ?>

<div id="graphsContent" class="clearfix">


    <div id="da-content-area">

        <!--end of <div class="grid_1 logoPlace right">
            <img src="<?php echo Nette\Templating\Helpers::escapeHtmlComment($basePath) ?>/images/logo.png" alt="Hotel Chopok" />
        </div>-->
        <div class="grid_4">
            
            <div class="grid_1 areaSelector2">
                <div class="da-form-item locationSelector">
                    <select class="chzn-select">
                        <option>Select city</option>
<?php $iterations = 0; foreach ($cities as $city): ?>
                                <option value="<?php echo htmlSpecialChars($city->city_id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($city->title, ENT_NOQUOTES) ?></option>
<?php $iterations++; endforeach ?>
                    </select>
                </div>            
            </div>

            <div class="grid_1 areaSelector1">
                <div class="da-panel-content">
                    <div class="da-form-item locationSelector">
                        <select id="da-ex-val-chzn" name="chosen1">
                            <option>Select location</option>
<?php $iterations = 0; foreach ($locations as $location): ?>
                                <option value="<?php echo htmlSpecialChars($location->location_id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($location->title, ENT_NOQUOTES) ?></option>
<?php $iterations++; endforeach ?>
                        </select>
                        <label for="da-ex-val-chzn" generated="true" class="error" style="display:none;"></label>
                    </div>
                </div>
            </div>

            <div class="grid_1 areaSelector2">
                <div class="da-form-item locationSelector">
                    <select class="chzn-select">
                        <option>Select time period</option>
                        <option>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                    </select>
                </div>            
            </div>
            
        </div>

        <br /><br />
        <div class="clearfix"></div>

        <span id="da-ex-slider-range-fixed-info3" class="formNote left">Selected year: <span class="da-highlight">2013</span></span>
        <div class="timelineBG">
            <div class="rangeSlider">
                <div class="da-form-item">
                    <div id="da-ex-slider-range-fixed3" class="rangeSliderTimeline da-ex-color-slider none"></div>
                </div>
            </div>
        </div>
            
        <div class="grid_4 summaryIcons">

            <ul class="da-summary-stat" >
                <li>
                    <a href="#">
                        <span class="da-summary-icon">
                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/stylistica_icons/64x64/info.png" />
                        </span>
                        <span class="da-summary-text">
                            <span class="value up"><?php echo Nette\Templating\Helpers::escapeHtml($totalFeedbacks, ENT_NOQUOTES) ?></span>                                        
                            <span class="label">Number of total feedbacks</span>
                        </span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <span class="da-summary-icon" style="background-color: none;">
                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/stylistica_icons/64x64/comments.png" />
                        </span>
                        <span class="da-summary-text">
                            <span class="value"><?php echo Nette\Templating\Helpers::escapeHtml($totalFeedbacksLast7days, ENT_NOQUOTES) ?></span>
                            <span class="label">Number of feedbacks of campaigns last 7 days</span>
                        </span>
                    </a>
                </li>
                
                <li>
                    <a href="#">
                        <span class="da-summary-icon">
                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/stylistica_icons/64x64/chart.png" />
                        </span>
                        <span class="da-summary-text">
                            <span class="value down" id="campaign_summary">00</span>
                            <span class="label">Number of total feedbacks - campaign "XZ"</span>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="da-summary-icon">
                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/stylistica_icons/64x64/page.png" />
                        </span>
                        <span class="da-summary-text">
                            <span class="value">42</span>
                            <span class="label">Questionnaire A</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="grid_4 graphsArea">
            <div class="grid_1b">
                <div class="graphHeading">feedback and sentiment</div>
                <div class="underline"></div>
            </div>

            <div class="grid_1b">
                <div class="graphHeading">tag cloud (campaign)</div>
                <div class="underline"></div>
            </div>

            <div class="grid_1b">
                <div class="graphHeading">campaign / product testing</div>
                <div class="underline"></div>
            </div>

            <div class="clearfix"></div>

                <div class="gridster">
                  <ul>
                    <li data-row="1" data-col="1" data-sizex="2" data-sizey="1">
                        <div class="FAS_graph">
                            
                            <div class="heading">today</div>
                                <div style="width: 60%;" class="progressBar">
                                    <div class="greenHeading">60%</div>
                                    <small>Promoters</small>
                                    <div id="da-ex-pa" class="animated green leftCorner"></div>
                                </div>
                                <div style="width: 30%;" class="progressBar">
                                    <div class="orangeHeading">30%</div>
                                    <small>Passives</small>
                                    <div id="da-ex-pb" class="animated orange noCorner"></div>
                                </div>
                                <div style="width: 10%;" class="progressBar">
                                    <div class="redHeading">10%</div>
                                    <small>Detractors</small>
                                    <div id="da-ex-pc" class="animated red rightCorner"></div>
                                </div>

                            <div class="smallText">
                                <small>  
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris.Et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris.
                                </small> 
                            </div>

                        </div>
                    </li>

                    <li data-row="2" data-col="1" data-sizex="2" data-sizey="1">
                        <div class="heading">Stepped Area chart</div>
                        <div id="stepped_chart" style="width: 100%; height: 100%;"></div>
                    </li>

                    <li data-row="3" data-col="1" data-sizex="2" data-sizey="1">
                        <div class="heading">Result - Rezervácie</div>

                        <div class="benchmarkTable">
                            <div class="BTbigLeft">
                                <div class="titlesBT">
                                    <small>Rýchlosť a profesionalita </small>                <br />
                                    <small>Presnosť </small>                       <br />
                                    <small class="blue">Ochota pomôcť</small>   <br />
                                    <small>Znalosť rez. agenta </small>              <br />
                                </div>
                            </div>

                            <div class="BTbigRight">
                                
                                <div class="middleBT">
                                    <div class="bechmark-percentage"><small>90%</small></div>
                                    <div class="bechmark-percentage"><small>70%</small></div>
                                    <div class="bechmark-percentage"><small>60%</small></div>
                                    <div class="bechmark-percentage"><small class="orange">50%</small></div>
                                </div>

                                
                                <div class="rightBT">
                                    <div id="da-ex-benchmark-a" class="animated green"></div>
                                    <div id="da-ex-benchmark-b" class="animated green"></div>
                                    <div id="da-ex-benchmark-c" class="animated green"></div>
                                    <div id="da-ex-benchmark-d" class="animated orange"></div>
                                </div>
                            </div>
                        </div><!--end of benchmarkTable-->
                    </li>
                
                        <li data-row="1" data-col="2" data-sizex="2" data-sizey="1">
                               <div class="tagCloud">
                                   <div class="tagCloudCenter">
                                       <a href="" class="green big">cheap</a>  
                                       <a href="" class="red big">dirty</a>  
                                       <a href="" class="green middle">good service</a>  
                                       <a href="" class="orange big">bad quality</a>  
                                       <a href="" class="red small">waiting</a>  
                                       <a href="" class="orange small">choice</a>  
                                       <a href="" class="green middle">friendly</a>  
                                       <a href="" class="orange small">advise</a>  
                                       <a href="" class="orange middle">parking</a>  
                                       <a href="" class="orange big">fresh</a>  
                                       <a href="" class="orange small">good</a>  
                                       <a href="" class="red small">sales</a>  
                                       <a href="" class="green big">good food</a>  
                                    </div>
                                </div>
                                <div class="smallText">
                                    <small>  
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris.
                                    </small> 
                                </div>
                        </li>
                        <li data-row="1" data-col="2" data-sizex="2" data-sizey="2">
                            <div class="heading">List of campaigns</div>
                            <br />
                            <div id="jp-container" class="jp-container">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($campaigns) as $campaign): ?>
                                    <a href="#" onclick="JavaScript:ajaxStartCalculate(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($campaign->campaign_id)) ?>)" class="campaign_block">
                                        <div>
                                            <h3>
<?php $iterations = 0; foreach ($locations as $location): if ($location->location_id == $campaign->location_id): $iterations = 0; foreach ($cities as $city): if ($city->city_id == $location->city_id): ?>
                                                                ID: <?php echo Nette\Templating\Helpers::escapeHtml($campaign->campaign_id, ENT_NOQUOTES) ?>
 | <?php echo Nette\Templating\Helpers::escapeHtml($city->title, ENT_NOQUOTES) ?>
<br /><?php echo Nette\Templating\Helpers::escapeHtml($campaign->title, ENT_NOQUOTES) ?>
  - <?php echo Nette\Templating\Helpers::escapeHtml($location->title, ENT_NOQUOTES) ?>

<?php endif ;$iterations++; endforeach ;endif ;$iterations++; endforeach ?>
                                            </h3>  
                                            <?php echo Nette\Templating\Helpers::escapeHtml($campaign->main_question, ENT_NOQUOTES) ?>

                                            <br /><br />
                                            <img class="campaign_image" src="<?php echo htmlSpecialChars($basePath) ?>
/www/uploads/ps/<?php echo htmlSpecialChars($campaign->category_id) ?>/thumbs/<?php echo htmlSpecialChars($pictures[$campaign->category_id]) ?>" />
                                            <p class="campaign_description_<?php echo htmlSpecialChars($iterator->counter) ?>">
                                                <?php echo Nette\Templating\Helpers::escapeHtml($campaign->description, ENT_NOQUOTES) ?>

                                            </p>
                                        </div>
                                    </a>
<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>

                                
                            </div>
                        </li>   
                        <li data-row="2" data-col="2" data-sizex="2" data-sizey="2">
                            <div class="heading">Online responses</div><br />
                            <div id="main"></div>
                        </li>         
                
                        <li data-row="1" data-col="2" data-sizex="2" data-sizey="1" id="donut_graph">
                            <div class="heading">Actual results</div>
                            <br />
                            <div id="chart_div" style="z-index: 1; position: absolute; left: 0px; top: 20px;">
                        </li>  
            
                    </ul>
                </div>
            </div>

    </div><!--end of contentarea-->
</div><!--end of contentarea-->

<div class="fillContainerXS"></div>
<div class="clearfix"></div>
</div>
</div>

<script type="text/javascript">
    var counter = 1;
    $('.jp-container a img').each(function() {
        //console.log(counter + this);
        $(".campaign_description_"+counter).css("height",  this["naturalHeight"]-20)
        counter++;
    });
</script>

<script type="text/javascript">
    google.load("visualization", "1", { packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Campaign (months)',  'Service 1', 'Service 2', 'Service 3'],
          ['January', 8, 7, 5],
          ['February', 6, 6, 8],
          ['March', 5, 5, 10],
          ['April', 4 ,4, 12]
        ]);

        var options = {
            title: 'The Title',
            vAxis: { title: 'Accumulated Rating'},
            backgroundColor: "none",
            isStacked: true
        };

        var chart = new google.visualization.SteppedAreaChart(document.getElementById('stepped_chart'));
        chart.draw(data, options);
     }
</script>

<script type="text/javascript">

        $(".gridster ul").gridster({
            widget_margins: [20, 20],
            widget_base_dimensions: [160, 220],
            max_size_x: 10,
            max_size_y: 1,
        });

        $("#da-ex-pa, #da-ex-pb, #da-ex-pc").progressbar({ value: 100 });
        $("#da-ex-benchmark-a").progressbar({ value: 1 });
        $("#da-ex-benchmark-a").progressbar({ value: 90});

        $("#da-ex-benchmark-b").progressbar({ value: 1 });
        $("#da-ex-benchmark-b").progressbar({ value: 70});

        $("#da-ex-benchmark-c").progressbar({ value: 1 });
        $("#da-ex-benchmark-c").progressbar({ value: 60});

        $("#da-ex-benchmark-d").progressbar({ value: 1 });
        $("#da-ex-benchmark-d").progressbar({ value: 50});

        $("#da-ex-benchmark-e").progressbar({ value: 1 });
        $("#da-ex-benchmark-e").progressbar({ value: 82});

</script>

<script type="text/javascript">
    $(function() { 
    
        // the element we want to apply the jScrollPane
        var $el                 = $('#jp-container').jScrollPane({
            verticalGutter  : -16
        }),
                
        // the extension functions and options  
            extensionPlugin     = {
                
                extPluginOpts   : {
                    // speed for the fadeOut animation
                    mouseLeaveFadeSpeed : 500,
                    // scrollbar fades out after hovertimeout_t milliseconds
                    hovertimeout_t      : 1000,
                    // if set to false, the scrollbar will be shown on mouseenter and hidden on mouseleave
                    // if set to true, the same will happen, but the scrollbar will be also hidden on mouseenter after "hovertimeout_t" ms
                    // also, it will be shown when we start to scroll and hidden when stopping
                    useTimeout          : false,
                    // the extension only applies for devices with width > deviceWidth
                    deviceWidth         : 980
                },
                hovertimeout    : null, // timeout to hide the scrollbar
                isScrollbarHover: false,// true if the mouse is over the scrollbar
                elementtimeout  : null, // avoids showing the scrollbar when moving from inside the element to outside, passing over the scrollbar
                isScrolling     : false,// true if scrolling
                addHoverFunc    : function() {
                    
                    // run only if the window has a width bigger than deviceWidth
                    if( $(window).width() <= this.extPluginOpts.deviceWidth ) return false;
                    
                    var instance        = this;
                    
                    // functions to show / hide the scrollbar
                    $.fn.jspmouseenter  = $.fn.show;
                    $.fn.jspmouseleave  = $.fn.fadeOut;
                    
                    // hide the jScrollPane vertical bar
                    var $vBar           = this.getContentPane().siblings('.jspVerticalBar').hide();
                    
                    /*
                     * mouseenter / mouseleave events on the main element
                     * also scrollstart / scrollstop - @James Padolsey : http://james.padolsey.com/javascript/special-scroll-events-for-jquery/
                     */
                    $el.bind('mouseenter.jsp',function() {
                        
                        // show the scrollbar
                        $vBar.stop( true, true ).jspmouseenter();
                        
                        if( !instance.extPluginOpts.useTimeout ) return false;
                        
                        // hide the scrollbar after hovertimeout_t ms
                        clearTimeout( instance.hovertimeout );
                        instance.hovertimeout   = setTimeout(function() {
                            // if scrolling at the moment don't hide it
                            if( !instance.isScrolling )
                                $vBar.stop( true, true ).jspmouseleave( instance.extPluginOpts.mouseLeaveFadeSpeed || 0 );
                        }, instance.extPluginOpts.hovertimeout_t );
                        
                        
                    }).bind('mouseleave.jsp',function() {
                        
                        // hide the scrollbar
                        if( !instance.extPluginOpts.useTimeout )
                            $vBar.stop( true, true ).jspmouseleave( instance.extPluginOpts.mouseLeaveFadeSpeed || 0 );
                        else {
                        clearTimeout( instance.elementtimeout );
                        if( !instance.isScrolling )
                                $vBar.stop( true, true ).jspmouseleave( instance.extPluginOpts.mouseLeaveFadeSpeed || 0 );
                        }
                        
                    });
                    
                    if( this.extPluginOpts.useTimeout ) {
                        
                        $el.bind('scrollstart.jsp', function() {
                        
                            // when scrolling show the scrollbar
                            clearTimeout( instance.hovertimeout );
                            instance.isScrolling    = true;
                            $vBar.stop( true, true ).jspmouseenter();
                            
                        }).bind('scrollstop.jsp', function() {
                            
                            // when stop scrolling hide the scrollbar (if not hovering it at the moment)
                            clearTimeout( instance.hovertimeout );
                            instance.isScrolling    = false;
                            instance.hovertimeout   = setTimeout(function() {
                                if( !instance.isScrollbarHover )
                                    $vBar.stop( true, true ).jspmouseleave( instance.extPluginOpts.mouseLeaveFadeSpeed || 0 );
                            }, instance.extPluginOpts.hovertimeout_t );
                            
                        });
                        
                        // wrap the scrollbar
                        // we need this to be able to add the mouseenter / mouseleave events to the scrollbar
                        var $vBarWrapper    = $('<div/>').css({
                            position    : 'absolute',
                            left        : $vBar.css('left'),
                            top         : $vBar.css('top'),
                            right       : $vBar.css('right'),
                            bottom      : $vBar.css('bottom'),
                            width       : $vBar.width(),
                            height      : $vBar.height()
                        }).bind('mouseenter.jsp',function() {
                            
                            clearTimeout( instance.hovertimeout );
                            clearTimeout( instance.elementtimeout );
                            
                            instance.isScrollbarHover   = true;
                            
                            // show the scrollbar after 100 ms.
                            // avoids showing the scrollbar when moving from inside the element to outside, passing over the scrollbar                              
                            instance.elementtimeout = setTimeout(function() {
                                $vBar.stop( true, true ).jspmouseenter();
                            }, 100 );   
                            
                        }).bind('mouseleave.jsp',function() {
                            
                            // hide the scrollbar after hovertimeout_t
                            clearTimeout( instance.hovertimeout );
                            instance.isScrollbarHover   = false;
                            instance.hovertimeout = setTimeout(function() {
                                // if scrolling at the moment don't hide it
                                if( !instance.isScrolling )
                                    $vBar.stop( true, true ).jspmouseleave( instance.extPluginOpts.mouseLeaveFadeSpeed || 0 );
                            }, instance.extPluginOpts.hovertimeout_t );
                            
                        });
                        
                        $vBar.wrap( $vBarWrapper );
                    }
                }
            },
            
            // the jScrollPane instance
            jspapi          = $el.data('jsp');
            
        // extend the jScollPane by merging 
        $.extend( true, jspapi, extensionPlugin );
        jspapi.addHoverFunc();
    
    });
</script>

<script type="text/javascript">
    
    $(document).ready(function() {
        //ajaxStartCalculate("10");
    });

    function ajaxStartCalculate(campaign_id){
       ajaxCalculatePieData(campaign_id);
       ajaxUpdateSummaryData(campaign_id);
       return false;
    }

    function ajaxUpdateSummaryData(campaign_id){
        $.ajax({    //create an ajax request to load_page.php
          type: "POST",
          url: "?do=jsonUpdateSummaryData",
          data: { campaign_id: campaign_id },
          dataType: "html",   //expect html to be returned
          success: function(msg){ 
              if(parseInt(msg)!=0)    //if no errors
              {
                $("#campaign_summary").html(msg);
              }
          }
      });
    }

    function ajaxCalculatePieData(campaign_id){
        
        $.ajax({    //create an ajax request to load_page.php
          type: "POST",
          url: "?do=jsonGetChartData",
          data: { campaign_id: campaign_id },
          dataType: "html",   //expect html to be returned
          success: function(msg){ 
              if(parseInt(msg)!=0)    //if no errors
              {
                setupData(msg);
              }
          }
      });
    }

    google.load("visualization", "1", { packages:["corechart"]});
    google.setOnLoadCallback(drawChart);

    function setupData(msg){

        var dataArray = [];
        var obj = jQuery.parseJSON(msg);

        $.each(obj, function (index, value) {
            dataArray.push([value["title"].toString(), value["percentage"] ]);
        });

        drawChart(dataArray);
    }

    function drawChart(chartData) {
        var data = new google.visualization.DataTable();

        data.addColumn('string', 'Task');
        data.addColumn('number', 'Hours per Day');
        
        data.addRows(chartData);

        var options = {
        width: 480, height: 250,
        backgroundColor: { stroke:'none', fill:'none', strokeSize: 1},
        chartArea:{ width:"90%",height:"75%"},
        colors:['#ECD078','#D95B43','#C02942','#a6d037',"orange","red"],
        legend: { position: "right"},
        pieHole: 0.5,
           animation:{
               duration: 800,
               easing: 'in'
             }
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));

        chart.draw(data, options);
    }
    function roundNumber(num, dec) {
     var result = Math.round(num*Math.pow(10,dec))/Math.pow(10,dec);
     return result;
    }
</script>