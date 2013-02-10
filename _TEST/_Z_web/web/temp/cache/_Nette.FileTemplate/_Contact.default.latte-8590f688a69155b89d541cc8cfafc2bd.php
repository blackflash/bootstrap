<?php //netteCache[01]000404a:2:{s:4:"time";s:21:"0.09766700 1351768360";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:82:"C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Contact\default.latte";i:2;i:1351339391;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Contact\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'pxnoyhlng6')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbf6a5faa1a7_content')) { function _lbf6a5faa1a7_content($_l, $_args) { extract($_args)
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
						<h3>CEIT-KE, s.r.o</h3>
					</div>
					
					<ul class="basicList">
						<li>
							<p>Emailová adresa:
							<a href="mailto:info@ceit-ke.sk">info@ceit-ke.sk</a></p>
						</li>
		
						<li class="noBottomBorder">
							<p class="kontaktFU">
								<b>Fakturačné údaje:</b><br />
								CEIT-KE, s.r.o. 		<br />
								Tolstého 3/6			<br />
								040 01 Košice			<br />
								IČO: 45 329 818			<br />
								IČ DPH: SK2022968761	<br />
								Slovenská republika		<br />
								040 01					<br />
								Košice
							</p>
						</li>
					</ul>
			</div> <!-- end sidebarItem -->

			<div class="sidebarItem">
				<div class="sidebarHeader">
					<h3>Kde nás nájdete</h3>
				</div>
				
				<div class="sidebarGeneral">
					<iframe width="240" height="210" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.sk/maps?hl=en&amp;q=tolsteho+3&amp;ie=UTF8&amp;hq=&amp;hnear=Tolst%C3%A9ho+158%2F3,+04001+Ko%C5%A1ice+-+Sever&amp;t=h&amp;ll=48.732304,21.252279&amp;spn=0.01019,0.019655&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
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