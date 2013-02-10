<?php //netteCache[01]000385a:2:{s:4:"time";s:21:"0.50893900 1359464852";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:63:"/data/c/l/cleverfrogs.com/web/app/templates/Admin/gallery.latte";i:2;i:1359464390;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: /data/c/l/cleverfrogs.com/web/app/templates/Admin/gallery.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'lfyl2kleiu')
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

<!-- prettyPhoto Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/prettyphoto/js/jquery.prettyPhoto.min.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/prettyphoto/css/prettyPhoto.css" media="screen" />

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.gallery.js"></script>

<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.fileinput.js"></script>


<!-- Content Area -->
    <button id="da-ex-growl-0" class="da-button pink" style="display: none;">Default Growl</button>

<?php if ($success == 1): ?>
        <script type="text/javascript">
            $(function(){
                $('#da-ex-growl-0').click();
            });
        </script>
<?php endif ?>

    <?php unset($success) ?>

    <div class="grid_2">
        <div class="da-panel collapsible collapsed" >
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="images/icons/black/16/pencil.png" alt="" />
                    Add Namespace
                </span>
            </div>
            <div class="da-panel-content">
                <form class="da-form" enctype="multipart/form-data" method="post" action="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=addNamespace">
                    <div class="da-form-row">
                        <label>Namespace</label>
                        <div class="da-form-item large">
                           <div class="da-form-item">
                                <span class="formNote">Name of the namespace</span>
                                <input type="text" name="name" />
                           </div>
                        </div>
                    </div>
                    
                    <div class="da-button-row">
                        <input type="reset" value="Reset" class="da-button gray left" />
                        <input type="submit" value="Submit" class="da-button green" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="grid_2">
        <div class="da-panel collapsible collapsed" >
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="images/icons/black/16/pencil.png" alt="" />
                    Add Gallery
                </span>
            </div>
            <div class="da-panel-content">
                <form class="da-form" enctype="multipart/form-data" method="post" action="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=addGallery">
                    <div class="da-form-row">
                        <label>Title</label>
                        <div class="da-form-item large">
                           <div class="da-form-item">
                                <span class="formNote">Title</span>
                                <input type="text" name="title" />
                           </div>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label>Description</label>
                        <div class="da-form-item large">
                           <div class="da-form-item">
                                <span class="formNote">Description</span>
                                <input type="text" name="description" />
                           </div>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label>Namespace</label>
                        <div class="da-form-item large">
                            <select name="namespace_id">
<?php $iterations = 0; foreach ($namespaces as $namespace): ?>
                                    <option value="<?php echo htmlSpecialChars($namespace->namespace_id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($namespace->name, ENT_NOQUOTES) ?></option>
<?php $iterations++; endforeach ?>
                            </select>
                            
                        </div>
                    </div>
                    
                    
                    <div class="da-button-row">
                        <input type="reset" value="Reset" class="da-button gray left" />
                        <input type="submit" value="Submit" class="da-button green" />
                    </div>
                </form>
            </div>
        </div>
    </div>

   <div class="grid_4">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/16/list.png" alt="" />
                    Gallery list
                </span>
                
            </div>
            <div class="da-panel-content">
                <table id="da-ex-datatable-numberpaging" class="da-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Activation</th>
                            <th>Namespace</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Edit Options</th>
                        </tr>
                    </thead>
                    <tbody>
<?php $iterations = 0; foreach ($gallery as $gall): ?>
                            <tr>
                                <td><?php echo Nette\Templating\Helpers::escapeHtml($gall->gallery_id, ENT_NOQUOTES) ?></td>
                                <td>
<?php if ($gall->is_active == 1): ?>
                                        <a href="<?php echo htmlSpecialChars($basePath) ?>
/admin/?do=activateByTableAndRow&gallery_id=<?php echo htmlSpecialChars($gall->gallery_id) ?>
&activate=1&table=gallery"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/accept.png" /></a>
<?php else: ?>
                                        <a href="<?php echo htmlSpecialChars($basePath) ?>
/admin/?do=activateByTableAndRow&gallery_id=<?php echo htmlSpecialChars($gall->gallery_id) ?>
&activate=0&table=gallery"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/cross.png" /></a>
<?php endif ?>

                                </td>
                                <td id="gallStatus_<?php echo htmlSpecialChars($gall->gallery_id) ?>">

                                    <?php  

                                        foreach ($namespaces as $key => $value) {
                                            if($value["namespace_id"] == $gall->namespace_id){
                                                echo $value["name"];
                                            }
                                        }
?>

                                </td>
                                <td><?php echo Nette\Templating\Helpers::escapeHtml($gall->title, ENT_NOQUOTES) ?></td>
                                <td><?php echo Nette\Templating\Helpers::escapeHtml($gall->description, ENT_NOQUOTES) ?></td>
                                
                                <td class="da-icon-column">
                                    <a href="#" class="<?php echo htmlSpecialChars($user->id) ?>
" id="previewLink_<?php echo htmlSpecialChars($user->id) ?>" 
                                        onclick="JavaScript:showUser()">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/magnifier.png" />
                                    </a>
                                    <a href="<?php echo htmlSpecialChars($basePath) ?>
/admin/?do=deleteTask&taskId=<?php echo htmlSpecialChars($gall->gallery_id) ?>">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/trash.png" />
                                    </a>

                                    <a href="#" name="printtask">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/pdf.png" />
                                    </a>
                                    
                                </td>
                            </tr>

<?php $iterations++; endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!--end of grid-->

    <div class="grid_4">
        <div class="da-panel collapsible">
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="images/icons/color/layout.png" alt="" />
                    Namespace 1 - Gallery 1
                </span>
            </div>
            <div class="da-panel-content with-padding">
                <div class="da-gallery prettyPhoto">
                    <ul>
<?php $iterations = 0; foreach ($gallery_photo as $photo): ?>

                            <li>
                                <a href="<?php echo htmlSpecialChars($basePath) ?>
/gallery/<?php echo htmlSpecialChars($photo->namespace_id) ?>/<?php echo htmlSpecialChars($photo->gallery_id) ?>
/<?php echo htmlSpecialChars($photo->filename) ?>" rel="prettyPhoto[pp1]">
                                    <img src="<?php echo htmlSpecialChars($basePath) ?>
/gallery/<?php echo htmlSpecialChars($photo->namespace_id) ?>/<?php echo htmlSpecialChars($photo->gallery_id) ?>
/thumbs/<?php echo htmlSpecialChars($photo->filename) ?>"  />
                                </a>
                                <span class="da-gallery-hover">
                                    <ul>
                                        <li class="da-gallery-update"><a href="#">Update</a></li>
                                        <li class="da-gallery-delete"><a href="#">Delete</a></li>
                                    </ul>
                                </span>
                            </li>

<?php $iterations++; endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>