<?php
class DashboardController extends BackendAppController {
	var $name = 'Dashboard';
	var $uses = array('Backend.User');
	var $components = array('Session', 'Auth');
	//var $helpers = array('Form');
			
	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('index');
	}
	
	function index(){
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'dashboard/index';
		$breadcrumb['Dashboard'] = 'javascript:void(0)';
		$this->set('breadcrumb', $breadcrumb);
		
	}
	
};?>