<?php //netteCache[01]000398a:2:{s:4:"time";s:21:"0.83401300 1360649796";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:76:"C:\Program Files\VertrigoServ\www\bootstrap\app\templates\Admin\header.latte";i:2;i:1360648648;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files\VertrigoServ\www\bootstrap\app\templates\Admin\header.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'k53din4h3j')
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
                                    <img src="<?php echo htmlSpecialChars($basePath) ?>/images/logo.png" alt="Cleverfrogs" />
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
                            <li <?php if ($title == "TSWP 2 - dashboard"): ?> class="active" <?php endif ?>
><span><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/16/home.png" alt="Home" />Dashboard</span></li>
                            <?php if ($title == "TSWP 2 - users"): ?><li class="active" ><span>Users</span></li><?php endif ?>

                            <?php if ($title == "TSWP 2 - projects"): ?><li class="active" ><span>Projects</span></li><?php endif ?>

                            <?php if ($title == "TSWP 2 - commit history"): ?><li class="active" ><span>Commit history</span></li><?php endif ?>

                            <?php if ($title == "TSWP 2 - documentation"): ?><li class="active" ><span>Documentation</span></li><?php endif ?>

                            <?php if ($title == "TSWP 2 - tasks"): ?><li class="active" ><span>Tasks</span></li><?php endif ?>

                            <?php if ($title == "TSWP 2 - feedbacks"): ?><li class="active" ><span>Feedbacks</span></li><?php endif ?>



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

        