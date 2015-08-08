<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" type="text/css"/>
<!-- BEGIN:File Upload Plugin JS files-->
<script type="text/javascript" src="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
<!-- The basic File Upload plugin -->
<script type="text/javascript" src="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	/*Add New Size*/
	$('#add_new_size').on('click', function(){
		var total_size_option = $('#custom-sticker-size').find('.row-fluid').length;
		var clone = $('#custom-sticker-size').find('.row-fluid:last').clone();
		var remove_html = '<a class="jq_delete_option" num_row ='+parseInt(total_size_option+1)+' href="javascript:void(0);"><i class="icon-remove"></i></a>';
		$('#custom-sticker-size').find('.row-fluid:last').parent().append(clone);
		$('#custom-sticker-size').find('.row-fluid:last input').val('');
		
		$('#custom-sticker-size').find('.row-fluid:last input.select-width').attr('name', 'data[Sticker][size]['+parseInt(total_size_option+1)+'][width]');
		$('#custom-sticker-size').find('.row-fluid:last input').attr('id', 'size-width-'+parseInt(total_size_option+1));
		
		$('#custom-sticker-size').find('.row-fluid:last input.select-height').attr('name', 'data[Sticker][size]['+parseInt(total_size_option+1)+'][height]');
		$('#custom-sticker-size').find('.row-fluid:last input').attr('id', 'size-height-'+parseInt(total_size_option+1));
		
		$('#custom-sticker-size').find('.error-message').remove();
	   
		if(total_size_option > 1){
			$('#custom-sticker-size').find('.controls .remove_option').html('');
			$('#custom-sticker-size').find('.controls:last .remove_option').append(remove_html);
		}
	});
	
	/*Add Matrial*/
	$('#add_matrial').on('click', function(){
		var total_matrial_option = $('#custom-sticker-matrial').find('.row-fluid').length;
		var clone = $('#custom-sticker-matrial').find('.row-fluid:last').clone();
		var remove_html = '<a class="jq_delete_option" num_row ='+parseInt(total_matrial_option+1)+' href="javascript:void(0);"><i class="icon-remove"></i></a>';
		$('#custom-sticker-matrial').find('.row-fluid:last').parent().append(clone);
		$('#custom-sticker-matrial').find('.row-fluid:last .select-matrial').attr('selected', false);
		
		$('#custom-sticker-matrial').find('.row-fluid:last .select-matrial').attr('name', 'data[Sticker][matrial]['+parseInt(total_matrial_option+1)+']');
		$('#custom-sticker-matrial').find('.row-fluid:last .select-matrial').attr('id', 'matrial-'+parseInt(total_matrial_option+1));
		
		$('#custom-sticker-matrial').find('.error-message').remove();
	   
		if(total_matrial_option > 1){
			$('#custom-sticker-matrial').find('.controls .remove_option').html('');
			$('#custom-sticker-matrial').find('.controls:last .remove_option').append(remove_html);
		}
	});
	
	/*Add Matrial*/
	$('#add_new_quantity').on('click', function(){
		var total_quantity_option = $('#custom-sticker-quantity').find('.row-fluid').length;
		var clone = $('#custom-sticker-quantity').find('.row-fluid:last').clone();
		var remove_html = '<a class="jq_delete_option" num_row ='+parseInt(total_quantity_option+1)+' href="javascript:void(0);"><i class="icon-remove"></i></a>';
		$('#custom-sticker-quantity').find('.row-fluid:last').parent().append(clone);
		$('#custom-sticker-quantity').find('.row-fluid:last input').val('');
		
		$('#custom-sticker-quantity').find('.row-fluid:last input.select-quantity-unit').attr('name', 'data[Sticker][quantity]['+parseInt(total_quantity_option+1)+'][unit]');
		$('#custom-sticker-quantity').find('.row-fluid:last input.select-quantity-unit').attr('id', 'quantity-unit-'+parseInt(total_quantity_option+1));
		
		$('#custom-sticker-quantity').find('.row-fluid:last input.select-quantity-discount').attr('name', 'data[Sticker][quantity]['+parseInt(total_quantity_option+1)+'][discount]');
		$('#custom-sticker-quantity').find('.row-fluid:last input.select-quantity-discount').attr('id', 'quantity-discount-'+parseInt(total_quantity_option+1));
		
		$('#custom-sticker-quantity').find('.error-message').remove();
	   
		if(total_quantity_option > 1){
			$('#custom-sticker-quantity').find('.controls .remove_option').html('');
			$('#custom-sticker-quantity').find('.controls:last .remove_option').append(remove_html);
		}
	});

	$('#uploadImage').fileupload({
		url: AdminSiteUrl+'ajax/upload_image/',
		dataType: 'json',
		done: function(e, data) {
			$('.jq_image_upload_error').html('');
			$('.jq_image_upload_error').hide(0);
			if(data['result']['status'] == true){
				var image_url = "<?php echo Configure::read('Temp.AbsolutePath');?>"+data['result']['file_name']+'?v='+<?php echo time();?>;		
				$('#progress').hide(0);
				$('.image-preview').find('span').show(0);
				$('.image-preview').find('div.image_url').html(image_url);
				$('.image-preview').find('img').attr('src',image_url);
				$('#jq-image').val(data['result']['file_name']);
			}else{
				$('#progress').hide(0);
				$('.jq_image_upload_error').show(0);
				$('.jq_image_upload_error').html(data['result']['errors']['error']);
			}
		},
		 progressall: function (e, data) {
		 var progress = parseInt(data.loaded / data.total * 100, 10);
			$('#progress').show(0);
			$('#progress .progress-bar').css(
				'width',
				progress + '%'
			);
		}
	});
});

