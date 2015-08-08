<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<h3 class="page-title">
				FAQ
			</h3>
			<?php echo $this->element('breadcrumb');?>
			<!-- END PAGE TITLE & BREADCRUMB-->
		</div>
	</div>
</div>
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">

<div class="row-fluid">
  <div class="span12">
    <!-- BEGIN VALIDATION STATES-->
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption"><i class="icon-reorder"></i><?php echo (!empty($faq_id)?'Edit FAQ':'Add New FAQ'); ?></div>
         <div class="tools"><?php echo $this->Html->link('<i class="icon-circle-arrow-left"></i> Back', array('controller'=>'pages', 'action'=>'index'), array('div'=>false, 'escape'=>false, 'style'=>'color:#fff; font-weight:bold;'));?></div>
      </div>
      <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?php echo $this->Form->create(
							'Faq', 
							array(
								'url'=>array('controller'=>'pages', 'action'=>'create_faq', $faq_id), 
								'id'=>'faq_form', 
								'class'=>'form-horizontal'
							)
						); ?> 
		<?php echo $this->Form->hidden('Faq.id');?>
        <div class="alert alert-error hide">
          <button class="close" data-dismiss="alert"></button>
          You have some form errors. Please check below. </div>
        <div class="alert alert-success hide">
          <button class="close" data-dismiss="alert"></button>
          Your form validation is successful! </div>
        <div class="control-group">
          <label class="control-label">Title<span class="required">*</span></label>
          <div class="controls"> 
			<?php echo $this->Form->input(
							'Faq.title', 
							array(
								'type'=>'text', 
								'required'=>false, 
								'class'=>'span7 m-wrap', 
								'label'=>false, 
								'div'=>false
								)
							); ?> </div>
			</div>
		 
        <div class="control-group">
          <label class="control-label">Description<span class="required">*</span></label>
          <div class="controls" style="width:80%"> 
		  <?php echo $this->Form->input(
							'Faq.description', 
							array(
								'type'=>'textarea', 
								'required'=>false, 
								'class'=>'span8 m-wrap', 
								'label'=>false, 
								'div'=>false)); ?> </div>
        </div>
		
        <div class="form-actions"> 
			<?php echo $this->Form->submit('Save', array('type'=>'submit','class'=>'btn blue', 'id' => 'save_faq', 'div'=>false));?> 
			<?php echo $this->Html->link('Cancel', array('controller'=>'pages', 'action'=>'faq'), array('class'=>'btn', 'div'=>false));?> 
		</div>
        <?php echo $this->form->end();?>
        <!-- END FORM-->
      </div>
      <!-- END VALIDATION STATES-->
    </div>
  </div>

</div>
