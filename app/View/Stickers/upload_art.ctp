<?php echo $this -> element('inner_title_banner');?>
  <div class="container upload-artwork">
    <div cl ass="row">
      <div class="col-sm-12">
        <div class="form-area clearfix">
          <div class="clearfix">
		  <?php echo $this->Form->input(
						'', 
						array(
							'type' => 'file', 
							'class' => 'jfilestyle',
							'placeholder' => 'File attachment:',
							'data-buttonText' => 'Choose file',
							'div' => false,
							'lable' => false
							)
					);?>
             </div>
          <br>
          <span class="or">Or</span>
          <div class="clearfix skip"> <a href="#">Skip this step & email artwork later.</a></div>
        </div>
      </div>
    </div>
  </div>