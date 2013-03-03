<?php //netteCache[01]000407a:2:{s:4:"time";s:21:"0.65359500 1362281544";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:85:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\campaigns.latte";i:2;i:1362280153;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\campaigns.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'xh4bv14tgx')
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

    /*---------start of delete  -------*/

    function deleteCampaignStart()
    {   
        ajaxDeleteCampaign(window.globalVar);
        return false;
    }

    function ajaxDeleteCampaign(id){
       $.ajax({    //create an ajax request to load_page.php
          type: "POST",
          url: "?do=jsonDeleteCampaign",
          data: { campaign_id: id },
          dataType: "html",   //expect html to be returned
          success: function(msg){ 

              if(parseInt(msg)!=0)    //if no errors
              {
                $( "#DeleteDialog" ).dialog( "close" );
                $("#campaign_"+id).remove();
              }
          }
      });
    }
    /*-------------end of delete -------------------*/

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
                <input type="button" class="da-button red large"  id="deleteButton" value="Delete" onclick="JavaScript:deleteCampaignStart()" />
                <input type="button" class="da-button gray large" id="cancelButton" value="Cancel" onclick='JavaScript:$( "#DeleteDialog" ).dialog( "close" );' /> 
            </center>
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
                        Campaigns list
                    </span>
                    
                </div>
                <div class="da-panel-content">
                    <table id="da-ex-datatable-numberpaging" class="da-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Location</th>
                                <th>Category</th>
                                <th>Campaign name</th>
                                <th>Estimated time</th>
                                <th>Status</th>
                                <th>Description</th>
                                <th>Campaign</th>
                                <th>Edit Options</th>
                            </tr>
                        </thead>
                        <tbody>
<?php $iterations = 0; foreach ($campaigns as $campaign): ?>
                                <tr timeCheck="<?php echo htmlSpecialChars($campaign->campaign_id) ?>
" id="campaign_<?php echo htmlSpecialChars($campaign->campaign_id) ?>">
                                    <td><?php echo Nette\Templating\Helpers::escapeHtml($campaign->campaign_id, ENT_NOQUOTES) ?></td>
                                    <td>
<?php $iterations = 0; foreach ($locations as $location): if ($location->location_id == $campaign->location_id): $iterations = 0; foreach ($cities as $city): if ($city->city_id == $location->city_id): ?>
                                                        <?php echo Nette\Templating\Helpers::escapeHtml($city->title, ENT_NOQUOTES) ?>
 - <?php echo Nette\Templating\Helpers::escapeHtml($location->title, ENT_NOQUOTES) ?>

<?php endif ;$iterations++; endforeach ;endif ;$iterations++; endforeach ?>
                                    </td>
                                    <td>

<?php $iterations = 0; foreach ($categories as $category): if ($category->category_id == $campaign->category_id): ?>
                                               <?php echo Nette\Templating\Helpers::escapeHtml($category->title, ENT_NOQUOTES) ?>

<?php endif ;$iterations++; endforeach ?>

                                    </td>
                                    <td><?php echo Nette\Templating\Helpers::escapeHtml($campaign->title, ENT_NOQUOTES) ?></td>
                                    <td id="defaultCountdown_<?php echo htmlSpecialChars($campaign->campaign_id) ?>"></td>
                                    <td id="campaignStatus_<?php echo htmlSpecialChars($campaign->campaign_id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($campaign->status, ENT_NOQUOTES) ?></td>
                                    <td><?php echo Nette\Templating\Helpers::escapeHtml($campaign->description, ENT_NOQUOTES) ?></td>
                                    <td><a href="<?php echo htmlSpecialChars($basePath) ?>
/campaign/?campaign_id=<?php echo htmlSpecialChars($campaign->campaign_id) ?>" target="_blank">Campaign</a></td>
                                    <td class="da-icon-column">
                                        <a href="#" class="<?php echo htmlSpecialChars($campaign->campaign_id) ?>
" id="previewLink_<?php echo htmlSpecialChars($campaign->campaign_id) ?>" 
                                            onclick="JavaScript:showProjectDialog(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($campaign->campaign_id)) ?>)">
                                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/magnifier.png" />
                                        </a>
                                        
                                        <a href="#"><img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/pencil.png" /></a>
                                        
                                        <a href="#" onclick="JavaScript:deleteConfirm(<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeJs($campaign->campaign_id)) ?>)" name="">
                                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/color/trash.png" />
                                        </a>
                                        
                                        <a href="<?php echo htmlSpecialChars($basePath) ?>
