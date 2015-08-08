<!-- BEGIN SIDEBAR -->
<?php 
$dashboad = "";
$setting = "";
$product = "";
$material = "";
$sticker = "";
$pages = "";
$customers = "";
$coupons = "";

if($this->params['controller'] == 'dashboard'){
	$dashboad = 'active';
}elseif($this->params['controller'] == 'setting'){
	$setting = 'active';
}elseif($this->params['controller'] == 'products'){
	$material = 'active';
}elseif($this->params['controller'] == 'stickers'){
	$sticker = 'active';
}elseif($this->params['controller'] == 'pages'){
	$pages = 'active';
}elseif($this->params['controller'] == 'customers'){
	$customers = 'active';
}elseif($this->params['controller'] == 'coupons'){
	$coupons = 'active';
}


?>
<div class="page-sidebar nav-collapse collapse">
  <!-- BEGIN SIDEBAR MENU -->
  <ul class="page-sidebar-menu">
    <li>
      <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
      <div class="sidebar-toggler hidden-phone"></div>
      <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    </li>
    <li>
      <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
     &nbsp;
      <!-- END RESPONSIVE QUICK SEARCH FORM -->
    </li>
    <li class=" <?php echo $dashboad;?>"> 
		<?php echo $this->Html->link(
						'<i class="icon-home"></i> <span class="title">Dashboard</span> <span class="selected"></span>', 
						array('controller' => 'dashboard', 'action' => 'index'), 
						array('id' => 'DashBoard', 'escape'=>false)
					);?>
	</li>
    <li class="<?php echo $setting;?>"> 
		<?php echo $this->Html->link(
				'<i class="icon-cog"></i> <span class="title">Site Setting</span>', 
				array('controller' => 'setting', 'action' => 'index'), 
				array('id' => 'Setting', 'escape'=>false)
			);?> 
	</li>
	<li class="<?php echo $pages;?>">
		<?php echo $this->Html->link(
				'<i class="icon-gift"></i> <span class="title">CMS</span> <span class="arrow "></span>' ,
				array(), 
				array('id'=>'Pages', 'escape'=>false)
				);?>
		<ul class="sub-menu">
			<li> <?php echo $this->Html->link(
					'Pages', 
					array('controller'=>'pages', 'action'=>'index'), 
					array('id'=>'Pages', 'escape'=>false));?> 
			</li>
			<li> <?php echo $this->Html->link(
					'FAQ', 
					array('controller'=>'pages', 'action'=>'faq'), 
					array('id'=>'faq', 'escape'=>false));?> 
			</li>
		</ul>
	</li>
	<li class="<?php echo $material;?>"> 
		<?php echo $this->Html->link(
					'<i class="icon-gift"></i> <span class="title">Materials</span>', 
					array('controller' => 'materials', 'action' => 'index'),
					array('id' => 'Material', 'escape'=>false)
				);?> 
	</li>
		<li class="<?php echo $customers;?>"> 
		<?php echo $this->Html->link(
				'<i class="icon-gift"></i> <span class="title">Customer Management</span> <span class="arrow "></span>' ,
						array(), 
						array('id'=>'Customers', 'escape'=>false)
					);?>
		<ul class="sub-menu">
		<li> 
		<?php echo $this->Html->link(
					'Customers', 
						array('controller'=>'customers', 'action'=>'index'), 
						array('id'=>'customer', 'escape'=>false)
					);?> 
			</li>
		</ul>
	</li>
	<li class="<?php echo $sticker;?>"> 
		<?php echo $this->Html->link(
					'<i class="icon-gift"></i> <span class="title">Sticker</span>', 
					array('controller' => 'stickers', 'action' => 'index'), 
					array('id' => 'Sticker', 'escape'=>false)
			);?>
	</li>	
	<li class="<?php //echo $material;?>"> 
		<?php echo $this->Html->link(
					'<i class="icon-gift"></i> <span class="title">Skins</span>', 
					array('controller' => '#', 'action' => '#'), 
					array('id' => 'Skins', 'escape'=>false)
					);?> 
	</li>	
	<li class="<?php echo $coupons;?>"> 
	<?php echo $this->Html->link(
		'<i class="icon-gift"></i> <span class="title">Coupons</span> <span class="selected"></span>',
		array('controller'=>'coupons', 'action'=>'index'), 
		array('id'=>'Coupon', 'escape'=>false)
		);?>
	</li>
</ul>
  <!-- END SIDEBAR MENU -->
</div>
<!-- END SIDEBAR -->
