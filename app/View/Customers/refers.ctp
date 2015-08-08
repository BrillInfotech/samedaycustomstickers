<?php echo $this->element('inner_title_banner');?>
<div class="container after-login">
  <div cl ass="row">
    <div class="col-sm-3 left">
     <?php echo $this->element('profile_left_navigation');?>
    </div>
    <div class="col-sm-9 right">
		<div class="asummery refer">
			<h2>Invite friends, get $10! </h2>
			<p class="info">Give your friends a $10 store credit and get $10 added to your account when they buy. </p>
			<div class="form-area">
				<h3>Share link</h3>
				<?php echo $this->Form->create('Customer', array('url' => array('controller' => 'customers', 'action' => 'refers')));?>
				<?php echo $this->Form->input(
								'Customer.email', 
								array(
									'type' => 'text', 
									'class' => 'input fshare', 
									'label' => false,
									'div' => false,
									'value' => 'https://www.samedaysticker.com/unlock?ref_id=5297660701'
									)
								);?>
				<?php echo $this->Html->image('front/tweet.png', array('class' => ''));?> &nbsp; &nbsp;
				<?php echo $this->Html->image('front/fshare.png', array('class' => ''));?>
				<a href="javascript:void(0)" class="clipboard">Copy to Clipboard</a> 
			</div>
		  <br>
		  <div class="form-area">
			<h3>Send invites via email</h3>
			<?php echo $this->Form->input(
							'Customer.email', 
							array(
								'type' => 'text', 
								'class' => 'input fshare', 
								'label' => false,
								'div' => false,
								'palceholder' => 'Enter Email:'
								)
							);?>
			<?php echo $this->Form->submit('Send', array('class' => 'continue small', 'div'=>false));?>	
			<?php echo $this->Form->end();?>			
			</div>
		</div>
    </div>
  </div>
</div>
