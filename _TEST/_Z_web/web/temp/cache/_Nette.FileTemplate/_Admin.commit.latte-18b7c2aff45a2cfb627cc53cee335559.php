<?php //netteCache[01]000400a:2:{s:4:"time";s:21:"0.09082800 1354179663";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:78:"C:\Program Files (x86)\VertrigoServ\www\_tswp\app\templates\Admin\commit.latte";i:2;i:1354179535;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\_tswp\app\templates\Admin\commit.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'tbtsy7jozq')
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

<!-- Content Area -->
    <div class="grid_2" style="margin-bottom: 20px;">

        <a href="https://github.com/blackflash/TSWP" id="showRepository" target="_blank" >
            <button id="generatePDF" class="da-button green">
                <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/ui_tab_content.png" />
                Show repository
            </button>
        </a>

        <a href="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=generatePDF&data=<?php echo htmlSpecialChars($user->id) ?>" id="generatePDFlink" target="_blank" >
            <button id="generatePDF" class="da-button red">
                <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/pdf.png" />
                Generate PDF
            </button>
        </a>

    </div>

        <div class="grid_4">
            <div class="da-panel collapsible">
                <div class="da-panel-header">
                    <span class="da-panel-title">
                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/16/list.png" alt="" />
                        Commit history
                    </span>
                    
                </div>
                <div class="da-panel-content">
                    <table id="da-ex-datatable-numberpaging" class="da-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Date</th>
                                <th>Email</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(substr($commits["message"], 0,-28) != "API Rate Limit"){  $iterations = 0; foreach ($commits as $key): ?>
                                    <tr>
                                        <td><?php echo Nette\Templating\Helpers::escapeHtml($key["commit"]["committer"]["name"], ENT_NOQUOTES) ?></td>
                                        <td><?php echo Nette\Templating\Helpers::escapeHtml($key["commit"]["committer"]["date"], ENT_NOQUOTES) ?></td>
                                        <td><?php echo Nette\Templating\Helpers::escapeHtml($key["commit"]["committer"]["email"], ENT_NOQUOTES) ?></td>
                                        <td><?php echo Nette\Templating\Helpers::escapeHtml($key["commit"]["message"], ENT_NOQUOTES) ?></td>
                                    </tr>
<?php $iterations++; endforeach ?>
                            <?php } else {?>

                            <tr>
                                <td>API Rate Limit Exceeded </td>
                                <td>API Rate Limit Exceeded </td>
                                <td>API Rate Limit Exceeded </td>
                                <td>API Rate Limit Exceeded </td>
                            </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            </div>

            
                
        </div>

    </div>
    
</div>

