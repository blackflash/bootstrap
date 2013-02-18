<?php //netteCache[01]000405a:2:{s:4:"time";s:21:"0.95026100 1361211422";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:83:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\gallery.latte";i:2;i:1361211421;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\gallery.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'rj0mu1wplc')
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

<!-- elRTE Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/elrte/js/elrte.min.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/elrte/css/elrte.css" media="screen" />

<!-- elFinder Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/elfinder/js/elfinder.min.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/elfinder/css/elfinder.css" media="screen" />

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/elastic/jquery.elastic.min.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.form.js"></script>

<!-- Demo JavaScript Files -->
<!--end of <script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtmlComment($basePath) ?>/js/fileDropscript.js"></script> -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.filedrop.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/dropFilesStyles.css" media="screen" />

<!-- prettyPhoto Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/prettyphoto/js/jquery.prettyPhoto.min.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/prettyphoto/css/prettyPhoto.css" media="screen" />

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.gallery.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/jquery.fileinput.js"></script>

<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/grid/jquery.gridster.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/jquery.gridster.css" media="screen" />
<!--end of <script type="text/javascript" src="<?php echo Nette\Templating\Helpers::escapeHtmlComment($basePath) ?>/js/cssrefresh.js"> -->

<!-- Content Area -->
    <script type="text/javascript">

        $("#ajax_loader").hide();

        function deleteConfirm(id) {
            $( "#DeleteDialog" ).dialog({
                resizable: false,
                modal: true,
                width: 200,
            });
            window.globalVar = id; 
        }

        function deleteGallery()
        {   
            window.location = $("#deleteLink_"+window.globalVar).attr('href');
        }

        // on submit editPhoto Dialog -> start update
        $(document).on("submit", ".photoUpdateForm", function(event){
                
            var photoId =  $('.editPhotoId').attr("name");
            var photoTitle = $('.editPhotoTitle').attr("value");
            var photoDescription = $('.editPhotoDescription').attr("value");

           //console.log(photoId + " " + photoTitle + " " + photoDescription);

            updatePhoto(photoId, photoTitle, photoDescription);
            return false;
        });

        // update photo information
        function updatePhoto(photoId, photoTitle, photoDescription){
            
            $("#ajax_loader").show();

            $.ajax({    //create an ajax request to load_page.php
              type: "POST",
              url: "?do=jsonUpdatePhoto",
              data: { photo_id: photoId, title: photoTitle, description: photoDescription },
              dataType: "html",   //expect html to be returned
              success: function(msg){ 

                  if(parseInt(msg)!=0)    //if no errors
                  {
                    var myObject = JSON.parse(msg);
                    //console.log(myObject["success"]);
                    $("#ajax_loader").hide();
                    
                    $('.photoTitleSmall_'+myObject["photo_id"]).html(myObject["title"]);

                    $(".photoLink").attr("title", myObject["description"]);
                    $(".photoImage").attr("alt", myObject["title"]);

                    $("#da-ex-dialog-form-div").dialog("close");

                  }

                  if(parseInt(msg) == 0){
                    console.log("problem");
                    return false;
                  }

              }
          });
        }

         function ajaxStartUpdate(id, photoTitle, photoDescription){
           updatePhoto(id);
           return false;
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

        function includeJs(jsFilePath) {
            var js = document.createElement("script");

            js.type = "text/javascript";
            js.src = jsFilePath;

            document.body.appendChild(js);
        }

        function addGallery(namespace_id, gallery_id,title){

            $('.namespace_gallery').html(namespace_id);
            $('.id_gallery').html(gallery_id);
            $('.gallery_title').html("Gallery - "+title);

            $( "#galleryAddPhotos" ).dialog({
                resizable: false,
                modal: true,
                hide: 'slow',
                show: 'slow',
                width: 600,
                height: 550,
            });
        
            includeJs("http://localhost/bootstrap/www/js/fileDropscript.js");

        }

        function editPhoto(namespace_id, gallery_id, photo_id, filename){

            var path = window.location.href.split('/');

            var src = path[0] + "/" + path[1] + "/" + path[2] + "/" + path[3] +  "/www/uploads/gallery/" + namespace_id+ "/" + gallery_id + "/" +  filename;
            var srcThumb = path[0] + "/" + path[1] + "/" + path[2] + "/" + path[3] +  "/www/uploads/gallery/" + namespace_id+ "/" + gallery_id+ "/thumbs/" + filename;

            var title = $('.photoTitleSmall_' + photo_id).html();
            var description = $('.photoTitleSmallDescription_' + photo_id).html();

            $('.editPhotoId').attr("name",photo_id);
            $('.editPhotoTitle').attr("value",title);
            $('.editPhotoImage').attr("src",srcThumb);
            $('.editPhotoImageLink').attr("href",src);
            $('.editPhotoDescription').html(description);

             $("#da-ex-dialog-form-div").dialog("option",{
                resizable: false,
                modal: true,
                hide: 'slow',
                show: 'slow',
                width: 400,
            }).dialog("open")
        
        }



    </script>

    <div id="DeleteDialog" title="Delete user" style="display: none">
        <div id="grid_2">
            <center><h3>Are you sure ?</h3>
                <div class="clearfix"></div>
                <input type="button" class="da-button red large"  id="deleteButton" value="Delete" onclick="JavaScript:deleteGallery()" />
                <input type="button" class="da-button gray large" id="cancelButton" value="Cancel" onclick='JavaScript:$( "#DeleteDialog" ).dialog( "close" );' /> 
            </center>
        </div>
    </div>

    <button id="da-ex-growl-0" class="da-button pink" style="display: none;">Default Growl</button>

<?php if ($success == 1): ?>
        <script type="text/javascript">
            $(function(){
                $('#da-ex-growl-0').click();
            });
        </script>
<?php endif ?>

    <?php unset($success) ?>

    <div class="grid_2">
        <div class="da-panel collapsible collapsed" >
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="images/icons/black/16/pencil.png" alt="" />
                    Add Namespace
                </span>
            </div>
            <div class="da-panel-content">
                <form class="da-form" enctype="multipart/form-data" method="post" action="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=addNamespace">
                    <div class="da-form-row">
                        <label>Namespace</label>
                        <div class="da-form-item large">
                                <input type="text" name="name" autocomplete="OFF" />
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

    <div class="grid_2">
        <div class="da-panel collapsible collapsed" >
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="images/icons/black/16/pencil.png" alt="" />
                    Add Gallery
                </span>
            </div>
            <div class="da-panel-content">
                <form class="da-form" enctype="multipart/form-data" method="post" action="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=addGallery">
                    <div class="da-form-row">
                        <label>Title</label>
                        <div class="da-form-item large">
                            <input type="text" name="title" autocomplete="off" />
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label>Description</label>
                        <div class="da-form-item large">
                            <input type="text" name="description" autocomplete="off" />
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label>Namespace</label>
                        <div class="da-form-item large locationSelectorGallery">
                            <select name="namespace_id" class="chzn-select">
<?php $iterations = 0; foreach ($namespaces as $namespace): ?>
                                    <option value="<?php echo htmlSpecialChars($namespace->namespace_id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($namespace->name, ENT_NOQUOTES) ?></option>
<?php $iterations++; endforeach ?>
                            </select>
                            
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
                    Gallery list
                </span>
                
            </div>
            <div class="da-panel-content">
                <table id="da-ex-datatable-numberpaging" class="da-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Activation</th>
                            <th>Namespace</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Edit Options</th>
                        </tr>
                    </thead>
                    <tbody>
<?php $iterations = 0; foreach ($gallery as $gall): ?>
                            <tr>
                                <td><?php echo Nette\Templating\Helpers::escapeHtml($gall->gallery_id, ENT_NOQUOTES) ?></td>
                                <td>
<?php if ($gall->is_active == 1): ?>
                                        <a href="<?php echo htmlSpecialChars($basePath) ?>
/admin/?do=activateByTableAndRow&gallery_id=<?php echo htmlSpecialChars($gall->gallery_id) ?>
&activate=1&table=gallery"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/accept.png" /></a>
<?php else: ?>
                                        <a href="<?php echo htmlSpecialChars($basePath) ?>
/admin/?do=activateByTableAndRow&gallery_id=<?php echo htmlSpecialChars($gall->gallery_id) ?>
&activate=0&table=gallery"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/cross.png" /></a>
<?php endif ?>

                                </td>
                                <td id="gallStatus_<?php echo htmlSpecialChars($gall->gallery_id) ?>">

                                    <?php  
                                        foreach ($namespaces as $key => $value) {
                                            if($value["namespace_id"] == $gall->namespace_id){
                                                echo $value["name"];
                                            }
                                        }
?>

                                </td>
                                <td><?php echo Nette\Templating\Helpers::escapeHtml($gall->title, ENT_NOQUOTES) ?></td>
                                <td><?php echo Nette\Templating\Helpers::escapeHtml($gall->description, ENT_NOQUOTES) ?></td>
                                
                                <td class="da-icon-column">
                                    <a href="<?php echo htmlSpecialChars($basePath) ?>
/admin/?do=showGallery&gallery_id=<?php echo htmlSpecialChars($gall->gallery_id) ?>
" class="<?php echo htmlSpecialChars($gall->gallery_id) ?>" id="previewLink_<?php echo htmlSpecialChars($gall->gallery_id) ?>">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/magnifier.png" />
                                    </a>

                                    <a href="#"><img src="<?php echo htmlSpecialChars($basePath) ?>
/images/icons/color/plus.png" onclick="JavaScript:addGallery(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($gall->namespace_id)) ?>
,<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($gall->gallery_id)) ?>
,<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($gall->title)) ?>)" /></a>

                                    <a href="#" onclick="JavaScript:deleteConfirm(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($gall->gallery_id)) ?>)" name="">
                                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/cross.png" 
                                            onclick="JavaScript:ajaxPreview(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($gall->gallery_id)) ?>)"
                                            />
                                        </a>
                                        
                                    <a href="<?php echo htmlSpecialChars($basePath) ?>
