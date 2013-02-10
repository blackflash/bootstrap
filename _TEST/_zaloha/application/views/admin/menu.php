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
		<li><a class="shortcut-button new-article" href="<?php echo base_url(); echo $basicInfo["main_controller"]; ?>/loadAdminPage/pridat_menu"><span class="png_bg">
					Pridať odkaz
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
			
			<h3>Zoznam menu odkazov</h3>
			
			<div class="clear"></div>
			
		</div> <!-- End .content-box-header -->
		
		<div class="content-box-content">
			
		<table>

			<thead>
				<tr>
				   <th class="ID">#ID</th>
                   <th>Aktivovaný</th>
                   <th>Poradie</th>
                   <th>ID kategórie</th>
                   <th>Pozícia</th>
                   <th>text</th>
                   <th>Editácia <?php echo substr($basicInfo["view"], 0,-4) ?></th>
				</tr>
			</thead>
		 
			<tbody>    
                <?php 	
					echo form_open_multipart('welcome/addImages');
					foreach($menu as $menu => $key){
								echo '<tr>';
								echo '<td>'.$key->id.'</td>';
								echo '<td>';
									if($key->activated == 1){
										
										echo '<a href="'.base_url().$basicInfo["main_controller"].'/activate2/'.substr($basicInfo["view"], 0,-4).'/id/'.$key->id.'/order_id/asc"><img src="'.base_url().'img/icons/tick_circle.png" ></a>';
									}else {
										echo '<a href="'.base_url().$basicInfo["main_controller"].'/activate2/'.substr($basicInfo["view"], 0,-4).'/id/'.$key->id.'/order_id/asc"><img src="'.base_url().'img/icons/cross_circle.png" ></a>';
									}
								echo '</td>';

								echo '<td><div class="order_id">'.$key->order_id.

								'</div><div id="arrows">
									<a href="'.base_url().'media/change_order/menu/prev/'.$key->id.'" class="arrow_top"><span></span></a>
									<a href="'.base_url().'media/change_order/menu/next/'.$key->id.'" class="arrow_bottom"><span></span></a>
								</div>
								</td>';

								echo '<td>'.$key->category_id.'</td>';
								echo '<td>'.$key->position.'</td>';
								echo '<td>'.word_limiter($key->text,10).'</td>';
								echo '<td>
										<!-- Icons -->
										<a href="'.base_url().'media/upravit_menu/'.substr($basicInfo["view"], 0,-4).'/id/'.$key->id.'" title="Edit" ><img src="'.base_url().'img/icons/pencil.png" alt="Edit" /></a>
										<a href="'.base_url().'media/deleteImageAndTableById/'.substr($basicInfo["view"], 0,-4).'/id/'.$key->id.'?confirm=true" title="Určite chcete túto položku ?" class="confirm"><img src="'.base_url().'img/icons/cross.png" alt="Delete" /></a>
								</td>';
							echo '</tr>';	
					} 
					echo form_fieldset_close(); 
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