</script>
<div class="container-fluid">
  <div class="row-fluid">
    <div class="span12">
      <!-- BEGIN PAGE TITLE & BREADCRUMB-->
      <h3 class="page-title"> Stickers </h3>
      <?php echo $this->element('breadcrumb');?>
      <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
  </div>
</div>
<div class="container-fluid">
  <!-- BEGIN PAGE HEADER-->
  <!-- BEGIN PAGE CONTENT-->
  <div class="row-fluid">
    <div class="span12">
      <!-- BEGIN SAMPLE FORM PORTLET-->
      <div class="portlet box blue">
        <div class="portlet-title">
          <div class="caption"><i class="icon-reorder"></i><?php echo (!empty($material_id)?'Edit Sticker':'Add New Sticker'); ?></div>
          <div class="tools">
		  <?php echo $this->Html->link(
						'<i class="icon-circle-arrow-left"></i> Back', 
						array('controller'=>'stickers', 'action'=>'create_sticker'), 
						array('div'=>false, 'escape'=>false, 'style'=>'color:#fff; font-weight:bold;')
					);?>
			</div>
        </div>
        <div class="portlet-body form">
			  <!-- BEGIN FORM-->
        <?php echo $this->Form->create('Sticker', array(
							'url'=>array('controller'=>'stickers', 'action'=>'create'), 
							'class'=>'form-horizontal')
						); ?> 
		<?php echo $this->Form->hidden('Sticker.id');?>  
		
		<div class="control-group">
			<label class="control-label">Name<span class="required">*</span></label>
			<div class="controls"> 
				<?php echo $this->Form->input(
							'Sticker.name', 
							array(
								'type'=>'text', 
								'class'=>'span5 m-wrap', 
								'label'=>false, 
								'required'=>false,
								'div'=>false
							)
						); ?> 
			</div>
        </div>
		
		<div class="control-group">
			<label class="control-label">Price<span class="required">*</span></label>
			<div class="controls"> 
				<span class="btn">$</span>
				<?php echo $this->Form->input(
							'Sticker.price', 
							array(
								'type'=>'text', 
								'class'=>'span2 m-wrap', 
								'label'=>false, 
								'required'=>false,
								'div'=>false,
								'errors' => false
							)
						); ?> 
				
			</div>
        </div>
		
		<div class="control-group">
			<label class="control-label" for="photo">Image<span class="required">*</span></label>
				<div class="controls">
				<?php echo $this->Form->hidden('Sticker.new_image', array('id' => 'jq-image'));?>
				
					<span class="btn btn-success fileinput-button">
						<i class="glyphicon glyphicon-plus"></i>
						<span>Select files...</span>
						<!-- The file input field used as target for the file upload widget -->
						<?php echo $this->Form->file('files', array('required' => false, 'id' => 'uploadImage', 'name' => 'files'));?>
					</span>	
					<br style="clear:both"/>
					<span class="help-block">Upload only JPG, PNG and GIF type file</span>
					<?php echo $this->Form->error('Sticker.image');?>
					<div class="jq_image_upload_error" style="display:none; color:#FF0000;"></div>
					<div id="progress" class="progress" style="display:none;">
						<div class="progress-bar progress-bar-success">Uploading...</div>
					</div>
					<div class="image-preview">
						<?php echo $this->Html->image('backend/no_image.png', array('style'=>'max-height:100px;'));?>
					</div>
				<!-- The global progress bar -->
			</div>
        </div>
		<div class="control-group">
			<label class="control-label">Size<span class="required">*</span></label>
			<div class="controls"> 
				<div class="span6">
					<div class="row-fluid">
						<div class="span5">
							<label class="sample-label">Width</label>
						</div>
						<div class="span5">
							<label class="sample-label">Height</label>
						</div>
					</div>
					<div id="custom-sticker-size">
						<div class="row-fluid">
							<div class="span4">
								<?php echo $this->Form->input(
											'Sticker.size.1.width', 
											array(
												'type'=>'text', 
												'class'=>'span11 m-wrap select-width', 
												'label'=>false, 
												'required'=>false,
												'div'=>false,
												'placeholder' => 'Width'
											)
										); ?> 
							</div>
							<div class="span4">
								<?php echo $this->Form->input(
										'Sticker.size.1.height', 
										array(
											'type'=>'text', 
											'class'=>'span11 m-wrap select-height', 
											'label'=>false, 
											'required'=>false,
											'div'=>false,
											'placeholder' => 'Height'
										)
									); ?> 
							</div>
						</div>
					</div>
					<?php echo $this->Form->error('Sticker.size');?>
					<div class="row-fluid padd-top5">
						<div class="span6">
						<?php echo $this->Html->link(
									'<i class="icon-plus"></i> Add New Size', 'javascript:void(0)', 
									array(
										'title' => 'Add New Size',
										'escape' => false, 
										'class' => 'btn mini blue', 
										'id' => 'add_new_size'
									)
								);?>
						</div>		
					</div>
				</div>
			</div>
        </div>
		
		<div class="control-group">
			<label class="control-label">Material<span class="required">*</span></label>
			<div class="controls"> 
				<div class="span6">
					<div class="row-fluid">
						<div class="span10">
							<label class="sample-label">Select Material</label>
						</div>
					</div>
					<div id="custom-sticker-matrial">
						<div class="row-fluid">
							<div class="span8">
								<?php echo $this->Form->input(
											'Sticker.material.1', 
											array(
												'type'=>'select', 
												'class'=>'span12 m-wrap select-matrial', 
												'label'=>false, 
												'required'=>false,
												'div'=>false,
												'options' => array('1','2', '3'),
												'empty' => 'Select Material'
											)
										); ?> 
							</div>
						</div>
					</div>
					<?php echo $this->Form->error('Sticker.material');?>
					<div class="row-fluid padd-top5">
						<div class="span6">
						<?php echo $this->Html->link(
									'<i class="icon-plus"></i> Add New Material', 'javascript:void(0)', 
									array(
										'title' => 'Add New Material',
										'escape' => false, 
										'class' => 'btn mini blue', 
										'id' => 'add_matrial'
									)
								);?>
						</div>		
					</div>
				</div>
			</div>
        </div>
		
		<div class="control-group">
			<label class="control-label">Quantity<span class="required">*</span></label>
			<div class="controls"> 
				<div class="span6">
					<div class="row-fluid">
						<div class="span5">
							<label class="sample-label">Unit</label>
						</div>
						<div class="span5">
							<label class="sample-label">Discount</label>
						</div>
					</div>
					<div id="custom-sticker-quantity">
						<div class="row-fluid">
							<div class="span5">
								<?php echo $this->Form->input(
											'Sticker.quantity.1.unit', 
											array(
												'type'=>'text', 
												'class'=>'span12 m-wrap select-quantity-unit', 
												'label'=>false, 
												'required'=>false,
												'div'=>false,
												'placeholder' => ''
											)
										); ?> 
							</div>
							
							<div class="span5">
								<?php echo $this->Form->input(
											'Sticker.quantity.1.discount', 
											array(
												'type'=>'text', 
												'class'=>'span5 m-wrap select-quantity-discount', 
												'label'=>false, 
												'required'=>false,
												'div'=>false,
												'placeholder' => ''
											)
										); ?> 
									<span class="btn">%</span>	
									
							</div>
							
						</div>
					</div>
					<?php echo $this->Form->error('Sticker.quantity');?>
					<div class="row-fluid padd-top5">
						<div class="span6">
						<?php echo $this->Html->link(
									'<i class="icon-plus"></i> Add New Quantity', 'javascript:void(0)', 
									array(
										'title' => 'Add New Quantity',
										'escape' => false, 
										'class' => 'btn mini blue', 
										'id' => 'add_new_quantity'
									)
								);?>
						</div>		
					</div>
				</div>
			</div>
        </div>
		<div class="form-actions"> 
			<?php echo $this->Form->submit('Save', array('type'=>'submit','class'=>'btn blue', 'div'=>false, 'required' => false));?> 	
			<?php echo $this->Html->link('Cancel', array('controller'=>'stickers', 'action'=>'index'), array('class'=>'btn', 'div'=>false));?> 
		</div>
		<?php echo $this->form->end();?>
			<!-- END FORM-->
		</div>
		</div>
      </div>
    </div>
    <!-- END SAMPLE FORM PORTLET-->
  </div>
</div>
<!-- END PAGE CONTENT-->
</div>
<!-- END PAGE CONTAINER-->
