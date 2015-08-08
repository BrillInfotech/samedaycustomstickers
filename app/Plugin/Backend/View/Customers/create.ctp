<script type="text/javascript" src="<?php echo Configure::read('SiteSettings.siteUrl');?>/plugins/ckeditor/ckeditor.js"></script>
<div class="container-fluid">
<!-- BEGIN PAGE HEADER-->
<div class="row-fluid">
  <div class="span12">
    <!-- END BEGIN STYLE CUSTOMIZER -->
    <h3 class="page-title"> Customers </h3>
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
        <div class="caption"><i class="icon-reorder"></i><?php echo (!empty($page_id)?'Edit Page':'Add New Customer'); ?></div>
         <div class="tools">
				<?php echo $this->Html->link(
							'<i class="icon-circle-arrow-left"></i> Back',
						array(
							'controller'=>'customers',
							'action'=>'index'
						),
						array(
							'div'=>false, 
							'escape'=>false, 
							'style'=>'color:#fff; font-weight:bold;'
						)
					);?>
			</div>
      </div>
      <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?php echo $this->Form->create(
						'Customer', 
						array(
							'url'=>array('controller'=>'customers', 'action'=>'create', $customer_id),
							'id'=>'form_sample_2', 
							'class'=>'form-horizontal'
						)
				); ?> 
		<?php echo $this->Form->hidden('Customer.id');?>
        <div class="alert alert-error hide">
          <button class="close" data-dismiss="alert"></button>
          You have some form errors. Please check below. </div>
        <div class="alert alert-success hide">
          <button class="close" data-dismiss="alert"></button>
          Your form validation is successful! 
		</div>
        <div class="control-group">
          <label class="control-label">Name<span class="required">*</span></label>
          <div class="controls"> 
			<?php echo $this->Form->input(
							'Customer.name', 
							array(
								'type'=>'text', 
								'required'=>false, 
								'class'=>'span5 m-wrap', 
								'label'=>false, 
								'div'=>false
							)
						); ?> 
						</div>
        </div>
		<div class="control-group">
          <label class="control-label">Email<span class="required">*</span></label>
          <div class="controls"> <?php echo $this->Form->input(
								'Customer.email',
								array(
								'type'=>'text',
								'required'=>false, 
								'class'=>'span5 m-wrap', 
								'label'=>false,
								'div'=>false
							)
						); ?> 
			</div>
        </div>
		<div class="control-group">
          <label class="control-label">Password</label>
          <div class="controls"> <?php echo $this->Form->input(
								'Customer.new_password',
								array(
								'type'=>'password',
								'required'=>false, 
								'class'=>'span5 m-wrap', 
								'label'=>false,
								'div'=>false
							)
						); ?> 
			</div>
        </div>
		<div class="control-group">
          <label class="control-label">Confirm Password</label>
          <div class="controls"> <?php echo $this->Form->input(
								'Customer.confirm_password',
								array(
								'type'=>'password',
								'required'=>false, 
								'class'=>'span5 m-wrap', 
								'label'=>false,
								'div'=>false
							)
						); ?> 
			</div>
        </div>
		<div class="control-group">
          <label class="control-label"></label>
          <div class="controls"> <?php echo $this->Form->checkbox(
								'Customer.active',
								array(
								'label'=>false,
								'div'=>false
							)
						); ?> Active</div>
        </div>
        <div class="form-actions"> 
			<?php echo $this->Form->submit(
								'Save',
								array(
								'type'=>'submit',
								'class'=>'btn blue',
								'div'=>false
							)
						);?> 
			<?php echo $this->Html->link(
								'Cancel',
								array(
								'controller'=>'customers',
								'action'=>'index'),
								array(
								'class'=>'btn', 
								'div'=>false
							)
						);?> 
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
