<?php //netteCache[01]000407a:2:{s:4:"time";s:21:"0.02166400 1367365962";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:85:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\components\basicInfoAdmin.latte";i:2;i:1367267013;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\components\basicInfoAdmin.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'tp444rictq')
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

    $(document).on("keyup", ".change", function(event){
        setInfo($(this).data("column"),$(this).val());
        return false;
    });

    $(document).on("focus", ".change", function(event){
        $(this).addClass('error');
    });

    function setInfo(column,value){
       $.ajax({
          type: "POST",
          url: "?do=basicInfoAdmin-jsonSetBasicInfo", 
          data: { column: column,value: value },
          dataType: "json",
          success: function(msg){ 
            if(parseInt(msg)!=0)
            {
                //$("#da-ex-growl-3").trigger('click');
            }
          }
      });
    }

</script>

<style type="text/css">
    .basic_info_logo {
        width: 40%;
        padding: 10px;
        margin-top: 20px;
        right: 5%;
    }
</style>

<button id="da-ex-growl-3" style="display: none;"></button>
<!-- Content Area -->
    <div class="grid_2">
        <div class="da-panel" >
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/buildings.png" alt="" />
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
                                <input type="text" class="change" name="req1" data-column="website_title" data-name='<?php echo htmlSpecialChars($basic->website_title, ENT_QUOTES) ?>
' value="<?php echo htmlSpecialChars($basic->website_title) ?>" autocomplete="OFF" />
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label>Main e-mail<span class="required">*</span></label>
                            <div class="da-form-item large">
                                <input type="text" class="change" name="email1" data-column="main_email" data-name='<?php echo htmlSpecialChars($basic->main_email, ENT_QUOTES) ?>
' value="<?php echo htmlSpecialChars($basic->main_email) ?>" autocomplete="OFF" />
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label>Contact e-mail<span class="required">*</span></label>
                            <div class="da-form-item large">
                                <span class="formNote">Email where will be sended information from contact form</span>
                                <input type="text" class="change" name="email2" data-column="contact_email" data-name='<?php echo htmlSpecialChars($basic->contact_email, ENT_QUOTES) ?>
' value="<?php echo htmlSpecialChars($basic->contact_email) ?>" autocomplete="OFF" />
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label>Newsletter e-mail<span class="required">*</span></label>
                            <div class="da-form-item large">
                                <span class="formNote">Email from which will be newsletters sended</span>
                                <input type="text" class="change" name="email3" data-column="newsletter_email" placeholder="newsletter@email.com" data-name='<?php echo htmlSpecialChars($basic->newsletter_email, ENT_QUOTES) ?>
' value="<?php echo htmlSpecialChars($basic->newsletter_email) ?>" class="newsletter-email" autocomplete="OFF" />
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label>Phone</label>
                            <div class="da-form-item large">
                                <input type="text" class="change" name="phone" data-column="phone" placeholder="+421 000 000 000" data-name='<?php echo htmlSpecialChars($basic->phone, ENT_QUOTES) ?>
' value="<?php echo htmlSpecialChars($basic->phone) ?>" class="phone" autocomplete="OFF" />
                            </div>
                        </div>
                        <div class="da-form-row">
                            <label>Short description about webpage</label>
                            <div class="da-form-item large">
                                <span class="formNote">will be placed in meta description too</span>
                                <textarea id="da-ex-elastic" class="change description" data-column="description" name="description" data-name='<?php echo htmlSpecialChars($basic->description, ENT_QUOTES) ?>
' ><?php echo Nette\Templating\Helpers::escapeHtml($basic->description, ENT_NOQUOTES) ?></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="grid_2">
        <div class="da-panel" >
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/image_2.png" />
                    WebPage logo upload
                </span>
            </div>
            <div class="da-panel-content">
                <div class="da-form-inline">
                    <div class="da-form-row">
                        <img src="<?php echo htmlSpecialChars($basePath) ?>/uploads/basic/<?php echo htmlSpecialChars($basic->logo) ?>" class="basic_info_logo" />
                    </div>
                </div>
                <form id="da-ex-validate3" class="da-form" enctype="multipart/form-data" method="post"  action="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=basicInfoAdmin-basicUpdateLogo">
                    <div class="da-form-inline">
                        <div class="da-form-row">
                            <label>Logo <span class="required">*</span></label>
                            <div class="da-form-item large">
                                <input type="file" name="image" class="da-custom-file" />
                                <label for="image" class="error" generated="true" style="display:none;"></label>
                            </div>
                        </div>
                    </div>
                    <div class="da-button-row">
                        <input type="submit" value="Upload" class="da-button green" />
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>