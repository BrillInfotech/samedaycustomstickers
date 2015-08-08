<?php
	$config = array(); 
	/* @ Configure SMTP Details  */	
	Configure::write('SMTP.Options', array(
		'port'		=> '465',
		'timeout'	=> '30',
		'host' 		=> 'ssl://smtp.gmail.com',
		'username'	=> 'mysmtp4@gmail.com',
		'password'	=> '9261586227'
	));
		
	Configure::write('AdminPluginFolder', 'backend');
	Configure::write('AdminSiteUrl', Configure::read('SiteSettings.siteUrl').Configure::read('AdminPluginFolder').'/');
		
	Configure::write('UserRole', array('1'=>'Super Admin', '2'=>'Admin', '3'=>'User'));
	
	/*Site Relative Path*/
	Configure::write('SiteRelativePath', $_SERVER['DOCUMENT_ROOT'].Configure::read('SiteSettings.applicationFolder'));
	
	/*Data Folder Path*/
	Configure::write('Data.RelativePath', Configure::read('SiteRelativePath').'data/');
	Configure::write('Data.AbsolutePath', Configure::read('SiteSettings.siteUrl').'data/');
	
	/*Temp Folder Path*/
	Configure::write('Temp.RelativePath', Configure::read('Data.RelativePath').'temp/');
	Configure::write('Temp.AbsolutePath',  Configure::read('Data.AbsolutePath').'temp/');
	
	/*Sticker Folder Path*/
	Configure::write('Sticker.RelativePath', Configure::read('Data.RelativePath').'stickers/');
	Configure::write('Sticker.AbsolutePath',  Configure::read('Data.AbsolutePath').'stickers/');
	
	/*Skins Folder Path*/
	Configure::write('Skins.RelativePath', Configure::read('Data.RelativePath').'skins/');
	Configure::write('Skins.AbsolutePath',  Configure::read('Data.AbsolutePath').'skins/');
	
	
	?>