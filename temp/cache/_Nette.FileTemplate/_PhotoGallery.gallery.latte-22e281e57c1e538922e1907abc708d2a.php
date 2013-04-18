<?php //netteCache[01]000412a:2:{s:4:"time";s:21:"0.12652600 1366155420";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:90:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\PhotoGallery\gallery.latte";i:2;i:1362702070;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\PhotoGallery\gallery.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'qwxl52zzmm')
;
// prolog Nette\Latte\Macros\UIMacros

// snippets support
if (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
if (isset($gallery_photo->fetch()->namespace_id)): ?>
    <a href="<?php echo htmlSpecialChars($basePath) ?>/PhotoGallery#slide-<?php echo htmlSpecialChars($gallery_photo->fetch()->namespace_id) ?>">Back</a>
<?php endif ?>

<?php if ($videoCheckNamespace != ""): ?>

<div id="vimeo-demo" class="content da-gallery prettyPhoto gridster" style="">
    <ul class="gallery">
<?php $iterations = 0; foreach ($gallery_video as $value): ?>
                <li data-row="<?php echo htmlSpecialChars($value->data_row) ?>" data-col="<?php echo htmlSpecialChars($value->data_col) ?>" data-sizex="1" data-sizey="1">
                    <small class="photoTittle photoTitleSmall_<?php echo htmlSpecialChars($value->video_id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($value->title, ENT_NOQUOTES) ?></small>
                    <a href="<?php echo htmlSpecialChars($value->link) ?>" rel="prettyPhoto[video]" title="<?php echo htmlSpecialChars($value->description) ?>">
                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/stylistica_icons/128x128/video_camera.png" alt="<?php echo htmlSpecialChars($value->title) ?>"  />
                    </a>
                </li>
<?php $iterations++; endforeach ?>
    </ul>
</div>

<div class="sepContainer"></div>

<?php endif ?>
    

<div class="da-gallery prettyPhoto gridster">
    <ul>
<?php $iterations = 0; foreach ($gallery_photo as $photo): ?>
            <li data-row="<?php echo htmlSpecialChars($photo->data_row) ?>" data-col="<?php echo htmlSpecialChars($photo->data_col) ?>
" data-sizex="1" data-sizey="1" class="photo_id" data-photoId="<?php echo htmlSpecialChars($photo->photo_id) ?>">
                <div class="imagePhoto">
                    <div class="orderPhotoIcon" id=""></div>
                    <a href="<?php echo htmlSpecialChars($basePath) ?>/uploads/gallery/<?php echo htmlSpecialChars($photo->namespace_id) ?>
/<?php echo htmlSpecialChars($photo->gallery_id) ?>/<?php echo htmlSpecialChars($photo->filename) ?>
" rel="prettyPhoto[pp1]" class="photoLink" title="<?php echo htmlSpecialChars($photo->description) ?>">
                        <img src="<?php echo htmlSpecialChars($basePath) ?>/uploads/gallery/<?php echo htmlSpecialChars($photo->namespace_id) ?>
/<?php echo htmlSpecialChars($photo->gallery_id) ?>/thumbs/<?php echo htmlSpecialChars($photo->filename) ?>
" class="photoImage" alt="<?php echo htmlSpecialChars($photo->title) ?>" />
                    </a>
                </div>
            </li>
<?php $iterations++; endforeach ?>
    </ul>
</div>   

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
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/jquery.gridster_Width.css" media="screen" />
<script type="text/javascript">
    $(".gridster ul").gridster({
        widget_margins: [20, 20],
        widget_base_dimensions: [140, 140],
        avoid_overlapped_widgets: true,
        max_size_x: 10,
        max_size_y: 1,
    });

     $(".gridster ul").gridster().data('gridster').disable();
</script>


<div class="fillContainerM"></div>