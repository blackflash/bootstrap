<div id="spatna_vazba">
	
	<div id="breadcrumbs">
		<a href="<?php echo base_url(); ?>" class="breadcrumb">Hlavná stránka</a>>>
		<a href="#" class="breadcrumbChecked">Spätná väzba</a>
	</div>

	<center><h1 class="reFontIt">Chcem dať spätnú väzbu na:</h1></center>
	<div class="greenLine"></div>
		
		<script src="<?php echo base_url(); ?>js/imageTick.js"></script>
		
		<p name="<?php echo base_url(); ?>/img/category/hotel_checked.png" 		class="hotel_image_checked"	 	style="display:none;">
		<p name="<?php echo base_url(); ?>/img/category/hotel.png" 				class="hotel_image" 			style="display:none;">
  		<p name="<?php echo base_url(); ?>/img/category/pub_checked.png" 		class="pub_image_checked" 		style="display:none;">
		<p name="<?php echo base_url(); ?>/img/category/pub.png" 				class="pub_image" 				style="display:none;">
		<p name="<?php echo base_url(); ?>/img/category/cosmetic_checked.png" 	class="cosmetic_image_checked" 	style="display:none;">
		<p name="<?php echo base_url(); ?>/img/category/cosmetic.png" 			class="cosmetic_image" 			style="display:none;">
		<p name="<?php echo base_url(); ?>/img/category/transport_checked.png" 	class="transport_image_checked" style="display:none;">
		<p name="<?php echo base_url(); ?>/img/category/transport.png" 			class="transport_image" 		style="display:none;">
		<p name="<?php echo base_url(); ?>/img/category/other_checked.png" 		class="other_image_checked" 	style="display:none;">
		<p name="<?php echo base_url(); ?>/img/category/other.png" 				class="other_image" 			style="display:none;">
		<p name="<?php echo base_url(); ?>/img/category/flowers_checked.png" 	class="flowers_image_checked" 	style="display:none;">
		<p name="<?php echo base_url(); ?>/img/category/flowers.png" 			class="flowers_image" 			style="display:none;">

		<script type="text/javascript">
		    $(function() {
		        $("input[name='category']").imageTick({
		            tick_image_path: {
		                1: $('.hotel_image_checked').attr('name'),
		                2: $('.pub_image_checked').attr('name'),
		                3: $('.cosmetic_image_checked').attr('name'),
		                4: $('.transport_image_checked').attr('name'),
		                5: $('.flowers_image_checked').attr('name'),
		                6: $('.other_image_checked').attr('name')
		                //"default": "images/category/default_checked.jpg" //optional default can be used
		            },
		            no_tick_image_path: {
		                1: $('.hotel_image').attr('name'),
		                2: $('.pub_image').attr('name'),
		                3: $('.cosmetic_image').attr('name'),
		                4: $('.transport_image').attr('name'),
		                5: $('.flowers_image').attr('name'),
		                6: $('.other_image').attr('name')
		                //"default": "images/category/default_unchecked.jpg" //optional default can be used
		            },
		            image_tick_class: "category",
		        });

		    });

			$(function() {
				$( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});
			});

		</script>
		
		<form name="api-select" action="<?php echo base_url(); ?>cleverfrogs/feedback/sk" id="api-select">
		<table class="starTable">
		<tr>
			<td>
				<h4 class="reFontIt">Špecifikuj názov a dátum:</h4>
			</td>
			<td>
				<?php
					if(isset($basicInfo["provider"])){$provider =$basicInfo["provider"];}
					else $provider = "";
					if(isset($basicInfo["date"])){$date =$basicInfo["date"];}
					else $date = "";
					$data = array(
		              'name'        => 'provider',
		              'id'          => 'provider',
		              'maxlength'   => '30',
		              'placeholder' => 'názov poskytovateľa služby',
		              'autocomplete' => 'off',
		              'value' => $provider
		            );

					echo form_input($data);
				?>
			</td>
			<td>	
			<?php
				$data = array(
	              'name'        => 'date',
	              'id'          => 'datepicker',
	              'maxlength'   => '30',
	              'placeholder' => 'dátum poskytnutej služby',
	              'autocomplete' => 'off',
	              'value' => $date
	            );

				echo form_input($data);
			?>
			</td>
		</tr>
		
		<div id="category">
		<ul>
		    <li>
		        <label for="category_hotel" class="category_label">Hotel, ubytovanie</label>
		        <input type="radio" id="category_hotel" value="1" name="category"
		        <?php if(isset($basicInfo["category"])){if($basicInfo["category"] == "1") echo 'checked="checked"'; } ?> 
		         />
		    </li>
		    <li>
		        <label for="category_pub" class="category_label">Pub, reštaurácia</label>
		        <input type="radio" id="category_pub" value="2" name="category" 
		        <?php if(isset($basicInfo["category"])){if($basicInfo["category"] == "2") echo 'checked="checked"'; } ?> 
		        />
		    </li>
		    <li>
		        <label for="category_cosmetic" class="category_label">Kozmetika, kadernictvo</label>
		        <input type="radio" id="category_cosmetic" value="3" name="category" 
		        <?php if(isset($basicInfo["category"])){if($basicInfo["category"] == "3") echo 'checked="checked"'; } ?> 
		        />
		    </li>
		    <li>
		        <label for="category_transport" class="category_label">Doprava</label>
		        <input type="radio" id="category_transport" value="4" name="category" 
		        <?php if(isset($basicInfo["category"])){if($basicInfo["category"] == "4") echo 'checked="checked"'; } ?> 
		        />
		    </li>
		    <li>
		        <label for="category_other" class="category_label">Iné</label>
		        <input type="radio" id="category_other" value="6" name="category" 
		        <?php if(isset($basicInfo["value"])){if($basicInfo["value"] == "6") echo 'checked="checked"'; } ?> 
		        />
		    </li>
		</ul>	
		</div>

		<div class="clearfix"></div>
		
		<a href="<?php echo base_url(); ?>cleverfrogs/getCategoryInfo/" style="display:none;" class="ajaxlink"></a>
		<p class="temp" type="text" style="display:none;" alt="1">
		<script type="text/javascript">

			jQuery(

				function(){

				$( "#provider" ).autocomplete({
					source: $('.ajaxlink').attr('href') + $('.temp').attr('alt'),
					minLength: 1,
					autoFocus: true,
					select: function( event, ui ) {
						//alert(ui.item.value + " aka " + ui.item.id)  ;
					}

				});

				$('input[name=category]').change(function() {
				  	var value = $('input[name=category]:checked').val();
					    $('.temp').attr({
						  alt: value
				});

					$( "#provider" ).autocomplete({
						source: $('.ajaxlink').attr('href') + $('.temp').attr('alt'),
						minLength: 1,
						autoFocus: true,
						select: function( event, ui ) {
							//alert(ui.item.value + " aka " + ui.item.id)  ;
						}

					});

				});

				function log( message ) {
					$( "<div/>" ).text( message ).prependTo( "#log" );
					$( "#log" ).scrollTop( 0 );
				}

			});
		</script>

		<div class="clearfix"></div>

		<p name="<?php echo base_url(); ?>/img/frogs/frog01_check.png" 			class="frog01_image_check"	 	style="display:none;">
		<p name="<?php echo base_url(); ?>/img/frogs/frog01_uncheck.png" 		class="frog01_image" 			style="display:none;">
  		<p name="<?php echo base_url(); ?>/img/frogs/frog02_check.png" 			class="frog02_image_check" 		style="display:none;">
		<p name="<?php echo base_url(); ?>/img/frogs/frog02_uncheck.png" 		class="frog02_image" 			style="display:none;">
		<p name="<?php echo base_url(); ?>/img/frogs/frog03_check.png" 			class="frog03_image_check" 		style="display:none;">
		<p name="<?php echo base_url(); ?>/img/frogs/frog03_uncheck.png" 		class="frog03_image" 			style="display:none;">
		<p name="<?php echo base_url(); ?>/img/frogs/frog04_check.png" 			class="frog04_image_check" 		style="display:none;">
		<p name="<?php echo base_url(); ?>/img/frogs/frog04_uncheck.png" 		class="frog04_image" 			style="display:none;">
		<p name="<?php echo base_url(); ?>/img/frogs/frog05_check.png" 			class="frog05_image_check" 		style="display:none;">
		<p name="<?php echo base_url(); ?>/img/frogs/frog05_uncheck.png" 		class="frog05_image" 			style="display:none;">

		<script type="text/javascript">
		    $(function() {
		        $("input[name='value']").imageTick({
		            tick_image_path: {
		                1: $('.frog01_image_check').attr('name'),
		                2: $('.frog02_image_check').attr('name'),
		                3: $('.frog03_image_check').attr('name'),
		                4: $('.frog04_image_check').attr('name'),
		                5: $('.frog05_image_check').attr('name'),
		                //"default": "images/category/default_checked.jpg" //optional default can be used
		            },
		            no_tick_image_path: {
		                1: $('.frog01_image').attr('name'),
		                2: $('.frog02_image').attr('name'),
		                3: $('.frog03_image').attr('name'),
		                4: $('.frog04_image').attr('name'),
		                5: $('.frog05_image').attr('name'),
		                //"default": "images/category/default_unchecked.jpg" //optional default can be used
		            },
		            image_tick_class: "stars",
		        });
		    });
		</script>
		
		<tr><td>
			<h4 class="reFontIt">Tvoje celkové hodnotenie:</h4>
			</td>	
			<td>	
				<div id="stars">
				<ul>
				    <li>
				        <input type="radio" id="category_frog01" value="1" name="value"
				        <?php if(isset($basicInfo["value"])){if($basicInfo["value"] == "1") echo 'checked="checked"'; } ?> 
				         />
				    </li>
				    <li>
				        <input type="radio" id="stars_frog02" value="2" name="value" 
				        <?php if(isset($basicInfo["value"])){if($basicInfo["value"] == "2") echo 'checked="checked"'; } ?> 
				        />
				    </li>
				    <li>
				        <input type="radio" id="stars_frog03" value="3" name="value" 
				        <?php if(isset($basicInfo["value"])){if($basicInfo["value"] == "3") echo 'checked="checked"'; } ?> 
				        />
				    </li>
				    <li>
				        <input type="radio" id="stars_frog04" value="4" name="value" 
				        <?php if(isset($basicInfo["value"])){if($basicInfo["value"] == "4") echo 'checked="checked"'; } ?> 
				        />
				    </li>
				    <li>
				        <input type="radio" id="stars_frog05" value="5" name="value" 
				        <?php if(isset($basicInfo["value"])){if($basicInfo["value"] == "5") echo 'checked="checked"'; } ?> 
				        />
				    </li>
				</ul>	
				</div>
				</td>
			
		</tr>
		<tr>
			<td></td>
			<td>
				<h4 class="reFontIt">Komentár:</h4>
				<?php  
					if(isset($basicInfo["comment"])){$comment =$basicInfo["comment"];}
					else $comment = "";
					$data = array(
		              'name'        => 'comment',
		              'id'          => 'comment',
		              'maxlength'   => '250',
		              'placeholder' => 'dodatočný komentár max. 250 znakov',
		              'autocomplete' => 'off',
		              'value' => $comment
		            );

					echo form_textarea($data);
				?>
			</td>
			<td></td>
		</tr>
		<div class="clearfix"></div>
		
		
	</table>
		<div class="clearfix"></div>
		
		<?php 
			echo '<div id="errorMessage">';
				if(validation_errors()){
					echo validation_errors();		
				}
			echo '</div>';		
		?>

		<div class="clearfix"></div>

		<input type="submit" value="Odoslať" />
		<span></span>
		<br/>
		
		</form>

		</div>
		
</div>