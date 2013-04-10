<?php //netteCache[01]000408a:2:{s:4:"time";s:21:"0.46169000 1365372109";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:86:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\basic_info.latte";i:2;i:1365372107;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\basic_info.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'a8aba2cahx')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
?>

<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/jquery.countdown.css" media="screen" />
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.countdown.js"></script>

<!-- DataTables Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/datatables/jquery.dataTables.min.js"></script>

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.tables.js"></script>

<!-- jGrowl Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/jgrowl/jquery.jgrowl.min.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/jgrowl/jquery.jgrowl.css" media="screen" />

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.ui.js"></script>
<!-- Validation Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/validate/jquery.validate.min.js"></script>

<!-- Chosen Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/chosen/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/chosen/chosen.css" media="screen" />

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.validation.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.nette.js"></script>

<!-- elRTE Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/elrte/js/elrte.min.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/elrte/css/elrte.css" media="screen" />

<!-- elFinder Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/elfinder/js/elfinder.min.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/elfinder/css/elfinder.css" media="screen" />

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/elastic/jquery.elastic.min.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.form.js"></script>

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/fileDropscript.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.filedrop.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/dropFilesStyles.css" media="screen" />

<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.fileinput.js"></script>

<script type="text/javascript">

    $(document).on("submit", ".basicInfo", function(event){
        console.log($(".title").val() + " " + $(".main-email").val() + " " + $(".contact-email").val()
                    + " " + $(".newsletter-email").val()  + " " + $(".description").val());
        return false;
    });

</script>

<!-- Content Area -->

    <div class="grid_2">
        <div class="da-panel">
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="images/icons/color/accept.png" alt="" />
                    Basic info
                </span>
            </div>
            <div class="da-panel-content">
                <form id="da-ex-validate1" class="da-form">
                    <div id="da-ex-val1-error" class="da-message error" style="display:none;"></div>
                    <div class="da-form-inline">
                        <div class="da-form-row">
                            <label>Website title<span class="required">*</span></label>
                            <div class="da-form-item large">
                                <input type="text" name="req1" />
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label>Main e-mail<span class="required">*</span></label>
                            <div class="da-form-item large">
                                <input type="text" name="email1" />
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label>Contact e-mail<span class="required">*</span></label>
                            <div class="da-form-item large">
                                <span class="formNote">Email where will be sended information from contact form</span>
                                <input type="text" name="email2" />
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label>Newsletter e-mail<span class="required">*</span></label>
                            <div class="da-form-item large">
                                <span class="formNote">Email from which will be newsletters sended</span>
                                <input type="text" name="email3" placeholder="your@email.com" class="newsletter-email" autocomplete="OFF" />
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label>Short description about webpage</label>
                            <div class="da-form-item large">
                                <span class="formNote">will be placed in meta description too</span>
                                <textarea id="da-ex-elastic" class="description" name="description"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="da-button-row">
                        <input type="submit" value="Submit" class="da-button green" />
                    </div>
                </form>
            </div>
        </div>
    </div>

       
        <div class="grid_2">
            <div class="da-panel">
                <div class="da-panel-header">
                    <span class="da-panel-title">
                        <img src="images/icons/color/text_list_bullets.png" />
                        WYSIWYG Editor
                    </span>
                </div>
                <div class="da-panel-content">
                    <form class="da-form">
                        <div class="da-form-row da-form-block">
                            <label>elRTE</label>
                            <div class="da-form-item large">
                                <div id="da-ex-wysiwyg"></div>
                            </div>
                        </div>
                        <div class="da-button-row">
                            <input type="reset" value="Reset" class="da-button gray left" />
                            <input type="submit" value="Submit" class="da-button pink" />
                        </div>
                    </form>
                </div>
            </div>
        </div>                                           
</div>