<div id="loginFormPage">
	<div id="loginFormBox">
				<div id="login-content">

				<?php 

					if($language == "sk"){
						$this->data["login"] = "Prihlásiť sa";
						$this->data["password_label"] = "Heslo";
						$this->data["submit"] = "Prihlásiť sa";
						$this->data["forgot_password"] = "Zabudol som heslo";
						$this->data["remember"] = "Zapamätať";
						$this->data["register"] = "Registrácia";
					}

					if($language == "en"){
						$this->data["login"] = "Login";
						$this->data["password_label"] = "Password";
						$this->data["submit"] = "Login";
						$this->data["forgot_password"] = "Forgot password";
						$this->data["remember"] = "Remember";
						$this->data["register"] = "Register";

					}

				?>

				<center><h1><?php echo $this->data["login"] ?></h1></center>
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
								<td><?php echo form_label($this->data["login"], $login['id']); ?></td>
								<td><?php echo form_input($login); ?></input></td>
								<td style="color: red;" class="errorLogin"><?php echo form_error($login['name']); ?><?php echo isset($errors[$login['name']])?$errors[$login['name']]:''; ?></td>
							</tr>
							<tr>
								<td><?php echo form_label($this->data["password_label"], $password['id']); ?></td>
								<td><?php echo form_password($password); ?></td>
								<td style="color: red;" class="errorLogin"><?php echo form_error($password['name']); ?><?php echo isset($errors[$password['name']])?$errors[$password['name']]:''; ?></td>
							</tr>
							
							
							<tr>
								<!-- <?php echo anchor('/auth/forgot_password/', $this->data["forgot_password"], 'class = forgotPassButton'); ?> -->
								<?php if ($this->config->item('allow_registration', 'tank_auth')) echo anchor('/auth/register/', $this->data["register"], 'class = registerButton'); ?>
								
							<td>
								<div id="submitarea">
									<?php echo form_submit('submit', $this->data["submit"]); ?>
									<?php echo form_close(); ?>
								</div>
							</td>

							</tr>
						</table>
			</div> <!-- End #login-content -->
</div></div>