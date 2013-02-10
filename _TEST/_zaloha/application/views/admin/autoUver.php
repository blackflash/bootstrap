
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
			
			<div class="clear"></div> <!-- End .clear -->

			<?php 

				if($homeInfo->text == ""){ 
					echo 	'<div class="notification attention png_bg">
							<a href="#" class="close"><img src="'.base_url().'img/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>Pozor ! Úvodný text je prázdny. </div>
							</div>';
				}

				if($this->session->flashdata('error')){ 
					echo 	'<div class="notification error png_bg">
							<a href="#" class="close"><img src="'.base_url().'img/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>'.$this->session->flashdata('error').'</div>
							</div>';
				}	

				if($this->session->flashdata('success')){ 
					echo 	'<div class="notification success png_bg">
							<a href="#" class="close"><img src="'.base_url().'img/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
							<div>'.$this->session->flashdata('success').'</div>
							</div>';
				}		
			?>

				<div class="content-box"><!-- Start Content Box -->

					<div class="content-box-header">
						<h3>Autoúver</h3>
					</div> <!-- End .content-box-header -->

					<div class="content-box-content">
										
						<?php include("elrte.php"); ?>
						
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
								$('#editor_0').elrte(opts);


							})
						</script>

						<?php 	
							echo form_open_multipart($basicInfo["main_controller"]."/updateTableEditor/".$basicInfo["page"]."/1/text"); 
							
							$hidden = array('editor' => 'editor_0');
							echo form_hidden($hidden);

							echo '<div id="editor_0">';
				
									echo $autoUver->text;

							echo '</div>';
							echo form_close(); 
						?>

					</div> <!-- End .content-box-content -->
					
				</div> <!-- End .content-box -->


			<div class="clear"></div> <!-- End .clear -->

