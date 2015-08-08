<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {
	
	public $uses = array();
	public $components = array('General');
	public $helpers = array('Text');
	
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
	
	function registration(){
		$this->loadModel('Customer');
		if(!empty($this->data)){
			$this->Customer->set($this->data);
			$this->Customer->setValidation('NewCustomer');
			if($this->Customer->validates()){
				$new_password = Security::hash($this->data['Customer']['confirm_password'], null, true);
				$customerData = array();
				$customerData['Customer']['name'] = $this->data['Customer']['name'];
				$customerData['Customer']['password'] = $new_password;
				$customerData['Customer']['email'] = $this->data['Customer']['email'];
				$this->Customer->create();
				$this->Customer->save($customerData, false);
				$customerId = $this->Customer->getLastInsertId();
				$this->Session->write('unid', $customerId);
				$this->redirect(array('controller'=>'pages', 'action'=>'index'));		
			}
		
		}
		
	}
	function forgot_password(){
		
	}
	
	function logout(){
		$this->Session->delete('unid');
		$this->redirect('/');
	}

}?>
