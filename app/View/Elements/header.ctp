<div class="container">
  <div class="row">
	<div class="col-xs-12">
	 <div class="nav-toggle pull-left"> <span></span> <span></span> <span></span> </div>   
		<?php echo $this->Html->link($this->Html->image('front/logo.png'),'/', array('escape'=>false,'class' => 'logo'));?>
	    <nav class="clearfix">
		<ul>
		  <li>
		  <?php echo $this->Html->link(
						'Stickers', 
						array('controller' => 'stickers', 'action' => 'index'),
						array('escape' => false)
					);?>
		  </li>
		  <li>
		  <?php echo $this->Html->link(
						'Skins', 
						array('controller' => 'skins', 'action' => 'index'),
						array('escape' => false)
					);?>
		 </li>
		  <li>
		  <?php echo $this->Html->link(
						'Marketplace', 
						array('controller' => 'marketplace', 'action' => 'index'),
						array('escape' => false)
					);?>
		  </li>
		  <li>
		   <?php echo $this->Html->link(
						'Contact Us', 
						array('controller' => 'pages', 'action' => 'contact'),
						array('escape' => false)
					);?>
		  </li>
		  <li class="visible-xs visible-sm">
			<?php echo $this->Html->link(
						'Login', 
						array('controller' => 'users', 'action' => 'login'),
						array('escape' => false)
					);?>
		  </li>
		  <li class="visible-xs visible-sm">
			<?php echo $this->Html->link(
						'Register', 
						array('controller' => 'users', 'action' => 'registration'),
						array('escape' => false)
					);?>
		  </li>
		  <li class="mob-link visible-xs"></li>
		</ul>
	  </nav>
	  <ul class="login-nav pull-right">
		<li> <a href="" class="cart"> <span class="item">1</span> <span class="cart-icon"></span> </a> </li>
		<li class="dropdown pull-right hidden-xs"> 
	<?php if($isLogin){?>
			<a href="#" id="dLabel" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="logged-in"></span></a>
			<ul class="dropdown-menu" aria-labelledby="dLabel">
			  <li> 
				<?php echo $this->Html->link(
							'Account', 
							array('controller' => 'customers', 'action' => 'profile'),
							array('escape' => false)
						);?>
			 </li>
			 <li> 
				<?php echo $this->Html->link(
							'Reorder', 
							array('controller' => 'customers', 'action' => 'orders'),
							array('escape' => false)
						);?>
			  </li>
			  <li> 
				<?php echo $this->Html->link(
							'Invite Friend', 
							array('controller' => 'customers', 'action' => 'refers'),
							array('escape' => false)
						);?>
			  </li>
			  <li> 
				<?php echo $this->Html->link(
							'Logout', 
							array('controller' => 'users', 'action' => 'logout'),
							array('escape' => false)
						);?>
			  </li>
			</ul>
	
	<?php }else{?>
			<a href="javascript:void(0);" id="dLabel" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
				<span class="login"></span>
			</a>
			<ul class="dropdown-menu" aria-labelledby="dLabel">
				<li>
					<?php echo $this->Html->link(
							'Login', 
							array('controller' => 'users', 'action' => 'login'),
							array('escape' => false)
						);?>
				</li>
				<li>
				<?php echo $this->Html->link(
							'Register', 
							array('controller' => 'users', 'action' => 'registration'),
							array('escape' => false)
						);?>
				</li>
			</ul>
	<?php }?>		
		</li>
	  </ul>
	</div>
  </div>
</div>