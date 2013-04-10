<?php //netteCache[01]000403a:2:{s:4:"time";s:21:"0.98696800 1365114264";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:81:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\tasks.latte";i:2;i:1362112432;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\tasks.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'xset72ozy2')
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

<!-- Chosen Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/chosen/chosen.jquery.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/chosen/chosen.css" media="screen" />

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/elastic/jquery.elastic.min.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.form.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.ui.js"></script>


<!-- Content Area -->     
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
          url: "?do=jsonAddUsersToProject",
          data: { projectId: id },
          dataType: "html",   //expect html to be returned
          success: function(msg){ 

              if(parseInt(msg)!=0)    //if no errors
              {
                var myObject = JSON.parse(msg);
                for(var k in myObject) {
                   console.log(myObject[k].user_id);
                   $('<option selected="selected">'+myObject[k].user_id+'</option>').appendTo('#listOfUsersOnProject option');
                   $('<option selected="selected">'+myObject[k].user_id+'</option>').appendTo('#test select');
                }

              }
          }
      });
    }

    function ajaxStart(id){

       ajaxPreview(id);
       return false;
    }

    function showProjectDialog(id){
        $(".project_ID").attr("value",id);
        $( "#da-ex-validate4" ).dialog({
            resizable: false,
            modal: true,
            width: 600,
            height: 300,
        });
    }

    function showGrowl(){
        $( "#da-ex-validate4" ).dialog("close");
        $("#da-ex-growl").trigger('click');
        return false;
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
    
    <div class="grid_2" style="margin-top: 20px;">
        <a href="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=generatePDF&data=<?php echo htmlSpecialChars($user->id) ?>" id="generatePDFlink" target="_blank" >
            <button id="generatePDF" class="da-button red">
                <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/pdf.png" />
                Generate PDF
            </button>
        </a>
        <button id="da-ex-growl" class="da-button pink" style="display: none;">Default Growl</button>
    </div>

    <div class="grid_2">
        <div class="da-panel collapsible collapsed" >
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="images/icons/black/16/pencil.png" alt="" />
                    Add Task
                </span>
            </div>
            <div class="da-panel-content">
                <form class="da-form" enctype="multipart/form-data" method="post" action="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=addTask">
                    <div class="da-form-row">
                        <label>Description</label>
                        <div class="da-form-item large">
                            <span class="formNote">todo stuff</span>
                            <textarea rows="auto" cols="auto" name="description"></textarea>
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
                        Projects list
                    </span>
                    
                </div>
                <div class="da-panel-content">
                    <table id="da-ex-datatable-numberpaging" class="da-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Done</th>
                                <th>Created</th>
                                <th>Description</th>
                                <th>Edit Options</th>
                            </tr>
                        </thead>
                        <tbody>
<?php $iterations = 0; foreach ($tasks as $task): ?>
                                <tr>
                                    <td><?php echo Nette\Templating\Helpers::escapeHtml($task->id, ENT_NOQUOTES) ?></td>
                                    <td>
                                        <center>
<?php if ($task->done == 1): ?>
                                                <a href="<?php echo htmlSpecialChars($basePath) ?>
/admin/?do=activateTask&taskId=<?php echo htmlSpecialChars($task->id) ?>&activate=1"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/accept.png" /></a>
<?php else: ?>
                                                <a href="<?php echo htmlSpecialChars($basePath) ?>
/admin/?do=activateTask&taskId=<?php echo htmlSpecialChars($task->id) ?>&activate=0"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/cross.png" /></a>
<?php endif ?>
                                        </center>
                                    </td>
                                    <td><?php echo Nette\Templating\Helpers::escapeHtml($task->created, ENT_NOQUOTES) ?></td>
                                    <td id="taskStatus_<?php echo htmlSpecialChars($task->id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($task->text, ENT_NOQUOTES) ?></td>
                                    <td class="da-icon-column">
                                        <a href="#" name="printtask">
                                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/pencil.png" />
                                        </a>
                                        <a href="<?php echo htmlSpecialChars($basePath) ?>
/admin/?do=deleteTask&taskId=<?php echo htmlSpecialChars($task->id) ?>">
                                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/trash.png" />
                                        </a>
                                    </td>
                                </tr>

                                <script type="text/javascript">
                                    $(function () {
                                        var Y,m,d,H,i,s;
                                        Y = <?php echo Nette\Templating\Helpers::escapeJs(date("Y",strtotime ($project->date_finish))) ?>;
                                        m = <?php echo Nette\Templating\Helpers::escapeJs(date("m",strtotime ($project->date_finish))) ?>;
                                        d = <?php echo Nette\Templating\Helpers::escapeJs(date("d",strtotime ($project->date_finish))) ?>;
                                        H = <?php echo Nette\Templating\Helpers::escapeJs(date("H",strtotime ($project->date_finish))) ?>;
                                        i = <?php echo Nette\Templating\Helpers::escapeJs(date("i",strtotime ($project->date_finish))) ?>;
                                        s = <?php echo Nette\Templating\Helpers::escapeJs(date("s",strtotime ($project->date_finish))) ?>;

                                        var austDay = new Date();
                                        austDay = new Date(Y, m - 1, d, H, i, s);
                                        //console.log(austDay);
                                        $('#defaultCountdown_'+<?php echo Nette\Templating\Helpers::escapeJs($project->id) ?>+" ").countdown( { until: austDay,compact: true } );

                                        if(
                                            $('#defaultCountdown_'+<?php echo Nette\Templating\Helpers::escapeJs($project->id) ?>
+" ").text() == "" && $('#projectStatus_'+<?php echo Nette\Templating\Helpers::escapeJs($project->id) ?>+" ").text() != "done" ||
                                            $('#defaultCountdown_'+<?php echo Nette\Templating\Helpers::escapeJs($project->id) ?>
+" ").text() == "00:00:00" && $('#projectStatus_'+<?php echo Nette\Templating\Helpers::escapeJs($project->id) ?>+" ").text() != "done"
                                            ){
                                            $("#defaultCountdown_"+<?php echo Nette\Templating\Helpers::escapeJs($project->id) ?>+" ").css("background-color","#ff8c8c");
                                        }

                                        if($('#defaultCountdown_'+<?php echo Nette\Templating\Helpers::escapeJs($project->id) ?>
+" ").text() == "00:00:00" && $('#projectStatus_'+<?php echo Nette\Templating\Helpers::escapeJs($project->id) ?>+" ").text() == "done"){
                                            $("#defaultCountdown_"+<?php echo Nette\Templating\Helpers::escapeJs($project->id) ?>+" ").css("background-color","#8cffaa");
                                            $('#projectStatus_'+<?php echo Nette\Templating\Helpers::escapeJs($project->id) ?>+" ").css("background-color","#8cffaa");
                                        }

                                    });
                                </script> 

<?php $iterations++; endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div><!--end of grid-->

        <div class="clear"></div>
        
        
                

    </div>
    
</div>

