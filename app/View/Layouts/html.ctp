<!DOCTYPE html>
<html>
<head>

	<?php echo $this->Html->charset(); ?>
	<title>
		<?php
			echo "Same day Custom stickers";
		//echo $title_for_layout; ?>
	</title>
	<meta name="description" content="<?php echo (isset($meta_description)?$meta_description:'');?>" />
	<meta name="keywords" content="<?php echo (isset($meta_keywords)?$meta_keywords:'');?>" />
	 <!-- BEGIN GLOBAL MANDATORY STYLES -->  
	<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>css/front/extends/extends.css" rel="stylesheet" type="text/css"/>	 
	<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>css/front/layout/layou.css" rel="stylesheet" type="text/css"/>	 
	<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>css/front/mixins/mixins.css" rel="stylesheet" type="text/css"/>	 
	<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>css/front/extends/tinyslides.css" rel="stylesheet" type="text/css"/>	 
	<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>css/front/brand.css" rel="stylesheet" type="text/css"/>	 
	<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>css/front/variables/variables" rel="stylesheet" type="text/css"/>	 
	<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>css/front/variables/fonts" rel="stylesheet" type="text/css"/>	
	<!--END CSS
	<!-- BEGIN SCRIPT-->
	<script src="<?php echo Configure::read('SiteSettings.siteUrl');?>js/front/html5.js"></script>
	<script src="<?php echo Configure::read('SiteSettings.siteUrl');?>js/front/jquery-filestyle.min.js"></script>
	<script src="<?php echo Configure::read('SiteSettings.siteUrl');?>js/front/lightslider.js"></script>
	<script src="<?php echo Configure::read('SiteSettings.siteUrl');?>js/front/respond.min.js"></script>
	<!-- End SCRIPT-->
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
		  <div class="page-container">
				<?php echo $this->fetch('content'); ?>
					</div>
		  <footer class="footer">
				<?php echo $this->element('footer');?>
		  </footer>
	</div>
	 <script src="<?php echo Configure::read('SiteSettings.siteUrl');?>js/fornt/jquery.min.js"></script>
    <script src="<?php echo Configure::read('SiteSettings.siteUrl');?>js/fornt/bootstrap.min.js"></script>
    <script src="<?php echo Configure::read('SiteSettings.siteUrl');?>js/fornt/script.js"></script>
    <script src="<?php echo Configure::read('SiteSettings.siteUrl');?>js/fornt/flexisel.js"></script>
</body>
</html>
