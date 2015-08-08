<?php
class User extends BackendAppModel {

	var $name = 'User';
	var $useTable = 'users';
	var $actsAs = array('Multivalidatable');
	var $validationSets = array(
	'NewUser'=>array(
					'name'=> array(
						'notEmpty' =>array(
							'rule' 		=> 'notEmpty',
							'required' 	=> true,
							'message' 	=> 'Please enter user name'
						)
					),
					'role'=> array(
						'notEmpty' =>array(
							'rule' 		=> 'notEmpty',
							'required' 	=> true,
							'message' 	=> 'Please enter user role'
						)
					),
					'username'=> array(
						'notEmpty' =>array(
							'rule' 		=> 'notEmpty',
							'required' 	=> true,
							'message' 	=> 'Please enter username'
						)
					),
					'password'=> array(
						'notEmpty' =>array(
							'rule' 		=> 'notEmpty',
							'required' 	=> true,
							'message' 	=> 'Please enter password'
						)
					)
				),
		'ChangePassword'=>array(
							'old_password'=> array(
						    	'notEmpty' =>array(
									'rule' 		=> 'notEmpty',
									'required' 	=> true,
									'message' 	=> 'Please enter old password'
									),
								'checkOldPassword' => array(
									'rule' => 'checkOldPassword',
									'required'=>true,
									'message' => 'Your old password is invalid'
								)	
							),
							'new_password'=> array(
						    	'notEmpty' =>array(
									'rule' 		=> 'notEmpty',
									'required' 	=> true,
									'message' 	=> 'Please enter new password'
									)
							),
							'confirm_password'=> array(
						    	'notEmpty' =>array(
									'rule' 		=> 'notEmpty',
									'required' 	=> true,
									'message' 	=> 'Please enter confirm password'
									),
								'checkPasswordMatch'=>array(
									'rule' => 'checkPasswordMatch',
									'required'=>true,
									'message'=>'Password dose not match'
								)	
									
							)
					
				)
	);
	
	// Check old password
	function checkOldPassword() {
		if(isset($this->data)){
			   $old_password= Security::hash($this->data['User']['old_password'], null, true);
				$data = $this->find('count', array('conditions'=>array('User.password'=>$old_password)));
				if($data > 0){
					return true;
				}
				
			}else{
				return false;
			}
	}
	
	/*Check New Password*/
	function checkPasswordMatch(){
		if(isset($this->data)){
			if($this->data['User']['new_password'] == $this->data['User']['confirm_password']){
				return true;
			}
		}
	}
	
};?>