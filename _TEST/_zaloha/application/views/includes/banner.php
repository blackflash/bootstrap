<ul class="bjqs">
	<?php 
		foreach ($banner as $key => $value) {
			echo '<li>
        <div class="bannerInfo">'.$value->link.'</div>
        <img src="'.base_url().$value->image.'" class="bannerImage">
      </li>';
		}
	 ?>
</ul>

<link rel="stylesheet" href="<?php echo base_url(); ?>css/basic-jquery-slider.css">
<script src="<?php echo base_url(); ?>js/basic-jquery-slider.js"></script>

<script>
$(document).ready(function() {
  $('#banner').bjqs({
    'animation' : 'slide',
    'width' : 675,
    'height' : 280,
    'showMarkers' : true,
    'showControls' : true,
    'centerMarkers' : true
  });
});
</script>