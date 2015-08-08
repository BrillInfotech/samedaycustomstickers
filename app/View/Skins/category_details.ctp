<?php echo $this->element('inner_title_banner')?>
<div class="container category-details">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <h2>Die Cut Stickers <a href="#toreview" class="scroll">(2534 Reviews)</a></h2>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
        <p> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
        <div class="item">
          <div class="clearfix">
            <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
              <li data-thumb="images/small1.png"> <img src="images/big1.png" /> </li>
              <li data-thumb="images/small2.png"> <img src="images/big2.png" /> </li>
              <li data-thumb="images/small3.png"> <img src="images/big3.png" /> </li>
              <li data-thumb="images/small4.png"> <img src="images/big4.png" /> </li>
              <li data-thumb="images/small5.png"> <img src="images/big5.png" /> </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 pleft"> <br>
        <h3>select a size</h3>
        <div class="container">
          <div class="row ">
		  <?php echo $this->Form->create('Category', array(
								'url' => array(
									'controller' => 'skickers', 
									'action' => 'category_details'
								)
							)
						);?>
            <ul class="clearfix gray-area ">
              <li class="col-sm-6 col-md-3">
                <input type="radio" name="size" id="s1" class="radio">
                <label for="s1">2" X 2"</label>
              </li>
              <li class="col-sm-6 col-md-3">
                <input type="radio" name="size" id="s2" class="radio">
                <label for="s2">3" X 3"</label>
              </li>
              <li class="col-sm-6 col-md-3">
                <input type="radio" name="size" id="s3" class="radio">
                <label for="s3">4" X 4"</label>
              </li>
              <li class="col-sm-6 col-md-3">
                <input type="radio" name="size" id="s4" class="radio">
                <label for="s4">5" X 5"</label>
              </li>
              <li class="col-sm-6 col-md-3">
                <input type="radio" name="size" id="s5" class="radio">
                <label for="s5">6" X 6"</label>
              </li>
              <li class="col-sm-6 col-md-3">
                <input type="radio" name="size" id="s6" class="radio">
                <label for="s6">7" X 7"</label>
              </li>
              <li class="col-sm-6 col-md-3">
                <input type="radio" name="size" id="s7" class="radio">
                <label for="s7">8" X 8"</label>
              </li>
              <li class="col-sm-6 col-md-3">
                <input type="radio" name="size" id="s8" class="radio">
                <label for="s8">9" X 9"</label>
              </li>
              <li class="col-sm-6 col-md-3">
                <input type="radio" name="size" id="s9" class="radio">
                <label for="s9">10" X 10"</label>
              </li>
              <li class="col-sm-6 col-md-9">
                <input type="radio" name="size" id="s11" class="radio">
                <label for="s11">Custom Size</label>
                <div class="custom">
				<?php echo $this->Form->input(
						'', 
						array(
							'type' => 'text', 
							'class' => 'input',
							'placeholder' => 'Height',
							'div' => false,
							'lable' => false
							)
					);?>
                   X
				   <?php echo $this->Form->input(
						'', 
						array(
							'type' => 'text', 
							'class' => 'input',
							'placeholder' => 'Width',
							'div' => false,
							'lable' => false
							)
					);?>
                  </div>
              </li>
            </ul>
          </div>
        </div>
        <hr>
        <h3>select Material</h3>
        <div class="container">
          <div class="row ">
            <div class="clearfix gray-area col-xs-12 ">
              <div class="selectdiv">
			  <?php echo $this->Form->input(
								'',
						array(
							'type' => 'select',
							'options' => array(
											'Please Select:',
											'Gloss Paper',
											'Matt Paper',
											'Gloss White',
											'Gloss White Vinyl',
											'Gloss White Vinyl LongLife',
											'Matt White Synthetic',
											'Paper Gloss Laminated (min 100)',
											'Paper Matt Laminated (min 100)'
											),
							'class' => 'selectboxdiv', 
							'label' => false,
							'div' => false
							)
						);?>	
                </div>
            </div>
          </div>
        </div>
        <hr>
        <h3>select quantity</h3>
        <div class="container">
          <div class="row ">
            <ul class="clearfix gray-area select-qty ">
              <li class="col-sm-4">
                <input type="radio" name="quantity" id="q1" class="radio">
                <label for="q1">50 ($57)</label>
              </li>
              <li class="col-sm-4">
                <input type="radio" name="quantity" id="q2" class="radio">
                <label for="q2">100 ($68)</label>
              </li>
              <li class="col-sm-4">
                <input type="radio" name="quantity" id="q3" class="radio">
                <label for="q3" data-title="Save 10%">200 ($89)</label>
              </li>
              <li class="col-sm-4">
                <input type="radio" name="quantity" id="q4" class="radio">
                <label for="q4" data-title="Save 20%">300 ($108)</label>
              </li>
              <li class="col-sm-4">
                <input type="radio" name="quantity" id="q5" class="radio">
                <label for="q5" data-title="Save 25%">500 ($141)</label>
              </li>
              <li class="col-sm-4">
                <input type="radio" name="quantity" id="q6" class="radio">
                <label for="q6" data-title="Save 25%">1000 ($141)</label>
              </li>
              <li class="col-sm-4">
                <input type="radio" name="quantity" id="q7" class="radio">
                <label for="q7" data-title="Save 25%">2000 ($141)</label>
              </li>
              <li class="col-sm-4">
                <input type="radio" name="quantity" id="q8" class="radio">
                <label for="q8" data-title="Save 25%">3000 ($141)</label>
              </li>
              <li class="col-sm-4">
                <input type="radio" name="quantity" id="q9" class="radio">
                <label for="q9" data-title="Save 25%">5000 ($141)</label>
              </li>
              <li class="col-sm-4">
                <input type="radio" name="quantity" id="q10" class="radio">
                <label for="q10" data-title="Save 25%">10000 ($141)</label>
              </li>
            </ul>
          </div>
        </div>
        <hr>
        <div class="text-center">
		<?php echo $this->Html->link(
							'Continue',
								array('controller'=>'skins', 'action' => 'upload_art',), 
								array('class' => 'continue','escape' => false)
							);?>
          <p class="next-step">Next Step: 
		  <?php echo $this->Html->link(
							'Upload your artwork',
								array('controller'=>'skins', 'action' => 'upload_art',), 
								array('escape' => false)
							);?>	
		   </p>
        </div>
      </div>
    </div>
  </div>
  <div class="about-product">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
		<?php echo $this->Html->image('front/freeshipping.png',array('class' => 'img-responsive'));?>
		 </div>
        <div class="pull-left col-sm-9">
          <h4>Free shipping in 5 days</h4>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believable. </p>
          <p> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believable have suffered alteration in some form.</p>
        </div>
        <div class="col-xs-12 separate"></div>
      </div>
      <div class="row">
        <div class="col-sm-3 col-sm-push-9"> 
		<?php echo $this->Html->image('front/review.png',array('class' => 'img-responsive'));?>
		</div>
        <div class="pull-left col-sm-9 col-sm-pull-3">
          <h4>Online proof in 24 hours</h4>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believable. </p>
          <p> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believable have suffered alteration in some form.</p>
        </div>
        <div class="col-xs-12 separate"></div>
      </div>
      <div class="row">
        <div class="col-sm-3"> 
		<?php echo $this->Html->image('front/durable.png',array('class' => 'img-responsive'));?>
		</div>
        <div class="pull-left col-sm-9">
          <h4>Durable & weatherproof</h4>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believable. </p>
          <p> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believable have suffered alteration in some form.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="review" id="toreview">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h3>Reviews for Die Cut stickers <span>(1509 Reviews)</span></h3>
        </div>
      </div>
      <div class="review-details row">
        <div class="col-sm-4">
          <div class="great">93%<span>Great</span> </div>
        </div>
        <div class="col-sm-4">
          <div class="great ok">05%<span>Okay</span> </div>
        </div>
        <div class="col-sm-4">
          <div class="great bad">02%<span>Not Good</span> </div>
        </div>
      </div>
      <ul class="row review-list">
        <li class="col-xs-12"> 
		<?php echo $this->Html->image('front/user.png',array('class' => 'img-responsive reviewer'));?>
          <h4><a href="review-detail.html">Chris Smith</a> <span class="time-stamp">3 weeks ago</span> <span class="star"></span><span class="star"></span><span class="star"></span><span class="star dark"></span><span class="star dark"></span></h4>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believable... <a href="">read more</a> </p>
        </li>
        <li class="col-xs-12"> 
		<?php echo $this->Html->image('front/user.png',array('class' => 'img-responsive reviewer'));?>
          <h4><a href="review-detail.html">Chris Smith</a> <span class="time-stamp">3 weeks ago</span> <span class="star"></span><span class="star"></span><span class="star"></span><span class="star dark"></span><span class="star dark"></span></h4>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believable... <a href="">read more</a> </p>
        </li>
        <li class="col-xs-12"> 
		<?php echo $this->Html->image('front/user.png',array('class' => 'img-responsive reviewer'));?>
          <h4><a href="review-detail.html">Chris Smith</a> <span class="time-stamp">3 weeks ago</span> <span class="star"></span><span class="star"></span><span class="star"></span><span class="star dark"></span><span class="star dark"></span></h4>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believable... <a href="">read more</a> </p>
        </li>
        <li class="col-xs-12"> 
		<?php echo $this->Html->image('front/user.png',array('class' => 'img-responsive reviewer'));?>
          <h4><a href="review-detail.html">Chris Smith</a> <span class="time-stamp">3 weeks ago</span> <span class="star"></span><span class="star"></span><span class="star"></span><span class="star dark"></span><span class="star dark"></span></h4>
          <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, injected humour, or randomised words which don't look even slightly believable... <a href="">read more</a> </p>
        </li>
      </ul>
      <a href="#" class="expend">+ Expand</a>
      <div class="loader">
        <div class="spinner">
          <div class="double-bounce1"></div>
          <div class="double-bounce2"></div>
        </div>
        Loading . . . </div>
    </div>
  </div>
