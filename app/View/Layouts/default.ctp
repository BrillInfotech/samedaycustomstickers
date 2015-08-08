<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>		
		<?php echo $title_for_layout; ?>
	</title>
	<meta name="description" content="<?php echo (isset($meta_description)?$meta_description:'');?>" />
	<meta name="keywords" content="<?php echo (isset($meta_keywords)?$meta_keywords:'');?>" />
	<script type="text/javascript">
		var siteURL = "<?php echo Configure::read('SiteSettings.siteUrl');?>";
		var isLogin = "<?php echo $isLogin;?>";
	</script>
	
	 <!-- BEGIN GLOBAL MANDATORY STYLES -->          
	<?php
		echo $this->Html->css(
			array(
				'front/brand'
			));
	?>
   <?php
		echo $this->Html->script(
			array(   
				'front/jquery.min',
				'front/bootstrap.min',
				'front/flexisel',
				'front/html5',
				'front/jquery-filestyle.min',
				'front/lightslider',
				'front/respond.min',
				'front/jquery.validate.min',
				'front/script',
				'front/function'
				));
	?>
    <?php   
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="page-wrap">
		<header class="clearfix">
			<?php echo $this->element('header');?>
		</header>		  
		<?php echo $this->fetch('content'); ?>
		<footer class="footer">
			<?php echo $this->element('footer');?>
		</footer>
	</div>
	
</body>
</html>
