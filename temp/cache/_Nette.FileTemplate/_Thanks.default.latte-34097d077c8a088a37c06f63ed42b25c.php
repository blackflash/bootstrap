<?php //netteCache[01]000406a:2:{s:4:"time";s:21:"0.57514100 1365294772";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:84:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Thanks\default.latte";i:2;i:1365181919;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Thanks\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'i1abka44bi')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbcec62d67c2_content')) { function _lbcec62d67c2_content($_l, $_args) { extract($_args)
?><script type="text/javascript">
        COUNTER_START = 30
        function tick () {
        if (document.getElementById ('counter').firstChild.data > 0) {
        document.getElementById ('counter').firstChild.data = document.getElementById ('counter').firstChild.data - 1
        setTimeout ('tick()', 1000)
        } else {
        document.getElementById ('counter').firstChild.data = 'There was a problem. Please click the Click Here link.'
        }
        }
        if (document.getElementById) onload = function () {
        var t = document.createTextNode (COUNTER_START)
        var p = document.createElement ('h3')
        p.appendChild (t)
        p.setAttribute ('id', 'counter')
        var body = document.getElementsByTagName ('h3')[0]
        var firstChild = body.getElementsByTagName ('*')[0]
        body.insertBefore (p, firstChild)
        tick()
        }
    </script>

    <div class="blankSeparator"></div>
    <center>
    <div class="container">
        
    <div class="span12">
        <h1>THANK YOU !</h1>            
    </div>
    

    <div id="content">

    <div id="filler">

    <div id="contentMiddle">

    <p>Processing payment. Please be patient this could take a few seconds.</p>

    <!--the time will appear between the h3 tags below-->
    <h3> </h3>

    <!--javascript below is set to send new premium member to member.php in 15 seconds-->
    <!--This gives PayPal time to update log and memberAdmin tables in database to premium member status-->
    <script type="text/javascript"> setTimeout("location.href = 'http://cleverfrogs.com/'", 15000); </script>

    <p>Once Pay Pal finishes processing your payment you will be redirected.</p>

    <p>If this page doesn't redirect in 30 seconds, please <a href="http://cleverfrogs.com/">click here</a> to continue.</p>

    <p>Once your transaction has been completed, a receipt from Pay Pal will be emailed to you.</p>

    <p>You may log in to your account at <a href="http://www.paypal.com" target="_blank">www.paypal.com</a> to view   details of this transaction.</p>

    </div>


    </div>
    </div>
</div>
</center>
<div class="fillContainerM"></div>



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
call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars())  ?>

