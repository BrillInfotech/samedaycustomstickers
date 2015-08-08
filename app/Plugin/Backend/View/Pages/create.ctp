<script type="text/javascript" src="<?php echo Configure::read('SiteSettings.siteUrl');?>/plugins/ckeditor/ckeditor.js"></script>
<div class="container-fluid">
<!-- BEGIN PAGE HEADER-->
<div class="row-fluid">
  <div class="span12">
    <!-- END BEGIN STYLE CUSTOMIZER -->
    <h3 class="page-title"> Pages </h3>
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
        <div class="caption"><i class="icon-reorder"></i><?php echo (!empty($page_id)?'Edit Page':'Add New Page'); ?></div>
         <div class="tools"><?php echo $this->Html->link('<i class="icon-circle-arrow-left"></i> Back', array('controller'=>'pages', 'action'=>'index'), array('div'=>false, 'escape'=>false, 'style'=>'color:#fff; font-weight:bold;'));?></div>
      </div>
      <div class="portlet-body form">
        <!-- BEGIN FORM-->
        <?php echo $this->Form->create('Page', array('url'=>array('controller'=>'pages', 'action'=>'create', $page_id), array('id'=>'form_sample_2', 'class'=>'form-horizontal'))); ?> <?php echo $this->Form->hidden('Page.id');?>
        <div class="alert alert-error hide">
          <button class="close" data-dismiss="alert"></button>
          You have some form errors. Please check below. </div>
        <div class="alert alert-success hide">
          <button class="close" data-dismiss="alert"></button>
          Your form validation is successful! </div>
        <div class="control-group">
          <label class="control-label">Title<span class="required">*</span></label>
          <div class="controls"> <?php echo $this->Form->input('Page.title', array('type'=>'text', 'required'=>false, 'class'=>'span4 m-wrap', 'label'=>false, 'div'=>false)); ?> </div>
        </div>
		<div class="control-group">
          <label class="control-label">Sub Title</label>
          <div class="controls"> <?php echo $this->Form->input('Page.sub_title', array('type'=>'text', 'required'=>false, 'class'=>'span4 m-wrap', 'label'=>false, 'div'=>false)); ?> </div>
        </div>
		
        <div class="control-group">
          <label class="control-label">Heading<span class="required">*</span></label>
          <div class="controls"> <?php echo $this->Form->input('Page.heading', array('type'=>'text', 'required'=>false, 'class'=>'span6 m-wrap', 'label'=>false, 'div'=>false)); ?> </div>
        </div>
        
        <div class="control-group">
          <label class="control-label">Content</label>
          <div class="controls" style="width:80%"> <?php echo $this->Form->input('Page.content', array('type'=>'textarea', 'required'=>false, 'class'=>'span8 ckeditor m-wrap', 'label'=>false, 'div'=>false)); ?> </div>
        </div>
		
		<div class="control-group">
          <label class="control-label"></label>
          <div class="controls"> <?php echo $this->Form->checkbox('Page.use_left_navigation', array('label'=>false, 'div'=>false)); ?> Use Left Navigation</div>
        </div>
        <div class="form-actions"> <?php echo $this->Form->submit('Save', array('type'=>'submit','class'=>'btn blue', 'div'=>false));?> 
		<?php echo $this->Html->link('Cancel', array('controller'=>'pages', 'action'=>'index'), array('class'=>'btn', 'div'=>false));?> </div>
        <?php echo $this->form->end();?>
        <!-- END FORM-->
      </div>
      <!-- END VALIDATION STATES-->
    </div>
  </div>
  <!-- END PAGE CONTENT-->
</div>
<!-- END PAGE CONTAINER-->
