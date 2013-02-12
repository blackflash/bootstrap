<?php //netteCache[01]000404a:2:{s:4:"time";s:21:"0.15088700 1360589464";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:82:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\graphs.latte";i:2;i:1360589462;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\graphs.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '2rmizypv1i')
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
<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.charts.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/d3/d3.v3.js"></script>

<!-- Demo JavaScript Files -->
<script type="text/javascript" src="js/demo/demo.validation.js"></script>
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/grid/jquery.gridster.js"></script>

<!-- Validation Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/validate/jquery.validate.min.js"></script>

<!-- Chosen Plugin -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/plugins/chosen/chosen.jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/plugins/chosen/chosen.css" media="screen" />

<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.form.js"></script>


<!-- Demo JavaScript Files -->
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/demo/demo.validation.js"></script>


<link rel="stylesheet" type="text/css" href="<?php echo htmlSpecialChars($basePath) ?>/css/dandelion.css" media="screen" />

<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/jquery.gridster.css" media="screen" />
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/graphs.css" media="screen" />
<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/cssrefresh.js"></script>

    <style>
        text {
          font: 10px sans-serif;
        }

        .axis path {
          display: none;
        }

        .axis line {
          fill: none;
          stroke: #000;
          shape-rendering: crispEdges;
        }

        .group-label {
          font-weight: bold;
          text-anchor: end;
        }

        form {
          position: absolute;
          right: 10px;
          top: 10px;
        }
    </style>

<div id="graphsContent" class="clearfix">
    <div id="da-content-area">

        <div class="grid_1 logoPlace">
            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/logo.png" alt="Cleverfrogs" />
        </div>

        <div class="grid_1 areaSelector1">
            <div class="da-panel-content">
                <div class="da-form-item locationSelector">
                    <select id="da-ex-val-chzn" name="chosen1">
                        <option>Select location/s</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <label for="da-ex-val-chzn" generated="true" class="error" style="display:none;"></label>
                </div>
            </div>

        </div>

        <div class="grid_1 areaSelector2">
            <div class="da-form-item locationSelector">
                <select class="chzn-select">
                    <option>Select time period</option>
                    <option>2012</option>
                    <option>2013</option>
                </select>
            </div>            
        </div>
       
        <div class="grid_4 summaryIcons">

            <ul class="da-summary-stat" >
                <li>
                    <a href="#">
                        <span class="da-summary-icon" style="background-color:#a6d037;">
                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/white/32/sport_shirt.png" alt="" />
                        </span>
                        <span class="da-summary-text">
                            <span class="value">512</span>
                            <span class="label">Number of feedbacks today campaign "XZ"</span>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="da-summary-icon" style="background-color:#ea799b;">
                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/white/32/abacus.png" alt="" />
                        </span>
                        <span class="da-summary-text">
                            <span class="value up">286</span>                                        
                            <span class="label">Number of feedbacks total</span>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="da-summary-icon" style="background-color:#fab241;">
                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/white/32/airplane.png" alt="" />
                        </span>
                        <span class="da-summary-text">
                            <span class="value down">61</span>
                            <span class="label">Number of feedbacks total campaign "XZ"</span>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="da-summary-icon" style="background-color:#61a5e4;">
                            <img src="<?php echo htmlSpecialChars($basePath) ?>/images/icons/white/32/truck.png" alt="" />
                        </span>
                        <span class="da-summary-text">
                            <span class="value">42</span>
                            <span class="label">Shops Visited</span>
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="grid_4">
            <div class="grid_1 logoPlace">
            </div>

            <div class="grid_1 areaSelector1">
            </div>

            <div class="grid_1 areaSelector2">
            </div>
        </div>

    </div><!--end of contentarea-->
</div><!--end of contentarea-->

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
            widget_base_dimensions: [140, 200],
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

    </script>