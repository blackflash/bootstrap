<script type="text/javascript">
  $(function(){

    $(document).ready(function() {
      $('#nodialogSub').dialog({ resizable: false
      });
    });  
  });
</script>

<?php if($this->uri->segment(1) == "sk"){; ?>
<!-- ui-dialog -->
<div id="nodialogSub" title="Info">
  <center><h5>Vás email už je spracovaný.</h5></center>
</div>
<?php } 
else {
?>
<div id="nodialogSub" title="Info">
  <center><h5>Your email is already processed.</h5></center>
</div>
<?php
}

?>