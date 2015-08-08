<br style="clear:both;" />
<div class="row-fluid">
  <div class="span6">
   	 <div id="sample_editable_1_info" class="dataTables_info"><?php echo $this->Paginator->counter(array('format' => __('Page', true).' %page% of %pages%, '.__('showing',true).' %current% of %count% '.__('records',true))); ?></div>
  </div>
  <div class="span6">
    <div class="dataTables_paginate paging_bootstrap " style="text-align:right; padding-right:10px;">
      <?php if($this->Paginator->numbers()!=null): ?>
	 
		<?php if($this->Paginator->numbers()!=null): ?>
<?php echo $this->Paginator->first(__('First', true), array('escape'=>false, 'tag'=>'span','class'=>'first'), null, null); ?>
&nbsp; <?php echo $this->Paginator->numbers(array('modulus'=>'5'));?>&nbsp;
<?php echo $this->Paginator->last(__('Last', true), array('escape'=>false, 'tag'=>'span','class'=>'last'), null, null); ?>
<?php endif; ?>
	<?php endif; ?>
    </div>
  </div>
  
</div>

