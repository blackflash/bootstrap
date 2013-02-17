<?php //netteCache[01]000412a:2:{s:4:"time";s:21:"0.16151900 1361011604";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:90:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\PhotoGallery\default.latte";i:2;i:1361011598;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\PhotoGallery\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '4cti6r00oo')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbceffd02933_content')) { function _lbceffd02933_content($_l, $_args) { extract($_args)
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

        <div class="row-fluid">
            <div class="container">

                <h1><?php echo Nette\Templating\Helpers::escapeHtml($title, ENT_NOQUOTES) ?></h1>
                <div class="sepContainer"></div>

                <div class="da-gallery prettyPhoto gridster" style="width: 400px;">
                    <ul>
<?php $iterations = 0; foreach ($gallery_photo as $photo): ?>
                            <li data-row="<?php echo htmlSpecialChars($photo->data_row) ?>
" data-col="<?php echo htmlSpecialChars($photo->data_col) ?>" data-sizex="1" data-sizey="1" class="photo_id" data-photoId="<?php echo htmlSpecialChars($photo->photo_id) ?>">
                                <div class="imagePhoto">
                                    <div class="orderPhotoIcon" id=""></div>
                                    <a href="<?php echo htmlSpecialChars($basePath) ?>
/uploads/gallery/<?php echo htmlSpecialChars($photo->namespace_id) ?>/<?php echo htmlSpecialChars($photo->gallery_id) ?>
/<?php echo htmlSpecialChars($photo->filename) ?>" rel="prettyPhoto[pp1]" class="photoLink" title="<?php echo htmlSpecialChars($photo->description) ?>">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>
/uploads/gallery/<?php echo htmlSpecialChars($photo->namespace_id) ?>/<?php echo htmlSpecialChars($photo->gallery_id) ?>
/thumbs/<?php echo htmlSpecialChars($photo->filename) ?>" class="photoImage" alt="<?php echo htmlSpecialChars($photo->title) ?>" />
                                    </a>
                                </div>
                            </li>
<?php $iterations++; endforeach ?>
                    </ul>
                </div>   

            </div>        
        </div><!--end of row-fluid-->

        <div class="fillContainerXS"></div>

         <!-- prettyPhoto Plugin -->
        <link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/core/gallery.css" media="screen" />

        <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery-1.7.2.min.js"></script>
        <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/prettyphoto/js/jquery.prettyPhoto.min.js"></script>
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/prettyphoto/css/prettyPhoto.css" media="screen" />
        <script type="text/javascript" charset="utf-8">
          $(document).ready(function(){
            $("a[rel^='prettyPhoto']").prettyPhoto();
          });
        </script>
        
        <script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/grid/jquery.gridster.js"></script>
        <link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/jquery.gridster.css" media="screen" />
        <script type="text/javascript">
            $(".gridster ul").gridster({
                widget_margins: [20, 20],
                widget_base_dimensions: [140, 140],
                max_size_x: 5,
                autogenerate_stylesheet: true,
                min_rows: 1,
                max_size_y: 1
            });

            $(".gridster ul").gridster().data('gridster').disable();

        </script>



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