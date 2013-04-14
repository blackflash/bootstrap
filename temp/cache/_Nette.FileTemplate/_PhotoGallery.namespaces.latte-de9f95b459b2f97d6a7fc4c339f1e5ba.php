<?php //netteCache[01]000415a:2:{s:4:"time";s:21:"0.41436100 1365845927";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:93:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\PhotoGallery\namespaces.latte";i:2;i:1361845106;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\PhotoGallery\namespaces.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ch1ef5opzs')
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
<!--[if lte IE 9]>
<p style="font-size: 20px; padding: 50px;">Sorry, this only works in modern browsers...</p>
<![endif]-->
<div class="cn-container">

<div class="cn-slide" id="slide-main">
    <nav>
<?php $iterations = 0; foreach ($namespaces_images as $namespace => $key): ?>
            <a class="window window1" href="#slide-<?php echo htmlSpecialChars($namespace) ?>"> 
                <div class="titlePG"><?php echo Nette\Templating\Helpers::escapeHtml($namespaces[$namespace], ENT_NOQUOTES) ?></div> 
                <img class="taller" src="<?php echo htmlSpecialChars($basePath) ?>
/uploads/gallery/<?php echo htmlSpecialChars($key) ?>" />
            </a>  
<?php $iterations++; endforeach ?>
    </nav>
</div>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($namespaces_images) as $namespace => $key): ?>
<div class="cn-slide cn-slide-sub" id="slide-<?php echo htmlSpecialChars($namespace) ?>">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($gallery_namespaces) as $gallery => $galleryKey): ?>

<?php if ($iterator->first): ?>
            <h2><?php echo Nette\Templating\Helpers::escapeHtml($namespaces[$namespace], ENT_NOQUOTES) ?></h2>
            <a href="#slide-main" class="cn-back">Back</a>
            <nav>
<?php endif ;if ($galleryKey->namespace_id == $namespace): ?>
            <a class="window window1" href="<?php echo htmlSpecialChars($_control->link("photoGallery:default", array('title' => "Gallery - photos",'page'=>"gallery", 'gallery_id' => $galleryKey->gallery_id, 'page'=>"gallery" ))) ?>
"> 
                <div class="titlePG"><?php echo Nette\Templating\Helpers::escapeHtml($galleryKey->title, ENT_NOQUOTES) ?></div> 
                <img class="taller" src="<?php echo htmlSpecialChars($basePath) ?>
/uploads/gallery/<?php echo htmlSpecialChars($galleries_images[$galleryKey->gallery_id]) ?>" />
            </a>
<?php endif ?>

<?php if ($iterator->last): ?>
            </nav>
<?php endif ;$iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
</div>
<?php $iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>

</div> 