<?php
class SettingController extends BackendAppController {
	var $name = 'Setting';
	var $uses = array('Backend.Setting');
	var $components = array('Session', 'Auth', 'Backend.General');
	//var $helpers = array('Form');
			
	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('setting');
	}
	
	
	function index(  ){
	/*Set Bradcrumb*/
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'Dashboard';
		$breadcrumb['Setting'] = 'javascript:void(0)';
		$this->set('breadcrumb', $breadcrumb);
		
		if(!empty($this->data)){
		
				$this->Setting->set($this->data);
				
				if(!empty($this->data['Setting']['new_logo']['name'])){
					/*check image extension*/
					$ext = array_reverse(explode('.', $this->data['Setting']['new_logo']['name']));
					$ext = strtolower($ext[0]);
					if($ext != 'png'){
						$this->Setting->validationErrors['new_logo'] = 'Please upload only .png logo';
					}
					/*Check Image Dimension*/
					$imageDim =  getimagesize($this->data['Setting']['new_logo']['tmp_name']);
					
					if(!empty($imageDim) && $imageDim[0] <= '225' && $imageDim[1] <= '62'){
						
					}else{
						$this->Setting->validationErrors['new_logo'] = 'Upoad logo image dimension 225 X 62';					}
				
				}
				
				$this->Setting->setValidation('WebsiteSetting');
				if($this->Setting->validates()){
					
					if(!empty($this->data['Setting']['new_logo']['name'])){
						$profileRelativePath = Configure::read('WebsiteLogo.RelativePath').'logo.png';
						/*copy image*/
						copy($this->data['Setting']['new_logo']['tmp_name'], $profileRelativePath);
						
					}
					$this->request->data['Setting']['logo'] = 'logo.png';
					$this->request->data['Setting']['id'] = 1;
					$this->Setting->create();
					$this->Setting->save($this->data);
					$this->Session->setFlash(__('Website setting has been updated.'), null, null,'success');
					$this->redirect(array('controller'=>'setting', 'action'=>'index'));
				}
		
		}else{
			$this->request->data = $this->Setting->findById(1);
		}
	
	}
	
	
};?>