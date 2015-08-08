<script type="text/javascript" src="<?php echo Configure::read('SiteSettings.siteUrl');?>/plugins/ckeditor/ckeditor.js"></script>
<div class="container-fluid">
<!-- BEGIN PAGE HEADER-->
<div class="row-fluid">
  <div class="span12">
    <!-- END BEGIN STYLE CUSTOMIZER -->
    <h3 class="page-title"> Customers Shipping Address </h3>
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
        <div class="caption"><i class="icon-reorder"></i><?php echo (!empty($page_id)?'Edit Page':'Add New Shipping Address'); ?></div>
         <div class="tools"><?php echo $this->Html->link(
							'<i class="icon-circle-arrow-left"></i> Back',
										array(
										'controller'=>'customers',
										'action'=>'shipping_address',
										$customer_id),
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
						'CustomerShippingAddress', 
						array(
							'url'=>array('controller'=>'customers', 'action'=>'create_shipping_address', $customer_id, $shipping_id),
							'id'=>'form_sample_2', 
							'class'=>'form-horizontal'
						)
				); ?> 
		<?php echo $this->Form->hidden('CustomerShippingAddress.id');?>
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
							'CustomerShippingAddress.name', 
							array(
								'type'=>'text', 
								'required'=>false, 
								'class'=>'span5 m-wrap', 
								'label'=>false, 
								'div'=>false
							)
						); ?> </div>
        </div>
		<div class="control-group">
          <label class="control-label">Phone<span class="required">*</span></label>
          <div class="controls"> <?php echo $this->Form->input(
								'CustomerShippingAddress.phone',
								array(
								'type'=>'text',
								'required'=>false, 
								'class'=>'span5 m-wrap', 
								'label'=>false,
								'div'=>false
							)
						); ?> </div>
        </div>
		<div class="control-group">
          <label class="control-label">Address1<span class="required">*</span></label>
          <div class="controls"> 
			<?php echo $this->Form->input(
							'CustomerShippingAddress.address1', 
							array(
								'type'=>'text', 
								'required'=>false, 
								'class'=>'span5 m-wrap', 
								'label'=>false, 
								'div'=>false
							)
						); ?> </div>
        </div>
		<div class="control-group">
          <label class="control-label">Address2</label>
          <div class="controls"> 
			<?php echo $this->Form->input(
							'CustomerShippingAddress.address2', 
							array(
								'type'=>'text', 
								'required'=>false, 
								'class'=>'span5 m-wrap', 
								'label'=>false, 
								'div'=>false
							)
						); ?> </div>
        </div>
		<div class="control-group">
          <label class="control-label">City<span class="required">*</span></label>
          <div class="controls"> 
			<?php echo $this->Form->input(
							'CustomerShippingAddress.city', 
							array(
								'type'=>'text', 
								'required'=>false, 
								'class'=>'span5 m-wrap', 
								'label'=>false, 
								'div'=>false
							)
						); ?> </div>
        </div>
		<div class="control-group">
          <label class="control-label">State</label>
          <div class="controls"> 
			<?php echo $this->Form->input(
							'CustomerShippingAddress.state', 
							array(
								'type'=>'text', 
								'required'=>false, 
								'class'=>'span5 m-wrap', 
								'label'=>false, 
								'div'=>false
							)
						); ?> </div>
        </div>
		<div class="control-group">
          <label class="control-label">Zipcode<span class="required">*</span></label>
          <div class="controls"> 
			<?php echo $this->Form->input(
							'CustomerShippingAddress.zipcode', 
							array(
								'type'=>'text', 
								'required'=>false, 
								'class'=>'span5 m-wrap', 
								'label'=>false, 
								'div'=>false
							)
						); ?> </div>
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
