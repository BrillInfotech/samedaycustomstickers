<?php echo $this->element('inner_title_banner');?>
<div class="container after-login">
  <div cl ass="row">
    <div class="col-sm-3 left">
     <?php echo $this->element('profile_left_navigation');?>
    </div>
    <div class="col-sm-9 right">
		<div class="asummery">
			<div class="asummery refer banners">
				<h2>Invite friends, get $10! </h2>
				<p class="info">Use the code below to add one of our banners to your web site. Anyone that signs up after clicking on a banner gets a $10 credit and you get $10 when they buy.</p>
				<?php echo $this->Html->image(
								'front/b1.png',
								array(
									'class' => 'img-responsive'
								)
							);?>
				<br>
				<?php echo $this->Form->create('Customer', array('url' => array('controller' => 'customers', 'action' => 'banners')));?>
				<?php echo $this->Form->input(
								'',
						array(
							'type' => 'textarea', 
							'class' => 'input', 
							'label' => false,
							'value' =>'<img alt="Custom Stickers, Die Cut Stickers, Bumper Stickers - Sticker Mule" border="0" height="90" src="https://d1vje5lvs6ypii.cloudfront.net/assets/users/banners/large-763a255a47a247b1efd74861e920d38b.jpg" width="728" /> </a>">',
							'div' => false
							
							)
						);?>
				
				<a href="" class="clipcopy">728x90 <span>Copy to clipboard</span></a> 
				<?php echo $this->Html->image(
								'front/b2.png',
								array(
									'class' => 'img-responsive'
								)
							);?>
				<br>
				<?php echo $this->Form->input(
								'',
						array(
							'type' => 'textarea', 
							'class' => 'input', 
							'label' => false,
							'value' =>'<img alt="Custom Stickers, Die Cut Stickers, Bumper Stickers - Sticker Mule" border="0" height="90" src="https://d1vje5lvs6ypii.cloudfront.net/assets/users/banners/large-763a255a47a247b1efd74861e920d38b.jpg" width="728" /> </a>">',
							'div' => false
							
							)
						);?>
				<?php echo $this->Form->end();?>
			  <a href="" class="clipcopy">728x90 <span>Copy to clipboard</span></a> 
			</div>

		</div>
    </div>
  </div>
</div>
