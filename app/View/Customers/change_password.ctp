<?php echo $this->element('inner_title_banner');?>
<div class="container after-login">
  <div cl ass="row">
    <div class="col-sm-3 left">
     <?php echo $this->element('profile_left_navigation');?>
    </div>
    <div class="col-sm-9 right">
		<div class="asummery">
		  <h2>change password</h2>
		  <div class="form-area">
			<?php echo $this->Form->create('User', array('url' => array('controller' => 'customers', 'action' => 'change_password')));?>
				<?php echo $this->Form->input(
								'Customer.old_password', 
								array(
									'type' => 'password', 
									'class' => 'input', 
									'label' => false,
									'placeHolder' => 'Old Password:',
									'div' => false
								)
							);?>
				<?php echo $this->Form->input(
								'Customer.new_password', 
								array(
									'type' => 'password', 
									'class' => 'input', 
									'label' => false,
									'placeHolder' => 'New Password:',
									'div' => false
								)
							);?>
				<?php echo $this->Form->input(
								'Customer.confirm_password', 
								array(
									'type' => 'password', 
									'class' => 'input', 
									'label' => false,
									'placeHolder' => 'Confirm Password:',
									'div' => false
								)
							);?>						
			</div>
		  <br>
		  <?php echo $this->Form->submit('Update Password', array('class' => 'continue small', 'div'=>false));?>
		  <?php echo $this->Form->end();?>
		</div>
    </div>
  </div>
</div>
