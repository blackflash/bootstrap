<div id="home">
	<div id="breadcrumbs">
			<a href="<?php echo base_url(); ?>" class="breadcrumb">Hlavná stránka</a>>>
			<a href="#" class="breadcrumbChecked">Kontakt</a>
		</div>
	<div id="homeTopIN">
		<h1>Kontakt</h1>
		<div class="greenLine"></div>
	</div>

	<div id="homeBottom">
		<div id="leftPanelContact">
					
			<div class="sidebarContainer fl">
				<div class="sidebarItem">
					<div class="sidebarHeader">
						<h3>CleverFrogs</h3>
					</div>
					
					<ul class="basicList">
						<li>
							<p>Emailová adresa:</p>
							<p><a href="mailto:info@cleverfrogs.com">info@cleverfrogs.com</a></p>
						</li>
		
						<li>
							<p>Telefón: +421 918 999 999</p>
						</li>
		
						<li class="noBottomBorder">
							<p>Insert your information here</p>
						</li>
					</ul>
			</div> <!-- end sidebarItem -->
			</div> <!-- end sidebarItem -->

		</div>

		<div id="rightPanelContact">
			
			<p>Ak máte záujem nás kontaktovať, môžete využiť informácie na ľavej strane ponuky alebo jednoducho vyplňte formulár</p>
			
			<p>Ozveme sa Vám ihneď ako to bude možné.</p>
			
			<div class="sepContainer"><!-- --></div>

			<form action="<?php echo base_url()."cleverfrogs/sendEmail/sk/kontakt" ?>" method="post" id="contactForm">
				<fieldset>
					<p class="oneHalfCol">
						<label for="meno">Vaše meno*</label>
						<input type="text" id="meno" name="meno" autocomplete="OFF" value="<?php if(isset($meno)) echo $meno ?>"/>
					</p>

					<p class="oneHalfCol">
						<label for="email">Váš email*</label>
						<input type="text" id="email" name="email" autocomplete="OFF" value="<?php if(isset($email)) echo $email ?>"/>
					</p>
					
					<div class="cl"><!-- --></div>
					
					<p>
						<label for="text">Text*</label>
						<textarea id="text" cols="10" rows="10" name="text"><?php if(isset($text)) echo $text ?></textarea>
					</p>
					
					<div class="blankSeparator"><!-- --></div>
					<br>
					<a class="redButton fl sendEmail">Odoslať správu</a>
					<p class="additionalOptions fl"></p>
				</fieldset>
			</form>
			<div class="clearfix" style="margin-top: 20px;"></div>
			<?php 

				echo '<div id="emailError">';
					if(validation_errors()){
						echo 	validation_errors();		
					}
				echo '</div>';		

			?>

			<script type="text/javascript">

            	function validateEmail(email) { 
				    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				    return re.test(email);
				} 

            	$(".sendEmail").click(function(){

            		var ret = validateEmail($("#email").val());
            		if(ret == true)
        			$("#contactForm").submit();
        			if(ret == false){
        				alert("Zadali ste email v nesprávnom formáte.")
        			}
				});
            </script>

		</div>
	</div>
	
</div>