<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<h3 class="page-title">
				Customers
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
          <div class="caption"><i class="icon-cogs"></i>All Customer</div>
		  <div class="tools">
					<?php echo $this->Html->link(
							'<i class="icon-plus"></i> Add Customer',
							array(
									'controller'=>'customers',
									'action'=>'create'
								),
							array(
								'div'=>false, 
								'escape'=>false, 
								'style'=>'color:#fff; font-weight:bold;'
							)
						);?>
			</div>
        </div>
        <div class="portlet-body no-more-tables">
          <table class="table-bordered table-striped table-condensed cf">
            <thead class="cf">
              <tr>
				<th width="5%">#</th>
                <th align="left">Name</th>
				<th align="left">Email</th>
				<th align="center">Active</th>
				<th width="25%" align="center">Action</th>
              </tr>
            </thead>
            <tbody>
			<?php if(!empty($customer_data)){
					$n=1;
					if($this->Paginator->counter('%page%') !=  null){
						$n = (($this->Paginator->counter('%page%')-1) * 10) + $n;
					}
					foreach($customer_data as $data){?>
					 <tr>
						<td data-title="#" align="center"><?php echo $n++;?></td>
						<td data-title="Name"><?php echo $data['Customer']['name'];?></td>
						<td data-title="Email"><?php echo $data['Customer']['email'];?></td>
						<td data-title="Active" align="center">
						<?php if($data['Customer']['active'] == 1){
									echo $this->Html->link(
									'<i class="icon-ok"></i> Active',
										array(
										'controller'=>'Customers', 
										'action'=>'change_status',
										$data['Customer']['id'], 0
									),
										array(
										'alt'=>'Edit',
										'escape'=>false, 
										'class'=>'btn mini green'
									)
								);
							   }else{
								echo $this->Html->link(
										'<i class="icon-remove"></i> Deactive',
										array(
										'controller'=>'Customers',
										'action'=>'change_status',
										$data['Customer']['id'], 1
										),
										array(
										'alt'=>'Edit',
										'escape'=>false, 
										'class'=>'btn mini red'
										)
									);
							}?>
						</td>
						<td align="center">
						<?php echo $this->Html->link(
										'<i class="icon-edit"></i> Address',
										array(
										'controller'=>'customers',
										'action'=>'shipping_address',
										$data['Customer']['id']), 
										array(
										'alt'=>'Address',
										'escape'=>false,
										'class'=>'btn mini purple'
									)
								);?>
								&nbsp;&nbsp;
						<?php echo $this->Html->link(
										'<i class="icon-edit"></i> Edit',
										array(
										'controller'=>'customers',
										'action'=>'create',
										$data['Customer']['id']), 
										array(
											'alt'=>'Edit',
											'escape'=>false,
											'class'=>'btn mini purple'
										)
								);?>
								&nbsp;&nbsp;
						<?php echo $this->Html->link(
										'<i class="icon-edit"></i> Delete',
										array(
										'controller'=>'customers',
										'action'=>'delete_customer',
										$data['Customer']['id']), 
										array(
											'alt'=>'Delete',
											'escape'=>false,
											'class'=>'btn mini red'
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
