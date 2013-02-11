<?php //netteCache[01]000404a:2:{s:4:"time";s:21:"0.36547100 1360544273";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:82:"C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\graphs.latte";i:2;i:1360544272;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:30:"6a33aa6 released on 2012-10-01";}}}?><?php

// source file: C:\Program Files (x86)\VertrigoServ\www\bootstrap\app\templates\Admin\graphs.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'av6gejyq8o')
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

<script type="text/javascript" src="<?php echo htmlSpecialChars($basePath) ?>/js/grid/jquery.gridster.js"></script>
<link rel="stylesheet" href="<?php echo htmlSpecialChars($basePath) ?>/css/jquery.gridster.css" media="screen" />

<!-- Content Area -->
<div id="da-content-area">

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
        <div class="da-gallery  gridster">
            <ul>
                
            <li class="bar">
                   
        <form>
          <label><input type="radio" name="mode" value="multiples" checked /> Multiples</label>
          <label><input type="radio" name="mode" value="stacked" /> Stacked</label>
        </form>
        <script src="http://d3js.org/d3.v3.min.js"></script>
        <script>

        var parseDate = d3.time.format("%Y-%m").parse,
            formatYear = d3.format("02d"),
            formatDate = function(d) { return "Q" + ((d.getMonth() / 3 | 0) + 1) + formatYear(d.getFullYear() % 100); };

        var margin = { top: 10, right: 20, bottom: 20, left: 60},
            width = 300 - margin.left - margin.right,
            height = 200 - margin.top - margin.bottom;

        var y0 = d3.scale.ordinal()
            .rangeRoundBands([height, 0], .2);

        var y1 = d3.scale.linear();

        var x = d3.scale.ordinal()
            .rangeRoundBands([0, width], .1, 0);

        var xAxis = d3.svg.axis()
            .scale(x)
            .orient("bottom")
            .tickFormat(formatDate);

        var nest = d3.nest()
            .key(function(d) { return d.group; });

        var stack = d3.layout.stack()
            .values(function(d) { return d.values; })
            .x(function(d) { return d.date; })
            .y(function(d) { return d.value; })
            .out(function(d, y0) { d.valueOffset = y0; });

        var color = d3.scale.category10();

        var svg = d3.select(".bar").append("svg")
            .attr("width", width + margin.left + margin.right)
            .attr("height", height + margin.top + margin.bottom)
          .append("g")
            .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

        d3.tsv("http://localhost/bootstrap/www/uploads/data/data.tsv", function(error, data) {

          data.forEach(function(d) {
            d.date = parseDate(d.date);
            d.value = +d.value;
          });

          var dataByGroup = nest.entries(data);

          stack(dataByGroup);
          x.domain(dataByGroup[0].values.map(function(d) { return d.date; }));
          y0.domain(dataByGroup.map(function(d) { return d.key; }));
          y1.domain([0, d3.max(data, function(d) { return d.value; })]).range([y0.rangeBand(), 0]);

          var group = svg.selectAll(".group")
              .data(dataByGroup)
            .enter().append("g")
              .attr("class", "group")
              .attr("transform", function(d) { return "translate(0," + y0(d.key) + ")"; });

          group.append("text")
              .attr("class", "group-label")
              .attr("x", -6)
              .attr("y", function(d) { return y1(d.values[0].value / 2); })
              .attr("dy", ".35em")
              .text(function(d) { return "Group " + d.key; });

          group.selectAll("rect")
              .data(function(d) { return d.values; })
            .enter().append("rect")
              .style("fill", function(d) { return color(d.group); })
              .attr("x", function(d) { return x(d.date); })
              .attr("y", function(d) { return y1(d.value); })
              .attr("width", x.rangeBand())
              .attr("height", function(d) { return y0.rangeBand() - y1(d.value); });

          group.filter(function(d, i) { return !i; }).append("g")
              .attr("class", "x axis")
              .attr("transform", "translate(0," + y0.rangeBand() + ")")
              .call(xAxis);

          d3.selectAll("input").on("change", change);

          var timeout = setTimeout(function() {
            d3.select("input[value=\"stacked\"]").property("checked", true).each(change);
          }, 2000);

          function change() {
            clearTimeout(timeout);
            if (this.value === "multiples") transitionMultiples();
            else transitionStacked();
          }

          function transitionMultiples() {
            var t = svg.transition().duration(750),
                g = t.selectAll(".group").attr("transform", function(d) { return "translate(0," + y0(d.key) + ")"; });
            g.selectAll("rect").attr("y", function(d) { return y1(d.value); });
            g.select(".group-label").attr("y", function(d) { return y1(d.values[0].value / 2); })
          }

          function transitionStacked() {
            var t = svg.transition().duration(750),
                g = t.selectAll(".group").attr("transform", "translate(0," + y0(y0.domain()[0]) + ")");
            g.selectAll("rect").attr("y", function(d) { return y1(d.value + d.valueOffset); });
            g.select(".group-label").attr("y", function(d) { return y1(d.values[0].value / 2 + d.values[0].valueOffset); })
          }
        });

        </script>
        </li>
        </ul>
        </div>
</div>

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