/admin/?do=deleteGallery&gallery_id=<?php echo htmlSpecialChars($gall->gallery_id) ?>
" id="deleteLink_<?php echo htmlSpecialChars($gall->gallery_id) ?>" style="display: none"></a>
                                </td>
                            </tr>

<?php $iterations++; endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div><!--end of grid-->

    <div class="grid_4">
        <div class="da-panel collapsible <?php if ($gallery_photo_exist == ""): ?>
collapsed<?php endif ?>" name='<?php if ($gallery_photo_exist == ""): ?>hideButton<?php endif ?>' id="hideOrder" >
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="images/icons/color/layout.png" alt="" />
                    Gallery
                    <div id="da-ex-buttons-checkbox" class="orderPhotosEditButton">
                        <input type="checkbox" id="check1" class="lockIcon" />
                        <label for="check1">
                            <div name="locked" class="lockImage" id="imageLocked" /></div>
                            Order
                        </label>
                    </div>
                </span>
            </div>
            <div class="da-panel-content with-div">
                <padding2 class="da-gallery prettyPhoto gridster">
                    <ul>
<?php $iterations = 0; foreach ($gallery_photo as $photo): if ($gallery_id == $photo->gallery_id): ?>
                            <li data-row="<?php echo htmlSpecialChars($photo->data_row) ?>
