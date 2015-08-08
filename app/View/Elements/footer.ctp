<div class="container">
      <div class="row">
        <div class="col-sm-9 hidden-xs">
          <div class="row">
            <div class="col-sm-4 col-md-3">
              <article class="footer-col">
                <h4>Quick Links</h4>
                <ul>
                  <li>
				  <?php echo $this->Html->link(
									'About',
									array('controller' => 'pages' , 'action' => 'about'),
									array('escape' => false)
								);?>
				   </li>
                  <li>
				  <?php echo $this->Html->link(
									'Contact Us',
									array('controller' => 'pages' , 'action' => 'contact'),
									array('escape' => false)
							);?>
				 </li>
                </ul>
              </article>
            </div>
            <div class="col-sm-4 col-md-3">
              <article class="footer-col">
                <h4>Support</h4>
                <ul>
                  <li>
				  <?php echo $this->Html->link(
									'FAQ', 
									array('controller' => 'pages', 'action' => 'faq'),
									array('escape' => false)
							);?>
				  </li>
                  <li><a href="#">Get a Custom Quote</a> </li>
                  <li><a href="#">Request Samples</a> </li>
                  <li><a href="#">Terms & Conditions</a> </li>
                </ul>
              </article>
            </div>
            <div class="col-sm-4 col-md-3">
              <article class="footer-col">
                <h4>Stay Connected</h4>
                <ul>
                  <li><a href="#">Facebook</a> </li>
                  <li><a href="#">Twitter</a> </li>
                  <li><a href="#">Pinterest</a> </li>
                  <li><a href="#">Instagram</a> </li>
                </ul>
              </article>
            </div>
            <div class="hidden-xs hidden-sm col-lg-3">
              <article class="footer-col">
                <h4>Secured Payment</h4>
				<?php echo $this->Html->image('front/sercured-payment.png', array('escape'=>false, 'width'=>90,'height'=>62,'alt'=>'secured payment')); ?>            
                <div class="secured-row"> </div>
              </article>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <article class="footer-col">
            <div class="subscribe">
              <h4>Subscribe Our Newsletter</h4>
              <input type="text" name="name" class="form-fields" placeholder="Enter your name">
              <input type="text" name="email" class="form-fields" placeholder="Type your email address">
              <button class="subscribe-button"> <span>Subscribe</span> </button>
            </div>
          </article>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container inner-container">
        <div class="copyright"> Copyright 2015, All rights reserved </div>
        <div class="brill-infotech"> Design & Developed by <a href="http://www.brillinfotech.com">Brill Infotech</a> </div>
      </div>
    </div>