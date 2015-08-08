<?php
class BackendAppController extends AppController{
		
		public $uses = array('Backend.User');
		public $components	= array('Session','Auth'); 
		public $helpers = array('Backend.General');
		var $breadcrumb = array();	
		
		function beforeFilter() {
			$this->set('title_for_layout', "Administrator Panel");
			
			$this->Auth->allow("login");
			$this->Auth->authenticate = array(
					'Form' => array (
						'userModel'=>'User',
						'scope'  => array(
							'User.active' => 1
					),
					'fields' => array('username' => 'username', 'password'=>'password')
				)
			);
			
		$this->set('getWebsitesSetting', $this->getWebsitesSetting());
		}
		
	
	function isAuthorized() {
		return true; 
	} 
	
	/*Get Websites Detals*/
	function getWebsitesSetting(){
		$this->loadModel('Backend.Setting');
		$data = $this->Setting->find('first');
		return $data;			
	}
	
	
};?>