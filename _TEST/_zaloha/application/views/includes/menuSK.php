<div class="menu" <?php if(isset($username)) echo 'style="width: 900px"' ?>>
	<ul>
		<li>
			<a href="<?php echo base_url(); ?>sk" 
			<?php if($title == "Cleverfrogs domov") echo 'style="background-color: #b4ff23;"' ?> >
			<?php echo $this->lang->line('menu1'); ?></a>
		</li>
		
		
		<?php if(!isset($username)){
		?>
			<li class="spatna_vazba_hover"><a href="<?php echo base_url(); ?>sk/loadPage/spatna_vazba" 
				<?php if($title == "Cleverfrogs spatna_vazba") echo 'style="background-color: #b4ff23;"' ?> >
				<?php echo $this->lang->line('menu4'); ?></a>
			</li> 
		<?php
			}

		?>

		<li><a href="<?php echo base_url(); ?>sk/loadPage/aplikacie"
			<?php if($title == "Cleverfrogs aplikacie") echo 'style="background-color: #b4ff23;"' ?> >
			<?php echo $this->lang->line('menu2'); ?></a>
		</li>

		<li><a href="<?php echo base_url(); ?>sk/loadPage/produkty"
			<?php if($title == "Cleverfrogs produkty") echo 'style="background-color: #b4ff23;"' ?> >
			<?php echo $this->lang->line('menu7'); ?></a>
		</li>

		<li><a href="<?php echo base_url(); ?>sk/loadPage/statistiky"
			<?php if($title == "Cleverfrogs statistiky") echo 'style="background-color: #b4ff23;"' ?> >
			<?php echo $this->lang->line('menu3'); ?></a>
		</li>

		<li class="lastCol"><a href="<?php echo base_url(); ?>sk/loadPage/kontakt"
			<?php if($title == "Cleverfrogs kontakt") echo 'style="background-color: #b4ff23;"' ?> >
			<?php echo $this->lang->line('menu6'); ?></a>
		</li> 

		<?php  if(isset($username)){ 

			if ($user_profile->user_type == "company") {
		?>
			<li class="lastCol menuProfile"><a href="<?php echo base_url(); ?>sk/loadPage/profil_firma"
				<?php if($title == "Cleverfrogs profil") echo 'style="background-color: #b4ff23;"' ?> >
				môj profil</a>
			</li>

		<?php
			}

			if ($user_profile->user_type == "user") {
		?>	
			<li class="spatna_vazba_hover"><a href="<?php echo base_url(); ?>sk/loadPage/spatna_vazba" 
				<?php echo 'style="background-color: #b4ff23;"' ?> >
				Moja spätná väzba</a>
			</li> 


			<li class="lastCol menuProfile"><a href="<?php echo base_url(); ?>sk/loadPage/profil_uzivatel"
				<?php if($title == "Cleverfrogs profil") echo 'style="background-color: #b4ff23;"' ?> >
				môj profil</a>
			</li>

		<?php
			}
		?>
		<?php } ?>

	</ul>
</div>