<?php //netteCache[01]000424a:2:{s:4:"time";s:21:"0.69078900 1362790559";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:101:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Homepage\component_compact_news.latte";i:2;i:1362790551;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Homepage\component_compact_news.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '4mm62lb32j')
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
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/component_compact_news/compact_news.css" type="text/css" media="screen" />
<script src="<?php echo htmlSpecialChars($basePath) ?>/js/component_compact_news/cufon.js" type="text/javascript"></script>
<script src="<?php echo htmlSpecialChars($basePath) ?>/js/component_compact_news/Bebas_400.font.js" type="text/javascript"></script>
<script type="text/javascript">
	Cufon('.cn_wrapper h1,h2', {});
</script>

<div class="cn_wrapper">
	<div id="cn_preview" class="cn_preview">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($news) as $new): ?>

<?php if ($new->is_active == 1): if ($iterator->first): ?>
					<div class="cn_content" style="top:5px;">
<?php else: ?>
					<div class="cn_content">
<?php endif ?>
						<img src="<?php echo htmlSpecialChars($basePath) ?>/uploads/news/<?php echo htmlSpecialChars($new->image) ?>" alt="" />
						<h1><?php echo Nette\Templating\Helpers::escapeHtml($new->title, ENT_NOQUOTES) ?></h1>
						<span class="cn_date"><?php echo date('F/j/Y',strtotime($new->date)) ?></span>
						<p><?php echo Nette\Templating\Helpers::escapeHtml($new->text, ENT_NOQUOTES) ?></p>
<?php if ($new->link != "#"): ?>
							<a href="<?php echo htmlSpecialChars($new->link) ?>" target="_blank" class="cn_more">Read more</a>
<?php endif ?>
					</div>
<?php endif ;$iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
		</div>
		<div id="cn_list" class="cn_list">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($news) as $new): if ($new->is_active == 1): if ($iterator->first): ?>
						<div class="cn_page" style="display:block;">
<?php endif ?>
							<div class="cn_item <?php if ($iterator->first): ?>selected<?php endif ?>">
								<h2><?php echo Nette\Templating\Helpers::escapeHtml($new->title, ENT_NOQUOTES) ?></h2>
								<p><?php echo Nette\Templating\Helpers::escapeHtml($new->text, ENT_NOQUOTES) ?></p>
							</div>
<?php if ($iterator->counter%4 == 0): ?>
						</div>
						<div class="cn_page">
<?php endif ;if ($iterator->last): ?>
						</div>
<?php endif ;endif ;$iterations++; endforeach; array_pop($_l->its); $iterator = end($_l->its) ?>
			<div class="cn_nav">
				<a id="cn_prev" class="cn_prev disabled"></a>
				<a id="cn_next" class="cn_next"></a>
			</div>
		</div>
	</div>
        

        <!-- The JavaScript -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/component_compact_news/jquery.easing.1.3.js"></script>
        <script type="text/javascript">
            $(function() {
                //caching
				//next and prev buttons
				var $cn_next	= $('#cn_next');
				var $cn_prev	= $('#cn_prev');
				//wrapper of the left items
				var $cn_list 	= $('#cn_list');
				var $pages		= $cn_list.find('.cn_page');
				//how many pages
				var cnt_pages	= $pages.length;
				//the default page is the first one
				var page		= 1;
				//list of news (left items)
				var $items 		= $cn_list.find('.cn_item');
				//the current item being viewed (right side)
				var $cn_preview = $('#cn_preview');
				//index of the item being viewed. 
				//the default is the first one
				var current		= 1;
				
				/*
				for each item we store its index relative to all the document.
				we bind a click event that slides up or down the current item
				and slides up or down the clicked one. 
				Moving up or down will depend if the clicked item is after or
				before the current one
				*/
				$items.each(function(i){
					var $item = $(this);
					$item.data('idx',i+1);
					
					$item.bind('click',function(){
						var $this 		= $(this);
						$cn_list.find('.selected').removeClass('selected');
						$this.addClass('selected');
						var idx			= $(this).data('idx');
						var $current 	= $cn_preview.find('.cn_content:nth-child('+current+')');
						var $next		= $cn_preview.find('.cn_content:nth-child('+idx+')');
						
						if(idx > current){
							$current.stop().animate({'top':'-300px'},600,'easeOutBack',function(){
								$(this).css({'top':'310px'});
							});
							$next.css({'top':'310px'}).stop().animate({'top':'5px'},600,'easeOutBack');
						}
						else if(idx < current){
							$current.stop().animate({'top':'310px'},600,'easeOutBack',function(){
								$(this).css({'top':'310px'});
							});
							$next.css({'top':'-300px'}).stop().animate({'top':'5px'},600,'easeOutBack');
						}
						current = idx;
					});
				});
				
				/*
				shows next page if exists:
				the next page fades in
				also checks if the button should get disabled
				*/
				$cn_next.bind('click',function(e){
					var $this = $(this);
					$cn_prev.removeClass('disabled');
					++page;
					if(page == cnt_pages)
						$this.addClass('disabled');
					if(page > cnt_pages){ 
						page = cnt_pages;
						return;
					}	
					$pages.hide();
					$cn_list.find('.cn_page:nth-child('+page+')').fadeIn();
					e.preventDefault();
				});
				/*
				shows previous page if exists:
				the previous page fades in
				also checks if the button should get disabled
				*/
				$cn_prev.bind('click',function(e){
					var $this = $(this);
					$cn_next.removeClass('disabled');
					--page;
					if(page == 1)
						$this.addClass('disabled');
					if(page < 1){ 
						page = 1;
						return;
					}
					$pages.hide();
					$cn_list.find('.cn_page:nth-child('+page+')').fadeIn();
					e.preventDefault();
				});
				
            });
        </script>