" data-col="<?php echo htmlSpecialChars($photo->data_col) ?>" data-sizex="1" data-sizey="1" class="photo_id" data-photoId="<?php echo htmlSpecialChars($photo->photo_id) ?>">

                                <div class="imagePhoto">
                                    <div class="orderPhotoIcon" id=""></div>
                                    <a href="<?php echo htmlSpecialChars($basePath) ?>
/uploads/gallery/<?php echo htmlSpecialChars($photo->namespace_id) ?>/<?php echo htmlSpecialChars($photo->gallery_id) ?>
/<?php echo htmlSpecialChars($photo->filename) ?>" rel="prettyPhoto[pp1]" class="photoLink" title="<?php echo htmlSpecialChars($photo->description) ?>">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>
/uploads/gallery/<?php echo htmlSpecialChars($photo->namespace_id) ?>/<?php echo htmlSpecialChars($photo->gallery_id) ?>
/thumbs/<?php echo htmlSpecialChars($photo->filename) ?>" class="photoImage" alt="<?php echo htmlSpecialChars($photo->title) ?>" />
                                    </a>
                                </div>

                                <div class="photoEditButtons">
                                    <span class="da-gallery-hover">
                                        <ul>
                                            <li class="da-gallery-update"><a href="#" onclick="JavaScript:editPhoto(
                                                <?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($photo->namespace_id)) ?>,
                                                <?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($photo->gallery_id)) ?>,
                                                <?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($photo->photo_id)) ?>,
                                                <?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($photo->filename)) ?>

                                            )">Update</a></li>
                                            <li class="da-gallery-delete"><a href="<?php echo htmlSpecialChars($basePath) ?>
/admin/?do=deletePhoto&photo_id=<?php echo htmlSpecialChars($photo->photo_id) ?>
&gallery_id=<?php echo htmlSpecialChars($photo->gallery_id) ?>&success=1">Delete</a></li>
                                        </ul>
                                    </span>
                                </div> 

                                <div class="photoTitle">
                                    <small class="photoTittle photoTitleSmall_<?php echo htmlSpecialChars($photo->photo_id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($photo->title, ENT_NOQUOTES) ?></small>
                                    <small class="photoTitleSmallDescription_<?php echo htmlSpecialChars($photo->photo_id) ?>
" style="display: none;"><?php echo Nette\Templating\Helpers::escapeHtml($photo->description, ENT_NOQUOTES) ?></small>
                                </div>

                            </li>
