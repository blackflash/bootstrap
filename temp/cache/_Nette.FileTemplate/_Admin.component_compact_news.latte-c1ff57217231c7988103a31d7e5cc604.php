<?php //netteCache[01]000420a:2:{s:4:"time";s:21:"0.77266000 1362826003";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:98:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\component_compact_news.latte";i:2;i:1362826002;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\component_compact_news.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'rhdouagtxh')
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

    function deleteConfirm(location_id) {
        $( "#DeleteDialog" ).dialog({
            resizable: false,
            modal: true,
            width: 200,
        });
        window.globalVar = location_id; 
    }

    /*---------start of delete PS -------*/

    function deletePSStart()
    {   
        ajaxDeletePS(window.globalVar);
        return false;
    }

    function ajaxDeletePS(id){
       $.ajax({    //create an ajax request to load_page.php
          type: "POST",
          url: "?do=jsonDeletePS",
          data: { ps_id: id },
          dataType: "html",   //expect html to be returned
          success: function(msg){ 

              if(parseInt(msg)!=0)    //if no errors
              {
                $( "#DeleteDialog" ).dialog( "close" );
                $("#campaign_ps_id_"+id).remove();
              }
          }
      });
    }

    /*---------end of delete location ----------*/

    /*--------------- reupload image -----------*/

    function reuploadImage(ps_id, category_id) {
        $("#reupload_image_panel").dialog({
            resizable: false,
            modal: true,
            hide: 'slow',
            show: 'slow',
            width: 400
        });

        $(".reupload_ps_id").attr("value",ps_id);
        $(".reupload_category_id").attr("value",category_id);
    }

    /*-------- end of reupload image ---------*/


    function showGrowl(){
        $( "#da-ex-validate4" ).dialog("close");
        $("#da-ex-growl").trigger('click');
        return false;
    }


    /*---------------- UPDATE PRODUCT or SERVICE ---------------*/

    function editLocation(ps_id){

        var title       = $(".campaign_title_"+ps_id).html();
        var description = $(".campaign_description_"+ps_id).html();
        var category_id = $(".campaign_category_id_"+ps_id).attr("name");

        //console.log(category_id);

        $('.editPSId').attr("name",ps_id);
        $('.editPSTitle').attr("value",title);
        $('.editPSDescription').val(description);


        $('#editPSCategory option[value="'+category_id+'"]').attr('selected', 'selected');
        $('#editPSCategory').chosen().change();
        $('#editPSCategory').trigger('liszt:updated');
        

        $("#da-ex-dialog-form-div").dialog("option",{
            resizable: false,
            modal: true,
            hide: 'slow',
            show: 'slow',
            width: 400,
        }).dialog("open")
    
    }

    // on submit editPhoto Dialog -> start update
    $(document).on("submit", ".psUpdateForm", function(event){
            
        var ps_id       =  $('.editPSId').attr("name");
        var title       =  $('.editPSTitle').attr("value");
        var description =  $('.editPSDescription').val();
        var category_id =  $('#editPSCategory').attr("value");
        var image       =  $('#ps_image');

        //console.log(ps_id + " " + title + " " + description + " " + category_id);

        ajaxStartUpdatePS(ps_id, title, description, category_id);
        return false;
    });

    function ajaxStartUpdatePS(ps_id, title, description, category_id){
       ajaxUpdateLocation(ps_id, title, description, category_id);
       return false;
    }

    function ajaxUpdateLocation(ps_id, title, description, category_id){
        
        $.ajax({    //create an ajax request to load_page.php
          type: "POST",
          url: "?do=jsonUpdatePS",
          data: { ps_id: ps_id, title: title, description: description, category_id: category_id },
          dataType: "html",   //expect html to be returned
          success: function(msg){ 

              if(parseInt(msg)!=0)    //if no errors
              {
                var myObject = JSON.parse(msg);
                myObject["ps_id"];
                var city_title = $(".hidden_category_"+myObject["category_id"]).attr("name");

                $(".campaign_category_id_"+myObject["ps_id"]).html(city_title);
                $(".campaign_category_id_"+myObject["ps_id"]).attr("name",city_title);


                $(".campaign_title_"+myObject["ps_id"]).html(myObject["title"]);
                
                $(".campaign_description_"+myObject["ps_id"]).html(myObject["description"]);
              }

              $("#da-ex-dialog-form-div").dialog("close");
          }
      });
    }

