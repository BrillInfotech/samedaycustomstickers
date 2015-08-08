<div class="container-fluid">
	<!-- BEGIN PAGE HEADER-->   
	<div class="row-fluid">
		<div class="span12">
			<!-- END BEGIN STYLE CUSTOMIZER -->     
			<h3 class="page-title">
				Website Setting
			</h3>
			<?php echo $this->element('breadcrumb');?>
		</div>
	</div>
	<!-- END PAGE HEADER-->
	<!-- BEGIN PAGE CONTENT-->
	<div class="row-fluid">
		<div class="span12">
		<?php echo $this->element('flash_message');?>
			<!-- BEGIN VALIDATION STATES-->
			<div class="portlet box blue">
				<div class="portlet-title">
					<div class="caption"><i class="icon-reorder"></i>Site Setting</div>
					<div class="tools">
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					 <?php echo $this->Form->create('Setting', array('url'=>array('controller'=>'setting', 'action'=>'index'), 'id'=>'form_sample_2', 'class'=>'form-horizontal', 'type'=>'file')); ?>
						<div class="alert alert-error hide">
							<button class="close" data-dismiss="alert"></button>
							You have some form errors. Please check below.
						</div>
						<div class="alert alert-success hide">
							<button class="close" data-dismiss="alert"></button>
							Your form validation is successful!
						</div>
						<div class="control-group radio-label">
							<label class="control-label">Debug Mode</label>
							<div class="controls">
								<?php echo $this->Form->input('Setting.debug_mode', array('type'=>'radio', 'options'=>array(1=>'On &nbsp;&nbsp;', 0=>'Off'), 'class'=>'span6 m-wrap','label'=>false, 'legend'=>false, 'div'=>false )); ?> 
							</div>
						</div>
						<div class="control-group radio-label">
							<label class="control-label">Maintenance Mode</label>
							<div class="controls">
									  <?php echo $this->Form->input('Setting.maintenance_mode', array('type'=>'radio', 'options'=>array(1=>'On &nbsp;&nbsp;', 0=>'Off'), 'class'=>'span6 m-wrap','label'=>false, 'legend'=>false, 'div'=>false )); ?> 
							</div>
						</div>
						
						<div class="control-group">
							<label class="control-label">Contact Address</label>
							<div class="controls">
									 <?php echo $this->Form->input('Setting.contact', array('type'=>'textarea', 'class'=>'span6 m-wrap', 'label'=>false, 'div'=>false)); ?>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Contact Phone</label>
							<div class="controls">
									 <?php echo $this->Form->input('Setting.contact_phone', array('type'=>'text', 'class'=>'span6 m-wrap', 'label'=>false, 'div'=>false)); ?>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Contact Mobile</label>
							<div class="controls">
									 <?php echo $this->Form->input('Setting.contact_mobile', array('type'=>'text', 'class'=>'span6 m-wrap', 'label'=>false, 'div'=>false)); ?>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Contact Email</label>
							<div class="controls">
									 <?php echo $this->Form->input('Setting.contact_email', array('type'=>'text', 'class'=>'span6 m-wrap', 'label'=>false, 'div'=>false)); ?>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Admin Email</label>
							<div class="controls">
									 <?php echo $this->Form->input('Setting.admin_email', array('type'=>'text', 'class'=>'span6 m-wrap', 'label'=>false, 'div'=>false)); ?>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Support Email</label>
							<div class="controls">
									 <?php echo $this->Form->input('Setting.support_email', array('type'=>'text', 'class'=>'span6 m-wrap', 'label'=>false, 'div'=>false)); ?>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Logo</label>
							<div class="controls">
									 <?php echo $this->Form->input('Setting.new_logo', array('type'=>'file', 'label'=>false, 'div'=>false)); ?>
									 <div>Logo image dimension 225(width) x 62(height)px </div>
									 <?php if(!empty($this->data['Setting']['logo'])){?>
									  <div class="profile-pick">
											<?php 
											echo $this->Form->hidden('Setting.logo');
											if(!empty($this->data['Setting']['logo']) && file_exists(Configure::read('WebsiteLogo.RelativePath').$this->data['Setting']['logo'])){		
													echo $this->Html->image(Configure::read('WebsiteLogo.AbsolutePath').$this->data['Setting']['logo'].'?v='.time());
											  }else{
											  }?>
										 </div> 
										<?php }?>	
									 
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Copyright</label>
							<div class="controls">
									 <?php echo $this->Form->input('Setting.copyright', array('type'=>'text', 'class'=>'span6 m-wrap', 'label'=>false, 'div'=>false)); ?>
							</div>
						</div>
						<div class="form-actions">
							<?php echo $this->Form->submit('Save', array('type'=>'submit','class'=>'btn blue', 'div'=>false));?>
							<?php echo $this->Html->link('Cancel', array('controller'=>'dashboard', 'action'=>'index'), array('class'=>'btn', 'div'=>false));?>
						</div>
					<?php echo $this->form->end();?>
					<!-- END FORM-->
			</div>
			<!-- END VALIDATION STATES-->
		</div>
	</div>
	<!-- END PAGE CONTENT-->         
</div>
<!-- END PAGE CONTAINER-->