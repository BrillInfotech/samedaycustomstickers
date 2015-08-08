<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="<?php echo Configure::read('SiteSettings.siteUrl');?>/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="<?php echo Configure::read('SiteSettings.siteUrl');?>/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.date-picker').datepicker();
	});	
</script>

<div class="container-fluid">
<!-- BEGIN PAGE HEADER-->
<div class="row-fluid">
  <div class="span12">
    <!-- END BEGIN STYLE CUSTOMIZER -->
    <h3 class="page-title"> Coupons </h3>
    <?php echo $this->element('breadcrumb');?> </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
  <div class="span12">
    <!-- BEGIN VALIDATION STATES-->
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption"><i class="icon-reorder"></i><?php echo (!empty($coupon_id)?'Edit Coupon':'Add Coupon'); ?></div>
        <div class="tools"> <?php echo $this->Html->link(
							'<i class="icon-circle-arrow-left"></i> Back',
						array(
							'controller' => 'coupans',
							'action' => 'index'
						),
						array(
							'div' => false, 
							'escape' => false, 
							'style' => 'color:#fff; font-weight:bold;'
						)
					);?> </div>
      </div>
      <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?php echo $this->Form->create(
						'Coupon', 
						array(
							'url' => array('controller' => 'coupons', 'action' => 'create',$coupon_id),
							'id' => 'form_sample_2', 
							'class' => 'form-horizontal'
						)
				); ?> 
		<?php echo $this->Form->hidden('Coupon.id');?>
        <div class="alert alert-error hide">
          <button class="close" data-dismiss="alert"></button>
          You have some form errors. Please check below. </div>
        <div class="alert alert-success hide">
          <button class="close" data-dismiss="alert"></button>
          Your form validation is successful! </div>
        <div class="control-group">
			<label class="control-label">Coupon Name<span class="required">*</span></label>
			<div class="controls"> 
			  <?php echo $this->Form->input(
					'Coupon.name', 
					array(
						'type' => 'text', 
						'required' => false, 
						'class' => 'span5 m-wrap', 
						'label' => false, 
						'div' => false
					)
				); ?> 
			</div>
        </div>
        <div class="control-group">
          <label class="control-label">Coupon Code<span class="required">*</span></label>
			<div class="controls"> 
			<?php echo $this->Form->input(
					'Coupon.code',
					array(
						'type' => 'text',
						'required' => false, 
						'class' => 'span5 m-wrap', 
						'label' => false,
						'div' => false
					)
				); ?> 
			</div>
        </div>
        <div class="control-group">
          <label class="control-label">Discount<span class="required">*</span></label>
          <div class="controls">
            <div class="input-append"> 
			<?php echo $this->Form->input(
						'Coupon.discount',
						array(
							'type' => 'text',
							'required' => false, 
							'class' => 'span5 m-wrap', 
							'label' => false,
							'div' => false,
							'error' => false
						)
					); ?> 
				<span class="add-on">%</span> 
				<?php echo $this->Form->error('Coupon.discount');?>
			</div>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">Start Date<span class="required">*</span></label>
          <div class="controls">
            <div class="input-append"> 
				<?php echo $this->Form->input(
					'Coupon.start_date',
					array(
						'type' => 'text',
						'required' => false, 
						'class' => 'span9 m-wrap date-picker', 
						'label' => false,
						'div' => false,
						'placeHolder' => 'mm/dd/yyyy',
						'error' => false
					)
				); ?> 
				<span class="add-on"><i class="icon-calendar"></i></span> 
				<?php echo $this->Form->error('Coupon.start_date');?>
			</div>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">End Date<span class="required">*</span></label>
          <div class="controls">
            <div class="input-append"> 
					<?php echo $this->Form->input(
							'Coupon.end_date',
							array(
								'type' => 'text',
								'required' => false, 
								'class' => 'span9 m-wrap date-picker', 
								'label' => false,
								'div' => false,
								'placeHolder' => 'mm/dd/yyyy',
								'error' => false
							)
						); ?> 
				<span class="add-on"><i class="icon-calendar"></i></span>
				<?php echo $this->Form->error('Coupon.end_date');?>
			</div>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label">Apply Minimum Amount</label>
          <div class="controls"> 
		  <?php echo $this->Form->input(
						'Coupon.apply_amount',
						array(
						'type' => 'text',
						'required' => false, 
						'class' => 'span3 m-wrap', 
						'label' => false,
						'div' => false
					)
				); ?>
			</div>
        </div>
		<div class="control-group">
          <label class="control-label">Description</label>
          <div class="controls"> 
			<?php echo $this->Form->input(
				'Coupon.description',
				array(
					'type' => 'textarea',
					'required' => false, 
					'class' => 'span6 ckeditor m-wrap', 
					'label' => false,
					'div' => false
				)
			); ?> </div>
        </div>
		
		<div class="control-group">
			<label class="control-label"></label>
			<div class="controls"> 
			<label class="left-label">The number of times the coupon can be used in all:</label>
			 <?php echo $this->Form->input(
						'Coupon.total_time_use',
						array(
						'type' => 'text',
						'required' => false, 
						'class' => 'span2 m-wrap', 
						'label' => false,
						'div' => false
					)
				); ?> 
			</div>
		</div>
		<div class="control-group">
			<label class="control-label"></label>
			<div class="controls"> 
			<label class="left-label">The number of times each customer can use the coupon:</label>
			 <?php echo $this->Form->input(
						'Coupon.customer_total_time_use',
						array(
						'type' => 'text',
						'required' => false, 
						'class' => 'span2 m-wrap', 
						'label' => false,
						'div' => false
					)
				); ?> 
			</div>
		</div>
		
		<div class="control-group">
			<label class="control-label"></label>
			<div class="controls"> 
			<label class="left-label">The number of order to which the coupon can be applied:</label>
			 <?php echo $this->Form->input(
						'Coupon.order_total_time_apply',
						array(
						'type' => 'text',
						'required' => false, 
						'class' => 'span2 m-wrap', 
						'label' => false,
						'div' => false
					)
				); ?> 
			</div>
		</div>
		
		
		
        <div class="control-group">
          <label class="control-label"></label>
          <div class="controls"> 
		  <?php echo $this->Form->checkbox(
						'Coupon.active',
						array(
							'label' => false,
							'div' => false
						)
					); ?> 
					Active</div>
        </div>
        <div class="form-actions"> 
				<?php echo $this->Form->submit(
					'Save',
					array(
						'type' => 'submit',
						'class' => 'btn blue',
						'div' => false
					)
				);?> 
			<?php echo $this->Html->link(
					'Cancel',
					array(
						'controller' => 'coupans',
						'action' => 'index'
					),
					array(
					'class' => 'btn', 
					'div' => false
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
