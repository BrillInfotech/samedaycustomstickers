 <div class="modal fade" id="profile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
						'id' => 'update-profile'
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
					'Customer.email', 
					array(
						'type' => 'text', 
						'class' => 'input', 
						'required' => true,
						'label' => false,
						'placeHolder' => 'Email:',
						'div' => false,
						'id' => 'email'
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
										'id' => 'edit-profile'
										)
									);?>
				  </div>
				</div>
			<?php echo $this->Form->end();?>
			</div>
			
		</div>
	</div>
</div>