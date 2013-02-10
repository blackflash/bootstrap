<?php //netteCache[01]000401a:2:{s:4:"time";s:21:"0.58541600 1348936318";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:79:"C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Task\default.latte";i:2;i:1348936296;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"f8aa369 released on 2012-08-30";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\_nette\app\templates\Task\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'kcayrkl339')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lba7f17dde86_content')) { function _lba7f17dde86_content($_l, $_args) { extract($_args)
;call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>

<table>
    <thead>
    <tr>
        <th>Čas vytvoření</th>
        <th>Úkol</th>
        <th>Přiřazeno</th>
    </tr>
    </thead>
    <tbody>
<?php $iterations = 0; foreach ($tasks as $task): ?>
    <tr>
        <td><?php echo Nette\Templating\Helpers::escapeHtml($template->date($task->created, 'j. n. Y'), ENT_NOQUOTES) ?></td>
        <td><?php echo Nette\Templating\Helpers::escapeHtml($task->text, ENT_NOQUOTES) ?></td>
        <td><?php echo Nette\Templating\Helpers::escapeHtml($task->user->name, ENT_NOQUOTES) ?></td>
    </tr>
<?php $iterations++; endforeach ?>
    </tbody>
</table>

<?php
}}

//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lba08ea52313_title')) { function _lba08ea52313_title($_l, $_args) { extract($_args)
?><h1><?php echo Nette\Templating\Helpers::escapeHtml($list->title, ENT_NOQUOTES) ?></h1>
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