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
          <div class="caption"><i class="icon-reorder"></i>All Materials</div>
		  <div class="caption" style="float:right"><i class="icon-cogs"></i><?php echo $this->Html->link('Add New Material', array('controller'=>'materials', 'action'=>'create'), array('style'=>'color:white')); ?></div>
		<div class="tools"></div>
		</div>
  <div class="portlet-body no-more-tables">
  <?php echo $this->element('flash_message');?>
   <table class="table-bordered table-striped table-condensed cf">
        <thead class="cf">
        <tr>
          <th width="5%">#</th>
          <th align="left">Name</th>
          <th align="left">Used For</th>
		  <th align="center">Active</th>
          <th align="center" width="15%">Action</th>		 
        </tr>
      </thead>
      <tbody>
       <?php if(!empty($material_data)){
			$n=1;
			foreach($material_data as $data){?>
			 <tr>
				<td align="center"><?php echo $n++;?></td>
				<td><?php echo $data['Material']['name'];?></td>
				<td><?php 
					if($data['Material']['is_used']==1){
						echo "Stickers";
					}elseif($data['Material']['is_used']==2){
						echo "Skins";
					}else{
						echo "Stickers, Skins";
					}
				?></td>
				<td align="center">
				<?php if($data['Material']['enabled'] == 1){
							echo $this->Html->link('<i class="icon-ok"></i> Active', array('controller'=>'materials', 'action'=>'change_status_material', $data['Material']['id'], 0), array('title'=>'Active','escape'=>false, 'class'=>'btn mini green'),'Are you sure to deactive select material');
					   }else{
							echo $this->Html->link('<i class="icon-remove"></i> Deactive', array('controller'=>'materials', 'action'=>'change_status_material', $data['Material']['id'], 1), array('title'=>'Deactive','escape'=>false, 'class'=>'btn mini red'),'Are you sure to active select material');
					   }?>
				</td>
				<td>
				<?php echo $this->Html->link('<i class="icon-edit"></i> Edit', array('controller'=>'materials', 'action'=>'create', $data['Material']['id']), array('title'=>'Edit','escape'=>false, 'title'=>'Edit','class'=>'btn mini purple'));?>&nbsp;
				&nbsp;
				<?php echo $this->Html->link('<i class="icon-remove"></i> Delete', array('controller'=>'materials', 'action'=>'delete_material', $data['Material']['id']), array('title'=>'Delete','title'=>'Delete','escape'=>false, 'class'=>'btn mini red'),'Are you sure to delete select Material details');?>&nbsp;						
				</td>
			 </tr>			
				
	<?php 	}
		 }else{?>
			<tr><td colspan="5" align="center">Record not found yet!</td></tr>
		 <?php }?>
      </tbody>
    </table>
	<?php echo $this->element('paginate');?>
  </div>
</div>
<!-- END SAMPLE TABLE PORTLET-->
  </div>
  </div>
</div>

