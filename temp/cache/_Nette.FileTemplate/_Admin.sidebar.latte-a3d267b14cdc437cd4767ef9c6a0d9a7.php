<?php //netteCache[01]000405a:2:{s:4:"time";s:21:"0.51325300 1367778717";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:83:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\sidebar.latte";i:2;i:1367586183;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\sidebar.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ax7p8wekb3')
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
<?php if ($user->identity->username == "admin"): ?>
                            <li  <?php if ($title == "CleverFrogs - dashboard"): ?>
 class="active" <?php endif ?>>
                            	<a href="<?php echo htmlSpecialChars($_control->link("Admin:")) ?>">  
                                	<!-- Icon Container -->
                                	<span class="da-nav-icon">
                                    	<img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/32/home.png" alt="Dashboard" />
                                    </span>
                                	Dashboard
                                </a>
                            </li>
<?php endif ;if ($user->identity->username == "admin"): ?>
                            <li <?php if ($title == "CleverFrogs - campaigns" || $title == "CleverFrogs - categories"): ?>
 class="active" <?php endif ?>>
                                <a href='' >
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/32/cog_4.png" alt="Campaigns" />
                                    </span>
                                    Campaigns
                                </a>
                                <ul <?php if ($title != "CleverFrogs - campaigns" && $title != "CleverFrogs - categories"): ?>
 class="closed" <?php endif ?>>
                                    <li><a  href="<?php echo htmlSpecialChars($_control->link("Admin:default", array('title'=>"CleverFrogs - campaigns",'page'=>"campaigns"))) ?>
">Review & Create Campaigns</a></li>
                                    <li><a href="<?php echo htmlSpecialChars($_control->link("Admin:default", array('title'=>"CleverFrogs - categories",'page'=>"categories_ps"))) ?>
">Categories & PS</a></li>
                                </ul>
                            </li>
<?php endif ?>

<?php if ($user->identity->username == "admin"): ?>
                            <li  <?php if ($title == "CleverFrogs - tasks"): ?> class="active" <?php endif ?>>
                                <a href="<?php echo htmlSpecialChars($_control->link("Admin:default", array('title'=>"CleverFrogs - tasks",'page'=>"tasks" ))) ?>
">  
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/32/create_write.png" alt="Tasks" />
                                    </span>
                                    Tasks
                                </a>
                            </li>
<?php endif ?>
                            
<?php if ($user->identity->username == "admin"): ?>
                            <li <?php if ($title == "CleverFrogs - users"): ?> class="active" <?php endif ?>>
                                <a  href="<?php echo htmlSpecialChars($_control->link("Admin:default", array('title'=>"CleverFrogs - users",'page'=>"users" ))) ?>
">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/32/admin_user.png" alt="Users" />
                                    </span>
                                    Users
                                </a>
                            </li>
<?php endif ?>

                            
                            <!--end of 
<?php if ($user->identity->username == "admin"): ?>
                            <li <?php if ($title == "CleverFrogs - commit history"): ?>
 class="active" <?php endif ?>>
                                <a n:href='Admin:default title=>"CleverFrogs - commit history",page=>"commit" ' >
                                    
                                    <span class="da-nav-icon">
                                        <img src="<?php echo Nette\Templating\Helpers::escapeHtmlComment($basePath) ?>/images/icons/black/32/day_calendar.png" alt="Commit history" />
                                    </span>
                                    Commit history
                                </a>
                            </li>
<?php endif ?>
                            -->

<?php if ($user->identity->username == "admin"): ?>
                            <li <?php if ($title == "CleverFrogs - Gallery"): ?>
 class="active" <?php endif ?>>
                                <a  href="<?php echo htmlSpecialChars($_control->link("Admin:default", array('title'=>"CleverFrogs - Gallery",'page'=>"gallery" ))) ?>
">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/32/images_2.png" alt="Gallery" />
                                    </span>
                                    Gallery
                                </a>
                            </li>
<?php endif ?>

<?php if ($user->identity->username == "admin"): ?>
                            <li <?php if ($title == "CleverFrogs - Locations"): ?>
 class="active" <?php endif ?>>
                                <a  href="<?php echo htmlSpecialChars($_control->link("Admin:default", array('title'=>"CleverFrogs - Locations",'page'=>"locations" ))) ?>
">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/32/airplane.png" alt="Locations" />
                                    </span>
                                    Locations
                                </a>
                            </li>
<?php endif ?>

<?php if ($user->identity->username == "admin"): ?>
                            <li <?php if ($title == "CleverFrogs - documentation"): ?>
 class="active" <?php endif ?>>
                                <a  href="<?php echo htmlSpecialChars($_control->link("Admin:default", array('title'=>"CleverFrogs - documentation",'page'=>"documentation" ))) ?>
">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/32/word_documents_1.png" alt="Documentation" />
                                    </span>
                                    Documentation
                                </a>
                            </li>
<?php endif ?>

<?php if ($user->identity->username == "admin"): ?>
                            <li <?php if ($title == "CleverFrogs - Subscriptions"): ?>
 class="active" <?php endif ?>>
                                <a  href="<?php echo htmlSpecialChars($_control->link("Admin:default", array('title'=>"CleverFrogs - Subscriptions",'page'=>"subscriptions" ))) ?>
">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/32/address_book.png" alt="Subscriptions" />
                                    </span>
                                    Subscriptions
                                </a>
                            </li>
<?php endif ?>

<?php if ($user->identity->username == "admin"): ?>
                            <li <?php if ($title == "CleverFrogs - News" || $title == "CleverFrogs - webpage" || $title == "CleverFrogs - Slider" || $title == "CleverFrogs - Basic info"): ?>
 class="active" <?php endif ?>>
                                <a href='' >
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/32/cog_5.png" alt="webpage" />
                                    </span>
                                    WebPage
                                </a>
                                <ul <?php if ($title != "CleverFrogs - News" && $title != "CleverFrogs - Slider" && $title != "CleverFrogs - Basic info"): ?>
class="closed"<?php endif ?> >
                                    <li><a  href="<?php echo htmlSpecialChars($_control->link("Admin:default", array('title'=>"CleverFrogs - Basic info",'page'=>"basic_info"))) ?>
">Basic info</a></li>
                                    <li><a  href="<?php echo htmlSpecialChars($_control->link("Admin:default", array('title'=>"CleverFrogs - Slider",'page'=>"component_slider"))) ?>
">Slider</a></li>
                                    <li><a  href="<?php echo htmlSpecialChars($_control->link("Admin:default", array('title'=>"CleverFrogs - News",'page'=>"component_compact_news"))) ?>
">News</a></li>
                                </ul>
                            </li>
<?php endif ?>

                            <!--end of 
<?php if ($user->identity->username == "admin"): ?>
                            <li <?php if ($title == "CleverFrogs - feedbacks"): ?>
 class="active" <?php endif ?>>
                                <a n:href='Admin:default title=>"CleverFrogs - feedbacks",page=>"feedbacks" ' >
                                    <span class="da-nav-icon">
                                        <img src="<?php echo Nette\Templating\Helpers::escapeHtmlComment($basePath) ?>/images/icons/black/32/pacman.png" alt="Feedbacks" />
                                    </span>
                                    Feedbacks
                                </a>
                            </li>
<?php endif ?>
                            -->
                            
                            
                        </ul>
                    </div>
                    
                </div>