<?php echo $this->Html->script(array('front/function.js'));?>
<div class="login-page">
    <div class="container">
       <div class="row">
			<div class="col-xs-12">
				<h1>login</h1>
				<div class="form-area">
					<?php echo $this->Form->create(
									'Customer',
									array(
										'url' => array('controller' => 'customers', 'action' => 'login'),
										'id' => 'customer-login'
									)
								);?>
					<?php echo $this->Form->input(
									'Customer.email', 
									array(
										'type' => 'text', 
										'class' => 'input', 
										'label' => false,
										'placeHolder' => 'Email Address',
										'required' => true,
										'id' => 'email',
										'div' => false
										)
									);?>
					
					<?php echo $this->Form->input(
									'Customer.password', 
									array(
										'type' => 'password', 
										'class' => 'input', 
										'label' => false,
										'placeHolder' => 'Password',
										'required' => true,
										'id' => 'password',
										'div' => false
										)
									);?>
					<br class="clear" />
					<?php echo $this->Form->submit('Log in', array('class' => 'continue', 'div'=>false));?>
					<span class="create">or, 
					<?php echo $this->Html->link(
								'Create an account', 
								array('controller' => 'users', 'action' => 'registration'),
								array('escape' => false)
							);?>
					</span>

					<br>
					<?php echo $this->Html->link(
								'Forget Password?', 
								array('controller' => 'users', 'action' => 'forgot_password'),
								array('escape' => false, 'class' => 'fp')
							);?>
					<div class="orbar">

						<div class="or">Or</div>

					</div>
					<?php echo $this->Form->end();?>
					<?php echo $this->Html->image('front/login-with-google.png', array('class' => 'withgoogle img-responsive'));?>
				</div>
			</div>
		</div>
	</div>
</div>