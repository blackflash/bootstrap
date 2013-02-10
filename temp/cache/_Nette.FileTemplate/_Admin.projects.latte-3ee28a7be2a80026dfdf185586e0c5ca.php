<?php //netteCache[01]000406a:2:{s:4:"time";s:21:"0.84924400 1359921557";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:84:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\projects.latte";i:2;i:1359482600;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\projects.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '5i6t3a9ugu')
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
        
    <div id="da-ex-validate4" title="Add Users to project" style="display: none">
        <div class="da-form">
            <fieldset class="da-form-inline">
                <legend>Account Info</legend>
                <div class="da-form-row">
                    <label>Users on project:</label>
                    <div class="da-form-item large" id="listOfUsersOnProject">
                        <span class="formNote">Choose users</span>
                        <select size="5" multiple="multiple" style="width: 400px;" class="chzn-select"> 
<?php $iterations = 0; foreach ($users as $user): ?>
                                <option name="user_<?php echo htmlSpecialChars($user->id) ?>
" value="<?php echo htmlSpecialChars($user->id) ?>">
                                    <?php echo Nette\Templating\Helpers::escapeHtml($user->name, ENT_NOQUOTES) ?>

                                </option>
<?php $iterations++; endforeach ?>
                        </select>
                    </div>
                </div>
                <div style="height: 50px; width: 100%;"></div>
            <input type="hidden" value="" class="project_ID" name="project_ID" />
            <div class="da-button-row" style="width: 92%">
                <button id="submitProject" class="da-button blue"  onclick="JavaScript:showGrowl()">Submit</button>
            </div>
            </fieldset>
        </div>
    </div>

        <div class="grid_2" style="margin-bottom: 20px;">
            <a href="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=generatePDF&data=<?php echo htmlSpecialChars($user->id) ?>" id="generatePDFlink" target="_blank" >
                <button id="generatePDF" class="da-button red">
                    <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/pdf.png" />
                    Generate PDF
                </button>
            </a>

            <button id="da-ex-growl" class="da-button pink" style="display: none;">Default Growl</button>

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
                                <th>Project name</th>
                                <th>Estimated time</th>
                                <th>State</th>
                                <th>Description</th>
                                <th>Edit Options</th>
                            </tr>
                        </thead>
                        <tbody>
<?php $iterations = 0; foreach ($projects as $project): ?>
                                <tr>
                                    <td><?php echo Nette\Templating\Helpers::escapeHtml($project->id, ENT_NOQUOTES) ?></td>
                                    <td><?php echo Nette\Templating\Helpers::escapeHtml($project->name, ENT_NOQUOTES) ?></td>
                                    <td id="defaultCountdown_<?php echo htmlSpecialChars($project->id) ?>"></td>
                                    <td id="projectStatus_<?php echo htmlSpecialChars($project->id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($project->status, ENT_NOQUOTES) ?></td>
                                    <td><?php echo Nette\Templating\Helpers::escapeHtml($project->description, ENT_NOQUOTES) ?></td>
                                    <td class="da-icon-column">
                                        <a href="#" class="<?php echo htmlSpecialChars($project->id) ?>
" id="previewLink_<?php echo htmlSpecialChars($project->id) ?>" 
                                            onclick="JavaScript:showProjectDialog(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($project->id)) ?>)">
                                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/user_add.png" />
                                        </a>
                                        
                                        <a href="#"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/pencil.png" /></a>
                                        
                                        <a href="#" onclick="JavaScript:deleteConfirm(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($project->id)) ?>)" name="">
                                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/cross.png" />
                                        </a>

                                        <a href="#" name="printProject">
                                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/pdf.png" />
                                        </a>
                                        
                                        <a href="<?php echo htmlSpecialChars($basePath) ?>
/admin/?do=deleteProject&projectId=<?php echo htmlSpecialChars($project->id) ?>" id="deleteLink_<?php echo htmlSpecialChars($project->id) ?>" style="display: none"></a>
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
                        
                        <div class="grid_2">
                            <div class="da-panel">
                                <div class="da-panel-header">
                                    <span class="da-panel-title">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/wand.png" alt="" />
                                        Wizard Form - Create project
                                    </span>
                                    
                                </div>
                                <div class="da-panel-content">
                                    <form id="da-ex-wizard-form" class="da-form" method="post" action="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=createProject">
                                        <fieldset class="da-form-inline">
                                            <legend>Basic info</legend>
                                            <div class="da-form-row">
                                                <label>Name <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <input type="text" name="name" class="required" />
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>Status <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <input type="text" name="status" class="required" />
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>Owner <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <input type="text" name="owner" class="required" />
                                                </div>
                                            </div>
                                        </fieldset>
                                        <fieldset class="da-form-inline">
                                            <legend>Deadlines</legend>
                                            <div class="da-form-row">
                                                <label>Start date project <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <input id="da-ex-datetimepicker" name="date_start" type="text" />
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>Start finish project <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <input id="da-ex-datetimepicker2" name="date_finish" type="text" />
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>Description <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <textarea name="description" class="required"></textarea>
                                                </div>
                                            </div>
                                            
                                        </fieldset>
                                        <fieldset class="da-form-inline">
                                            <legend>Repository info</legend>
                                            <div class="da-form-row">
                                                <label>Repository link <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <input type="text" name="repository_link" class="required" />
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>Repository login <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <input type="text" name="repository_login" class="required" />
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>Repository pass <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <input type="text" name="repository_pass" class="required" />
                                                </div>
                                            </div>
                                            
                                        </fieldset>
                                        <fieldset class="da-form-inline">
                                            <legend>Confirmation</legend>
                                            <div class="da-form-row">
                                                <div class="da-form-item">
                                                <span id="da-ex-slider-range-fixed-info" class="priority left">Priority: <span class="da-highlight" name="priority">1</span></span>
                                                <input type="hidden" value="1" class="priority" name="priority" />
                                                <div id="da-ex-slider-range-fixed"></div>
                                            </div>
                                            </div>
                                            <div class="da-form-row">
                                                <div class="da-form-item large">
                                                    <ul class="da-form-list inline">
                                                        <li><input type="checkbox" name="tos" class="required" /> <label>I agree to the terms of service <span class="required">*</span></label></li>
                                                    </ul>
                                                    <label for="priority" class="error" generated="true" style="display:none"></label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div><!--end of wizard-->

                        <script type="text/javascript">
                            $("#da-ex-wizard-form").submit(function(){
                                $(".priority").attr( "value", $(".da-highlight").text() )
                            })

                        </script>
                

    </div>
    
</div>

