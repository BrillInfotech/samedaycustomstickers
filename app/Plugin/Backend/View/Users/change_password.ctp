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
								<div class="caption"><i class="icon-reorder"></i>Change password</div>
								 <div class="tools"><?php echo $this->Html->link('<i class="icon-circle-arrow-left"></i> Back', array('controller'=>'users', 'action'=>'edit_profile'), array('div'=>false, 'escape'=>false, 'style'=>'color:#fff; font-weight:bold;'));?></div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
							     <?php echo $this->Form->create('User', array('url'=>array('controller'=>'users', 'action'=>'change_password'), 'id'=>'form_sample_2', 'class'=>'form-horizontal','type'=>'file'));?>
									<div class="alert alert-error hide">
										<button class="close" data-dismiss="alert"></button>
										You have some form errors. Please check below.
									</div>
									<div class="alert alert-success hide">
										<button class="close" data-dismiss="alert"></button>
										Your form validation is successful!
									</div>
									<div class="control-group">
										<label class="control-label">Old password<span class="required">*</span></label>
										<div class="controls">
												 <?php echo $this->Form->input('User.old_password', array('type'=>'password', 'class'=>'span4 m-wrap', 'label'=>false, 'div'=>false)); ?>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">New Password<span class="required">*</span></label>
										<div class="controls">
												 <?php echo $this->Form->input('User.new_password', array('type'=>'password', 'class'=>'span4 m-wrap', 'label'=>false, 'div'=>false)); ?>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label">Confirm password<span class="required">*</span></label>
										<div class="controls">
												 <?php echo $this->Form->input('User.confirm_password', array('type'=>'password', 'class'=>'span4 m-wrap', 'label'=>false, 'div'=>false)); ?>
										</div>
									</div>
									<div class="form-actions">
										<?php echo $this->Form->submit('Change password', array('type'=>'submit','class'=>'btn blue', 'div'=>false));?>
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