/admin/?do=deleteProject&projectId=<?php echo htmlSpecialChars($campaign->campaign_id) ?>
" id="deleteLink_<?php echo htmlSpecialChars($campaign->campaign_id) ?>" style="display: none"></a>
                                    </td>
                                </tr>

                                <script type="text/javascript">
                                    $(function () {
                                        var Y,m,d,H,i,s;
                                        Y = <?php echo Nette\Templating\Helpers::escapeJs(date("Y",strtotime ($campaign->date_finish))) ?>;
                                        m = <?php echo Nette\Templating\Helpers::escapeJs(date("m",strtotime ($campaign->date_finish))) ?>;
                                        d = <?php echo Nette\Templating\Helpers::escapeJs(date("d",strtotime ($campaign->date_finish))) ?>;
                                        H = <?php echo Nette\Templating\Helpers::escapeJs(date("H",strtotime ($campaign->date_finish))) ?>;
                                        i = <?php echo Nette\Templating\Helpers::escapeJs(date("i",strtotime ($campaign->date_finish))) ?>;
                                        s = <?php echo Nette\Templating\Helpers::escapeJs(date("s",strtotime ($campaign->date_finish))) ?>;

                                        var austDay = new Date();
                                        austDay = new Date(Y, m - 1, d, H, i, s);
                                        //console.log(austDay);
                                        $('#defaultCountdown_'+<?php echo Nette\Templating\Helpers::escapeJs($campaign->campaign_id) ?>+" ").countdown( { until: austDay,compact: true } );

                                        if(
                                            $('#defaultCountdown_'+<?php echo Nette\Templating\Helpers::escapeJs($campaign->campaign_id) ?>
+" ").text() == "" && $('#campaignStatus_'+<?php echo Nette\Templating\Helpers::escapeJs($campaign->campaign_id) ?>+" ").text() != "done" ||
                                            $('#defaultCountdown_'+<?php echo Nette\Templating\Helpers::escapeJs($campaign->campaign_id) ?>
+" ").text() == "00:00:00" && $('#campaignStatus_'+<?php echo Nette\Templating\Helpers::escapeJs($campaign->campaign_id) ?>+" ").text() != "done"
                                            ){
                                            $("#defaultCountdown_"+<?php echo Nette\Templating\Helpers::escapeJs($campaign->campaign_id) ?>+" ").css("background-color","orange");
                                        }

                                        if($('#defaultCountdown_'+<?php echo Nette\Templating\Helpers::escapeJs($campaign->campaign_id) ?>
+" ").text() == "00:00:00" && $('#campaignStatus_'+<?php echo Nette\Templating\Helpers::escapeJs($campaign->campaign_id) ?>+" ").text() == "done"){
                                            $("#defaultCountdown_"+<?php echo Nette\Templating\Helpers::escapeJs($campaign->campaign_id) ?>+" ").css("background-color","#8cffaa");
                                            $('#campaignStatus_'+<?php echo Nette\Templating\Helpers::escapeJs($campaign->campaign_id) ?>+" ").css("background-color","#8cffaa");
                                        }

                                    });
                               
                                    $(document).ready(function(){
                                        var auto_refresh = setInterval( // Check every 10 seconds
                                        function ()  // Call out to get the time
                                        {   
                                            $('#da-ex-datatable-numberpaging > tbody  > tr').each(function() {
                                                if($('#defaultCountdown_'+$(this).attr('timeCheck')).text() == "00:00:00"){
                                                    $("#defaultCountdown_"+$(this).attr('timeCheck')).css("background-color","orange");

                                                    if($('#defaultCountdown_'+$(this).attr('timeCheck')).text() == "00:00:00" && $('#campaignStatus_'+$(this).attr('timeCheck')).text() == "done"){
                                                        $('#campaignStatus_'+$(this).attr('timeCheck')).css("background-color","#8cffaa");
                                                        $("#defaultCountdown_"+$(this).attr('timeCheck')).css("background-color","#8cffaa");
                                                    }
                                                }
                                            });
                                        }, 10000); // end check
                                    }); // end ready
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
                                    <form id="da-ex-wizard-form" class="da-form create_campaign" method="post" action="<?php echo htmlSpecialChars($basePath) ?>/admin/?do=createCampaign">
                                        <fieldset class="da-form-inline">
                                            <legend>Basic info</legend>
                                            <div class="da-form-row">
                                                <label>Campaign name <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <input type="text" name="title" class="required" autocomplete="off" />
                                                </div>
                                            </div>
                                            <div class="da-form-row">
                                                <label>Description <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <textarea name="description" class="required"></textarea>
                                                </div>
                                            </div>

                                            <div class="da-form-item large locationSelectorGallery">
                                                <div class="da-form-row">
                                                    <label>Location <span class="required">*</span></label>
                                                    <select id="da-ex-val-chzn" name="location_id" class="required">
                                                        <option></option>
<?php $iterations = 0; foreach ($locations as $location): ?>
                                                            <option value="<?php echo htmlSpecialChars($location->location_id) ?>">
<?php $iterations = 0; foreach ($cities as $city): if ($city->city_id == $location->city_id): ?>
                                                                        <?php echo Nette\Templating\Helpers::escapeHtml($city->title, ENT_NOQUOTES) ?>
 - <?php echo Nette\Templating\Helpers::escapeHtml($location->title, ENT_NOQUOTES) ?>

<?php endif ;$iterations++; endforeach ?>
                                                            </option>
<?php $iterations++; endforeach ?>
                                                    </select>
                                                    <label for="da-ex-val-chzn" generated="true" class="error" style="display:none;"></label>
                                                </div>
                                            </div>

                                            <div class="da-form-item large locationSelectorGallery">
                                                <div class="da-form-row">
                                                    <label>Category <span class="required">*</span></label>
                                                    <select class="chzn-select" name="category_id">
                                                        <option></option>
<?php $iterations = 0; foreach ($categories as $category): ?>
                                                            <option value="<?php echo htmlSpecialChars($category->category_id) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($category->title, ENT_NOQUOTES) ?></option>
<?php $iterations++; endforeach ?>
                                                    </select>
                                                    <label for="da-ex-val-chzn" generated="true" class="error" style="display:none;"></label>
                                                </div>
                                            </div>


                                        </fieldset>
                                        <fieldset class="da-form-inline">
                                            <legend>Deadlines and Main Question</legend>
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
                                                <label>Main Question <span class="required">*</span></label>
                                                <div class="da-form-item large">
                                                    <textarea name="main_question" class="required"></textarea>
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