<?php //netteCache[01]000402a:2:{s:4:"time";s:21:"0.15881400 1352060680";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:80:"C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Admin\sidebar.latte";i:2;i:1352060668;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Admin\sidebar.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'y4k7zpmp91')
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
 <!-- Sidebar -->
                <div id="da-sidebar">
                
                    <!-- Main Navigation -->
                    <div id="da-main-nav" class="da-button-container">
                        <ul>
                            <li class="active">
                            	<a href="<?php echo htmlSpecialChars($_control->link("Admin:")) ?>">  
                                	<!-- Icon Container -->
                                	<span class="da-nav-icon">
                                    	<img src="images/icons/black/32/home.png" alt="Dashboard" />
                                    </span>
                                	Dashboard
                                </a>
                            </li>
                            <li>
                            	<a href="#">
                                	<!-- Nav Notification -->
                                    <span class="da-nav-count">32</span>
                                	<!-- Icon Container -->
                                	<span class="da-nav-icon">
                                    	<img src="images/icons/black/32/graph.png" alt="Charts" />
                                    </span>
                                	Statistics and Charts
                                </a>
                                <ul class="closed">
                                	<li><a href="statistic.html">Statistic Widgets</a></li>
                                	<li><a href="charts.html">Chart Gallery</a></li>
                                </ul>
                            </li>
                            <li>
                            	<a href="calendar.html">
                                	<!-- Icon Container -->
                                	<span class="da-nav-icon">
                                    	<img src="images/icons/black/32/day_calendar.png" alt="Calendar" />
                                    </span>
                                	Calendar
                                </a>
                            </li>
                            <li>
                            	<a href="file.html">
                                	<!-- Icon Container -->
                                	<span class="da-nav-icon">
                                    	<img src="images/icons/black/32/file_cabinet.png" alt="File Handling" />
                                    </span>
                                	File Handling
                                </a>
                            </li>
                            <li>
                            	<a href="table.html">
                                	<!-- Icon Container -->
                                	<span class="da-nav-icon">
                                    	<img src="images/icons/black/32/table_1.png" alt="Table" />
                                    </span>
                                	Table
                                </a>
                            </li>
                            <li>
                            	<a href="#">
                                	<!-- Icon Container -->
                                	<span class="da-nav-icon">
                                    	<img src="images/icons/black/32/create_write.png" alt="Form" />
                                    </span>
                                	Form
                                </a>
                                <ul>
                                	<li><a href="form-layouts.html">Layouts</a></li>
                                	<li><a href="form-elements.html">Elements</a></li>
                                	<li><a href="form-validation.html">Validation</a></li>
                                </ul>
                            </li>
                            <li>
                            	<a href="ui.html">
                                	<!-- Icon Container -->
                                	<span class="da-nav-icon">
                                    	<img src="images/icons/black/32/settings.png" alt="" />
                                    </span>
                                    UI Elements
                                </a>
                            </li>
                            <li>
                            	<a href="widgets.html">
                                	<!-- Icon Container -->
                                	<span class="da-nav-icon">
                                    	<img src="images/icons/black/32/cog_4.png" alt="Widgets" />
                                    </span>
                                    Widgets
                                </a>
                            </li>
                            <li>
                            	<a href="#">
                                	<!-- Icon Container -->
                                	<span class="da-nav-icon">
                                    	<img src="images/icons/black/32/word_documents_1.png" alt="Layout and Typography" />
                                    </span>
                                    Layout and Typography
                                </a>
                                <ul class="closed">
                                	<li><a href="grids.html">Grids and Panels</a></li>
                                	<li><a href="typography.html">Typography</a></li>
                                </ul>
                            </li>
                            <li>
                            	<a href="gallery.html">
                                	<!-- Icon Container -->
                                	<span class="da-nav-icon">
                                    	<img src="images/icons/black/32/images_2.png" alt="Gallery" />
                                    </span>
                                    Gallery
                                </a>
                            </li>
                            <li>
                            	<a href="error.html">
                                	<!-- Icon Container -->
                                	<span class="da-nav-icon">
                                    	<img src="images/icons/black/32/alert.png" alt="Error Pages" />
                                    </span>
                                    Error Page (404)
                                </a>
                            </li>
                            <li>
                            	<a href="icons.html">
                                	<!-- Icon Container -->
                                	<span class="da-nav-icon">
                                    	<img src="images/icons/black/32/pacman.png" alt="Icons" />
                                    </span>
                                    Icons
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>