<?php 
	$action = $this->params['action'];
	$profile = "";
	$change_password = "";
	$orders = "";
	$refers = "";
	$banners = "";
	$reviews = "";
	$notifications = "";
	$market_place = "";
	
	if($action == 'profile'){
		$profile = "active";
	}elseif($action == 'change_password'){
		$change_password = "active";
	}elseif($action == 'orders'){
		$orders = "active";
	}elseif($action == 'refers'){
		$refers = "active";
	}elseif($action == 'banners'){
		$banners = "active";
	}elseif($action == 'reviews'){
		$reviews = "active";
	}elseif($action == 'notifications'){
		$notifications = "active";
	}elseif($action == 'market_place'){
		$market_place = "active";
	}

?>



<ul>
  <li>
	<?php echo $this->Html->link(
				'Summary', 
				array('controller' => 'customers', 'action' => 'profile'),
				array(
					'escape' => false, 
					'class' => 'summery '.$profile)
			);?>
  </li>
  <li>
	<?php echo $this->Html->link(
				'Password', 
				array('controller' => 'customers', 'action' => 'change_password'),
				array(
					'escape' => false, 
					'class' => $change_password)
			);?>
  </li>
  <li>
	<?php echo $this->Html->link(
				'Orders', 
				array('controller' => 'customers', 'action' => 'orders'),
				array('escape' => false, 'class' => $orders)
			);?>
  </li>
  <li>
	<?php echo $this->Html->link(
				'Refer Friends', 
				array('controller' => 'customers', 'action' => 'refers'),
				array('escape' => false, 'class' => $refers)
			);?>
  </li>
  <li>
  <?php echo $this->Html->link(
				'Banners', 
				array('controller' => 'customers', 'action' => 'banners'),
				array('escape' => false, 'class' => $banners)
			);?>
 </li>
  <li>
   <?php echo $this->Html->link(
				'Reviews', 
				array('controller' => 'customers', 'action' => 'reviews'),
				array('escape' => false, 'class' => $reviews)
			);?>
  </li>
  <li>
	 <?php echo $this->Html->link(
			'Notifications', 
			array('controller' => 'customers', 'action' => 'notifications'),
			array('escape' => false, 'class' => $notifications)
		);?>
  </li>
  <li>
	 <?php echo $this->Html->link(
			'Marketplace', 
			array('controller' => 'customers', 'action' => 'market_place'),
			array('escape' => false, 'class' => $market_place)
		);?>
  </li>
</ul>
