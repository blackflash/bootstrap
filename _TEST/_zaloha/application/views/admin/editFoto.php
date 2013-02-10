<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2><?php echo $basicInfo["title"] ?></h2>
			
			<ul class="shortcut-buttons-set">
				
			</ul><!-- End .shortcut-buttons-set -->
			<a href="<?php echo base_url().$basicInfo["main_controller"] ?>/loadAdminPage/<?php echo $basicInfo["table"] ?>" class="linkBack">Späť</a>
			
			<div class="clear"></div> <!-- End .clear -->

			
			<div class="content-box"><!-- Start Content Box -->
					
					<div class="content-box-header">
						
						<h3>Editácia bannergrafie</h3>
					</div>
					<div class="content-box-content">	

					<div class="clear"></div> <!-- End .clear -->
					<h3>Editácia banner-Popis</h3>
					<?php	

						$submit = Array (
							"name" => "submit", 
							"value" => "Ulož", 
							"class" => "button",
						);

						$fileUpload = array (
							"type" => "file",
							"name" => "subor",
							"value"=> "subor"
						);

						$link = array(
								'name'		=> 'link',
								'id'		=> 'link',
								'value'	=> $banner->link,
								'column'	=> 'link',
								'autocomplete' => 'off',
								'class'		=> 'text-input small-input',
						);
			           	include("elrte.php");

						?>

						<script type="text/javascript" charset="utf-8">
							$().ready(function() {
								 
									$('#elFinder a').hover(
										function () {
											$('#elFinder a').animate({
												'background-position' : '0 -45px'
											}, 300);
										},
										function () {
											$('#elFinder a').delay(400).animate({
												'background-position' : '0 0'
											}, 300);
										}
									);

								$('#elFinder a').delay(800).animate({'background-position' : '0 0'}, 300);
								
								var opts = {
									absoluteURLs: false,
									cssClass : 'el-rte',
									lang     : 'en',
									height   : 500,
									toolbar  : 'maxi',
									cssfiles : ['http://elrte.org/release/elrte/css/elrte-inner.css'],
									fmOpen : function(callback) {
										$('<div id="myelfinder" />').elfinder({
											url : 'http://elrte.org/connector',
											lang : 'en',
											dialog : { width : 900, modal : true, title : 'elFinder - file manager for web' },
											closeOnEditorCallback : true,
											editorCallback : callback
										})
									}
								}
								$('#link').elrte(opts);


							})
						</script>

						<?php

						echo form_open_multipart("media/updateFotka/banner/".$banner->id); 
						
						echo form_upload($fileUpload);

						echo '</br></br>';

			           	echo '<label>text:</label>';
						$hidden = array('editor' => 'link');
						echo form_hidden($hidden);

						echo '<div id="link">';
						echo $banner->link;
						echo '</div>';
									            
						echo '</br></br>';

						echo form_submit($submit);
						echo form_close();
					?>
				</div> <!-- End .content-box -->
</div> <!-- End .content-box -->
<div class="clear"></div> <!-- End .clear -->