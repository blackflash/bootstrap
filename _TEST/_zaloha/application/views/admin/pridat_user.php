<div id="main-content"> <!-- Main Content Section with everything -->
	
	<noscript> <!-- Show a notification if the user has disabled javascript -->
		<div class="notification error png_bg">
			<div>
				Javascript is disabled or is not supported by your browser. Please <a href="http://browsehappy.com/" title="Upgrade to a better browser">upgrade</a> your browser or <a href="http://www.google.com/support/bin/answer.py?answer=23852" title="Enable Javascript in your browser">enable</a> Javascript to navigate the interface properly.
			</div>
		</div>
	</noscript>
	
	<!-- Page Head -->
	<h2><?php echo $basicInfo["main_controller"]; ?> - pridať užívateľa</h2>
	
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

	<a href="<?php echo base_url().$basicInfo["main_controller"]; ?>/loadAdminPage/users" class="linkBack">Späť</a>
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
	
	if ($use_username) {
		$username = array(
			'name'	=> 'username',
			'id'	=> 'username',
			'value' => set_value('username'),
			'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
			'size'	=> 30,
			"autocomplete" => "OFF"
		);
	}
	$email = array(
		'name'	=> 'email',
		'id'	=> 'email',
		'value'	=> set_value('email'),
		'maxlength'	=> 80,
		'size'	=> 30,
		"autocomplete" => "OFF"
	);
	$gender = array(
		'name'	=> 'gender',
		'id'	=> 'gender',
		'value'	=> set_value('gender'),
		'maxlength'	=> 80,
		'size'	=> 30,
	);
	$birthdate = array(
		'name'	=> 'birthdate',
		'id'	=> 'birthdate',
		'value'	=> set_value('birthdate'),
		'maxlength'	=> 80,
		'size'	=> 30,
		"autocomplete" => "OFF",
		"placeholder" => "rrrr"
	);
	$password = array(
		'name'	=> 'password',
		'id'	=> 'password',
		'value' => set_value('password'),
		'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
		'size'	=> 30,
	);
	$confirm_password = array(
		'name'	=> 'confirm_password',
		'id'	=> 'confirm_password',
		'value' => set_value('confirm_password'),
		'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
		'size'	=> 30,
	);
	$captcha = array(
		'name'	=> 'captcha',
		'id'	=> 'captcha',
		'maxlength'	=> 8,
	);
	?>
	<?php echo form_open($this->uri->uri_string()); ?>
	<table>
		<?php if ($use_username) { ?>
		<tr>
			<td><?php echo form_label('Prihlasovacie meno:', $username['id']); ?></td>
			<td><?php echo form_input($username); ?></td>
			<td style="color: red;"  class="errorLogin">
				<?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?>
				<?php if(isset($chyby["username"])) if($chyby["username"] == "auth_username_in_use") echo "Tento účet sa už používa" ;?>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td><?php echo form_label('Email:', $email['id']); ?></td>
			<td><?php echo form_input($email); ?></td>
			<td style="color: red;"  class="errorLogin">
				<?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?>
				<?php if(isset($chyby["email"])) if($chyby["email"] == "auth_email_in_use") echo "Tento email sa už používa" ;?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('Prihlasovacie heslo:', $password['id']); ?></td>
			<td><?php echo form_password($password); ?></td>
			<td style="color: red;"  class="errorLogin"><?php echo form_error($password['name']); ?></td>
		</tr>
		<tr>
			<td><?php echo form_label('Potvrď heslo:', $confirm_password['id']); ?></td>
			<td><?php echo form_password($confirm_password); ?></td>
			<td style="color: red;"  class="errorLogin"><?php echo form_error($confirm_password['name']); ?></td>
		</tr>
		<tr>
			<td><?php echo form_label('Pohlavie', $gender['id']); ?></td>
	        <td class="genderTD"><?php echo form_label('Muž') ?>
	        	<input type="radio" id="gender" value="male" name="gender"
	        <?php if(isset($gender["name"])){if($gender["value"] == "male") echo 'checked="checked"'; } ?> /></td>
	    
	        <td class="genderTD"><?php echo form_label('Žena') ?>
	        	<input type="radio" id="gender" value="female" name="gender" 
	        <?php if(isset($gender["name"])){if($gender["value"] == "female") echo 'checked="checked"'; } ?> /></td>
			<td style="color: red;" class="errorLogin"><?php echo form_error($gender['name']); ?></td>	
		</tr>
		<tr>
			<td><?php echo form_label('Rok narodenia:', $birthdate['id']); ?></td>
			<td>
				<select name = "birthdate" class="birthdate">
	              <?php foreach (range(date("Y"), 1912) as $key) {
	              	 echo '<option value = "'.$key.'">'.$key.'</option>';
	              } ?>
	            </select>
			</td>
			<td style="color: red;"  class="errorLogin"><?php echo form_error($birthdate['name']); ?></td>
		</tr>

		<?php if ($captcha_registration) {
			if ($use_recaptcha) { ?>
		<tr>
			<td colspan="2">
				<div id="recaptcha_image"></div>
			</td>
			<td>
				<a href="javascript:Recaptcha.reload()">Get another CAPTCHA</a>
				<div class="recaptcha_only_if_image"><a href="javascript:Recaptcha.switch_type('audio')">Get an audio CAPTCHA</a></div>
				<div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="recaptcha_only_if_image">Enter the words above</div>
				<div class="recaptcha_only_if_audio">Enter the numbers you hear</div>
			</td>
			<td><input type="text" id="recaptcha_response_field" name="recaptcha_response_field" /></td>
			<td style="color: red;"  class="errorLogin"><?php echo form_error('recaptcha_response_field'); ?></td>
			<?php echo $recaptcha_html; ?>
		</tr>
		<?php } else { ?>
		<tr>
			<td colspan="3">
				<p>Enter the code exactly as it appears:</p>
				<?php echo $captcha_html; ?>
			</td>
		</tr>
		<tr>
			<td><?php echo form_label('Confirmation Code', $captcha['id']); ?></td>
			<td><?php echo form_input($captcha); ?></td>
			<td style="color: red;"  class="errorLogin"><?php echo form_error($captcha['name']); ?></td>
		</tr>
		<?php }
		} ?>
	</table>
	<?php echo form_submit('register', 'Register'); ?>
	<?php echo form_close(); ?>
    
</div><!--end of containerVideo-->
</div><!--end of containerVideo-->
</div> <!-- End .content-box-content -->
</div> <!-- End .content-box -->


<div class="clear"></div>