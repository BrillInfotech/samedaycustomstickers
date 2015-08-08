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
		<?php echo "Same day Custom stickers";
		//echo $title_for_layout; 
		?>
	</title>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css"/>
	
	<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>css/backend/style-metro.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>css/backend/style.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>css/backend/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>css/backend/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" type="text/css" href="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/select2/select2_metro.css" />
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="<?php echo Configure::read('SiteSettings.siteUrl');?>css/backend/pages/login.css" rel="stylesheet" type="text/css"/>
	
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
	<script src="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/jquery-1.10.1.min.js" type="text/javascript"></script>
	<script src="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
	<script src="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>      
	<script src="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/excanvas.min.js"></script>
	<script src="assets/plugins/respond.min.js"></script>  
	<![endif]-->   
	<script src="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
	<script src="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/jquery.blockui.min.js" type="text/javascript"></script>  
	<script src="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/jquery.cookie.min.js" type="text/javascript"></script>
	<script src="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
	<script src="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript" ></script><!-- END CORE PLUGINS -->
	<!-- BEGIN PAGE LEVEL PLUGINS -->
	<script src="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>	
	<script type="text/javascript" src="<?php echo Configure::read('SiteSettings.siteUrl');?>plugins/select2/select2.min.js"></script>     
	<!-- END PAGE LEVEL PLUGINS -->
	<!-- BEGIN PAGE LEVEL SCRIPTS -->
	<script src="<?php echo Configure::read('SiteSettings.siteUrl');?>js/backend/app.js" type="text/javascript"></script>
	<script src="<?php echo Configure::read('SiteSettings.siteUrl');?>js/backend/login.js" type="text/javascript"></script> 
	<!-- END PAGE LEVEL SCRIPTS --> 
	<script>
		var AdminSiteUrl = "<?php echo Configure::read('AdminSiteUrl');?>";
		jQuery(document).ready(function() {     
		  App.init();
		});
	</script>
	<!-- END JAVASCRIPTS -->
	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body class="page-header-fixed">
	<?php echo $this->element('header'); ?>
	<!-- BEGIN CONTAINER -->
	<div class="page-container row-fluid">
	<?php echo $this->element('left_navigation');?>
	<div class="page-content">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->fetch('content'); ?>		
	</div>
	</div>
	
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
