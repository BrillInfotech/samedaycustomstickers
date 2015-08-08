<?php echo $this->Html->script(array('front/function.js'));?>
<?php echo $this->element('inner_title_banner')?>
  <div class="container">
    <div class="contact-page">
      <div class="row">
        <div class="col-xs-12">
          <h2>write us an e-mail</h2>
        </div>
      </div>
	  <?php echo $this->Form->create('Customer', array(
								'url' => array('controller' => 'pages', 'action' => 'contact'),
								'id' => 'contact-us'
							)
						);?>
      <div class="form-area clearfix">
		<div class="col-sm-6">
			<?php echo $this->Form->input(
								'Customer.name', 
								array(
									'type' => 'text', 
									'class' => 'input', 
									'label' => false,
									'placeHolder' => 'Your name:',
									'div' => false,
									'id' => 'name',
									'required' => true
								)
							);?>
        </div>
        <div class="col-sm-6">
		<?php echo $this->Form->input(
								'Customer.email', 
								array(
									'type' => 'text', 
									'class' => 'input', 
									'label' => false,
									'placeHolder' => 'Your email address:',
									'div' => false,
									'id' => 'email',
									'required' => true
								)
							);?>
        </div>
		<br style="clear:both;" class="clear" />
        <div class="col-sm-6">
		<?php echo $this->Form->input(
								'Customer.subject', 
								array(
									'type' => 'text', 
									'class' => 'input', 
									'label' => false,
									'placeHolder' => 'Subject:',
									'div' => false,
									'id' => 'subject',
									'required' => true
								)
							);?>
        </div>
        <div class="col-sm-6">
		<?php echo $this->Form->input(
								'Customer.file', 
								array(
									'type' => 'file', 
									'class' => 'jfilestyle', 
									'label' => false,
									'placeHolder' => 'File attachment:',
									'data-buttonText' => 'Choose file',
									'div' => false
								)
							);?>
        </div>
        <div class="col-sm-12">
		<?php echo $this->Form->input(
								'Customer.message', 
								array(
									'type' => 'textarea', 
									'cols' => '10',
									'cols' => '2',
									'class' => 'input', 
									'label' => false,
									'placeHolder' => 'Message:',
									'div' => false,
									'id' => 'message',
									'required' => true
								)
							);?>
        </div>
        <div class="col-sm-12"> <br>
		<?php echo $this->Form->input(
								'Customer.check', 
								array(
									'type' => 'checkbox', 
									'class' => 'checkbox', 
									'id' => 'update',
									'label' => false,
									'div' => false,
									'checked' => 'checked'
								)
							);?>
          
          <label for="update">Subscribe to email updates </label>
        </div>
      </div>
	  <?php echo $this->Form->input(
						'Send Email', 
						array(
							'type' => 'button', 
							'class' => 'continue', 
							'label' => false,
							'div' => false
						)
					);?>
		<?php echo $this->Form->end();?>					
     </div>
  </div>