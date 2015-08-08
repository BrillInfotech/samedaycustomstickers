<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<!-- BEGIN PAGE TITLE & BREADCRUMB-->
			<h3 class="page-title">
				Coupons
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
          <div class="caption"><i class="icon-cogs"></i>All Coupons</div>
		  <div class="tools">
					<?php echo $this->Html->link(
							'<i class="icon-plus"></i> Add Coupon',
							array(
									'controller' => 'coupons',
									'action' => 'create'
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
				<th align="left">#</th>
                <th align="left">Name</th>
				<th align="left">Code</th>
				<th align="left">Discount</th>
				<th align="left">Start Date</th>
				<th align="left">End Date</th>
				<th align="center">Active</th>
				<th align="center">Action</th>
	              </tr>
            </thead>
            <tbody>
			<?php 
			//$coupon_data = array();
			if(!empty($coupon_data)){
					$n=1;
					if($this->Paginator->counter('%page%') !=  null){
						$n = (($this->Paginator->counter('%page%')-1) * 10) + $n;
					}
					foreach($coupon_data as $data){?>
					 <tr>
						<td data-title="#" align="center"><?php echo $n++;?></td>
						<td data-title="Name"><?php echo $data['Coupon']['name'];?></td>
						<td data-title="code"><?php echo $data['Coupon']['code'];?></td>
						<td data-title="Discount"><?php echo $data['Coupon']['discount'];?></td>
						<td data-title="Start Date"><?php echo $data['Coupon']['start_date'];?></td>
						<td data-title="End Date"><?php echo $data['Coupon']['end_date'];?></td>
						<td data-title="Active" align="center">
							<?php if($data['Coupon']['active'] == 1){
									echo $this->Html->link(
									'<i class="icon-ok"></i> Active',
										array(
										'controller' => 'coupons', 
										'action' => 'change_status',
										$data['Coupon']['id'], 0
									),
										array(
										'alt' => 'Active',
										'escape' => false, 
										'class' => 'btn mini green'
									)
								);
							   }else{
								echo $this->Html->link(
										'<i class="icon-remove"></i> Deactive',
										array(
										'controller' => 'coupons',
										'action' => 'change_status',
										$data['Coupon']['id'], 1
										),
										array(
										'alt' => 'Deactive',
										'escape' => false, 
										'class' => 'btn mini red'
										)
									);
							}?>
						</td>
					<td align = "center">
						<?php echo $this->Html->link(
										'<i class="icon-edit"></i> Edit',
										array(
										'controller' => 'coupons',
										'action' => 'create',
										$data['Coupon']['id']), 
										array(
											'alt' => 'Edit',
											'escape' => false,
											'class' => 'btn mini purple'
										)
								);?>
								&nbsp;&nbsp;
						<?php echo $this->Html->link(
										'<i class="icon-edit"></i> Delete',
										array(
										'controller' => 'coupons',
										'action' => 'delete_coupon',
										$data['Coupon']['id']), 
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
