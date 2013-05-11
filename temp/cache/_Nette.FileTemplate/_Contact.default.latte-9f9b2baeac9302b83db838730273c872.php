<?php //netteCache[01]000407a:2:{s:4:"time";s:21:"0.79099500 1367106731";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:85:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Contact\default.latte";i:2;i:1367102428;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Contact\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'k8pzpo8hhm')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbc0237bb7e4_content')) { function _lbc0237bb7e4_content($_l, $_args) { extract($_args)
?><script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="<?php echo htmlSpecialChars($basePath) ?>/js/vendor/bootstrap.min.js"></script>
<script src="<?php echo htmlSpecialChars($basePath) ?>/plugins/validate/jquery.validate.min.js"></script>

<div id="breadCrumbsContainer">
            <div class="container">
                <p>You are here:
                    <a href="http://cleverfrogs.com">Home</a>
                    &nbsp; / &nbsp;
                    <strong><?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ?></strong>
                </p>
            </div><!--end of centerContainer-->
        </div><!--end of sliderContainer-->

        <script type="text/javascript">

        	/*$(document).ready(function() {
			  $('#myModal').modal('show');
			});*/

        	
			/*$(document).on("click", "#test", function(event){
				console.log("test");
		        $("#test").button('loading');
		    });*/

        	function submitForm(){
				$("#contactForm").validate({
				    rules: {
				    	name: "required",
				    	email: {
				    		required: true,
				    		email: true,
				    	},
				    	comment: "required"
				    },
				    submitHandler: function(form) {
						$("#sendEmailButton").button('loading');
			            sendEmail($(".name").val(),$(".email").val(),$(".comment").val());
			        }
			    });
			}

        	function sendEmail(name,email,text){
                $.ajax({    
                  type: "POST",
                  url: "?do=jsonSendEmail",
                  data: { username:name, useremail: email, usertext: text},
                  dataType: "html",   
                  success: function(msg){ 
                      if(parseInt(msg)!=0)    
                      {
                      	clearForm();
                        $('#myModal').modal('show');
                      }
                  }
                }); 
            }

           
		    function clearForm(){
		    	$(".name").val("");
		        $(".email").val("");
		        $(".comment").val("");
		        $("#sendEmailButton").button('reset');
				$("#sendEmailButton").attr("disabled","true");

		    }

        </script>
        	
		    <!-- Modal -->
		    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-header">
			    	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    	<center><img src="<?php echo htmlSpecialChars($basePath) ?>/uploads/basic/<?php echo htmlSpecialChars($basic->logo) ?>" alt="CleverFrogs" /></center>
			    </div>
			    <div class="modal-body">
			    	<center>
			    		<p>
			    			Thank you for sharing your thoughts with us. <br />
			    			We appreciate your time and effort inproviding feedback to us.
			    		</p>
			    	</center>
			    </div>
			    <div class="modal-footer">
			    	<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			    </div>
		    </div>
	    

        <div class="blankSeparator"></div>

        <div class="container">
			
        <div class="span12">

			<div class="span4">		
				<div class="sidebarContainer ">
					<div class="sidebarItem">
						<div class="sidebarHeader">
							<h5><?php echo Nette\Templating\Helpers::escapeHtml($basic->website_title, ENT_NOQUOTES) ?></h5>
						</div>
						
						<ul class="basicList">
							<li>
								<p>Email adress:
								<a href="mailto:<?php echo htmlSpecialChars($basic->contact_email) ?>"><?php echo Nette\Templating\Helpers::escapeHtml($basic->contact_email, ENT_NOQUOTES) ?></a></p>
							</li>
			
							<li class="noBottomBorder">
								<p class="kontaktFU">
									<br />
									<b>Contact information :</b><br />
<?php if ($basic->phone != ""): ?>
										Phone num.: <?php echo Nette\Templating\Helpers::escapeHtml($basic->phone, ENT_NOQUOTES) ?>

<?php endif ?>
								</p>
							</li>
							<li style="margin-top: 20px;">
								<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
									<input type="hidden" name="cmd" value="_s-xclick" />
									<input type="hidden" name="hosted_button_id" value="HKKFBMSZYS582" />
									<input type="submit" class="btn btn-large btn-block btn-primary" value="Donate" />
								</form>

							</li>
						</ul>
				</div> <!-- end sidebarItem -->
			</div>

		</div><!--end of sidebarContainer -->

			<div class="span7 contactBar">
				<img src="<?php echo htmlSpecialChars($basePath) ?>/img/contactPageImg.png" alt="Contact" />	<br /><br />
				<p>Do you find our solution interesting? Do you want to ask some questions? Would you like to cooperate with us? Do not hesitate to contact us.</p>
				
				<div class="sepContainer"></div>

				<form action="#"  method="post" id="contactForm">
					<fieldset>
						<p class="span3">
							<input class="input-block-level name" type="text" placeholder="Your name*" name="name" autocomplete="OFF" />
						</p>

						<p class="span3">
							<input class="input-block-level email" type="text" placeholder="Your email*"  name="email" autocomplete="OFF" />
						</p>
						
						<div class="cl"><!-- --></div>
						
						<p class="span6">
							<textarea  class="input-block-level comment" id="comment" placeholder="Text*" cols="10" rows="10" name="comment"><?php if(isset($text)) echo $text ?></textarea>
						</p>
						
						<br />
						<button class="btn btn-large btn-block btn-primary" id="sendEmailButton" type="submit" onclick="submitForm();" data-success-text="Message sended"  data-loading-text="Sending..." value="Submit" />Submit</button>
					</fieldset>
				</form>

			</div>
		</div>
	</div>	
</div>

<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = empty($template->_extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 