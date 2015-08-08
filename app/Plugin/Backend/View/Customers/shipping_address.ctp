<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<h3 class="page-title">
				Customers Shipping Address
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
          <div class="caption"><i class="icon-cogs"></i>Shipping Address</div>
		  <div class="tools">
		   <?php echo $this->Html->link(
						'<i class="icon-circle-arrow-left"></i> Back Customer List', 
						array('controller'=>'customers', 'action'=>'index'), 
						array('div'=>false, 'escape'=>false, 'style'=>'color:#fff; font-weight:bold;')
					);?>
		&nbsp;&nbsp;&nbsp;			
		  <?php echo $this->Html->link(
						'<i class="icon-plus"></i> Add Shipping Address', 
						array('controller'=>'customers', 'action'=>'create_shipping_address',$customer_id), 
						array('div'=>false, 'escape'=>false, 'style'=>'color:#fff; font-weight:bold;')
					);?>
		  </div>
        </div>
        <div class="portlet-body no-more-tables">
          <table class="table-bordered table-striped table-condensed cf">
            <thead class="cf">
              <tr>
				<th width="5%">#</th>
                <th align="left">Name</th>
				<th align="left">Phone</th>
				<th align="left">Address</th>
				<th align="left">City</th>
				<th align="left">State</th>
				<th align="left">Zipcode</th>
				<th width="15%" align="center">Action</th>
              </tr>
            </thead>
            <tbody>
			<?php if(!empty($customer_address_data)){
					$n=1;
					if($this->Paginator->counter('%page%') !=  null){
						$n = (($this->Paginator->counter('%page%')-1) * 10) + $n;
					}
					foreach($customer_address_data as $data){?>
					 <tr>
						<td data-title="#" align="center"><?php echo $n++;?></td>
						<td data-title="Name"><?php echo $data['CustomerShippingAddress']['name'];?></td>
						<td data-title="Phone"><?php echo $data['CustomerShippingAddress']['phone'];?></td>
						<td data-title="Address"><?php echo $data['CustomerShippingAddress']['address1'].' '.$data['CustomerShippingAddress']['address2'];?></td>
						<td data-title="City"><?php echo $data['CustomerShippingAddress']['city'];?></td>
						<td data-title="State"><?php echo $data['CustomerShippingAddress']['state'];?></td>
						<td data-title="Zipcode"><?php echo $data['CustomerShippingAddress']['zipcode'];?></td>
						<td align="center">
						<?php echo $this->Html->link(
										'<i class="icon-edit"></i> Edit',
										array(
										'controller'=>'customers',
										'action'=>'create_shipping_address',
										$customer_id,
										$data['CustomerShippingAddress']['id']), 
										array(
										'alt'=>'Edit',
										'escape'=>false,
										'class'=>'btn mini purple'
									)
								);?>
						<?php echo $this->Html->link(
										'<i class="icon-edit"></i> Delete', 
										array(
											'controller'=>'customers',
											'action'=>'delete_shipping_address',
											$customer_id,
											$data['CustomerShippingAddress']['id']
										),
										array(
											'alt'=>'Delete',
											'escape'=>false, 
											'class'=>'btn mini purple'
										),
										'Are you sure! You want to delete this record.'
								);?>
						</td>
					 </tr>			
						
			<?php 	}
				 }else{?>
				 	<tr><td colspan="9" align="center">Record not found yet!</td></tr>
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
