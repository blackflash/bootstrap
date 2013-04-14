<?php //netteCache[01]000408a:2:{s:4:"time";s:21:"0.95082200 1365812625";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:86:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Homepage\default.latte";i:2;i:1365812624;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Homepage\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'yesgjovlmi')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbe82f98b0d0_content')) { function _lbe82f98b0d0_content($_l, $_args) { extract($_args)
;$_ctrl = $_control->getComponent("slider"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
        <div class="container">

            <div id="leftContainer" class="fl">
<?php $_ctrl = $_control->getComponent("compactNews"); if ($_ctrl instanceof Nette\Application\UI\IRenderable) $_ctrl->validateControl(); $_ctrl->render() ?>
            </div><!--end of leftContainer-->

            <div id="rightContainer" class="fr">
                <div id="productVideo">
                    <iframe src="http://player.vimeo.com/video/57792959?title=0&amp;byline=0&amp;portrait=0" width="458" height="350" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>

                <img src="<?php echo htmlSpecialChars($basePath) ?>/img/tablet.png" alt="CleverFrogs" />

            </div><!--end of rightContainer-->

            <div class="clearfix"></div>
            <div class="fillContainerXXS"></div>
            
            <div class="row">
                <div class="span12">
                    <h2 class="sectionHeading">Our solution</h2>
                    <br />
                    <div class="container">
                        <div class="span4 offset1" style="margin-top: 10px;">
                            <div class="row-fluid">
                                <div class="span2"><img style="margin-top: 10px;"src="<?php echo htmlSpecialChars($basePath) ?>/images/stylistica_icons/48x48/comments.png" /></div>
                                <div class="span10">
                                    <h4>Get instant feedback</h4>
                                    <small>Give your customers easy and comfortable way of expressing their feelings and requirements. Show them that they are important for you.</small>
                                </div>
                            </div>
                        </div>
                        <div class="span4 offset1" style="margin-top: 10px;">
                            <div class="row-fluid">
                                <div class="span2"><img style="margin-top: 10px;"src="<?php echo htmlSpecialChars($basePath) ?>/images/stylistica_icons/48x48/network.png" /></div>
                                <div class="span10">
                                    <h4>Link it with what you already know</h4>
                                    <small>Use clear and comfortable way of displaying and analysing data about your customers. It will give you the possibility to be faster and better than others.</small>
                                </div>
                            </div>
                        </div>
                        <div class="span4 offset1" style="margin-top: 10px;">
                            <div class="row-fluid">
                                <div class="span2"><img style="margin-top: 10px;"src="<?php echo htmlSpecialChars($basePath) ?>/images/stylistica_icons/48x48/light_bulb.png" /></div>
                                <div class="span10">
                                    <h4>Discover new patterns</h4>
                                    <small>Analyse the data, learn from it and put your learning into practice. It will make your customers happier and more satisfied.</small>
                                </div>
                            </div>
                        </div>
                        <div class="span4 offset1" style="margin-top: 10px;">
                            <div class="row-fluid">
                                <div class="span2"><img style="margin-top: 10px;"src="<?php echo htmlSpecialChars($basePath) ?>/images/stylistica_icons/48x48/star.png" /></div>
                                <div class="span10">
                                    <h4>Create new relationships</h4>
                                    <small>Be proactive. It is better than being just reactive. Build multiple communication channels with your customers.</small>
                                </div>
                            </div>
                        </div>
                        <div class="span4 offset1" style="margin-top: 10px;">
                            <div class="row-fluid">
                                <div class="span2"><img style="margin-top: 10px;"src="<?php echo htmlSpecialChars($basePath) ?>/images/stylistica_icons/48x48/chart.png" /></div>
                                <div class="span10">
                                    <h4>Improve</h4>
                                    <small>React to events and conditions by 20% faster. Make your customers` satisfaction higher by 15%. Raise your sales by more than 20% YoY.</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div><!--end of centerContainer-->

        <div class="fillContainerS"></div>

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