<?php endif ;$iterations++; endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    

    <div id="galleryAddPhotos" style="display: none;" title="Add photos to gallery">
        <div class="da-panel-content">
            <span class="namespace_gallery" style="display: none;"></span>
            <span class="id_gallery" style="display: none;"></span>
            <table class="da-table da-detail-view">
                <tbody>
                    <tr>
                        <div class="da-form-row">
                            <div class="da-form-item large">
                                <div id="dropbox">
                                    <span class="namespace_gallery" style="display: none;"></span>
                                    <span class="id_gallery" style="display: none;"></span>
                                    <span class="message">Drop images here to upload. <br /><i>(they will only be visible to you)</i></span>
                                </div>
                            </div>
                        </div>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <div id="da-ex-dialog-form-div" class="no-padding" title="Edit Photo">
        <div class="da-panel-content">
            <form id="da-ex-dialog-form-val" class="da-form photoUpdateForm">
                <div id="da-validate-error" class="da-message error" style="display:none;"></div>
                        
                <div class="da-gallery prettyPhoto">
                    <ul style="height: auto; margin-top: 5px;">
                        <li style="height: auto;">
                            <a href="<?php echo htmlSpecialChars($basePath) ?>/uploads/gallery/<?php echo htmlSpecialChars($photo->namespace_id) ?>
/<?php echo htmlSpecialChars($photo->gallery_id) ?>/<?php echo htmlSpecialChars($photo->filename) ?>" rel="prettyPhoto[pp2]" class="editPhotoImageLink">
                                <img src="<?php echo htmlSpecialChars($basePath) ?>
/uploads/gallery/<?php echo htmlSpecialChars($photo->namespace_id) ?>/<?php echo htmlSpecialChars($photo->gallery_id) ?>
/thumbs/<?php echo htmlSpecialChars($photo->filename) ?>"  class="editPhotoImage" />
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="editPhotoId" name=""></div>

                <fieldset class="da-form-inline">
                    <legend>Title</legend>
                    <div class="da-form-row">
                        <input type="text" name="reqField" class="editPhotoTitle" />
                    </div>
                </fieldset>

                <fieldset class="da-form-inline">
                    <legend>Description</legend>
                    <div class="da-form-row">
                        <textarea rows="auto" cols="auto" class="editPhotoDescription" name="reqField"></textarea>
                    </div>
                </fieldset>

            </div>

            </form>
        </div>
    </div>

    <script type="text/javascript">
        
        var orderButton = $("#hideOrder").attr("name");
        if(orderButton == "hideButton"){
            $(".orderPhotosEditButton").css("display","none");
        }
        
        $('div#galleryAddPhotos').bind('dialogclose', function(event) {
              window.location = window.location.pathname + "?title=CleverFrogs+-+Gallery&page=gallery&gallery_id=" + $(".id_gallery").html() ;
              $("#ajax_loader").hide();
         });
        

        $(".lockIcon").change(function(){
            var state = this.checked;
            //change checkbox icon
            state ? $(".lockImage").attr("id","imageUnlocked") : $(".lockImage").attr("id","imageLocked");
            
            //add remove orderMoveIcon
            state ? $(".orderPhotoIcon").attr("id","recordIcon") : $(".orderPhotoIcon").attr("id","");

            if(state){
                $(".gridster ul").gridster().data('gridster').enable();
                $("#ajax_loader").show();
            }else {
                $(".gridster ul").gridster().data('gridster').disable();

                var completeArr = [];

                $(".photo_id").each(function(){
                    var temp    = this;
                    var photoId =  $(this).attr("data-photoId");
                    var col     =  $(this).attr("data-col");
                    var row     =  $(this).attr("data-row");

                    var arr = new Array(photoId, col, row);
                    
                    completeArr.push(arr);
                    
                });

                ajaxStartUpdateOrder(completeArr);
            }

        });

        function ajaxStartUpdateOrder(data){
           $("#ajax_loader").show();
           updatePhotoOrder(data);
           return false;
        }

        // update photo information
        function updatePhotoOrder(completeArr){
            
            $.ajax({    //create an ajax request to load_page.php
              type: "POST",
              url: "?do=jsonUpdatePhotoOrder",
              data: { data: JSON.stringify(completeArr) },
              dataType: "html",   //expect html to be returned
              success: function(msg){ 

                  if(parseInt(msg)!=0)    //if no errors
                  {
                    //var myObject = JSON.parse(msg);
                    //console.log(myObject["success"]);
                    $("#ajax_loader").hide();
                  }

                  if(parseInt(msg) == 0){
                    console.log("problem");
                    $("#ajax_loader").hide();
                    return false;
                  }

              }
          });
        }

        $(".gridster ul").gridster({
            widget_margins: [20, 20],
            widget_base_dimensions: [140, 140],
            max_size_x: 10,
            max_size_y: 1,
            draggable: {
                stop: function(event, ui){ 

                    /*$(".photo_id").each(function(){
                        var temp = this;
                        var photoId =  $(this).attr("data-photoId");
                        var col =  $(this).attr("data-col");
                        var row =  $(this).attr("data-row");
                        console.log(photoId + "-" + col + "-" + row);
                    });
                    */
                    
                }
            }
        });

        $(".gridster ul").gridster().data('gridster').disable();

    </script>

    </div><!--end of copyright ok-->