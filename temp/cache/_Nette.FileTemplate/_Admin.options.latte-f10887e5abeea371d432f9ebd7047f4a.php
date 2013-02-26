<?php //netteCache[01]000405a:2:{s:4:"time";s:21:"0.94958900 1361843366";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:83:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\options.latte";i:2;i:1359482600;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\options.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ppqmdgq5su')
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
<!-- Dandelion Customizer (remove if not needed) -->
    <div id="da-customizer">
    	<div id="da-customizer-content">
        	<ul>
            	<li>
                	<span class="da-customizer-title">Background Pattern</span>
                    <span id="da-customizer-body-bg"></span>
                </li>
                <li>
                	<span>Header Pattern</span>
                    <span id="da-customizer-header-bg"></span>
                </li>
                <li>
                	<span>
                    	Layout
                        <span title="This functionality can only provide you the CSS for background and header patterns. Instructions to switch between fixed or fluid layout can be found in the documentation." class="da-tooltip-w da-customizer-tooltip">
                    		[?]
                        </span>
                    </span>
                    <ul id="da-customizer-layouts" class="clearfix">
                    	<li>
                        	<input type="radio" id="da-customizer-fluid" name="da-layout" checked="checked" />
                        	<label for="da-customizer-fluid">Fluid</label>
                        </li>
                    	<li>
                        	<input type="radio" id="da-customizer-fixed" name="da-layout" />
                            <label for="da-customizer-fixed">Fixed</label>
                        </li>
                    </ul>
                </li>
            </ul>
            <div id="da-customizer-button">
            	<button class="da-button red">Get CSS</button>
            </div>
        </div>
        <span id="da-customizer-pulldown"></span>
    </div>