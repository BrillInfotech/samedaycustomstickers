<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->   
				<div class="row-fluid">
					<div class="span12">
						<!-- END BEGIN STYLE CUSTOMIZER -->     
						<h3 class="page-title">
							My Profile
						</h3>
						<?php echo $this->element('breadcrumb');?>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row-fluid">
					<div class="span12">
						<!-- BEGIN VALIDATION STATES-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>My Profile</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
							     <?php echo $this->Form->create('User', array('url'=>array('controller'=>'users', 'action'=>'edit_profile'), 'id'=>'form_sample_2', 'class'=>'form-horizontal','type'=>'file'));?>
								 <?php echo $this->Form->hidden('User.id');?>
									<div class="alert alert-error hide">
										<button class="close" data-dismiss="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success hide">
										<button class="close" data-dismiss="alert"></button>
										Your form validation is successful!
									</div>
									<div class="control-group">
										<label class="control-label">User Name<span class="required">*</span></label>
										<div class="controls">
												 <?php echo $this->Form->input('User.name', array('type'=>'text', 'class'=>'span4 m-wrap', 'label'=>false, 'div'=>false)); ?>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">User Role<span class="required">*</span></label>
										<div class="controls">
												 <?php echo $this->Form->input('User.role', array('type'=>'select', 'class'=>'span4 m-wrap','options'=>Configure::read('UserRole'),  'label'=>false, 'div'=>false, 'empty'=>'Select User Role')); ?>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Username<span class="required">*</span></label>
										<div class="controls">
												 <?php echo $this->Form->input('User.username', array('type'=>'text', 'class'=>'span4 m-wrap', 'label'=>false, 'div'=>false)); ?>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Email</label>
										<div class="controls">
												 <?php echo $this->Form->input('User.email', array('type'=>'text', 'class'=>'span4 m-wrap', 'label'=>false, 'div'=>false)); ?>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Mobile No</label>
										<div class="controls">
												 <?php echo $this->Form->input('User.mobile', array('type'=>'text', 'class'=>'span4 m-wrap', 'label'=>false, 'div'=>false)); ?>
										</div>
									</div>
									<div class="control-group">
									  <label class="control-label">Photo</label>
									  <div class="controls"> <?php echo $this->Form->input('User.new_photo', array('type'=>'file','label'=>false)); ?> 
										<div class="profile-pick">
											<?php 
											echo $this->Form->hidden('User.photo');
											if(!empty($this->data['User']['photo']) && file_exists(Configure::read('UserPhoto.RelativePath').$this->data['User']['photo'])){		
													echo $this->Html->image(Configure::read('UserPhoto.AbsolutePath').$this->data['User']['photo']);
											  }else{
													echo $this->General->getGenderBlankPhoto();
											  }?>
										 </div> 
									  </div>
									</div>
									<div class="control-group">
										<label class="control-label">Active</label>
										<div class="controls">
												 <?php echo $this->Form->input('User.active', array('type'=>'checkbox', 'class'=>'span4 m-wrap', 'label'=>false, 'div'=>false)); ?>
										</div>
									</div>
									<div class="form-actions">
										<?php echo $this->Form->submit('Save', array('type'=>'submit','class'=>'btn blue', 'div'=>false));?>
										<?php echo $this->Html->link('Cancel', array('controller'=>'users', 'action'=>'index'), array('class'=>'btn', 'div'=>false));?>
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