 <div class="modal fade" id="shipping" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Account details </h4>
			</div>
			<div class="modal-body clearfix">
			  <?php echo $this->Form->create(
					'Customer', 
					array(
						'url' => array('controller' => 'customers', 'action' => 'profile'),
						'id' => 'shipping-address'
					)
				);?>
				<?php /*?><div class="col-sm-12 clearfix">
				  <div class="form-group clearfix">
				  <?php echo $this->Form->input(
					'Customer.file', 
					array(
						'type' => 'file', 
						'class' => 'jfilestyle', 
						'label' => false,
						'placeHolder' => 'File attachment:',
						'div' => false,
						'data-buttonText' => 'Choose file',
						'required' => true,
						)
					);?>
				  </div>
				</div>
				<?php */?>
				<div class="col-sm-12">
				  <div class="form-group">
				  
				  <?php echo $this->Form->input(
					'Customer.name', 
					array(
						'type' => 'text', 
						'class' => 'input', 
						'label' => false,
						'placeHolder' => 'Display name:',
						'div' => false,
						'id' => 'name',
						'required' => true
						)
					);?>
				  </div>
				</div>
				<div class="col-sm-12">
				  <div class="form-group">
				  
				  <?php echo $this->Form->input(
					'Customer.mobile', 
					array(
						'type' => 'text', 
						'class' => 'input', 
						'label' => false,
						'placeHolder' => 'Mobile Number:',
						'div' => false,
						'id' => 'mobile',
						'required' => true
						)
					);?>
				  </div>
				</div>
				<div class="col-sm-12">
				  <div class="form-group">
					<?php echo $this->Form->input(
					'Customer.address1', 
					array(
						'type' => 'text', 
						'class' => 'input', 
						'required' => true,
						'label' => false,
						'placeHolder' => 'Address Line1:',
						'div' => false,
						'id' => 'address1'
						)
					);?>
				  </div>
				</div>
				<div class="col-sm-12">
				  <div class="form-group">
					<?php echo $this->Form->input(
					'Customer.address2', 
					array(
						'type' => 'text', 
						'class' => 'input', 
						'required' => false,
						'label' => false,
						'placeHolder' => 'Address Line2:',
						'div' => false,
						'id' => 'address2'
						)
					);?>
				  </div>
				</div>
				<div class="col-sm-12">
				  <div class="form-group">
					<?php echo $this->Form->input(
					'Customer.city', 
					array(
						'type' => 'text', 
						'class' => 'input', 
						'required' => true,
						'label' => false,
						'placeHolder' => 'City:',
						'div' => false,
						'id' => 'city'
						)
					);?>
				  </div>
				</div>
				<div class="col-sm-12">
				  <div class="form-group">
					<?php echo $this->Form->input(
					'Customer.zip', 
					array(
						'type' => 'text', 
						'class' => 'input', 
						'required' => true,
						'label' => false,
						'placeHolder' => 'ZIP:',
						'div' => false,
						'id' => 'zip'
						)
					);?>
				  </div>
				</div>
				<div class="col-sm-12">
				  <div class="form-group">
					<?php echo $this->Form->submit(
									'Save', 
									array(
										'class' => 'continue small', 
										'div'=>false, 
										'id' => 'shipping-address'
										)
									);?>
				  </div>
				</div>
			<?php echo $this->Form->end();?>
			</div>
			
		</div>
	</div>
</div>