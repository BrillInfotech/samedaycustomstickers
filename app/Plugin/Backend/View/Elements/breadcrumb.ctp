<?php if(isset($breadcrumb)){ ?>
<ul class="breadcrumb">
	<?php 
	$t = count($breadcrumb);
	$n = 1;
	foreach($breadcrumb as $name => $url){?>
		<li>	
	<?php if($name == 'Home'){ echo '<i class="icon-home"></i>'; }
			echo $this->Html->link($name, $url, array('escape'=>false));
			if($n <= ($t-1)){echo '<i class="icon-angle-right"></i>';}?>
				
	</li>
	<?php $n++;}?>
	
</ul>
<!-- END PAGE TITLE & BREADCRUMB-->
<?php }?>