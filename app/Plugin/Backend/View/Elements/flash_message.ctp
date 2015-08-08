<?php 
if($this->Session->check('Message.auth')){
		if($this->Session->read('Message.auth.params') == 'error'){?>
			<div class="alert alert-error">
			  <button class="close" data-dismiss="alert"></button>
			  <span><?php echo $this->Session->read('Message.auth.message');?></span> 
			</div>
<?php	}?>

<?php }?>

<?php //echo $this->Session->flash('error');
if($this->Session->check('Message.success')) { ?>
	<div class="success_message">
    	<div class="alert alert-success alert-dismissable bottom-margin">
		<button class="close" data-dismiss="alert"></button>
		<i class="fa fa-check"></i> <?php echo $this->Session->flash('success');?>
		</div>	
    </div><?php 
} else if($this->Session->check('Message.error')) { ?>
	<div class="alert alert-error">
	  <button class="close" data-dismiss="alert"></button>
	  <span><?php echo $this->Session->flash();?></span> 
	</div>
<?php } ?>