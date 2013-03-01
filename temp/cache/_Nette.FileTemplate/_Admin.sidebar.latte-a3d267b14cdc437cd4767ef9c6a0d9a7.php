<?php //netteCache[01]000405a:2:{s:4:"time";s:21:"0.53783000 1362112319";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:83:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\sidebar.latte";i:2;i:1362112318;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\sidebar.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '1yw5zuuni9')
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
                            <li <?php if ($title == "CleverFrogs - campaigns"): ?>
 class="active" <?php endif ?>>
                                <a href='' >
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/32/cog_4.png" alt="Campaigns" />
                                    </span>
                                    Campaigns
                                </a>
                                <ul <?php if ($title != "CleverFrogs - campaigns"): ?>
 class="closed" <?php endif ?>>
                                    <li><a  href="<?php echo htmlSpecialChars($_control->link("Admin:default", array('title'=>"CleverFrogs - campaigns",'page'=>"campaigns" ))) ?>
">Create Campaign</a></li>
                                    <li><a href="form-elements.html">Create category of products</a></li>
                                    <li><a href="form-validation.html">Create product or service</a></li>
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