
	<body>
		<div id="body-wrapper"> <!-- Wrapper for the radial gradient background -->
		
		<div id="sidebar"><div id="sidebar-wrapper"> <!-- Sidebar with logo and menu -->
			
			<h1 id="sidebar-title"><a href="#"><?php echo $basicInfo["title"]; ?></a></h1>
		  
			<!-- Logo (221px wide) -->
			<center>
			<a href="<?php echo base_url(); ?>"><img id="logo" src="<?php echo base_url(); ?>img/logo.png" alt="Simpla Admin logo" /></a>
		  	</center>
			<!-- Sidebar Profile links -->
			<div id="profile-links">
				<br />
				<a href="<?php echo base_url()?>" title="View the Site">Prechod na web</a> | <a href="<?php echo base_url() ?>auth/logout" title="Sign Out">Odhlásiť</a>
			</div>        
			
			<ul id="main-nav">  <!-- Accordion Menu -->

				<li> 
					<a href="#" class="nav-top-item no-submenu <?php if($basicInfo["title"] == "Cleverfrogs users" || $basicInfo["title"] == "Cleverfrogs companies") echo 'current' ?>">
					Users
					</a>
					<ul>
						<li><a href="<?php echo base_url(); echo $basicInfo["main_controller"]; ?>/loadAdminPage/users" <?php if($basicInfo["title"] == "Cleverfrogs users") echo 'class="current"' ?>>Users</a></li>
						<li><a href="<?php echo base_url(); echo $basicInfo["main_controller"]; ?>/loadAdminPage/companies" <?php if($basicInfo["title"] == "Cleverfrogs companies") echo 'class="current"' ?>>Companies</a></li> <!-- Add class "current" to sub menu items also -->
					</ul>
				</li>

				<li>
					<a href="<?php echo base_url(); echo $basicInfo["main_controller"]; ?>/loadAdminPage/feedback" class="nav-top-item no-submenu <?php if($basicInfo["title"] == "Cleverfrogs feedback") echo "current" ?>"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Feedback
					</a>       
				</li>

				<li>
					<a href="<?php echo base_url(); echo $basicInfo["main_controller"]; ?>/loadAdminPage/banner" class="nav-top-item no-submenu <?php if($basicInfo["title"] == "Cleverfrogs banner") echo "current" ?>"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Banner
					</a>       
				</li>
				
				<li>
					<a href="<?php echo base_url(); echo $basicInfo["main_controller"]; ?>/loadAdminPageWithPagination/places" class="nav-top-item no-submenu <?php if($basicInfo["title"] == "Cleverfrogs places") echo "current" ?>"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Places
					</a>       
				</li>

				<li>
					<a href="<?php echo base_url(); echo $basicInfo["main_controller"]; ?>/loadAdminPageWithPagination/newsletter" class="nav-top-item no-submenu <?php if($basicInfo["title"] == "Cleverfrogs newsletter") echo "current" ?>"> <!-- Add the class "no-submenu" to menu items with no sub menu -->
						Newsletters-emails
					</a>       
				</li>

				
			</ul> <!-- End #main-nav -->
			
			
			
		</div></div> <!-- End #sidebar -->