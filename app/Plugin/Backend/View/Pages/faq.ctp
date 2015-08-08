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
     <?php echo $this->element('flash_message');?>
      <!-- BEGIN SAMPLE TABLE PORTLET-->
      <!-- BEGIN SAMPLE TABLE PORTLET-->
      <div class="portlet box blue">
        <div class="portlet-title">
          <div class="caption"><i class="icon-cogs"></i>FAQ</div>
		  <div class="tools">
			<?php echo $this->Html->link(
							'+ Add New FAQ', 
							array(
								'controller'=>'pages', 'action'=>'create_faq'
							), 
							array(
								'div'=>false, 
								'escape'=>false, 
								'style'=>'color:#fff; font-weight:bold;'
							)
						);?></div>
        </div>
        <div class="portlet-body no-more-tables">
          <table class="table-bordered table-striped table-condensed cf">
            <thead class="cf">
              <tr>
				<th width="5%">#</th>
                <th align="left" width="25%">Title</th>
				<th align="left">Description</th>
				<th align="center">Active</th>
				<th width="15%" align="center"></th>
              </tr>
            </thead>
            <tbody>
			<?php if(!empty($faq_data)){
					$n=1;
					if($this->Paginator->counter('%page%') !=  null){
						$n = (($this->Paginator->counter('%page%')-1) * 20) + $n;
					}
					foreach($faq_data as $data){?>
					 <tr>
						<td data-title="#" align="center"><?php echo $n++;?></td>
						<td data-title="Title"><?php echo $data['Faq']['title'];?></td>
						<td data-title="Sub Title"><?php echo $this->Text->truncate($data['Faq']['description'],150);?></td>
						<td data-title="Active" align="center">
						<?php if($data['Faq']['active'] == 1){
									echo $this->Html->link('<i class="icon-ok"></i> Active', array('controller'=>'pages', 'action'=>'change_faq_status', $data['Faq']['id'], 0), array('alt'=>'Edit','escape'=>false, 'class'=>'btn mini green'));
							   }else{
									echo $this->Html->link('<i class="icon-remove"></i> Deactive', array('controller'=>'pages', 'action'=>'change_faq_status', $data['Faq']['id'], 1), array('alt'=>'Edit','escape'=>false, 'class'=>'btn mini red'));
							   }?>
						</td>
						<td align="center">
						<?php echo $this->Html->link('<i class="icon-edit"></i> Edit', array('controller'=>'pages', 'action'=>'create_faq', $data['Faq']['id']), array('alt'=>'Edit','escape'=>false, 'class'=>'btn mini purple'));?>
						&nbsp;&nbsp;
						<?php echo $this->Html->link(
										'<i class="icon-edit"></i> Delete',
										array(
										'controller' => 'pages',
										'action' => 'expandable_delete',
										$data['Faq']['id']), 
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
