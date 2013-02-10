<?php //netteCache[01]000407a:2:{s:4:"time";s:21:"0.68140600 1359078169";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:85:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\dashboard.latte";i:2;i:1354621332;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\dashboard.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 's9zjuqpkob')
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


<!-- Content Area -->
                    <div id="da-content-area">
                        <div class="grid_3">
                            <ul class="da-circular-stat-wrap">
                                <li class="da-circular-stat { fillColor: '#a6d037', value: 55, maxValue: 98, label: 'number of full filled forms' }"></li>
                                <li class="da-circular-stat { fillColor: '#ea799b', percent: true, value: 200, maxValue: 241, label: 'iPads Cloned' }"></li>
                                <li class="da-circular-stat { fillColor: '#fab241', value: 124, maxValue: 523, label: 'Androids Bought' }"></li>
                                <li class="da-circular-stat { fillColor: '#61a5e4', percent: true, value: 42, maxValue: 100, label: 'Funds Collected' }"></li>
                            </ul>
                            <div class="da-panel-widget">
                                <h1>Estimated Revenue</h1>
                                <div id="da-ex-gchart-line" style="height:225px;"></div>
                            </div>
                        </div>
                        
                        <div class="grid_1">
                            <div class="da-panel-widget">
                                <h1>Summary</h1>
                                <ul class="da-summary-stat">
                                    <li>
                                        <a href="#">
                                            <span class="da-summary-icon" style="background-color:#e15656;">
                                                <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/white/32/truck.png" alt="" />
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value up">211</span>
                                                <span class="label">Number of feedbacks today</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="da-summary-icon" style="background-color:#a6d037;">
                                                <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/white/32/sport_shirt.png" alt="" />
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value">512</span>
                                                <span class="label">Number of feedbacks today campaign "XZ"</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="da-summary-icon" style="background-color:#ea799b;">
                                                <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/white/32/abacus.png" alt="" />
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value up">286</span>                                        
                                                <span class="label">Number of feedbacks total</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="da-summary-icon" style="background-color:#fab241;">
                                                <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/white/32/airplane.png" alt="" />
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value down">61</span>
                                                <span class="label">Number of feedbacks total campaign "XZ"</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="da-summary-icon" style="background-color:#61a5e4;">
                                                <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/white/32/shopping_basket_2.png" alt="" />
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value">42</span>
                                                <span class="label">Shops Visited</span>
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="da-summary-icon" style="background-color:#656565;">
                                                <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/white/32/users_2.png" alt="" />
                                            </span>
                                            <span class="da-summary-text">
                                                <span class="value">266</span>
                                                <span class="label">Customers Satisfied</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                    	<div class="grid_2">
                        	<div class="da-panel">
                            	<div class="da-panel-header">
                                	<span class="da-panel-title">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>
/<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/calendar_2.png" alt="" />
                                        Event Calendar
                                    </span>
                                    
                                </div>
                                <div class="da-panel-content with-padding">
                                	<div id="da-ex-calendar-gcal"></div>
                                </div>
                            </div>
                        </div>

                        <div class="grid_2">
                            <div class="da-panel collapsible">
                                <div class="da-panel-header">
                                    <span class="da-panel-title">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/16/graph.png" alt="" />
                                        Area Chart
                                    </span>
                                    
                                </div>
                                <div class="da-panel-content">
                                    <div id="da-ex-gchart-area" style="height:350px;"></div>
                                </div>
                            </div>
                        </div>

                        <div class="grid_2">
                            <div class="da-panel collapsible">
                                <div class="da-panel-header">
                                    <span class="da-panel-title">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/16/graph.png" alt="" />
                                        Tah cloud
                                    </span>
                                    
                                </div>
                                <div class="da-panel-content">
                                 
                                        <div style="_height:px; width:px;background-color:#FFFFFF;font-family:Arial; border: 1px solid #FFFFFF; text-align:left;">
                                           <div style="text-align: justify;padding: 15px;_height:px; width: 250px;background-color:#FFFFFF;font-family:Arial; border: 1px solid #FFFFFF; text-align:left;">
                                               <a href="" style="font-size:22px;text-decoration:none; color: green;">cheap</a>  
                                               <a href="" style="font-size:15px;text-decoration:none; color: #FF7600;">advise</a>  
                                               <a href="" style="font-size:15px;text-decoration:none; color: #FF7600;">expensive</a>  
                                               <a href="" style="font-size:18px;text-decoration:none; color: #039FAF;">low quality</a>  
                                               <a href="" style="font-size:12px;text-decoration:none; color: #039FAF;">choice</a>  
                                               <a href="" style="font-size:21px;text-decoration:none; color: #DE2159;">bad</a>  
                                               <a href="" style="font-size:22px;text-decoration:none; color: #039FAF;">friendly</a>  
                                               <a href="" style="font-size:15px;text-decoration:none; color: #87A800;">variety</a>  
                                               <a href="" style="font-size:19px;text-decoration:none; color: #DE2159;">value food</a>  
                                               <a href="" style="font-size:14px;text-decoration:none; color: #FF7600;">close parking</a>  
                                               <a href="" style="font-size:14px;text-decoration:none; color: #87A800;">fresh</a>  
                                               <a href="" style="font-size:14px;text-decoration:none; color: #FF7600;">quality</a>  
                                               <a href="" style="font-size:14px;text-decoration:none; color: #87A800;">dirty</a>  
                                               <a href="" style="font-size:12px;text-decoration:none; color: #87A800;">good service</a>  
                                               <a href="" style="font-size:18px;text-decoration:none; color: #87A800;">sales</a>  
                                               <a href="" style="font-size:21px;text-decoration:none; color: #FF7600;">waiting</a>  
                                               <a href="" style="font-size:19px;text-decoration:none; color: #DE2159;">good</a>  
                                            </div>
                                        </div>
                                       
                                </div>
                            </div>
                        </div><!--end of tagcloud-->

                    </div>
                    
                </div>
                
            </div>