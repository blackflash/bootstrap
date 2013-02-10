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
			<a href="<?php echo base_url(); ?>/kabros/loadAdminPageWithPagination/vozidla" class="linkBack">Späť</a>
			
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

			<?php
				if(validation_errors()){
								echo 	'<div class="notification attention png_bg">
										<a href="#" class="close"><img src="'.base_url().'img/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
										<div>'.validation_errors().'</div>
										</div>';
				}
				if($this->session->flashdata('success_2')){ 
									echo 	'<div class="notification success png_bg">
											<a href="#" class="close"><img src="'.base_url().'img/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
											<div>'.$this->session->flashdata('success_2').'</div>
											</div>';
				}
				if($this->session->flashdata('success_3')){ 
									echo 	'<div class="notification success png_bg">
											<a href="#" class="close"><img src="'.base_url().'img/icons/cross_grey_small.png" title="Close this notification" alt="close" /></a>
											<div>'.$this->session->flashdata('success_3').'</div>
											</div>';
				}
			?>
			
			<div class="content-box"><!-- Start Content Box -->
					
					<div class="content-box-header">
						
						<h3>Fotky upload</h3>
					</div>
					<div class="content-box-content">	

					<div id="adminBannerContainer">
						<?php foreach ($fotky as $key => $value): ?>
							
							<div id="oneBanner">
								
								<?php  
									echo '<img src="'.base_url().$value->image.'" class="adminHomeBanner"></img>';

									echo '<a href="'.base_url().'media/editFotoById/fotky/'.$value->id.'" id="editButton">
										<img src="'.base_url().'img/icons/pencil.png" alt="Edit" />
									</a>';

									echo '<a href="'.base_url().'media/deleteFotkaById/fotky/'.$value->id.'/'.$value->vozidlo_id.'?confirm=true" title="Určite chcete túto položku ?" class="confirm" id="deleteButton">
										<img src="'.base_url().'img/icons/cross.png" alt="Delete" />
									</a>';
								?>	
								<div class="fotkaPopis"><?php echo $value->popis; ?></div>
							</div>

						<?php endforeach ?>
					</div>
					<div class="clear"></div> <!-- End .clear -->
					<h3>Pridať fotky</h3>
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

						$popis = array(
								'name'		=> 'popis',
								'id'		=> 'popis',
								'column'	=> 'popis',
								'autocomplete' => 'off',
								'class'		=> 'text-input small-input',
						);

						echo form_open_multipart("media/addFotky/".$vozidlo_id); 
						
						?>

						<input name="userfile[]" id="userfile" type="file" multiple="" accept="jpg"/>

						<?php
						echo '</br></br>';

						echo form_submit($submit);
						echo form_close();
					?>
				</div> <!-- End .content-box -->
</div> <!-- End .content-box -->
<div class="clear"></div> <!-- End .clear -->