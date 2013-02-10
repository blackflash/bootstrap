<div id="copyrightContainer">
	<div id="ccTop">

		<div id="ccIn1">
			<p class="copyrightHead">Newsletter EN</p>
			<div class="newsletterInfo">Prajete si zasielať informácie o aktuálnych novinkách a akciách priamo na Váš e-mail ?</div>
			
			<form action="<?php echo base_url()."cleverfrogs/subscribe" ?>" id="subscribeForm" method="post">
                <fieldset>
                    <div>
                        <input type="text" id="subscribeEmail" name="subscribeEmail" class="fl" autocomplete="OFF" placeholder="Vaša emailová adresa"/>
                        <a href="#" id="newsletterSignup" class="blueButton">
                            <img src="<?php echo base_url() ?>/img/blueButtonArrow.png"/>
                        </a>

                        <?php 
                        	if($this->uri->segment(1) == "sk" || $this->uri->segment(1) == "") {
                        		?>
                        		<input type="hidden" name="language" value="sk">
                        		<?php
                        	}else {
                        		?>
                        		<input type="hidden" name="language" value="en">
                        		<?php
                        	}
                        ?>


                    </div>
                </fieldset>
            </form>

            <script type="text/javascript">

            	function validateEmail(email) { 
				    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				    return re.test(email);
				} 

            	$("#newsletterSignup").click(function(){

            		var ret = validateEmail($("#subscribeEmail").val());
            		if(ret == true)
        			$("#subscribeForm").submit();
        			if(ret == false){
        				alert("Zadali ste email v nesprávnom formáte.")
        			}
				});
            </script>

            <div id="dialog-form" style="display: none;">
			  fields here
			</div>


		</div>

		<div id="ccIn2">
			<p class="copyrightHead">Páči sa Vám táto myšlienka ?</p>
			<div class="ccShare">Dajte o tom vedieť</div>
			<ul class="socialIcons fl">
                <li><a href="#"><img src="<?php echo base_url() ?>/img/social/twitter.png" alt="twitter" /></a></li>
                <li><a href="#"><img src="<?php echo base_url() ?>/img/social/facebook.png" alt="facebook" /></a></li>
                <li><a href="#"><img src="<?php echo base_url() ?>/img/social/rss.png" alt="rss" /></a></li>
            </ul>


            <ul class="socialIconsShare fl">
            	<li>
		            <div id="fb-root"></div>
					<script>(function(d, s, id) {
					  var js, fjs = d.getElementsByTagName(s)[0];
					  if (d.getElementById(id)) return;
					  js = d.createElement(s); js.id = id;
					  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
					  fjs.parentNode.insertBefore(js, fjs);
					}(document, 'script', 'facebook-jssdk'));</script>

					<div class="fb-like" data-href="http://test.cleverfrogs.com" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false" data-font="arial"></div>
				</li>
				<li>
					<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://test.cleverfrogs.com">Tweet</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				</li>
				<li>
					<!-- Place this tag where you want the +1 button to render. -->
					<div class="g-plusone" data-href="http://test.cleverfrogs.com"></div>

					<!-- Place this tag after the last +1 button tag. -->
					<script type="text/javascript">
					  (function() {
					    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
					    po.src = 'https://apis.google.com/js/plusone.js';
					    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
					  })();
					</script>
				</li>
			</ul>

		</div>

		<div id="ccIn3">
			<p class="copyrightHead"><a href="<?php echo base_url() ?>sk/loadPage/FAQsk">Časté otázky</a></p>
			<div class="ccFAQ">
				<a href="<?php echo base_url() ?>sk/loadPage/FAQsk#ako-to-funguje">Ako to funguje ?</a> <br>
				<a href="<?php echo base_url() ?>sk/loadPage/FAQsk#spotrebitel">Som spotrebiteľ, zaujalo ma to, čo ďalej ?</a> <br>
				<a href="<?php echo base_url() ?>sk/loadPage/FAQsk#firma">Sme firma, zaujalo nás to, čo ďalej ?</a> <br>
				<a href="<?php echo base_url() ?>sk/loadPage/FAQsk#kolko-ma-to-bude-stat">Koľko ma to bude stáť ?</a>	<br>
				<a href="<?php echo base_url() ?>sk/loadPage/FAQsk#ktore-platformy-podporujete">Ktoré platformy podporujete ?</a>

			</div>
		</div>

		<div id="ccIn4">
			<p class="copyrightHead">Kontakt</p>
				<div id="homeContact">
					<a href="<?php echo base_url() ?>sk/loadPage/kontakt"><?php echo $this->lang->line('contactUs'); ?></a>
				</div>
		</div>
		
	</div>
	

	<div id="ccBottom">
			<small>Copyright AMBI s.r.o. All rights reserved.</small>
	</div>

</div>
