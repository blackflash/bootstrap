<script type="text/javascript">
    $(function(){

      $(document).ready(function() {
        $('#dialog').dialog({ resizable: false
        });
      }); 

         
    });

</script>

<?php if($this->uri->segment(1) == "sk"){; ?>
<!-- ui-dialog -->
<div id="dialog" title="Info">
  <h6>Vaša spätná väzba bola úspešne odoslaná.</h6>
  <h6>Ďakujeme.</h6>
</div>
<?php } 
else {
?>
<div id="dialog" title="Info">
  <h6>Your feedback was successfully processed. <br>
    Thank you.</h6>
</div>
<?php
}

?>