</script>

    <!-- DELETE DIALOG -->
    <div id="DeleteDialog" title="Delete confirmation" style="display: none">
        <div id="grid_2">
            <center><h3>Are you sure ?</h3>
                <div class="clearfix"></div>
                <input type="button" class="da-button red large"  id="deleteButton" value="Delete" onclick="JavaScript:deletePSStart()" />
                <input type="button" class="da-button gray large" id="cancelButton" value="Cancel" onclick='JavaScript:$( "#DeleteDialog" ).dialog( "close" );' /> 
            </center>
        </div>
    </div>

    <!-- UPDATE IMAGE DIALOG -->
    <div id="reupload_image_panel" class="no-padding" title="Reupload Photo" style="display:none">
        <div class="da-panel-content">
            <form id="da-ex-dialog-form-val" class="da-form" enctype="multipart/form-data" method="post" action="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=reuploadImage">
                <div class="da-form-row">
                    <label>Reupload image</label>
                    <div class="da-form-item large">
                        <span class="formNote">JPG, JPEG, PNG, GIF only</span>
                        <input type="file" name="image" class="reupload_image" />
                    </div>
                </div>

                <input type="hidden" class="reupload_ps_id" name="ps_id" value="" />
                <input type="hidden" class="reupload_category_id" name="category_id" value="" />

                <div class="da-button-row">
                    <input type="button" class="da-button gray left" id="cancelButton" value="Close" onclick='JavaScript:$( "#reupload_image_panel" ).dialog( "close" );' /> 
                    <input class="da-button green large" type="submit" value="Submit" />
                </div>
            </form>
        </div>
    </div>

    <!-- UPDATE LOCATION DIALOG -->
    <div id="da-ex-dialog-form-div" class="no-padding" title="Edit Photo">
        <div class="da-panel-content">
            <form id="da-ex-dialog-form-val" class="da-form psUpdateForm">
                <div id="da-validate-error" class="da-message error" style="display:none;"></div>

                <div class="editPSId" name=""></div>

                <fieldset class="da-form-inline">
                    <legend>Title</legend>
                    <div class="da-form-row">
                        <input type="text" name="reqField" class="editPSTitle" />
                    </div>
                </fieldset>

                <fieldset class="da-form-inline">
                    <legend>Description</legend>
                    <div class="da-form-row">
                        <textarea rows="auto" cols="auto" class="editPSDescription" name="reqField"></textarea>
                    </div>
                </fieldset>

            </form>
        </div>
    </div>


    <!-- end of Non displayed panels -->


    <!--ADD PRODUCT OR SERVICE -->
    <div class="grid_2">
        <div class="da-panel collapsible collapsed" >
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="images/icons/black/16/pencil.png" alt="" />
                    Add News
                </span>
            </div>
            <div class="da-panel-content">
                <form id="da-ex-validate6" class="da-form" enctype="multipart/form-data" method="post" action="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=addPS">
                    
                    <div class="da-form-row">
                        <label>Image<span class="required">*</span></label>
                        <div class="da-form-item large">
                            <span class="formNote">Picture of product or service</span>
                            <input type="file" name="image" class="da-custom-file" />
                            <label for="image" class="error" generated="true" style="display:none;"></label>
                        </div>
                    </div>

                    <div class="da-form-row">
                        <label>Title<span class="required">*</label>
                        <div class="da-form-item large">
                            <input type="text" name="title" autocomplete="off" />
                            <label for="title" class="error" generated="true" style="display:none;"></label>
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label>Text<span class="required">*</label>
                        <div class="da-form-item large">
                            <input type="text" name="description" autocomplete="off" />
                            <label for="description" class="error" generated="true" style="display:none;"></label>
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
                    News list
                </span>
                
            </div>
            <div class="da-panel-content">
                <table id="da-ex-datatable-numberpaging" class="da-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Active</th>
                            <th>Title</th>
                            <th>Text</th>
                            <th>Image</th>
                            <th>Edit Options</th>
                        </tr>
                    </thead>
                    <tbody>
<?php $iterations = 0; foreach ($news as $new): ?>
                            <tr id="campaign_ps_id_<?php echo htmlSpecialChars($campaign->ps_id) ?>">
                                <td><?php echo Nette\Templating\Helpers::escapeHtml($new->id, ENT_NOQUOTES) ?></td>
                                <td>
                                    <center>
<?php if ($new->is_active == 1): ?>
                                            <a href="<?php echo htmlSpecialChars($basePath) ?>
/admin/?do=activateByTable&table=component_compact_news&column=is_active&activate=1"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/accept.png" /></a>
<?php else: ?>
                                            <a href="<?php echo htmlSpecialChars($basePath) ?>
/admin/?do=activateByTable&table=component_compact_news&column=is_active&activate=0"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/cross.png" /></a>
<?php endif ?>
                                    </center>
                                </td>
                                <td class="campaign_title_<?php echo htmlSpecialChars($campaign->ps_id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($new->title, ENT_NOQUOTES) ?></td>
                                <td class="campaign_description_<?php echo htmlSpecialChars($campaign->ps_id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($new->text, ENT_NOQUOTES) ?></td>
                                <td class="campaign_image">
                                    <img src="<?php echo htmlSpecialChars($basePath) ?>
/www/uploads/news/<?php echo htmlSpecialChars($new->image) ?>" />
                                </td>
                                <td class="da-icon-column">
                                    <a href="#da-ex-dialog-form-div" onclick="JavaScript:editLocation(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($campaign->ps_id)) ?>)">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/pencil.png" />
                                    </a>
                                    <a href="#reupload_image_panel" onclick="JavaScript:reuploadImage(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($campaign->ps_id)) ?>
,<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($campaign->category_id)) ?>)">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/image.png" />
                                    </a>
                                    <a href="#" onclick="JavaScript:deleteConfirm(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($campaign->ps_id)) ?>)">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/trash.png" />
                                    </a>
                                </td>
                            </tr>
<?php $iterations++; endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!--end of grid-->


             
    </div>
</div>