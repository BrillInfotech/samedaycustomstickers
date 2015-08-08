<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<h3 class="page-title">
				Pages
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
     <?php echo $this->element('flash_message');?>
      <!-- BEGIN SAMPLE TABLE PORTLET-->
      <!-- BEGIN SAMPLE TABLE PORTLET-->
      <div class="portlet box blue">
        <div class="portlet-title">
          <div class="caption"><i class="icon-cogs"></i>All Page</div>
		  <div class="tools"><?php echo $this->Html->link('<i class="icon-plus"></i> Add Page', array('controller'=>'pages', 'action'=>'create'), array('div'=>false, 'escape'=>false, 'style'=>'color:#fff; font-weight:bold;'));?></div>
        </div>
        <div class="portlet-body no-more-tables">
          <table class="table-bordered table-striped table-condensed cf">
            <thead class="cf">
              <tr>
				<th width="5%">#</th>
                <th align="left">Title</th>
				<th align="left">Sub Title</th>
				<th align="left">Heading</th>
				<th align="center">Active</th>
				<th width="15%" align="center"></th>
              </tr>
            </thead>
            <tbody>
			<?php if(!empty($page_data)){
					$n=1;
					if($this->Paginator->counter('%page%') !=  null){
						$n = (($this->Paginator->counter('%page%')-1) * 10) + $n;
					}
					foreach($page_data as $data){?>
					 <tr>
						<td data-title="#" align="center"><?php echo $n++;?></td>
						<td data-title="Title"><?php echo $data['Page']['title'];?></td>
						<td data-title="Sub Title"><?php echo $data['Page']['sub_title'];?></td>
						<td data-title="Heading"><?php echo $data['Page']['heading'];?></td>
						<td data-title="Active" align="center">
						<?php if($data['Page']['active'] == 1){
									echo $this->Html->link('<i class="icon-ok"></i> Active', array('controller'=>'pages', 'action'=>'change_status', $data['Page']['id'], 0), array('alt'=>'Edit','escape'=>false, 'class'=>'btn mini green'));
							   }else{
									echo $this->Html->link('<i class="icon-remove"></i> Deactive', array('controller'=>'pages', 'action'=>'change_status', $data['Page']['id'], 1), array('alt'=>'Edit','escape'=>false, 'class'=>'btn mini red'));
							   }?>
						</td>
						<td align="center">
						<?php echo $this->Html->link('<i class="icon-edit"></i> Edit', array('controller'=>'pages', 'action'=>'create', $data['Page']['id']), array('alt'=>'Edit','escape'=>false, 'class'=>'btn mini purple'));?>
						&nbsp;&nbsp;
						<?php echo $this->Html->link(
												'<i class="icon-edit"></i> Delete',
												array(
													'controller' => 'pages',
													'action' => 'delete',
													$data['Page']['id']), 
												array(
														'alt' => 'Delete',
														'escape' => false,
														'class' => 'btn mini red'
												),
											'Are you sure! You want to delete this record.'	
										);?>
						</td>
					 </tr>			
						
			<?php 	}
				 }else{?>
				 	<tr><td colspan="6" align="center">Record not found yet!</td></tr>
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
