<?php echo $this->element('inner_title_banner');?>
<div class="container after-login">
  <div class="row">
    <div class="col-sm-3 left">
     <?php echo $this->element('profile_left_navigation');?>
    </div>
         <div class="col-sm-9 right">
        <div class="asummery reviewed">
          <h2>waiting to be reviewed</h2>
          <p class="bg-info">There are no items waiting to be reviewed.</a>
          <div class="review-it">
            <div class="row">
              <div class="col-sm-4"> 
			  <?php echo $this->Html->image(
							'front/big3.png', 
							array(
								'class' => 'stickerimg img-responsive',
								'alt' => 'brill logo'
							)
					);?>
			   </div>
              <div class="col-sm-8">
                <h3>MY Infotech (Die Cut Stickers)</h3>
				<?php echo $this->Form->create('Customer', array('url' => array('controller' => 'customers', 'action' => 'reviews')));?>
				<?php echo $this->Form->input(
								'Customer.review_comments',
						array(
							'type' => 'textarea', 
							'class' => 'input', 
							'label' => false,
							'placeholder' => 'review comments',
							'div' => false
							)
						);?>	
                  <div class="selectdiv">
				  <?php echo $this->Form->input(
								'Customer.Rating',
						array(
							'type' => 'select',
							'options' => array(5,4,3,2,1),
							'empty' => 'Rating',
							'class' => 'selectboxdiv', 
							'label' => false,
							'div' => false
							)
						);?>	
				   
				  <?php echo $this->Form->end();?>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <input type="button" value="Post Comments" class="continue small">
              </div>
            </div>
          </div>
          <h2> already reviewed</h2>
          <p class="bg-info">There are no reviewed items.</p>
          <div class="review-it">
            <div class="row">
              <div class="col-sm-4">
			  <?php echo $this->Html->image(
							'front/big3.png', 
								array(
									'class' => 'stickerimg img-responsive',
									'alt' => 'brill logo'
								)
						);?>
			  </div>
              <div class="col-sm-8">
                <h3>Brill Infotech (Die Cut Stickers)</h3>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believable </p>
                <span class="star"></span><span class="star"></span><span class="star"></span><span class="star"></span><span class="star dark"></span> </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
