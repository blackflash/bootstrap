<?php //netteCache[01]000407a:2:{s:4:"time";s:21:"0.22945000 1359240900";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:85:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Contact\default.latte";i:2;i:1359240898;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Contact\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'akpskzfclr')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb5b2dc4e119_content')) { function _lb5b2dc4e119_content($_l, $_args) { extract($_args)
?><div id="breadCrumbsContainer">
            <div class="centerContainer">
                <p>You are here:
                    <a href="<?php echo htmlSpecialChars($_control->link("HomePage:")) ?>">Home</a>
                    &nbsp; / &nbsp;
                    <strong><?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ?></strong>
                </p>
            </div><!--end of centerContainer-->
        </div><!--end of sliderContainer-->


        <div class="blankSeparator"></div>

        <div class="centerContainer">
					
			<div class="sidebarContainer fl">
				<div class="sidebarItem">
					<div class="sidebarHeader">
						<h5>CleverFrogs</h5>
					</div>
					
					<ul class="basicList">
						<li>
							<p>Email adress:
							<a href="mailto:info@cleverfrogs.com">info@cleverfrogs.com</a></p>
						</li>
		
						<li class="noBottomBorder">
							<p class="kontaktFU">
								<br />
								<b>Contact information :</b><br />
								Phone num.: +421 918 999 999
							</p>
						</li>
					</ul>
			</div> <!-- end sidebarItem -->


		</div><!--end of sidebarContainer -->

		<div id="rightPanelContact">
			<img src="<?php echo htmlSpecialChars($basePath) ?>/img/contactPageImg.png" alt="Contact" />	<br /><br />
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			
			<div class="sepContainer"><!-- --></div>

			<form action="<?php echo htmlSpecialChars($basePath) ?>/cleverfrogs/sendEmail/sk"  method="post" id="contactForm">
				<fieldset>
					<p class="oneHalfCol">
						<label for="meno">Your name*</label>
						<input type="text"  name="meno" autocomplete="OFF" value="<?php if(isset($meno)) echo $meno ?>" />
					</p>

					<p class="oneHalfCol">
						<label for="email">Your email*</label>
						<input type="text"  name="email" autocomplete="OFF" value="<?php if(isset($email)) echo $email ?>" />
					</p>
					
					<div class="cl"><!-- --></div>
					
					<p>
						<label for="text">Text*</label>
						<textarea id="text" cols="10" rows="10" name="text"><?php if(isset($text)) echo $text ?></textarea>
					</p>
					
					<br />
					 <button class="btn btn-large btn-block btn-primary" type="button">send message</button>
					<p class="additionalOptions fl"></p>
				</fieldset>
			</form>

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
if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 