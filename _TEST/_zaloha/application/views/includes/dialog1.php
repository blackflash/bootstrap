<script type="text/javascript">
  $(function(){

    $(document).ready(function() {
      $('#dialog').dialog({ resizable: false, 
        
      });
    });  

  });

</script>

<?php if($this->uri->segment(1) == "sk"){; ?>
<!-- ui-dialog -->
<div id="dialog" title="Info">
  <h6>Vaša spätná väzba bola úspešne odoslaná. <br>
    Ďakujeme.</h6>
</div>
<?php } 
else {
?>
<div id="dialog" title="Info">
  <h6>Your feedback was successfully processed.</h6>
  <h6>Thank you.</h6>
</div>
<?php
}

?>