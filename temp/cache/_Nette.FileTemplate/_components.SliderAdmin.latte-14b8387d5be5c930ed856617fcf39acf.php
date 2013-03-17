<?php //netteCache[01]000404a:2:{s:4:"time";s:21:"0.41786200 1362966852";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:82:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\components\SliderAdmin.latte";i:2;i:1362966655;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\components\SliderAdmin.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'j56ejeohed')
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

    function deleteConfirm(id,image) {
        $( "#DeleteDialog" ).dialog({
            resizable: false,
            modal: true,
            width: 200,
        });
        window.globalVar = id; 
        window.image = image; 
    }

    /*---------start of delete PS -------*/

    function deleteStart()
    {   
        ajaxDelete(window.globalVar,window.image);
        return false;
    }

    //  http://localhost/bootstrap/admin/?sliderAdmin-id=1&sliderAdmin-value=1&title=CleverFrogs+-+Slider&page=component_compact_Slider
    //  &do=sliderAdmin-activate
    function ajaxDelete(id,image){
       $.ajax({    //create an ajax request to load_page.php
          type: "POST",
          url: "?sliderAdmin-id="+id+"&do=sliderAdmin-jsonDelete",
          data: { image: image },
          dataType: "html",   //expect html to be returned
          success: function(msg){ 
                if(parseInt(msg)!=0)    //if no errors
                {
                    $( "#DeleteDialog" ).dialog( "close" );
                    $("#new_id_"+id).remove();
                }
          }
      });
    }

    /*---------end of delete location ----------*/

    /*--------------- reupload image -----------*/

    function reuploadImage(id) {
        $("#reupload_image_panel").dialog({
            resizable: false,
            modal: true,
            hide: 'slow',
            show: 'slow',
            width: 400
        });

        $(".id").attr("value",id);
    }

    /*-------- end of reupload image ---------*/


    function showGrowl(){
        $( "#da-ex-validate4" ).dialog("close");
        $("#da-ex-growl").trigger('click');
        return false;
    }


    /*---------------- UPDATE ---------------*/

    function edit(id){

        var title     = $(".new_title_"+id).html();
        var text      = $(".new_text_"+id).html();
        var paragraph = $(".new_paragraph_"+id).html();
        var link      = $(".new_link_"+id).attr("href");

        //console.log(link);

        $('.editId').attr("name",id);
        $('.editTitle').attr("value",title);
        $('.editText').val(text);
        $('.editParagraph').val(paragraph);
        $('.editLink').attr("value",link);

        $("#da-ex-dialog-form-div").dialog("option",{
            resizable: false,
            modal: true,
            hide: 'slow',
            show: 'slow',
            width: 400,
        }).dialog("open")
    }

    // on submit editPhoto Dialog -> start update
    $(document).on("submit", ".UpdateForm", function(event){
            
        var id        =  $('.editId').attr("name");
        var title     =  $('.editTitle').attr("value");
        var text      =  $('.editText').val();
        var paragraph =  $('.editParagraph').val();
        var link      =  $('.editLink').attr("value");

        //console.log(id + " " + title + " " + text  + " " + paragraph);

        ajaxStartUpdate(id, title, text, paragraph, link);
        return false;
    });

    function ajaxStartUpdate(id, title, text, paragraph, link){
       ajaxUpdate(id, title, text, paragraph, link);
       return false;
    }

    function ajaxUpdate(id, title, text, paragraph, link){
        
        $.ajax({    //create an ajax request to load_page.php
          type: "POST",
          url: "?do=sliderAdmin-jsonUpdate",
          data: { id: id, title: title, text: text, paragraph: paragraph, link: link },
          dataType: "html",   //expect html to be returned
          success: function(msg){ 

              if(parseInt(msg)!=0)    //if no errors
              {
                var myObject = JSON.parse(msg);
                $(".new_title_"+myObject["id"]).html(myObject["title"]);
                $(".new_text_"+myObject["id"]).html(myObject["text"]);
                $(".new_paragraph_"+myObject["id"]).html(myObject["paragraph"]);
                $(".new_link_"+myObject["id"]).attr("name",myObject["link"]);
                $(".new_link_"+myObject["id"]).attr("href",myObject["link"]);
              }

              $("#da-ex-dialog-form-div").dialog("close");
          }
      });
    }

