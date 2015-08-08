<?php
App::uses('AppController', 'Controller');

class CustomersController extends AppController {
	
	public $uses = array();
	public $components = array('General');
	public $helpers = array('Text');
	
	function profile(){
		
	}
	function login(){
		$this->loadModel('Customer');
		
		if(!$this->Session->check('RefererURL')){
			$this->Session->write('RefererURL', $this->referer());
		}
		$url = $this->Session->read('RefererURL');
		
		if(!empty($this->data)){
			// log user in
			if(empty($this->request->data['Customer']['email'])){
				$this->Customer->validationErrors['email'] = 'Please enter email address';
			}
			
			if(empty($this->request->data['Customer']['password'])){
				$this->Customer->validationErrors['password'] = 'Please enter password';
			}
			
			if($this->Customer->validates()){
				$isLogin = $this->_logMeIn( $this->request->data['Customer']['email'], $this->request->data['Customer']['password'], 0 );
				if(!empty($isLogin)){
					if(is_numeric($isLogin)){
						$this->redirect( $url );	
					}else{
						$this->Customer->validationErrors['disabled'] = "Your account has disabled. Please contact on support@samedaychargers.com";
					}
				}else{
					$this->Customer->validationErrors['invalid']  = "Email or password is invalid";
				}
			}
		}
		
		if($this->Session->check('unid')){
			$this->redirect( '/' );	
		}
		
	}
	
	function change_password(){
		$page_title = "Manage Password";
		$this->set(compact('page_title'));
		if(!empty($this->data)){
			$this->Customer->set($this->data);
			$this->Customer->setValidation('ChangePassword');
			if($this->Customer->validates()){
				$data = array();
				$data['Customer']['password'] = Security::hash($this->data['Customer']['confirm_password'], null, true);
				$data['Customer']['id'] = $this->Session->read('unid');
				$this->Customer->save($data);
				$this->Session->setFlash(__('Password has changed.'), null, null,'success');
				$this->redirect(array('controller'=>'customers', 'action'=>'change_password'));			
			}		

		}
		
	}
	
		
	function orders(){
		
	}
	
	function refers(){
		
	}
	
	function banners(){
		
	}
	function reviews(){
		
	}
	function market_place(){
		
	}
	function notifications(){
		
	}
	
	
	
	/*Ajax Response*/
	
	function ajax_edit_profile(){
		$this->layout = false;
		$errors = array();
		$status = false;
		if($this->Session->check('unid')){
			if($this->request->is('ajax') && !empty($this->data)){
				$this->request->data['Customer']['id'] = $this->Session->read('unid');
				$this->Customer->set($this->data);
				$this->Customer->setValidation('EditProfile');
				if($this->Customer->validates()){
					if(!empty($this->request->data['Customer']['id'])){
						$this->Customer->save($this->data);
						$status = true;
					}
				}else{
					$errors = $this->Customer->validationErrors;
				}
			}
		}
		echo json_encode(array('errors' => $errors, 'status' => $status));
		$this->autoRender = false;
	}
}?>
