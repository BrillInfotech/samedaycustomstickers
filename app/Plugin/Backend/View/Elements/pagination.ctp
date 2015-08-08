<br class="clear" />
<div style="clear:both; margin-top:5px; font-size:12px;">
<div class="page_no" style="padding:0px; margin:0px; float:left;">
	<!--<div class="previous"><a href="">&nbsp;</a></div>-->
	<div class="page_select" style="width:auto; padding-left:10px; margin:0px;">
			<?php if($this->Paginator->numbers()!=null): ?>
<?php echo $this->Paginator->first(__('First', true), array('escape'=>false, 'tag'=>'span','class'=>'first'), null, null); ?>
&nbsp; <?php echo $this->Paginator->numbers(array('modulus'=>'5'));?>&nbsp;
<?php echo $this->Paginator->last(__('Last', true), array('escape'=>false, 'tag'=>'span','class'=>'last'), null, null); ?>
<?php endif; ?></div>
	<!--<div class="next"><a href="">&nbsp;</a></div>-->
</div>
<div style="float:right; font-size:11px; color:#666666; padding-right:5px;"><?php echo $this->Paginator->counter(array('format' => __('Page', true).' %page% of %pages%, '.__('showing',true).' %current% of %count% '.__('records',true))); ?></div>
</div>