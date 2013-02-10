<?php //netteCache[01]000403a:2:{s:4:"time";s:21:"0.58491000 1352900125";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:81:"C:\Program Files (x86)\VertrigoServ\www\_tswp\app\templates\Contact\default.latte";i:2;i:1352900124;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\_tswp\app\templates\Contact\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '4iev1f63ju')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbda3d008765_content')) { function _lbda3d008765_content($_l, $_args) { extract($_args)
?><div id="breadCrumbsContainer">
            <div class="centerContainer">
                <p>Nachádzate sa tu:
                    <a href="<?php echo htmlSpecialChars($_control->link("HomePage:")) ?>">Domov</a>
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
						<h3>TUKE</h3>
					</div>
					
					<ul class="basicList">
						<li>
							<p>Emailová adresa:
							<a href="mailto:info@ceit-ke.sk">andrej.gaspar@student.tuke.sk</a></p>
						</li>
		
						<li class="noBottomBorder">
							<p class="kontaktFU">
								<b>Kontaktné informácie :</b><br />
								Fakulta elektrotechniky a informatiky					<br />
								Letná 9	<br />
								042 00 Košice
							</p>
						</li>
					</ul>
			</div> <!-- end sidebarItem -->

			<div class="sidebarItem">
				<div class="sidebarHeader">
					<h3>Kde nás nájdete</h3>
				</div>
				
				<div class="sidebarGeneral">
					<iframe width="240" height="210" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.sk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=letna+9+kosice&amp;sll=48.162333,16.387188&amp;sspn=0.012581,0.033023&amp;ie=UTF8&amp;hq=&amp;hnear=Letn%C3%A1+1%2F9,+04001+Ko%C5%A1ice+-+Sever&amp;t=m&amp;z=14&amp;ll=48.730422,21.245503&amp;output=embed"></iframe>
				</div>
			</div> <!-- end sidebarItem -->

		</div><!--end of sidebarContainer -->

		<div id="rightPanelContact">
			<img src="<?php echo htmlSpecialChars($basePath) ?>/img/contactPageImg.png" alt="Contact" />
			<p>Ak máte záujem nás kontaktovať, môžete využiť informácie na ľavej strane ponuky alebo jednoducho vyplňte formulár</p>
			
			<div class="sepContainer"><!-- --></div>

			<form action="<?php echo htmlSpecialChars($basePath) ?>/cleverfrogs/sendEmail/sk"  method="post" id="contactForm">
				<fieldset>
					<p class="oneHalfCol">
						<label for="meno">Vaše meno*</label>
						<input type="text" id="meno" name="meno" autocomplete="OFF" value="<?php if(isset($meno)) echo $meno ?>" />
					</p>

					<p class="oneHalfCol">
						<label for="email">Váš email*</label>
						<input type="text" id="email" name="email" autocomplete="OFF" value="<?php if(isset($email)) echo $email ?>" />
					</p>
					
					<div class="cl"><!-- --></div>
					
					<p>
						<label for="text">Text*</label>
						<textarea id="text" cols="10" rows="10" name="text"><?php if(isset($text)) echo $text ?></textarea>
					</p>
					
					<div class="blankSeparator"><!-- --></div>
					<br />
					<a class="redButton fl sendEmail">Odoslať správu</a>
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