<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<h3 class="page-title">
				Materials
			</h3>
			<?php echo $this->element('breadcrumb');?>
			<!-- END PAGE TITLE & BREADCRUMB-->
		</div>
	</div>
</div>
<div class="container-fluid"
<!-- END Material HEADER-->
<!-- BEGIN Material CONTENT-->
<div class="row-fluid">
  <div class="span12">
    <!-- BEGIN VALIDATION STATES-->
    <div class="portlet box blue">
      <div class="portlet-title">
        <div class="caption"><i class="icon-reorder"></i><?php echo (!empty($material_id)?'Edit Material':'Add New Material'); ?></div>
         <div class="tools"><?php echo $this->Html->link('<i class="icon-circle-arrow-left"></i> Back', array('controller'=>'materials', 'action'=>'index'), array('div'=>false, 'escape'=>false, 'style'=>'color:#fff; font-weight:bold;'));?></div>
      </div>
      <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?php echo $this->Form->create('Material', array(
							'url'=>array('controller'=>'materials', 'action'=>'create'), 
							'class'=>'form-horizontal')
						); ?> 
		<?php echo $this->Form->hidden('Material.id');?>           
		<div class="control-group">
          <label class="control-label">Material Name<span class="required">*</span></label>
          <div class="controls"> <?php echo $this->Form->input('Material.name', array('type'=>'text', 'class'=>'span5 m-wrap', 'label'=>false, 'required'=>false,'div'=>false)); ?> </div>
        </div>
		<div class="control-group radio-label">
            <label class="control-label" for="stickers">Used For</label>
			<?php $options = array('1'=>'Stickers', '2'=>'Skins', '3'=>'Both');?>
            <div class="controls"> <?php echo $this->Form->input('Material.is_used', 
													array(
														'type'=>'radio',
														'options'=>$options, 
														'class'=>'span6 m-wrap',
														'label'=>false, 
														'legend'=>false, 
														'div'=>false,
														'default' => '3'
													)
												); ?>
									</div>
         </div>		
        <div class="form-actions"> 
			<?php echo $this->Form->submit('Save', array('type'=>'submit','class'=>'btn blue', 'div'=>false));?> 
			<?php echo $this->Html->link(
							'Cancel', 
							array('controller'=>'materials', 'action'=>'index'), 
							array('class'=>'btn', 'div'=>false)
						);?> 
		</div>
        <?php echo $this->Form->end();?>
        <!-- END FORM-->
      </div>
      <!-- END VALIDATION STATES-->
    </div>
  </div>
  <!-- END Material CONTENT-->
</div>
</div>
<!-- END Material CONTAINER-->