</script>
    
    <!-- START OF HIDDEN PANELS -->

    <!-- DELETE -->
    <div id="DeleteDialog" title="Delete confirmation" style="display: none">
        <div id="grid_2">
            <center><h3>Are you sure ?</h3>
                <div class="clearfix"></div>
                <input type="button" class="da-button red large"  id="deleteButton" value="Delete" onclick="JavaScript:deleteStart()" />
                <input type="button" class="da-button gray large" id="cancelButton" value="Cancel" onclick='JavaScript:$( "#DeleteDialog" ).dialog( "close" );' /> 
            </center>
        </div>
    </div>
    <!-- UPDATE IMAGE  -->
    <div id="reupload_image_panel" class="no-padding" title="Reupload Photo" style="display:none">
        <div class="da-panel-content">
            <form id="da-ex-dialog-form-val" class="da-form" enctype="multipart/form-data" method="post" action="?do=sliderAdmin-jsonUpdateImage">
                <div class="da-form-row">
                    <label>Reupload image</label>
                    <div class="da-form-item large">
                        <span class="formNote">JPG, JPEG, PNG, GIF only</span>
                        <input type="file" name="image" class="reupload_image" />
                    </div>
                </div>

                <input type="hidden" class="id" name="id" value="" />

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
            <form id="da-ex-dialog-form-val" class="da-form UpdateForm">
                <div id="da-validate-error" class="da-message error" style="display:none;"></div>

                <div class="editId" name=""></div>

                <fieldset class="da-form-inline">
                    <legend>Title</legend>
                    <div class="da-form-row">
                        <input type="text" name="reqField" class="editTitle" />
                    </div>
                </fieldset>

                <fieldset class="da-form-inline">
                    <legend>Text</legend>
                    <div class="da-form-row">
                        <textarea rows="auto" cols="auto" class="editText" name="reqField"></textarea>
                    </div>
                </fieldset>

                <fieldset class="da-form-inline">
                    <legend>Paragraph</legend>
                    <div class="da-form-row">
                        <textarea rows="auto" cols="auto" class="editParagraph" name="reqField"></textarea>
                    </div>
                </fieldset>

                <fieldset class="da-form-inline">
                    <legend>Link</legend>
                    <div class="da-form-row">
                        <input type="text" name="reqField" class="editLink" />
                    </div>
                </fieldset>

            </form>
        </div>
    </div>
    <!-- end of Non displayed panels -->


    <!--ADD-->
    <div class="grid_2">
        <div class="da-panel collapsible collapsed" >
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="images/icons/black/16/pencil.png" alt="" />
                    Add Slider
                </span>
            </div>
            <div class="da-panel-content">
                <form id="da-ex-validate6" class="da-form" enctype="multipart/form-data" method="post" action="?do=sliderAdmin-AddSlider">
                    
                    <div class="da-form-row">
                        <label>Image<span class="required">*</span></label>
                        <div class="da-form-item large">
                            <span class="formNote">Picture of product or service</span>
                            <input type="file" name="image" class="da-custom-file" />
                            <span for="image" class="error" generated="true" style="display:none;"></span>
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
                        <label>Text</label>
                        <div class="da-form-item large">
                            <textarea cols="auto" rows="auto" name="text"></textarea>
                        </div>
                    </div>

                    <div class="da-form-row">
                        <label>Paragraph</label>
                        <div class="da-form-item large">
                            <textarea cols="auto" rows="auto" name="paragraph"></textarea>
                        </div>
                    </div>

                    <div class="da-form-row">
                        <label>Link</label>
                        <div class="da-form-item large">
                            <input type="text" name="link" autocomplete="off" />
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
                    Slider list
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
                            <th>Paragraph</th>
                            <th>Image</th>
                            <th>Link</th>
                            <th>Edit Options</th>
                        </tr>
                    </thead>
                    <tbody>
<?php $iterations = 0; foreach ($slider as $slide): ?>
                            <tr id="new_id_<?php echo htmlSpecialChars($slide->id) ?>">
                                <td><?php echo Nette\Templating\Helpers::escapeHtml($slide->id, ENT_NOQUOTES) ?></td>
                                <td>
                                    <center>
<?php if ($slide->is_active == 1): ?>
                                            <a href="<?php echo htmlSpecialChars($_control->link("activate!", array($slide->id, $slide->is_active))) ?>
"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/accept.png" /></a>
<?php else: ?>
                                            <a href="<?php echo htmlSpecialChars($_control->link("activate!", array($slide->id, $slide->is_active))) ?>
"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/cross.png" /></a>
<?php endif ?>
                                    </center>
                                </td>
                                <td class="new_title_<?php echo htmlSpecialChars($slide->id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($slide->title, ENT_NOQUOTES) ?></td>
                                <td class="new_text_<?php echo htmlSpecialChars($slide->id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($slide->text, ENT_NOQUOTES) ?></td>
                                <td class="new_paragraph_<?php echo htmlSpecialChars($slide->id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($slide->paragraph, ENT_NOQUOTES) ?></td>
                                <td class="new_image">
                                    <img src="<?php echo htmlSpecialChars($basePath) ?>
/www/uploads/slider/<?php echo htmlSpecialChars($slide->image) ?>" />
                                </td>
                                <td><a class="new_link_<?php echo htmlSpecialChars($slide->id) ?>
" href="<?php echo htmlSpecialChars($slide->link) ?>" target="_blank">link</a></td>
                                <td class="da-icon-column">
                                    <a href="#da-ex-dialog-form-div" onclick="JavaScript:edit(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($slide->id)) ?>)">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/pencil.png" />
                                    </a>
                                    <a href="#reupload_image_panel" onclick="JavaScript:reuploadImage(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($slide->id)) ?>)">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/image.png" />
                                    </a>
                                    <a href="#" onclick="JavaScript:deleteConfirm(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($slide->id)) ?>
,<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($slide->image)) ?>)">
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