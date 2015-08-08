<?php
class UsersController extends BackendAppController {
var $name = 'Users';
	var $uses = array('Backend.User');
	var $components = array('Session', 'Auth', 'Backend.General');
	//var $helpers = array('Form');
	var $paginate = array();
			
	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('login','logout');
	}
	
	function __getName(){
	
	}
	
	/*Login User*/
	function login(){
		
		$this->layout = 'login';
	
		if($this->Session->check('Auth.User')){
			$this->redirect(array('plugin'=>'backend', 'controller'=>'dashboard', 'action'=>'index'));
		}
		
		if ($this->request->isPost()){
			 //echo Security::hash($this->data['User']['password'], null, true);die;
			// login with username or e-mail
			if (!empty($this->Auth->request->data)) {
			 	// save username entered in the login form
				$username = $this->Auth->request->data['User']['username'];
			 	// find a user by e-mail
				//$this->User->contain();
				$find_by_email = $this->User->find('first', array(
					'conditions' => array('email' => $username),
					'fields' => 'username'
				  )
				);
				
				// found
				if (!empty($find_by_email)) {
			 	
				  // retry login with e-mail instead of username
				  $this->Auth->request->data['User']['username'] = $find_by_email['User']['username'];
				  if ($this->Auth->login()) {
				  	$this->Session->delete('Message');
			 		 $this->redirect(array('plugin'=>'backend', 'controller'=>'dashboard', 'action'=>'index'));
					
				  } else {
					// login successful
					// clear flash message
					$this->Session->setFlash(__('Username or password is incorrect'), 'flash_message', 'error', 'auth');
					$this->Auth->request->data['User']['username'] = $username;
					// redirect
					
				  }
				}
				if ($this->Auth->login()){
					$this->Session->delete('Message');
					$this->redirect(array('plugin'=>'backend', 'controller'=>'dashboard', 'action'=>'index'));
					//$this->redirect($this->Auth->redirectUrl());
					
				}else {
				
					$this->Session->setFlash(__('Username or password is incorrect'), 'flash_message', 'error', 'auth');
				}  
			  } 
			}
		
	}
	
	function index(){
		/*Set Bradcrumb*/
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'users/index';
		$breadcrumb['Users'] = 'javascript:void(0)';
		$this->set('breadcrumb', $breadcrumb);
		
		$conditions = array();
		$conditions['User.active'] = array(1,0);
		$this->paginate['User']['order'] = array('modified'=>'ASC');
		$this->paginate['User']['recursive'] = 4;
		$this->paginate['User']['fields'] = array('User.id','User.name','User.role','User.mobile','User.active','User.email');
		$this->paginate['User']['limit'] = 10;
		$user_data = $this->paginate('User', $conditions);
		
		$this->set('user_data', $user_data);
		
	}
	
	function create($user_id = null){
	/*Set Bradcrumb*/
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'users/create';
		$breadcrumb['Add User'] = 'javascript:void(0)';
		$this->set('breadcrumb', $breadcrumb);
		
	$this->set('user_id', $user_id);
		if(!empty($this->data)){
			$this->User->set($this->data);
			if(!empty($this->data['User']['new_photo']['name'])){
				/*check image extension*/
				$ext = array_reverse(explode('.', $this->data['User']['new_photo']['name'])); 
				$ext = strtolower($ext[0]);
				$allow_ext = array('jpg', 'jpeg', 'png', 'gif');
				if(!in_array($ext, $allow_ext)){
					$this->User->validationErrors['new_photo'] = 'Please upload jpg,png,jpeg,gif photo';
				}
				/*Check Image Dimension*/
				$imageDim =  getimagesize($this->data['User']['new_photo']['tmp_name']);
				if(!empty($imageDim) && $imageDim[0] < 600 && $imageDim[1] < 500){
					
				}else{
					$this->User->validationErrors['new_photo'] = 'Upoad photo image dimension 600 x 500';
				}
			
			}
				
				$this->User->setValidation('NewSuccessStory');
				if($this->User->validates()){
					if(!empty($this->data['User']['new_photo']['name'])){
							$photo_name = $this->General->parseSlug($this->data['User']['first_name']).'-'.time().'.'.$ext;
							$profileRelativePath = Configure::read('UserPhoto.RelativePath').$photo_name;
							/*Unlink old file*/
							if(!empty($this->data['User']['photo']) && file_exists(Configure::read('UserPhoto.RelativePath').$this->data['User']['photo'])){
								unlink(Configure::read('UserPhoto.RelativePath').$this->data['User']['photo']);
							}
							
							/*copy image*/
							copy($this->data['User']['new_photo']['tmp_name'], $profileRelativePath);
							$this->request->data['User']['photo'] = $photo_name;	
					}
				
					if(empty($user_id)){
						$this->User->create();
					}
					$this->User->save($this->data);
					if(empty($user_id)){
					$this->Session->setFlash(__('New user account has been created.'), null, null,'success');
					}else{
					$this->Session->setFlash(__('User account has been updated.'), null, null,'success');
					}
					$this->redirect(array('controller'=>'users', 'action'=>'index'));
				}
		}else{
			if(!empty($user_id)){
				$this->request->data = $this->User->findById($user_id );
				
			}
		
		}
	}
	function change_status( $user_id = null, $status = null ){
		if(empty($status)){
			$status = 0;
		}
		if(!empty($user_id)){
				$this->User->updateAll(
							array('User.enabled'=> $status),
							array('User.id'=> $user_id)
					);
					
		}
		$this->Session->setFlash(__('User status has been updated.'), null, null,'success');
		$this->redirect(array('controller'=>'users', 'action'=>'index'));
	}
	
	/*User Logout*/
	function logout(){
		if ($this->Auth->login()) {
			$this->Session->delete('Auth');
		
		}
		return $this->redirect(array('plugin'=>'backend', 'controller'=>'users', 'action'=>'login'));
			
		die;
	}
	
	
	function edit_profile(){
			/*Set Bradcrumb*/
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'users/edit_profile';
		$breadcrumb['Edit Profile'] = 'javascript:void(0)';
		$this->set('breadcrumb', $breadcrumb);
		
			$profile_id = $this->Session->read('Auth.User.id');
	
		if(!empty($this->data)){
			$this->request->data['User']['id'] = $profile_id;
			$this->User->set($this->data);
			if(!empty($this->data['User']['new_photo']['name'])){
				/*check image extension*/
				$ext = array_reverse(explode('.', $this->data['User']['new_photo']['name'])); 
				$ext = strtolower($ext[0]);
				$allow_ext = array('jpg', 'jpeg', 'png', 'gif');
				if(!in_array($ext, $allow_ext)){
					$this->User->validationErrors['new_photo'] = 'Please upload jpg,png,jpeg,gif photo';
				}
				/*Check Image Dimension*/
				$imageDim =  getimagesize($this->data['User']['new_photo']['tmp_name']);
				if(!empty($imageDim) && $imageDim[0] < 600 && $imageDim[1] < 500){
					
				}else{
					$this->User->validationErrors['new_photo'] = 'Upoad photo image dimension 600 x 500';
				}
			
			}
				
				$this->User->setValidation('NewSuccessStory');
				if($this->User->validates()){
					if(!empty($this->data['User']['new_photo']['name'])){
							$photo_name = $this->General->parseSlug($this->data['User']['first_name']).'-'.time().'.'.$ext;
							$profileRelativePath = Configure::read('UserPhoto.RelativePath').$photo_name;
							/*Unlink old file*/
							if(!empty($this->data['User']['photo']) && file_exists(Configure::read('UserPhoto.RelativePath').$this->data['User']['photo'])){
								unlink(Configure::read('UserPhoto.RelativePath').$this->data['User']['photo']);
							}
							
							/*copy image*/
							copy($this->data['User']['new_photo']['tmp_name'], $profileRelativePath);
							$this->request->data['User']['photo'] = $photo_name;	
					}
				
					if(empty($user_id)){
						$this->User->create();
					}
					$this->User->save($this->data);
					$this->Session->setFlash(__('Our profile has been updated.'), null, null,'success');
					$this->redirect(array('controller'=>'users', 'action'=>'edit_profile'));
				}
		}else{
			if(!empty($profile_id)){
				$this->request->data = $this->User->findById($profile_id );
				
			}
		}
	}
	
	function change_password(){
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'users/change_password';
		$breadcrumb['Change password'] = 'javascript:void(0)';
		$this->set('breadcrumb', $breadcrumb);
		$profile_id = $this->Session->read('Auth.User.id');
			if(!empty($this->data)){
			$this->User->set($this->data);
			$this->User->setValidation('ChangePassword');
				if($this->User->validates()){
				$password = Security::hash($this->data['User']['confirm_password'], null, true);
				$this->User->updateAll(
						array('password'=>'"'.$password.'"'),
						array('id'=>$profile_id)
				);
               	$this->Session->setFlash(__('Password has been updated.'), null, null,'success');
				$this->redirect(array('controller'=>'users', 'action'=>'edit_profile'));	
			}
		}
	}
};?>