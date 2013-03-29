<?php //netteCache[01]000406a:2:{s:4:"time";s:21:"0.56947200 1364541565";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:84:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Thanks\default.latte";i:2;i:1364541515;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Thanks\default.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'fuu0knpdol')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbefbe9f143a_content')) { function _lbefbe9f143a_content($_l, $_args) { extract($_args)
?><div id="breadCrumbsContainer">
            <div class="container">
                <p>You are here:
                    <a href="http://cleverfrogs.com">Home</a>
                    &nbsp; / &nbsp;
                    <strong>DONATION</strong>
                </p>
            </div><!--end of centerContainer-->
        </div><!--end of sliderContainer-->


        <div class="blankSeparator"></div>

        <div class="container">
            
        <div class="span12">
            <h1>THANK YOU !</h1>            
        </div>
        <script type="text/javascript">
            var myTime = 5000;
            function tick () {
            if (document.getElementById ('counter').firstChild.data > 0) {
            document.getElementById ('counter').firstChild.data = document.getElementById ('counter').firstChild.data - 1;
            setTimeout ('tick()', 1000)
            } else {
            document.getElementById ('counter').firstChild.data = 'There was a problem. Please click the Click Here link.'
            }
            }
            if (document.getElementById) onload = function () {
            var t = document.createTextNode (myTime)
            var p = document.createElement ('h3')
            p.appendChild (t)
            p.setAttribute ('id', 'counter')
            var body = document.getElementsByTagName ('h3')[0]
            var firstChild = body.getElementsByTagName ('*')[0]
            body.insertBefore (p, firstChild)
            tick()
            }

            

            var myTimeOut;
            
            function startCount(counter){
                console.log("started");
                document.getElementById ('counter').firstChild.data = 5;
                myTimeOut = setTimeout("END'", myTime);
            } 
            
            function addCount(){
                console.log("pause");
                console.log(myTime);
                document.getElementById ('counter').firstChild.data = 5;
                clearTimeout(myTimeOut);
                myTimeOut = setTimeout("END", myTime);
            }

            $('body').bind('tap', function () {
             addCount();
            });
        </script>

<div id="content">

<div id="filler">

<div id="contentMiddle">

<p>Processing payment. Please be patient this could take a few seconds.</p>

<!--the time will appear between the h3 tags below-->
<center><h3> </h3></center>

<!--javascript below is set to send new premium member to member.php in 15 seconds-->
<!--This gives PayPal time to update log and memberAdmin tables in database to premium member status-->
<script type="text/javascript"> 



</script>

<p>Once Pay Pal finishes processing your payment you will be redirected to a Premium Member page.</p>

<p>If this page doesn't redirect in 30 seconds, please <a href="#" class="addTime" onclick="startCount(5000)">START</a></p>

<p>Once your transaction has been completed, a receipt from Pay Pal will be emailed to you.</p>

<p>You may log in to your account at <a href="#" onclick="addCount()">PAUSE</a></p>

</div>


</div>
</div>
</div>


        <div class="fillContainerXXL"></div>

    </div>  
</div>

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