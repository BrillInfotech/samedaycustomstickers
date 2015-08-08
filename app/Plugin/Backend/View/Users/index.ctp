<div class="container-fluid">
<div class="row-fluid">
<div class="span12">
	<!-- BEGIN PAGE TITLE & BREADCRUMB-->
	<h3 class="page-title">
		Users
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
          <div class="caption"><i class="icon-cogs"></i>All User</div>
		  <div class="tools"><?php echo $this->Html->link('<i class="icon-plus"></i> Add User', array('controller'=>'users', 'action'=>'create'), array('div'=>false, 'escape'=>false, 'style'=>'color:#fff; font-weight:bold;'));?></div>
        </div>
        <div class="portlet-body no-more-tables">
          <table class="table-bordered table-striped table-condensed cf">
            <thead class="cf">
              <tr>
                <th width="5%">#</th>
                <th align="left">Name</th>
				<th align="left">Role</th>
				<th align="left">Email</th>
				<th align="left">Mobile Number</th>
				<th width="15%"></th>
                </tr>
            </thead>
            <tbody>
			<?php if(!empty($user_data)){
					$n=1;
					if($this->Paginator->counter('%page%') !=  null){
						$n = (($this->Paginator->counter('%page%')-1) * 10) + $n;
					}
					foreach($user_data as $data){?> 
					 <tr>
						<td data-title="Code" align="center" valign="top"><?php echo $n++;?></td>
						<td valign="top"><?php echo $data['User']['name'];?></td>
						<td valign="top"><?php echo Configure::read('UserRole.'.$data['User']['role']);?></td>
						<td valign="top"><?php echo $data['User']['email'];?></td>
						<td valign="top"><?php echo $data['User']['mobile'];?></td>
						<td valign="top">
						<?php echo $this->Html->link('<i class="icon-edit"></i> Edit', array('controller'=>'users', 'action'=>'create', $data['User']['id']), array('alt'=>'Edit','escape'=>false, 'class'=>'btn mini purple'));?>&nbsp;
						<?php if($data['User']['active'] == 1){
								echo $this->Html->link('<i class="icon-ok"></i> Active', array('controller'=>'users', 'action'=>'change_status', $data['User']['id'], 0), array('alt'=>'Edit','escape'=>false, 'class'=>'btn mini green'));
							   }else{
								echo $this->Html->link('<i class="icon-remove"></i> Deactive', array('controller'=>'users', 'action'=>'change_status', $data['User']['id'], 1), array('alt'=>'Edit','escape'=>false, 'class'=>'btn mini red'));
							   }?>
						&nbsp;
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
