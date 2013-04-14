<?php //netteCache[01]000409a:2:{s:4:"time";s:21:"0.36610500 1365900833";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:87:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\components\CompactNewsAdmin.latte";i:2;i:1365900830;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\components\CompactNewsAdmin.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'ndakqyvcge')
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

    function componentShow(value){
       $.ajax({
          type: "POST",
          url: "?do=compactNewsAdmin-jsonShowComponent",
          data: { value: value },
          dataType: "html",
          success: function(msg){ 
                if(parseInt(msg)!=0)
                {
                    //console.log(msg);
                }
          }
      });
    }

    $(document).on("change", ".ios-switch", function(event){
        console.log($(this).is(':checked'));
        var temp;
        if($(this).is(':checked')) temp = 1; else temp = 0;

        componentShow(temp);
        return false;
    });

    /*------------ end of show --------------*/


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

    //  http://localhost/bootstrap/admin/?compactNewsAdmin-id=1&compactNewsAdmin-value=1&title=CleverFrogs+-+news&page=component_compact_news
    //  &do=compactNewsAdmin-activate
    function ajaxDelete(id,image){
       $.ajax({    //create an ajax request to load_page.php
          type: "POST",
          url: "?compactNewsAdmin-id="+id+"&do=compactNewsAdmin-jsonDelete",
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

    function editLocation(id){

        var title       = $(".new_title_"+id).html();
        var text        = $(".new_text_"+id).html();
        var link        = $(".new_link_"+id).attr("href");

        //console.log(link);

        $('.editId').attr("name",id);
        $('.editTitle').attr("value",title);
        $('.editText').val(text);
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
            
        var id          =  $('.editId').attr("name");
        var title       =  $('.editTitle').attr("value");
        var text        =  $('.editText').val();
        var link        =  $('.editLink').attr("value");

        //console.log(id + " " + title + " " + text  + " " + link);

        ajaxStartUpdate(id, title, text, link);
        return false;
    });

    function ajaxStartUpdate(id, title, text, link){
       ajaxUpdate(id, title, text, link);
       return false;
    }

    function ajaxUpdate(id, title, text, link){
        
        $.ajax({    //create an ajax request to load_page.php
          type: "POST",
          url: "?do=compactNewsAdmin-jsonUpdate",
          data: { id: id, title: title, text: text, link: link },
          dataType: "html",   //expect html to be returned
          success: function(msg){ 

              if(parseInt(msg)!=0)    //if no errors
              {
                var myObject = JSON.parse(msg);
                $(".new_title_"+myObject["id"]).html(myObject["title"]);
                $(".new_text_"+myObject["id"]).html(myObject["text"]);
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
            <form id="da-ex-dialog-form-val" class="da-form" enctype="multipart/form-data" method="post" action="?do=compactNewsAdmin-jsonUpdateImage">
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
                    <legend>Link</legend>
                    <div class="da-form-row">
                        <input type="text" name="reqField" class="editLink" />
                    </div>
                </fieldset>

            </form>
        </div>
    </div>
    <!-- end of Non displayed panels -->


    <div class="grid_4 iOsButton">
            <script type="text/javascript">
                $(document).ready(function() {
                  var switches = document.querySelectorAll('input[type="checkbox"].ios-switch');
                    for (var i=0, sw; sw = switches[i++]; ) {
                        var div = document.createElement('div');
                        div.className = 'switch';
                        sw.parentNode.insertBefore(div, sw.nextSibling);
                    }
                });
            </script>
            <style type="text/css">
                .iOsButton {
                    margin-bottom: 20px;
                }

                :root input[type="checkbox"] {
                    position: absolute;
                    opacity: 0;
                }

                :root input[type="checkbox"].ios-switch + div {
                    display: inline-block;
                    vertical-align: middle;
                    width: 3em; height: 1em;
                    border: 1px solid rgba(0,0,0,.3);
                    border-radius: 999px;
                    margin: 0 .5em;
                    background: white;
                    background-image: linear-gradient(rgba(0,0,0,.1), transparent),
                                      linear-gradient(90deg, hsl(210, 90%, 60%) 50%, transparent 50%);
                    background-size: 200% 100%;
                    background-position: 100% 0;
                    background-origin: border-box;
                    background-clip: border-box;
                    overflow: hidden;
                    transition-duration: .4s;
                    transition-property: padding, width, background-position, text-indent;
                    box-shadow: 0 .1em .1em rgba(0,0,0,.2) inset,
                                0 .45em 0 .1em rgba(0,0,0,.05) inset;
                    font-size: 150%; /* change this and see how they adjust! */
                }

                :root input[type="checkbox"].ios-switch:checked + div {
                    padding-left: 2em;  width: 1em;
                    background-position: 0 0;
                }

                :root input[type="checkbox"].ios-switch + div:before {
                    content: 'On';
                    float: left;
                    width: 1.65em; height: 1.65em;
                    margin: -.1em;
                    border: 1px solid rgba(0,0,0,.35);
                    border-radius: inherit;
                    background: white;
                    background-image: linear-gradient(rgba(0,0,0,.2), transparent);
                    box-shadow: 0 .1em .1em .1em hsla(0,0%,100%,.8) inset,
                                0 0 .5em rgba(0,0,0,.3);
                    color: white;
                    text-shadow: 0 -1px 1px rgba(0,0,0,.3);
                    text-indent: -2.5em;
                }

                :root input[type="checkbox"].ios-switch:active + div:before {
                    background-color: #eee;
                }

                /*:root input[type="checkbox"].ios-switch:focus + div {
                    box-shadow: 0 .1em .1em rgba(0,0,0,.2) inset,
                                0 .45em 0 .1em rgba(0,0,0,.05) inset,
                                0 0 .4em 1px rgba(148,214,0,.5);
                }*/

                :root input[type="checkbox"].ios-switch + div:before,
                :root input[type="checkbox"].ios-switch + div:after {
                    font: bold 60%/1.9 sans-serif;
                    text-transform: uppercase;
                }

                :root input[type="checkbox"].ios-switch + div:after {
                    content: 'Off';
                    float: left;
                    text-indent: .5em;
                    color: rgba(0,0,0,.45);
                    text-shadow: none;

                }
            </style>

            <label>Show component: <input type="checkbox" class="ios-switch" <?php if ($is_active): ?>
checked<?php endif ?> /></label>
        </div>

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
                <form id="da-ex-validate6" class="da-form" enctype="multipart/form-data" method="post" action="?do=compactNewsAdmin-AddNews">
                    
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
                            <input type="text" name="text" autocomplete="off" />
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
                            <th>Link</th>
                            <th>Edit Options</th>
                        </tr>
                    </thead>
                    <tbody>
<?php $iterations = 0; foreach ($news as $new): ?>
                            <tr id="new_id_<?php echo htmlSpecialChars($new->id) ?>">
                                <td><?php echo Nette\Templating\Helpers::escapeHtml($new->id, ENT_NOQUOTES) ?></td>
                                <td>
                                    <center>
<?php if ($new->is_active == 1): ?>
                                            <a href="<?php echo htmlSpecialChars($_control->link("activate!", array($new->id, $new->is_active))) ?>
"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/accept.png" /></a>
<?php else: ?>
                                            <a href="<?php echo htmlSpecialChars($_control->link("activate!", array($new->id, $new->is_active))) ?>
"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/cross.png" /></a>
<?php endif ?>
                                    </center>
                                </td>
                                <td class="new_title_<?php echo htmlSpecialChars($new->id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($new->title, ENT_NOQUOTES) ?></td>
                                <td class="new_text_<?php echo htmlSpecialChars($new->id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($new->text, ENT_NOQUOTES) ?></td>
                                <td class="new_image">
                                    <img src="<?php echo htmlSpecialChars($basePath) ?>
/www/uploads/news/<?php echo htmlSpecialChars($new->image) ?>" />
                                </td>
                                <td><a class="new_link_<?php echo htmlSpecialChars($new->id) ?>
" href="<?php echo htmlSpecialChars($new->link) ?>" target="_blank">link</a></td>
                                <td class="da-icon-column">
                                    <a href="#da-ex-dialog-form-div" onclick="JavaScript:editLocation(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($new->id)) ?>)">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/pencil.png" />
                                    </a>
                                    <a href="#reupload_image_panel" onclick="JavaScript:reuploadImage(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($new->id)) ?>)">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/image.png" />
                                    </a>
                                    <a href="#" onclick="JavaScript:deleteConfirm(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($new->id)) ?>
,<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($new->image)) ?>)">
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