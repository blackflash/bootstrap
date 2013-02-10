<?php //netteCache[01]000405a:2:{s:4:"time";s:21:"0.59832100 1359078169";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:83:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\sidebar.latte";i:2;i:1354549743;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\sidebar.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'k0z9n9xbzv')
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
                            
                            <li  <?php if ($title == "TSWP 2 - dashboard"): ?> class="active" <?php endif ?>>
                            	<a href="<?php echo htmlSpecialChars($_control->link("Admin:")) ?>">  
                                	<!-- Icon Container -->
                                	<span class="da-nav-icon">
                                    	<img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/32/home.png" alt="Dashboard" />
                                    </span>
                                	Dashboard
                                </a>
                            </li>

<?php if ($user->identity->username == "admin"): ?>
                            <li  <?php if ($title == "TSWP 2 - tasks"): ?> class="active" <?php endif ?>>
                                <a href="<?php echo htmlSpecialChars($_control->link("Admin:default", array('title'=>"TSWP 2 - tasks",'page'=>"tasks" ))) ?>
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
                            <li <?php if ($title == "TSWP 2 - users"): ?> class="active" <?php endif ?>>
                                <a  href="<?php echo htmlSpecialChars($_control->link("Admin:default", array('title'=>"TSWP 2 - users",'page'=>"users" ))) ?>
">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/32/admin_user.png" alt="Users" />
                                    </span>
                                    Users
                                </a>
                            </li>
<?php endif ?>

<?php if ($user->identity->username == "admin"): ?>
                            <li <?php if ($title == "TSWP 2 - projects"): ?> class="active" <?php endif ?>>
                                <a  href="<?php echo htmlSpecialChars($_control->link("Admin:default", array('title'=>"TSWP 2 - projects",'page'=>"projects" ))) ?>
">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/32/abacus.png" alt="Projects" />
                                    </span>
                                    Projects
                                </a>
                            </li>
<?php endif ?>

<?php if ($user->identity->username == "admin"): ?>
                            <li <?php if ($title == "TSWP 2 - commit history"): ?>
 class="active" <?php endif ?>>
                                <a  href="<?php echo htmlSpecialChars($_control->link("Admin:default", array('title'=>"TSWP 2 - commit history",'page'=>"commit" ))) ?>
">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/32/day_calendar.png" alt="Commit history" />
                                    </span>
                                    Commit history
                                </a>
                            </li>
<?php endif ?>

<?php if ($user->identity->username == "admin"): ?>
                            <li <?php if ($title == "TSWP 2 - documentation"): ?>
 class="active" <?php endif ?>>
                                <a  href="<?php echo htmlSpecialChars($_control->link("Admin:default", array('title'=>"TSWP 2 - documentation",'page'=>"documentation" ))) ?>
">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/32/word_documents_1.png" alt="Documentation" />
                                    </span>
                                    Documentation
                                </a>
                            </li>
<?php endif ;if ($user->identity->username == "admin"): ?>
                            <li <?php if ($title == "TSWP 2 - feedbacks"): ?> class="active" <?php endif ?>>
                                <a  href="<?php echo htmlSpecialChars($_control->link("Admin:default", array('title'=>"TSWP 2 - feedbacks",'page'=>"feedbacks" ))) ?>
">
                                    <!-- Icon Container -->
                                    <span class="da-nav-icon">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/32/pacman.png" alt="Feedbacks" />
                                    </span>
                                    Feedbacks
                                </a>
                            </li>
<?php endif ?>
                            
                        </ul>
                    </div>
                    
                </div>