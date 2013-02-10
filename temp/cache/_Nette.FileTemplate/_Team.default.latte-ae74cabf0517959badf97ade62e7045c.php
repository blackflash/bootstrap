<?php //netteCache[01]000404a:2:{s:4:"time";s:21:"0.98517200 1360035715";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:82:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Team\default.latte";i:2;i:1359759372;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Team\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '8e8px7pp4q')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb7f05e8aca0_content')) { function _lb7f05e8aca0_content($_l, $_args) { extract($_args)
?> <div id="breadCrumbsContainer">
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
            <h1><?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ?></h1>
            <p class="introTextProducts">
                A little about our team. We love new challenges and new technologies. We are a team of technology, telecommunication and marketing guys. We joined forces in 2012 and love our project so much we decided to take it live to the world. 
            </p>

            <div class="sepContainer"></div>

                    <h2>Members:</h2>

                        <div class="simpleLine"></div>
                        <br />
                        <img class="img-rounded teamPic" src="<?php echo htmlSpecialChars($basePath) ?>/img/team/andrej.png" alt="Andrej Majtner" />
                        <h4 class="text-info">Andrej Majtner</h4>
                        <small>CO-FOUNDER</small><br />
                        <small class="muted">( andrej.majtner@cleverfrogs.com )</small> <br /><br /><br />
                        <b>About:</b> <br />
                            <small class="muted">
                            Finance and Marketing background. Loves new technologies and brilliant services. In CleverFrogs responsible for Strategy, Marketing, Finance and HR.
                            </small>
                        <br /><br />
                        <div class="simpleLine"></div>
                        <br />
                        <img class="img-rounded teamPic" src="<?php echo htmlSpecialChars($basePath) ?>/img/team/jose.png" alt="Jose Luis Prieto" /><br />
                        <h4 class="text-info">Jose Luis Prieto </h4>
                        <small>CO-FOUNDER</small><br />
                        <small class="muted">( jose.luis.prieto@cleverfrogs.com )</small> <br /><br /><br />
                        <b>About:</b> <br />
                        <small class="muted">
                            Works in the telecommunications sector. IT and business background. Responsible for IT strategy in CleverFrogs project.
                        </small>
                        <br /><br />
                        <div class="simpleLine"></div>
                        <br />
                        <img class="img-rounded teamPic" src="<?php echo htmlSpecialChars($basePath) ?>/img/team/ado.jpg" alt="Andrej Gaspar" /><br />
                        <h4 class="text-info">Andrej Gašpar</h4>
                        <small>CO-FOUNDER</small><br />
                        <small class="muted">( andrej.gaspar@cleverfrogs.com )</small> <br /><br /><br />
                        <b>About:</b> <br />
                            <small class="muted">
                            -   Master degree informatics - Technical University of Košice (TUKE),              <br />
                            -   Bachelor degree Finances, Banking and Investment TUKE,                          <br />
                            -   The Department of Engineering Education TUKE.                                   <br />
                            -   5 years work as freelancer - CG designer , webdeveloper                         <br />
                            -   Responsible for IT development in CleverFrogs project.                          <br />
                            </small>
                        <br />
                        <div class="simpleLine"></div>
                        
                </div>

        </div><!--end of centerContainer-->
        <div class="fillContainerXS"></div>
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