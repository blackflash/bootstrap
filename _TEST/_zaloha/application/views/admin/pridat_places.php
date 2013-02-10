<div id="main-content"> <!-- Main Content Section with everything -->
	
	<noscript> <!-- Show a notification if the user has disabled javascript -->
		<div class="notification error png_bg">
			<div>
				Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
			</div>
		</div>
	</noscript>
	
	<!-- Page Head -->
	<h2><?php echo $basicInfo["main_controller"]; ?> - places</h2>
	
	<ul class="shortcut-buttons-set">
		
	</ul><!-- End .shortcut-buttons-set -->
	
	<div class="clear"></div> <!-- End .clear -->
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

	<a href="<?php echo base_url().$basicInfo["main_controller"]; ?>/loadAdminPageWithPagination/places" class="linkBack">Späť</a>
	<div class="clear"></div>
	<div class="content-box"><!-- Start Content Box -->

	<div class="content-box-header">
		<h3>Základné informácie</h3>
	</div> <!-- End .content-box-header -->

	<div class="content-box-content">

	<!-- CCENTER --><div id="ccenter">
	
	
	<div class="body">
  	<script src="<?php echo base_url()?>js/jquery-ui-1.8.22.custom.min.js"   type="text/javascript"  ></script>

	<?php 

		if(isset($places->category_id)) $category_id = $places->category_id;
		else $category_id = set_value("category_id");

		if(isset($places->description)) $description = $places->description;
		else $description = set_value("description") ;

		if(isset($places->name)) $name = $places->name;
		else $name = set_value("name") ;


		$category_id = array(
			'name'		=> 'category_id',
			'id'		=> 'category_id',
			'column'	=> 'category_id',
			'class'		=> 'text-input large-input',
			'autocomplete' => 'off',
			'value'		=> $category_id

		);

		$description = array(
        	"name" => "description", 
        	"class" => "text-input medium-input", 
        	"resize" => "none", 
        	"autocomplete" => "off", 
        	"value" => $description
        );

        $name = array(
        	"name" => "name", 
        	"class" => "text-input medium-input", 
        	"resize" => "none", 
        	"autocomplete" => "off", 
        	"value" => $name,
        );

		if(isset($places->place_id))
		echo form_open_multipart("media/upravit_places/places/place_id/".$places->place_id); 
		else
		echo form_open_multipart("media/".$basicInfo["link"]); 

	?>

	<label for="body">Category ID:</label></dt>
	<select name="category_id" id="category_id" class="medium-input">
		<option value="1" <?php if($category_id["value"] == "1") echo 'selected="selected"' ?> >1</option>
		<option value="2" <?php if($category_id["value"] == "2") echo 'selected="selected"' ?> >2</option>
		<option value="3"  <?php if($category_id["value"] == "3") echo 'selected="selected"' ?> >3</option>
		<option value="4"  <?php if($category_id["value"] == "4") echo 'selected="selected"' ?> >4</option>
		<option value="5"  <?php if($category_id["value"] == "5") echo 'selected="selected"' ?> >5</option>
	</select>
	<br> <br>
	<?php 	
		echo '<label>name:</label>';
		echo form_input($name);
		echo '<br><br>';
		echo '<label>Description:</label>';
		echo form_textarea($description);
		?>
	</div>

    <?php 
    $submit = Array (
		"name" => "submit", 
		"value" => "Ulož", 
		"class" => "button",
	);

    echo "<br><br>";
    echo form_submit($submit);
    
    ?>
    
</div><!--end of containerVideo-->
</div> <!-- End .content-box-content -->
</div> <!-- End .content-box -->

<?php echo form_close(); ?>
<div class="clear"></div>