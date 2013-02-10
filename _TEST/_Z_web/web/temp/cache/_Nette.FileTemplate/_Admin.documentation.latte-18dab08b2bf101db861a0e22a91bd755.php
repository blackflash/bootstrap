<?php //netteCache[01]000407a:2:{s:4:"time";s:21:"0.48512700 1354208510";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:85:"C:\Program Files (x86)\VertrigoServ\www\_tswp\app\templates\Admin\documentation.latte";i:2;i:1354208483;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\_tswp\app\templates\Admin\documentation.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'tf27wxouln')
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


<!-- Content Area -->
    <div class="grid_4">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/cog.png" />
                    Documentation generator
                </span>
            </div>
            <div class="da-panel-content">
                <form id="da-ex-validate3" class="da-form" style="padding-top:23px;" enctype="multipart/form-data" method="post" action="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=generatePDFdocumentation">
                    <fieldset class="da-form-inline">
                            <legend>Documentation Info</legend>
                                <div class="da-form-row">
                                    <label>Name of project:<span class="required">*</span></label>
                                    <div class="da-form-item large">
                                        <input type="text" name="projectName" autocomplete="OFF" />
                                    </div>
                                </div>
                                <div class="da-form-row">
                                    <label>School subject:<span class="required">*</span></label>
                                    <div class="da-form-item large">
                                        <input type="text" name="schoolSubject" />
                                    </div>
                                </div>
                                <div class="da-form-row">
                                    <label>Date: <span class="required">*</span></label>
                                    <div class="da-form-item large">
                                        <input id="da-ex-datepicker" name="date" type="text" />
                                    </div>
                                </div>
                                <div class="da-form-row">
                                    <label>Class year:<span class="required">*</span></label>
                                    <div class="da-form-item large">
                                        <input type="text" name="classYear" />
                                    </div>
                                </div>
                                <div class="da-form-row">
                                    <label>Name of teacher:<span class="required">*</span></label>
                                    <div class="da-form-item large">
                                        <input type="text" name="teacher" />
                                    </div>
                                </div>
                                <div class="da-form-row">
                                    <label>Consultant:<span class="required">*</span></label>
                                    <div class="da-form-item large">
                                        <input type="text" name="consultant" />
                                    </div>
                                </div>
                                <div class="da-form-row">
                                    <label>Students names:<span class="required">*</span></label>
                                    <div class="da-form-item large">
                                        <input type="text" name="students" />
                                    </div>
                                </div>
                        </fieldset>

                        <fieldset class="da-form-inline">
                            <legend>Intro text</legend>

                            <div class="da-form-row">
                                <label>Intro: <span class="required">*</span></label>
                                <div class="da-form-item large">
                                    <div id="da-ex-wysiwyg" name="introText"></div>
                                </div>
                            </div>
                        </fieldset>

                        <fieldset class="da-form-inline">
                            <legend>Analyzation</legend>

                            <div class="da-form-row">
                                <label>Analyse: <span class="required">*</span></label>
                                <div class="da-form-item large">
                                    <div id="da-ex-wysiwyg2" name="analyzationText"></div>
                                </div>
                            </div>
                            <div class="da-form-row">
                                <label>Analyzation images <span class="required">*</span></label>
                                <div class="da-form-item large">
                                    <div id="dropbox">
                                        <span class="message">Drop images here to upload. <br /><i>(they will only be visible to you)</i></span>
                                    </div>
                                </div>
                            </div>
                            
                        </fieldset>
                        <fieldset class="da-form-inline">
                            <legend>SQL part</legend>

                            <div class="da-form-row">
                                <label>SQL info: <span class="required">*</span></label>
                                <div class="da-form-item large">
                                    <div id="da-ex-wysiwyg3" name="sqlText"></div>
                                </div>
                            </div>
                            <div class="da-form-row">
                                <label>SQL image:</label>
                                <div class="da-form-item large">
                                    <input type="file" name="sqlImage" id="file" />
                                </div>
                            </div>
                            
                        </fieldset>
                        <fieldset class="da-form-inline">
                            <legend>Alternative system informations</legend>

                            <div class="da-form-row">
                                <label>Text: <span class="required">*</span></label>
                                <div class="da-form-item large">
                                    <div id="da-ex-wysiwyg4" name="alternativeText"></div>
                                </div>
                            </div>
                            <div class="da-form-row">
                                <label>Alternative image:</label>
                                <div class="da-form-item large">
                                    <input type="file" name="alternativeImage" id="file" />
                                </div>
                            </div>
                            
                        </fieldset>
                        <fieldset class="da-form-inline">
                            <legend>Conclusion</legend>

                            <div class="da-form-row">
                                <label>Text: <span class="required">*</span></label>
                                <div class="da-form-item large">
                                    <div id="da-ex-wysiwyg5" name="conclusionText"></div>
                                </div>
                            </div>
                            
                        </fieldset>

                    <div class="da-button-row">
                        <input type="submit" value="Validate Me" class="da-button green" />
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</div>
