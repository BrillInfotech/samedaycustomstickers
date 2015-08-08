<?php echo $this->Html->script(array('front/function.js'));?>
<div class="login-page">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h1>SignUp</h1>
        <div class="form-area">
		<?php echo $this->Form->create(
						'Customer', 
						array(
							'url' => array('controller' => 'users', 'action' => 'registration'),
							'id' => 'customer-registration'
						)
					);?>
        <?php echo $this->Form->input(
						'Customer.name', 
						array(
							'type' => 'text', 
							'class' => 'input', 
							'label' => false,
							'placeHolder' => 'Name',
							'div' => false,
							'id' => 'name',
							'required' => true,
							)
						);?>
          <?php echo $this->Form->input(
						'Customer.email', 
						array(
							'type' => 'text', 
							'class' => 'input', 
							'required' => true,
							'label' => false,
							'placeHolder' => 'Email Address',
							'div' => false,
							'id' => 'email'
							)
						);?>
           <?php echo $this->Form->input(
						'Customer.new_password', 
						array(
							'type' => 'password', 
							'class' => 'input', 
							'label' => false,
							'placeHolder' => 'Password',
							'div' => false,
							'id' => 'new_password'
							)
						);?>
			<?php echo $this->Form->input(
						'Customer.confirm_password', 
						array(
							'type' => 'password', 
							'class' => 'input', 
							'required' => true,
							'label' => false,
							'placeHolder' => 'Confirm Password',
							'div' => false,
							'id' => 'confirm_password'
							)
						);?>	
			<br class="clear" />			
          <?php echo $this->Form->submit('Sign Up', array('class' => 'continue', 'div'=>false, 'id' => 'customer-regiter'));?>
		 
          <span class="create">or, 
		  <?php echo $this->Html->link(
								'Login', 
								array('controller' => 'users', 'action' => 'login'),
								array('escape' => false)
							);?>
		  </span>
          <div class="orbar">
            <div class="or">Or</div>
          </div>
		   <?php echo $this->Form->end();?>
          <?php echo $this->Html->image('front/login-with-google.png', array('class' => 'withgoogle img-responsive'));?></div>
      </div>
    </div>
  </div>
</div>
