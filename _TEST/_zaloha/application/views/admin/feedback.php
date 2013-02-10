<div id="main-content"> <!-- Main Content Section with everything -->

	<noscript> <!-- Show a notification if the user has disabled javascript -->
		<div class="notification error png_bg">
			<div>
				Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
			</div>
		</div>
	</noscript>

	<!-- Page Head -->
	<h2 style="float: left; width: 300px;"><?php echo $basicInfo["title"] ?></h2>

	<ul class="shortcut-buttons-set">
		<li><a class="shortcut-button new-article" href="<?php echo base_url(); echo $basicInfo["main_controller"]; ?>/loadAdminPage/pridat_feedback"><span class="png_bg">
					Pridať feedback
		</span></a></li>
	</ul><!-- End .shortcut-buttons-set -->

	<div class="clear"></div> <!-- End .clear -->
	<?php 

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
			
			<h3>Zoznam</h3>
			
			<div class="clear"></div>
			
		</div> <!-- End .content-box-header -->
		
		<div class="content-box-content">
			
		<table>

			<thead>
				<tr>
				   <th class="ID">#ID</th>
                   <th>Activated</th>
                   <th>Username</th>
                   <th>Category ID</th>
                   <th>Provider</th>
                   <th>Place ID</th>
                   <th>Date</th>
                   <th>Stars</th>
                   <th>Comment</th>
                   <th>Edit</th>
				</tr>
			</thead>
		 
			<tbody>    
                <?php 	
					foreach($feedback as $feed => $key){
							echo '<tr>';
								echo '<td>'.$key->id.'</td>';
								echo '<td>';
									if($key->activated == 1){
										echo '<a href="'.base_url().'cleverfrogs/activate/feedback/id/'.$key->id.'/feedback"><img src="'.base_url().'img/icons/tick_circle.png" class="activated"></a>';
									}else {
										echo '<a href="'.base_url().'cleverfrogs/activate/feedback/id/'.$key->id.'/feedback"><img src="'.base_url().'img/icons/cross_circle.png" class="activated"></a>';
									}
								echo '</td>';
								echo '<td>';
								if (isset($key->username)) {
									echo $key->username;
								}else echo "-";
								echo '</td>';
								echo '<td>'.$key->category_id.'</td>';
								echo '<td>'.$key->provider.'</td>';
								echo '<td>'.$key->place_id.'</td>';
								echo '<td>'.substr($key->date, 0,10).'</td>';
								echo '<td>'.$key->stars.'</td>';
								echo '<td>'.word_limiter($key->comment,10).'</td>';
								
								echo '<td>
										<!-- Icons -->
										<a href="'.base_url().'media/upravit_feedback/feedback/id/'.$key->id.'" title="Edit" ><img src="'.base_url().'img/icons/pencil.png" alt="Edit" /></a>
										<a href="'.base_url().'media/deleteImageAndTableById/feedback/id/'.$key->id.'?confirm=true" title="Určite chcete túto položku ?" class="confirm"><img src="'.base_url().'img/icons/cross.png" alt="Delete" /></a>
								</td>';
							echo '</tr>';	
					} 
				?>

			</tbody>
            <tfoot>
				<tr>
					<td colspan="0">
						
						<div class="pagination">
                            <?php echo $this->pagination->create_links(); ?>
						</div> <!-- End .pagination -->
						<div class="clear"></div>
					</td>
				</tr>
			</tfoot>
            
		</table>
	</div> <!-- End .content-box-content -->
</div> <!-- End .content-box -->
<div class="clear"></div> <!-- End .clear -->