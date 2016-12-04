<?php
	if($user_data['level']==0){
		?>
<ul class="sidebar">
  <li class="ikon"><a class="ikon-peng" href="<?php echo base_url()."index.php/product"; ?>"><span class="glyphicon glyphicon-home"></span></a></li>
  <li class="ikon"><a class="ikon-peng" href="<?php echo base_url()."index.php/crud"; ?>"><span class="glyphicon glyphicon-cog"></span></a></li>
</ul>
		<?php

	}else{
	}
	
?>
