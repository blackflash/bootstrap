<link rel="stylesheet" href="<?php echo base_url(); ?>css/slidebox.css" type="text/css" media="screen"/>
	<div id="slidebox">
	            <a class="close"></a>
	            <p>Cleverfrogs.com</p>
	            <h2>Páči sa Vám naša myšlienka ?</h2>
				<h2 class="spatna_vazba_text">Vyjadrite svoj názor</h2>

	            <?php
					echo form_open("cleverfrogs/sendOpinion");
				?>
					<div id="question">
						<label>Áno</label>
						<input type="radio" name="myradio" value="áno" <?php echo set_radio('áno', 'áno'); ?> />
					</div>
					
					<div id="clear"></div>
					
					<div id="question">
						<label>Nie ( napíšte prečo )</label>
						<input type="radio" name="myradio" value="nie" <?php echo set_radio('nie', 'nie'); ?> />
					
				<?php
					$data = array(
						'name'		=> 'text',
						'id'		=> 'text',
						'column'	=> 'text',
						'class'		=> 'textAreaCustom',
						'autocomplete' => 'off',
						'placeholder'  => "Váš text",
					);
					echo "<br>";
					echo form_textarea($data);
					
					echo "</div>";
					echo '<div id="clear"></div>';

					$submit = Array (
						"name" => "submit", 
						"value" => "odoslať", 
						"class" => "submitQ",
					);

					echo form_submit($submit);
				    echo form_close();
				?>

	</div>

	        </div>
<!-- The JavaScript -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
	$(function() {
		$(function(){
			/* when reaching the element with id "last" we want to show the slidebox. Let's get the distance from the top to the element */
			var distanceTop = $('#last').offset().top - $(window).height();
			
			if  ($(window).scrollTop() > distanceTop)
				$('#slidebox').animate({'right':'0px'},300);
			else 
				$('#slidebox').stop(true).animate({'right':'-430px'},100);	
		});
		
		/* remove the slidebox when clicking the cross */
		$('#slidebox .close').bind('click',function(){
			$(this).parent().remove();
		});
	});
</script>