<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<h3 class="page-title">
				Stickers
			</h3>
			<?php echo $this->element('breadcrumb');?>
			<!-- END PAGE TITLE & BREADCRUMB-->
		</div>
	</div>
</div>
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<!-- BEGIN SAMPLE TABLE PORTLET-->
<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
  <?php echo $this->element('flash_message');?>
  <div class="row-fluid">
  
   <!--Category Listing Section-->
   <div class="span12">
<div class="portlet box blue">
  <div class="portlet-title">
          <div class="caption"><i class="icon-reorder"></i>All Sticker</div>
		  <div class="caption" style="float:right"><i class="icon-cogs"></i><?php echo $this->Html->link('Add New Sticker', array('controller'=>'stickers', 'action'=>'create_sticker'), array('style'=>'color:white')); ?></div>
		<div class="tools"></div>
		</div>
  <div class="portlet-body">
  <?php echo $this->element('flash_message');?>
    <table class="table table-striped table-hover">
      <thead>
        <tr>
          <th width="5%">#</th>
          <th>Name</th>
          <th>Image</th>
          <th align="center" width="10%">Action</th>		 
        </tr>
      </thead>
      <tbody>
       <?php if(!empty($sticker_data)){
					$n=1;
					foreach($sticker_data as $data){?>
					 <tr>
						<td align="center"><?php echo $n++;?></td>
						<td><?php echo $data['Sticker']['name'];?></td>
						<td>
						<?php echo $this->Html->link('<i class="icon-edit"></i>', array('controller'=>'stickers', 'action'=>'create_Sticker', $data['Sticker']['id']), array('title'=>'Edit','escape'=>false, 'title'=>'Edit','class'=>'btn mini purple'));?>&nbsp;
						<?php if($data['Sticker']['enabled'] == 1){
								echo $this->Html->link('<i class="icon-ok"></i>', array('controller'=>'stickers', 'action'=>'change_status_Sticker', $data['Sticker']['id'], 0), array('title'=>'Active','escape'=>false, 'class'=>'btn mini green'),'Are you sure to deactive select Sticker details');
							   }else{
								echo $this->Html->link('<i class="icon-remove"></i>', array('controller'=>'stickers', 'action'=>'change_status_Sticker', $data['Sticker']['id'], 1), array('title'=>'Deactive','escape'=>false, 'class'=>'btn mini red'),'Are you sure to active select Sticker details');
							   }?>&nbsp;
							   <?php echo $this->Html->link('<i class="icon-remove"></i>', array('controller'=>'stickers', 'action'=>'delete_Sticker', $data['Sticker']['id']), array('title'=>'Delete','title'=>'Delete','escape'=>false, 'class'=>'btn mini red'),'Are you sure to delete select Sticker details');?>&nbsp;						
						</td>
					 </tr>			
						
			<?php 	}
				 }else{?>
				 	<tr><td colspan="5" align="center" style="text-align:center;">Record not found yet!</td></tr>
				 <?php }?>
      </tbody>
    </table>
	<?php //echo $this->element('paginate');?>
  </div>
</div>
<!-- END SAMPLE TABLE PORTLET-->
  </div>
  </div>
</div>

