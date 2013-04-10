<?php //netteCache[01]000407a:2:{s:4:"time";s:21:"0.41707700 1365114260";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:85:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\locations.latte";i:2;i:1362176158;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"c0332ac released on 2013-03-08";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\locations.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'fohdzqz1pn')
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

    /*---------start of delete Location -------*/

    function deleteLocationStart()
    {   
        ajaxDeleteLocation(window.globalVar);
        return false;
    }

    function ajaxDeleteLocation(id){
       $.ajax({    //create an ajax request to load_page.php
          type: "POST",
          url: "?do=jsonDeleteLocation",
          data: { location_id: id },
          dataType: "html",   //expect html to be returned
          success: function(msg){ 

              if(parseInt(msg)!=0)    //if no errors
              {
                $( "#DeleteDialog" ).dialog( "close" );
                $("#location_id_"+id).remove();
              }
          }
      });
    }

    /*---------end of delete location ----------*/

    function showGrowl(){
        $( "#da-ex-validate4" ).dialog("close");
        $("#da-ex-growl").trigger('click');
        return false;
    }


    /*---------------- UPDATE LOCATION ---------------*/

    function editLocation(location_id){

        var title       = $(".location_title_"+location_id).html();
        var description = $(".location_description_"+location_id).html();
        var city_id     = $(".location_city_"+location_id).attr("name");

        $('.editLocationId').attr("name",location_id);
        $('.editLocationTitle').attr("value",title);
        $('.editLocationDescription').val(description);


        $('#editLocationCity option[value="'+city_id+'"]').attr('selected', 'selected');
        $('#editLocationCity').chosen().change();
        $('#editLocationCity').trigger('liszt:updated');
        

         $("#da-ex-dialog-form-div").dialog("option",{
            resizable: false,
            modal: true,
            hide: 'slow',
            show: 'slow',
            width: 400,
        }).dialog("open")
    
    }

    // on submit editPhoto Dialog -> start update
    $(document).on("submit", ".locationUpdateForm", function(event){
            
        var location_id =  $('.editLocationId').attr("name");
        var title       =  $('.editLocationTitle').attr("value");
        var description =  $('.editLocationDescription').val();
        var city_id     =  $('#editLocationCity').attr("value");

       //console.log(location_id + " " + title + " " + description + " " + city_id);

        ajaxStartUpdateLocation(location_id, title, description, city_id);
        return false;
    });

    function ajaxStartUpdateLocation(location_id, title, description, city_id){
       ajaxUpdateLocation(location_id, title, description, city_id);
       return false;
    }

    function ajaxUpdateLocation(location_id, title, description, city_id){
        
        $.ajax({    //create an ajax request to load_page.php
          type: "POST",
          url: "?do=jsonUpdateLocation",
          data: { location_id: location_id,title: title, description: description, city_id: city_id },
          dataType: "html",   //expect html to be returned
          success: function(msg){ 

              if(parseInt(msg)!=0)    //if no errors
              {
                var myObject = JSON.parse(msg);
                myObject["location_id"];
                var city_title = $(".hidden_city_"+myObject["city_id"]).attr("name");

                $(".location_city_"+myObject["location_id"]).html(city_title);
                $(".location_city_"+myObject["location_id"]).attr("name",city_title);


                $(".location_title_"+myObject["location_id"]).html(myObject["title"]);
                
                $(".location_description_"+myObject["location_id"]).html(myObject["description"]);
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
                <input type="button" class="da-button red large"  id="deleteButton" value="Delete" onclick="JavaScript:deleteLocationStart()" />
                <input type="button" class="da-button gray large" id="cancelButton" value="Cancel" onclick='JavaScript:$( "#DeleteDialog" ).dialog( "close" );' /> 
            </center>
        </div>
    </div>

    <!-- UPDATE LOCATION DIALOG -->
    <div id="da-ex-dialog-form-div" class="no-padding" title="Edit Photo">
        <div class="da-panel-content">
            <form id="da-ex-dialog-form-val" class="da-form locationUpdateForm">
                <div id="da-validate-error" class="da-message error" style="display:none;"></div>

                <div class="editLocationId" name=""></div>


                <fieldset class="da-form-inline">
                    <legend>City <span class="required">*</legend>
                    <div class="da-form-item large locationSelectorGallery">
                        <div class="da-form-row">
                            <select name="city_id" class="chzn-select" id="editLocationCity">
<?php $iterations = 0; foreach ($cities as $city): ?>
                                    <option value="<?php echo htmlSpecialChars($city->city_id) ?>
" class="updateLocationCity"><?php echo Nette\Templating\Helpers::escapeHtml($city->title, ENT_NOQUOTES) ?></option>
<?php $iterations++; endforeach ?>
                            </select>
                            <label for="da-ex-val-chzn" generated="true" class="error" style="display:none;"></label>
                        </div>
                    </div>
                </fieldset>

                <fieldset class="da-form-inline">
                    <legend>Title</legend>
                    <div class="da-form-row">
                        <input type="text" name="reqField" class="editLocationTitle" />
                    </div>
                </fieldset>

                <fieldset class="da-form-inline">
                    <legend>Description</legend>
                    <div class="da-form-row">
                        <textarea rows="auto" cols="auto" class="editLocationDescription" name="reqField"></textarea>
                    </div>
                </fieldset>

            </form>
        </div>
    </div>
    <!-- end of Non displayed panels -->


    <!-- ADD CITY PANEL -->
    <div class="grid_2">
        <div class="da-panel collapsible collapsed" >
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="images/icons/black/16/pencil.png" alt="" />
                    Add City
                </span>
            </div>
            <div class="da-panel-content">
                <form class="da-form" enctype="multipart/form-data" method="post" action="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=addCity">
                    <div class="da-form-row">
                        <label>City</label>
                        <div class="da-form-item large">
                                <input type="text" name="title" autocomplete="OFF" />
                        </div>
                    </div>
                    <div class="da-form-row">
                        <label>Description</label>
                        <div class="da-form-item large">
                            <textarea cols="auto" rows="auto" name="description"></textarea>
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


    <!--end of ADD LOCATION -->
    <div class="grid_2">
        <div class="da-panel collapsible collapsed" >
            <div class="da-panel-header">
                <span class="da-panel-title">
                    <img src="images/icons/black/16/pencil.png" alt="" />
                    Add Location
                </span>
            </div>
            <div class="da-panel-content">
                <form class="da-form" enctype="multipart/form-data" method="post" action="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=addLocation">
                    <div class="da-form-row">
                        <label>Location</label>
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
                        <label>City</label>
                        <div class="da-form-item large locationSelectorGallery">
                            <select name="city_id" class="chzn-select">
<?php $iterations = 0; foreach ($cities as $city): ?>
                                    <option value="<?php echo htmlSpecialChars($city->city_id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($city->title, ENT_NOQUOTES) ?></option>
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
                    Locations list
                </span>
                
            </div>
            <div class="da-panel-content">
                <table id="da-ex-datatable-numberpaging" class="da-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>City</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Edit Options</th>
                        </tr>
                    </thead>
                    <tbody>
<?php $iterations = 0; foreach ($locations as $location): ?>
                            <tr id="location_id_<?php echo htmlSpecialChars($location->location_id) ?>">
                                <td><?php echo Nette\Templating\Helpers::escapeHtml($location->location_id, ENT_NOQUOTES) ?></td>
                                <td class="location_city_<?php echo htmlSpecialChars($location->location_id) ?>" 
<?php $iterations = 0; foreach ($cities as $city): if ($location->city_id == $city->city_id): ?>
                                            name="<?php echo htmlSpecialChars($city->city_id) ?>
"> <?php echo Nette\Templating\Helpers::escapeHtml($city->title, ENT_NOQUOTES) ?>

<?php endif ;$iterations++; endforeach ?>
                                </td>
                                <td class="location_title_<?php echo htmlSpecialChars($location->location_id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($location->title, ENT_NOQUOTES) ?></td>
                                <td id="taskStatus_<?php echo htmlSpecialChars($location->location_id) ?>
" class="location_description_<?php echo htmlSpecialChars($location->location_id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($location->description, ENT_NOQUOTES) ?></td>
                                <td class="da-icon-column">
                                    <a href="#" onclick="JavaScript:editLocation(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($location->location_id)) ?>)">
                                        <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/pencil.png" />
                                    </a>
                                    <a href="#" onclick="JavaScript:deleteConfirm(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($location->location_id)) ?>)">
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

    <div class="clear"></div>
        
<?php $iterations = 0; foreach ($cities as $city): ?>
        <div class="hidden_city_<?php echo htmlSpecialChars($city->city_id) ?>" name="<?php echo htmlSpecialChars($city->title) ?>" style="display:none"></div>
<?php $iterations++; endforeach ?>

    </div>
    
</div>

