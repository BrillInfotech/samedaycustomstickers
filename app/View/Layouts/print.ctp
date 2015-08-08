<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	 <!-- BEGIN GLOBAL MANDATORY STYLES -->          
   <link href="<?php echo Configure::read('SiteSettings.siteUrl');?>front_plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo Configure::read('SiteSettings.siteUrl');?>front_plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
   <!-- END GLOBAL MANDATORY STYLES -->
   
   <!-- BEGIN PAGE LEVEL PLUGIN STYLES --> 
   <link href="<?php echo Configure::read('SiteSettings.siteUrl');?>front_plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet" />              
   <link rel="stylesheet" href="<?php echo Configure::read('SiteSettings.siteUrl');?>front_plugins/revolution_slider/css/rs-style.css" media="screen">
   <link rel="stylesheet" href="<?php echo Configure::read('SiteSettings.siteUrl');?>front_plugins/revolution_slider/rs-plugin/css/settings.css" media="screen"> 
   <link href="<?php echo Configure::read('SiteSettings.siteUrl');?>front_plugins/bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css" /> 
   
   <link rel="stylesheet" type="text/css" href="<?php echo Configure::read('SiteSettings.siteUrl');?>/front_plugins/bootstrap-datepicker/css/datepicker.css" />
                  
   <!-- END PAGE LEVEL PLUGIN STYLES -->

   <!-- BEGIN THEME STYLES --> 
   <link href="<?php echo Configure::read('SiteSettings.siteUrl');?>css/front/components.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo Configure::read('SiteSettings.siteUrl');?>css/front/style-metronic.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo Configure::read('SiteSettings.siteUrl');?>css/front/style.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo Configure::read('SiteSettings.siteUrl');?>css/front/themes/blue.css" rel="stylesheet" type="text/css" id="style_color"/>
   <link href="<?php echo Configure::read('SiteSettings.siteUrl');?>css/front/style-responsive.css" rel="stylesheet" type="text/css"/>
   <link href="<?php echo Configure::read('SiteSettings.siteUrl');?>css/front/custom.css" rel="stylesheet" type="text/css"/>
   <style type="text/css">
   		.header a.logo-v1 img{ margin-top:0px;}
		.navbar-brand{padding:5px 15px;}
   </style>
	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div class="page-container">
		<?php echo $this->fetch('content'); ?>
	</div>
	
	<!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS(REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="assets/front_plugins/respond.min.js"></script>  
    <![endif]-->  
    <script src="<?php echo Configure::read('SiteSettings.siteUrl');?>front_plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
    <script src="<?php echo Configure::read('SiteSettings.siteUrl');?>front_plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
    <script src="<?php echo Configure::read('SiteSettings.siteUrl');?>front_plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script type="text/javascript" src="<?php echo Configure::read('SiteSettings.siteUrl');?>front_plugins/hover-dropdown.js"></script>
    <script type="text/javascript" src="<?php echo Configure::read('SiteSettings.siteUrl');?>front_plugins/back-to-top.js"></script>    
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS(REQUIRED ONLY FOR CURRENT PAGE) -->
    <script type="text/javascript" src="<?php echo Configure::read('SiteSettings.siteUrl');?>front_plugins/fancybox/source/jquery.fancybox.pack.js"></script>  
    <script type="text/javascript" src="<?php echo Configure::read('SiteSettings.siteUrl');?>front_plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo Configure::read('SiteSettings.siteUrl');?>front_plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
    <script type="text/javascript" src="<?php echo Configure::read('SiteSettings.siteUrl');?>front_plugins/bxslider/jquery.bxslider.min.js"></script>
	<script type="text/javascript" src="<?php echo Configure::read('SiteSettings.siteUrl');?>/front_plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript" src="<?php echo Configure::read('SiteSettings.siteUrl');?>/front_plugins/jquery.maskedinput.min.js"></script>
    <script src="<?php echo Configure::read('SiteSettings.siteUrl');?>js/front/app.js"></script>
    <script src="<?php echo Configure::read('SiteSettings.siteUrl');?>js/front/index.js"></script>    
	<script src="<?php echo Configure::read('SiteSettings.siteUrl');?>js/front/default.js"></script>  
    <script type="text/javascript">
        jQuery(document).ready(function() {
            App.init();    
            App.initBxSlider();
            Index.initRevolutionSlider();                    
        });
		
		var SiteUrl = "<?= Configure::read('SiteSettings.siteUrl');?>";
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
</html>
