		<div id="main-content"> <!-- Main Content Section with everything -->
			
			<noscript> <!-- Show a notification if the user has disabled javascript -->
				<div class="notification error png_bg">
					<div>
						Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
					</div>
				</div>
			</noscript>
			
			<!-- Page Head -->
			<h2><?php echo $basicInfo["title"]; ?></h2>
			
			<ul class="shortcut-buttons-set">
				
			</ul><!-- End .shortcut-buttons-set -->
			
			<div class="clear"></div> <!-- End .clear -->
			
			<div class="content-box"><!-- Start Content Box -->
				
				<div class="content-box-header">
					
					<h3>Spoločné koncertovanie</h3>
					
					<div class="clear"></div>
					
				</div> <!-- End .content-box-header -->
				
				<div class="content-box-content">
			   
					<div class="tab-content default-tab" id="tab1">	
						<table>
							
							<thead>
								<tr>
								   <th>Názov skupiny</th>
								   <th>Zmena názvu skupiny</th>
								   <th>Náhlad cover</th>
								   <th>Cover</th>
								   <th>Náhľad plagát</th>
								   <th>Plagát</th>
								   <th>Odkaz</th>
								   <th>Zmena odkazu</th>
								   <th>Potvrdenie</th>
								</tr>
								
							</thead>
						 
							<tbody>

							<?php
								$i = 1;
								foreach ($spolocneKoncertovanie as $key => $value) {
								
									echo '<tr>';
										echo '<td>'.$value->nazov_skupiny.'</td>';
										
										echo '<td>';
										echo form_open_multipart("media/addImages/spolocnekoncertovanie/");
													$data2 = array(
													              'name'	=> 'nazov_skupiny',
													              'id'		=> 'nazov_skupiny',
													              'column'	=> 'nazov_skupiny'
													            );

													echo form_input($data2);
										echo '</td>';

										//nahlad cover
										echo '<td>';
											 		$filename1 = "cover_0".$i;
					                                $link1 = base_url().$value->cover;
					                                echo '<img src='.$link1.' class="fotka" />';	
					                        
										echo '</td>';

										echo '<td>';
					            				
												$submit = Array (
													"name" => "submit", 
													"value" => "Ulož", 
													"class" => "button",
													);

									            echo validation_errors();
									            
									            	
									            	$fileUpload1 = array (
									            		"type" => "file",
									            		"name" => "suborCover".$i,
									            		"value" => "suborCover".$i
									            	);
									            	echo form_hidden('file_name1', $filename1);
									            	echo form_hidden('id', $i);
									            	echo form_upload($fileUpload1);
									            
									    echo '</td>';

									    // nahlad plagat
									    echo '<td>';
											 		$filename2 = "plagat_0".$i;
					                                $link2 = base_url().$value->plagat;
					                                echo '<img src='.$link2.' class="fotka" />';	
					                        		echo form_hidden('file_name2', $filename2);
										echo '</td>';
										echo '<td>';
					            				
												$submit = Array (
													"name" => "submit", 
													"value" => "Ulož", 
													"class" => "button",
													);

									            echo validation_errors();
									            	$fileUpload2 = array (
									            		"type" => "file",
									            		"name" => "suborPlagat".$i,
									            		"value" => "suborPlagat".$i
									            	);
									            	echo form_upload($fileUpload2);
									            
									    echo '</td>';

										echo '<td>';
													echo '<a href="" target="_blank">'.$value->odkaz.'</a>';
										echo '</td>';

										echo '<td>';
													$data = array(
													              'name'	=> 'odkaz',
													              'id'		=> 'odkaz',
													              'column'	=> 'odkaz'
													            );

													echo form_input($data);
										echo '</td>';

									    echo '<td>';

													echo form_submit($submit);
									            	echo form_close();

									    echo '</td>';
									            
									echo '</tr>';
									$i++;
								}
							?>
								
							</tbody>
                            
						</table>
						
					</div> <!-- End #tab1 -->
					
				</div> <!-- End .content-box-content -->
				
			</div> <!-- End .content-box -->