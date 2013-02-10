<div id="main-content"> <!-- Main Content Section with everything -->
	
	<noscript> <!-- Show a notification if the user has disabled javascript -->
		<div class="notification error png_bg">
			<div>
				Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
			</div>
		</div>
	</noscript>
	
	<!-- Page Head -->
	<h2><?php echo $basicInfo["main_controller"]; ?> - feedback</h2>
	
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

	<a href="<?php echo base_url().$basicInfo["main_controller"]; ?>/loadAdminPageWithPagination/feedback" class="linkBack">Späť</a>
	<div class="clear"></div>
	<div class="content-box"><!-- Start Content Box -->

	<div class="content-box-header">
		<h3>Základné informácie</h3>
	</div> <!-- End .content-box-header -->

	<div class="content-box-content">

	<!-- CCENTER --><div id="ccenter">
	
	
	<div class="body">
  	<script src="<?php echo base_url()?>js/jquery-ui-1.8.22.custom.min.js"   type="text/javascript"  ></script>

	<script type="text/javascript">
		$(function() {
			$( "#datepicker" ).datepicker();
		});
		$(function() {
			$( "#datepicker" ).datepicker({dateFormat: 'yy-mm-dd'});
		});
	</script>

	<?php 

		if(isset($feedback->category_id)) $category_id = $feedback->category_id;
		else $category_id = set_value("category_id");

		if(isset($feedback->provider)) $provider = $feedback->provider;
		else $provider = set_value("provider") ;

		if(isset($feedback->place_id)) $place_id = $feedback->place_id;
		else $place_id = set_value("place_id") ;

		if(isset($feedback->date)) $date = $feedback->date;
		else $date = set_value("date") ;

		if(isset($feedback->stars)) $stars = $feedback->stars;
		else $stars = set_value("stars") ;

		if(isset($feedback->comment)) $comment = $feedback->comment;
		else $comment = set_value("comment") ;

		if(isset($feedback->text)) $text = $feedback->text;
		else $text = set_value("editor_0");

		$category_id = array(
			'name'		=> 'category_id',
			'id'		=> 'category_id',
			'column'	=> 'category_id',
			'class'		=> 'text-input large-input',
			'autocomplete' => 'off',
			'value'		=> $category_id

		);

		$provider = array(
        	"name" => "provider", 
        	"class" => "text-input medium-input", 
        	"resize" => "none", 
        	"autocomplete" => "off", 
        	"value" => $provider
        );

        $place_id = array(
        	"name" => "place_id", 
        	"class" => "text-input medium-input", 
        	"resize" => "none", 
        	"autocomplete" => "off", 
        	"value" => $place_id
        );

        $date = array(
        	"name" => "date", 
        	"class" => "text-input medium-input", 
        	"resize" => "none", 
        	"autocomplete" => "off", 
        	"value" => $date,
        	'id'	=> 'datepicker',
          	'maxlength'	=> '30',
          	'placeholder' => 'service time',
          	'autocomplete' => 'off'
        );

        $stars = array(
        	"name" => "stars", 
        	"class" => "text-input medium-input", 
        	"resize" => "none", 
        	"autocomplete" => "off", 
        	"value" => $stars
        );

        $comment = array(
        	"name" => "comment", 
        	"class" => "text-input medium-input textareaComment", 
        	"resize" => "none", 
        	"autocomplete" => "off", 
        	"value" => $comment
        );

		
		if(isset($feedback->id))
		echo form_open_multipart("media/upravit_feedback/feedback/id/".$feedback->id); 
		else
		echo form_open_multipart("media/".$basicInfo["link"]); 

	?>

	<label for="body">Typ kategórie:</label></dt>
	<select name="category_id" id="category_id" class="medium-input">
		<option value="1" <?php if($category_id["value"] == "1") echo 'selected="selected"' ?> >1</option>
		<option value="2" <?php if($category_id["value"] == "2") echo 'selected="selected"' ?> >2</option>
		<option value="3"  <?php if($category_id["value"] == "3") echo 'selected="selected"' ?> >3</option>
		<option value="4"  <?php if($category_id["value"] == "4") echo 'selected="selected"' ?> >4</option>
		<option value="5"  <?php if($category_id["value"] == "5") echo 'selected="selected"' ?> >5</option>
	</select>
	<br> <br>
	<?php 	
		echo '<label>Provider:</label>';
		echo form_input($provider);
		echo '<br><br>';
		echo '<label>Place ID:</label>';
		echo form_input($place_id);
		echo '<br><br>';
		echo '<label>Date:</label>';
		echo form_input($date);
		echo '<br><br>';
		echo '<label>Stars:</label>';
		echo form_input($stars);
		echo '<br><br>';
		echo '<label>Comment:</label>';
		echo form_textarea($comment);
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