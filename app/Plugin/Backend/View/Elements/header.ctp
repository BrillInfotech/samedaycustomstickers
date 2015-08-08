<div class="header navbar navbar-inverse navbar-fixed-top">
  <!-- BEGIN TOP NAVIGATION BAR -->
  <div class="navbar-inner">
    <div class="container-fluid">
      <!-- BEGIN LOGO -->
	  <?php echo $this->Html->image('backend/logo.png', array('alt'=>'Same Day Stickers', 'style'=>'height:40px;')); ?>
	  <!-- END LOGO -->
      <!-- BEGIN RESPONSIVE MENU TOGGLER -->
      <?php echo $this->Html->link($this->Html->image('menu-toggler.png'), array('controller'=>'', 'action'=>''), array('id'=>'', 'escape'=>false, 'class'=>'btn-navbar collapsed', 'data-toggle'=>'collapse', 'data-target'=>'.nav-collapse' )) ?>
      <!-- END RESPONSIVE MENU TOGGLER -->
      <!-- BEGIN TOP NAVIGATION MENU -->
      <ul class="nav pull-right">
	  	<!--Site Setting -->
	  	  <li><?php echo $this->Html->link('<i class="icon-cog"></i> Settings', array('controller'=>'setting', 'action'=>'index'), array('id'=>'website_settings', 'escape'=>false)); ?></li>
         <!-- BEGIN USER LOGIN DROPDOWN -->
         <li><?php echo $this->Html->link('<i class="icon-key"></i> Log Out', array('controller'=>'users', 'action'=>'logout'), array('id'=>'LogOut', 'escape'=>false)); ?></li>
        <!-- END USER LOGIN DROPDOWN -->
        <!-- END USER LOGIN DROPDOWN -->
      </ul>
      <!-- END TOP NAVIGATION MENU -->
    </div>
  </div>
  <!-- END TOP NAVIGATION BAR -->
</div>
