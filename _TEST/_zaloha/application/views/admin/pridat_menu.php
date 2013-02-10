<div id="main-content"> <!-- Main Content Section with everything -->
	
	<noscript> <!-- Show a notification if the user has disabled javascript -->
		<div class="notification error png_bg">
			<div>
				Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
			</div>
		</div>
	</noscript>
	
	<!-- Page Head -->
	<h2><?php echo $basicInfo["main_controller"]; ?> - menu odkaz</h2>
	
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

	<a href="<?php echo base_url().$basicInfo["main_controller"]; ?>/loadAdminPageWithPagination2/menu/order_id/asc" class="linkBack">Späť</a>
	<div class="clear"></div>
	<div class="content-box"><!-- Start Content Box -->

	<div class="content-box-header">
		<h3>Základné informácie</h3>
	</div> <!-- End .content-box-header -->

	<div class="content-box-content">

	<!-- CCENTER --><div id="ccenter">
	
	<div class="body">

	<?php 

		if(isset($menu->text)) $text = $menu->text;
		else $text = set_value("text") ;
		if(isset($menu->category_id)) $category_id = $menu->category_id;
		else $category_id = set_value("status") ;
		if(isset($menu->position)) $position = $menu->position;
		else $position = set_value("position") ;

		$pozicia = array(
			'name'		=> 'pozicia',
			'id'		=> 'pozicia',
			'column'	=> 'pozicia',
			'class'		=> 'text-input large-input',
			'value'		=> $position
		);

		$status = array(
			'name'		=> 'status',
			'id'		=> 'status',
			'column'	=> 'status',
			'class'		=> 'text-input large-input',
			'value'		=> $category_id
		);

		$text = array(
        	"name" => "text", 
        	"class" => "text-input medium-input", 
        	"resize" => "none", 
        	"autocomplete" => "off", 
        	"value" => $text
        );

		if(isset($menu->text))
		echo form_open_multipart("media/upravit_menu/menu/id/".$menu->id); 
		else
		echo form_open_multipart("media/".$basicInfo["link"]); 

	?>

	<label for="body">Pozícia odkazu v menu:</label></dt>
	<select name="position" id="position" class="medium-input">
		<option value="top" <?php if($pozicia["value"] == "top") echo 'selected="selected"' ?> >Top</option>
		<option value="left" <?php if($pozicia["value"] == "left") echo 'selected="selected"' ?> >Left</option>
	</select>
	<br><br>
	<label for="body">Kategória:</label></dt>
	<select name="status" id="status" class="medium-input">
		<?php foreach($kategorie as $kategoria => $key){ ?>
		<option value="<?php echo $key->category_id; ?>" <?php if($status["value"] == $key->category_id) echo 'selected="selected"' ?> > <?php echo $key->title ?> </option>
		<?php } ?>
	</select>
	<br><br>
	<small>Stránka s bannerom je úvodná stránka a kontakt by mal byť tiež len jeden, <br>
		ostatok je klasická kategória.</small>
	<br> <br>
	<?php 	
		echo '<label>Názov odkazu:</label>';
		echo form_input($text);
		echo '<br><br>';
		?>
	</div>

	</div>

</div> <!-- End .content-box-content -->
		
<div class="content-box-content">
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
	
</div> <!-- End .content-box -->

<?php echo form_close(); ?>
<div class="clear"></div>