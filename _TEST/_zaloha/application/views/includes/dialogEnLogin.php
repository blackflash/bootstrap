<script type="text/javascript">
	$(".loginLink").click(function() {
      $('#dialog').dialog({
        autoOpen: true,
        width: 430,
        height: 250,
        resizable: false,
        draggable: true,
        position:  ['center'],
        show: {effect: "fade", duration: 1000},
        hide: {effect: "fade", duration: 1000}
      });
    });


    $(document).ready(function() {
        $("#dialog").css("display","none");
    });

</script>

<div id="dialog" title="cleverfrogs.com">

				<div id="login-content">
				<?php

					$login_label = 'Login';

					$password = array(
						'name'	=> 'password',
						'id'	=> 'password',
						'size'	=> 30,
						'autocomplete'	=> 'off'
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
				<div id="errorsPop">
					<div style="color: red;" class="errorLoginPop">
						<?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?>
						<?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?>
					</div>
				</div>
				<?php echo form_open(base_url()."auth/login/en");; ?>
				<table class="tabulkaLogin">
					<tr>
						<td><?php echo form_label($login_label, $login['id']); ?></td>
						<td><input type="text" id="login" name="login" autocomplete="OFF" /></td>
					</tr>
					<tr>
						<td><?php echo form_label('Password', $password['id']); ?></td>
						<td><?php echo form_password($password); ?></td>
					</tr>
					
					<tr>
						<div id="zapamatat">
							<!-- <?php echo form_label('Remember', $remember['id']); ?>
							<?php echo form_checkbox($remember); ?> -->
						</div>
						<div class="clearfix"></div>
						<!-- <?php echo anchor('/auth/forgot_password/', 'Zabudol som heslo', 'class = forgotPassButton'); ?> -->
						<?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', 'Register', 'class = registerButton'); ?>
						
					<td>
						<div id="submitarea">
							<?php echo form_submit('submit', 'Login'); ?>
							<?php echo form_close(); ?>
						</div>
					</td>

					</tr>
				</table>
			</div> <!-- End #login-content -->
</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>