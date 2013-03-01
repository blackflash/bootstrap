<?php //netteCache[01]000403a:2:{s:4:"time";s:21:"0.27572200 1362106051";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:81:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\users.latte";i:2;i:1359482600;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\users.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'izmo1p2cur')
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
        <button id="da-ex-dialog" class="da-button green">
            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/user_business.png" />
            Add user
        </button>

        <a href="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=generatePDFusersList&data=<?php echo htmlSpecialChars($user->id) ?>" id="generatePDFlink" target="_blank" >
            <button id="generatePDF" class="da-button red">
                <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/pdf.png" />
                Generate PDF
            </button>
        </a>
    </div>

    <script type="text/javascript">

    function deleteConfirm(id) {
        $( "#DeleteDialog" ).dialog({
            resizable: false,
            modal: true,
            width: 200,
        });
        window.globalVar = id; 
    }

    function deleteUser()
    {   
        window.location = $("#deleteLink_"+window.globalVar).attr('href');
    }


    function ajaxPreview(id){
        
        $.ajax({    //create an ajax request to load_page.php
          type: "POST",
          url: "?do=jsonPreview",
          data: { userId: id },
          dataType: "html",   //expect html to be returned
          success: function(msg){ 

              if(parseInt(msg)!=0)    //if no errors
              {
                var myObject = JSON.parse(msg);
                //alert(myObject["success"]);
              }
          }
      });
    }

    function ajaxStart(id){
       ajaxPreview(id);
       return false;
    }

    function closeUser(){
        $( "#da-ex-validate4" ).dialog("close");
        $("#da-ex-growl").trigger('click');
        return false;
    }

    function showUser(id){

        $("#ajax-spinner").show();

        $( "#userInfo" ).dialog({
            resizable: false,
            modal: true,
            hide: 'slow',
            show: 'slow',
            width: 600,
            height: 550,
        });
    }

</script>



    <div id="DeleteDialog" title="Delete user" style="display: none">
        <div id="grid_2">
            <center><h3>Are you sure ?</h3>
                <div class="clearfix"></div>
                <input type="button" class="da-button red large"  id="deleteButton" value="Delete" onclick="JavaScript:deleteUser()" />
                <input type="button" class="da-button gray large" id="cancelButton" value="Cancel" onclick='JavaScript:$( "#DeleteDialog" ).dialog( "close" );' /> 
            </center>
        </div>
    </div>


    <div id="da-ex-dialog-div" style="display:none;" title="Add User">
       
        <form id="da-ex-validate4" class="da-form" style="padding-top:23px;" method="post" action="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=registerForm">
            <fieldset class="da-form-inline">
                <legend>Account Info</legend>
                <div class="da-form-row">
                    <label>Name<span class="required">*</span></label>
                    <div class="da-form-item large">
                        <input type="text" name="name" autocomplete="OFF" />
                    </div>
                </div>
                <div class="da-form-row">
                    <label>Login/Username<span class="required">*</span></label>
                    <div class="da-form-item large">
                        <input type="text" name="username" autocomplete="OFF" />
                    </div>
                </div>
                <div class="da-form-row">
                    <label>Email <span class="required">*</span></label>
                    <div class="da-form-item large">
                        <input type="text" name="email" />
                    </div>
                </div>
                <div class="da-form-row">
                    <label>Password</label>
                    <div class="da-form-item large">
                        <input id="pass2" type="text" name="pass2" />
                    </div>
                </div>
                <div class="da-form-row">
                    <label>Confirm Password <span class="required">*</span></label>
                    <div class="da-form-item large">
                        <input type="text" name="cpass2" />
                    </div>
                </div>
            </fieldset>
            <fieldset class="da-form-inline">
                <legend>Alternative info</legend>
                <div class="da-form-row">
                    <label>Description/Info:</label>
                    <div class="da-form-item large">
                        <textarea name="description"></textarea>
                    </div>
                </div>
            </fieldset>
            <div class="da-button-row">
                <input type="reset" value="Reset" class="da-button gray left" />
                <input type="submit" value="Register" class="da-button blue" />
            </div>
        </form>
    </div>
    
    <div id="userInfo" style="display: none;" title="User Info">
        
            <div class="da-panel collapsible">
                <div class="da-panel-header">
                    <span class="da-panel-title">
                        <img src="images/icons/color/blog.png" alt="" />
                        Detail View Table
                    </span>
                    
                </div>
                <div class="da-panel-toolbar top">
                    <ul>
                        <li><a href="#"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/pencil.png" alt="" />Update</a></li>
                        <li><a href="#"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/cross.png" alt="" />Delete</a></li>
                        <li><a href="#"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/arrow_redo.png" alt="" />Renew</a></li>
                        <li><a href="#"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/cog.png" alt="" />Project edit</a></li>
                    </ul>
                </div>      
                <div class="da-panel-content">
                    <table class="da-table da-detail-view">
                        <tbody>
                            <tr>
                                <th>Username</th>
                                <td>admin</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>Andrej Gaspar</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>andrej.gaspar@student.tuke.sk</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>spravca webu</td>
                            </tr>
                            <tr>
                                <th>Project name</th>
                                <td class="null">Projekt A</td>
                            </tr>
                            <tr>
                                <th>Project status</th>
                                <td>open</td>
                            </tr>
                            <tr>
                                <th>Commits</th>
                                <td>3</td>
                            </tr>
                            <tr>
                                <th>In team with:</th>
                                <td>Peter Kolumbus</td>
                            </tr>
                            <tr>
                                <th>Last Update</th>
                                <td>05 April 2012, 14:28:50</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        
    </div>
    
	<div id="da-content-area">
        <div class="grid_4">
            <div class="da-panel collapsible">
                <div class="da-panel-header">
                    <span class="da-panel-title">
                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/black/16/list.png" alt="" />
                        Users list
                    </span>
                    
                </div>
                <div class="da-panel-content">
                    <table id="da-ex-datatable-numberpaging" class="da-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Edit Options</th>
                            </tr>
                        </thead>
                        <tbody>
<?php $iterations = 0; foreach ($users as $user): ?>
                                <tr>
                                    <td><?php echo Nette\Templating\Helpers::escapeHtml($user->id, ENT_NOQUOTES) ?></td>
                                    <td><?php echo Nette\Templating\Helpers::escapeHtml($user->username, ENT_NOQUOTES) ?></td>
                                    <td><?php echo Nette\Templating\Helpers::escapeHtml($user->name, ENT_NOQUOTES) ?></td>
                                    <td><?php echo Nette\Templating\Helpers::escapeHtml($user->email, ENT_NOQUOTES) ?></td>
                                    <td class="da-icon-column">
                                        <a href="#" class="<?php echo htmlSpecialChars($user->id) ?>
" id="previewLink_<?php echo htmlSpecialChars($user->id) ?>" 
                                            onclick="JavaScript:showUser()">
                                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/magnifier.png" />
                                        </a>
                                        
                                        <a href="#"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/pencil.png" /></a>
                                        
                                        <a href="#" onclick="JavaScript:deleteConfirm(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($user->id)) ?>)" name="">
                                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/cross.png" 
                                            onclick="JavaScript:ajaxPreview(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($user->id)) ?>)"
                                            />
                                        </a>
                                        
                                        <a href="<?php echo htmlSpecialChars($basePath) ?>
/admin/?do=deleteUser&userId=<?php echo htmlSpecialChars($user->id) ?>" id="deleteLink_<?php echo htmlSpecialChars($user->id) ?>" style="display: none"></a>
                                    </td>
                                </tr>
<?php $iterations++; endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        

    </div>
    
</div>

