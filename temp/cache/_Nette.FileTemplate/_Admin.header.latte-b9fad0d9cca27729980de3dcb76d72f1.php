<?php //netteCache[01]000404a:2:{s:4:"time";s:21:"0.57207200 1365150140";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:82:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\header.latte";i:2;i:1365115956;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\header.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '51v110erd1')
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
<!-- Header -->
        <div id="da-header">
        
        	<div id="da-header-top">
                
                <!-- Container -->
                <div class="da-container clearfix">
                    
                    <!-- Logo Container. All images put here will be vertically centere -->
                    <div id="da-logo-wrap">
                        <div id="da-logo">
                            <div id="da-logo-img">
                                <a href="<?php echo htmlSpecialChars($_control->link("Admin:")) ?>">
                                    <img src="<?php echo htmlSpecialChars($basePath) ?>/images/logoB.png" alt="Cleverfrogs" />
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Header Toolbar Menu -->
                    <div id="da-header-toolbar" class="clearfix">
                        <div id="da-user-profile">  
                            <div id="da-user-avatar">
                                <img src="<?php echo htmlSpecialChars($basePath) ?>/images/pp.jpg" alt="" />
                            </div>
                            <div id="da-user-info">
                                <?php echo Nette\Templating\Helpers::escapeHtml($user->identity->username, ENT_NOQUOTES) ?>

                                <span class="da-user-title"><?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ?></span>
                            </div>
                            <ul class="da-header-dropdown">
                                <li class="da-dropdown-caret">
                                    <span class="caret-outer"></span>
                                    <span class="caret-inner"></span>
                                </li>
                                <li class="da-dropdown-divider"></li>
                                <li><a href="<?php echo htmlSpecialChars($basePath) ?>" target="_blank">Front end</a></li>
                                <li class="da-dropdown-divider"></li>
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Settings</a></li>
                                <li><a href="#">Change Password</a></li>
                            </ul>
                        </div>
                        <div id="da-header-button-container">
                        	<ul>
                            	<li class="da-header-button notif">
                                	<span class="da-button-count">2</span>
                                	<a href="#">Notifications</a>
                                    <ul class="da-header-dropdown">
                                        <li class="da-dropdown-caret">
                                            <span class="caret-outer"></span>
                                            <span class="caret-inner"></span>
                                        </li>
                                        <li>
                                        	<span class="da-dropdown-sub-title">Notifications</span>
                                        	<ul class="da-dropdown-sub">
                                                <li class="unread">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <a class="da-dropdown-sub-footer">
                                            	View all notifications
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            	<li class="da-header-button message">
                                	<span class="da-button-count">5</span>
                                	<a href="#">Messages</a>
                                    <ul class="da-header-dropdown">
                                        <li class="da-dropdown-caret">
                                            <span class="caret-outer"></span>
                                            <span class="caret-inner"></span>
                                        </li>
                                        <li>
                                        	<span class="da-dropdown-sub-title">Messages</span>
                                        	<ul class="da-dropdown-sub">
                                                <li class="unread">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="unread">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="read">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                                <li class="read">
                                                    <a href="#">
                                                        <span class="message">
                                                            Lorem ipsum dolor sit amet
                                                        </span>
                                                        <span class="time">
                                                            January 21, 2012
                                                        </span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <a class="da-dropdown-sub-footer">
                                            	View all messages
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            	<li class="da-header-button logout">
                                	<a href="<?php echo htmlSpecialChars($_control->link("signOut!")) ?>
">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                                    
                </div>
            </div>
            
            <div id="da-header-bottom">
                <!-- Container -->
                <div class="da-container clearfix">
                
                	<div id="da-search">
                    	<form>
                        	<input type="text" placeholder="Search..." />
                        </form>
                    </div>
                	
                    <!-- Breadcrumbs -->
                    <div id="da-breadcrumb">
                        <ul>
                            <li <?php if ($title == "CleverFrogs - dashboard"): ?>
 class="active" <?php endif ?>><span><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/16/home.png" alt="Home" />Dashboard</span></li>
                            <?php if ($title == "CleverFrogs - users"): ?><li class="active" ><span>Users</span></li><?php endif ?>

                            <?php if ($title == "CleverFrogs - projects"): ?><li class="active" ><span>Projects</span></li><?php endif ?>

                            <?php if ($title == "CleverFrogs - campaigns"): ?><li class="active" ><span>Campaigns review</span></li><?php endif ?>

                            <?php if ($title == "CleverFrogs - categories"): ?><li class="active" ><span>Campaigns Categories & PS</span></li><?php endif ?>

                            <?php if ($title == "CleverFrogs - commit history"): ?>
<li class="active" ><span>Commit history</span></li><?php endif ?>

                            <?php if ($title == "CleverFrogs - documentation"): ?>
<li class="active" ><span>Documentation</span></li><?php endif ?>

                            <?php if ($title == "CleverFrogs - tasks"): ?><li class="active" ><span>Tasks</span></li><?php endif ?>

                            <?php if ($title == "CleverFrogs - Gallery"): ?><li class="active" ><span>Gallery</span></li><?php endif ?>

                            <?php if ($title == "CleverFrogs - Locations"): ?><li class="active" ><span>Locations</span></li><?php endif ?>

                            <?php if ($title == "CleverFrogs - feedbacks"): ?><li class="active" ><span>Feedbacks</span></li><?php endif ?>

                            <?php if ($title == "CleverFrogs - Basic info"): ?><li class="active" ><span>Basic info</span></li><?php endif ?>

                            <?php if ($title == "CleverFrogs - Slider"): ?><li class="active" ><span>Slider</span></li><?php endif ?>

                            <?php if ($title == "CleverFrogs - News"): ?><li class="active" ><span>News</span></li><?php endif ?>

                        </ul>
                    </div>
                    
                    <div id="ajax_loader">
                        <div id="block_1" class="barlittle"></div>
                        <div id="block_2" class="barlittle"></div>
                        <div id="block_3" class="barlittle"></div>
                        <div id="block_4" class="barlittle"></div>
                        <div id="block_5" class="barlittle"></div>
                    </div>

                    <script type="text/javascript">$("#ajax_loader").hide();</script>

                </div>
            </div>
        </div>

        