<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'loginArea',
	'value' => set_value('login'),
	'maxlength'	=> 50,
	'size'	=> 30,
	'autocomplete'	=> "off",
);


$login_label = 'Login';

$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember-password',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>

<?php echo form_open($this->uri->uri_string()); ?>
<table class="tabulkaLoginPage">
	<tr>
		<td><?php echo form_label("Login"); ?></td>
		<td><?php echo form_input($login); ?></input></td>
	</tr>
	<td style="color: red;" class="errorLogin"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></td>
	<tr>
		<td><?php echo form_label("Heslo"); ?></td>
		<td><?php echo form_password($password); ?></td>
	</tr>
	<td style="color: red;" class="errorLogin"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></td>
	
	<tr>
		
		
	<td>
		<div id="submitarea">
			<?php echo form_submit('submit', "submit"); ?>
			<?php echo form_close(); ?>
		</div>
	</td>

	</tr>
</table>