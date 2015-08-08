<?php
class Customer extends AppModel {

	var $name = 'Customer';
	var $useTable = 'customers';
	var $actsAs = array('Multivalidatable');
	var $validationSets = array(
			'NewCustomer'=>array(
				'name' => array(
					'notEmpty' =>array(
						'rule' 		=> 'notEmpty',
						'required' 	=> true,
						'message' 	=> 'Please enter customer name'
					)
				),
				'email' => array(
					'notEmpty' =>array(
						'rule' 		=> 'notEmpty',
						'required' 	=> true,
						'message' 	=> 'Please enter email address'
					),
					'email' =>  array(				   
						'rule'		=> 'email',
						'required'	=> true,
						'message' 	=> 'Invalid email address.'	
					),
					'isUnique' =>  array(				   
						'rule'		=> 'isUniqueEmail',
						'required'	=> true,
						'message' 	=> 'Email address already registered with us'	
					)
				),
				'new_password' => array(
					'maxLength' => array(
						'rule' => array('maxLength', 20),
						'message' => 'Password must be 6 to 20 characters long'
					),
					'minLength' => array(
						'rule' => array('minLength', 6),
						'message' => 'Password must be  6 to 20 characters long'
					),
					'notEmpty' => array(
						'rule' => 'notEmpty',
						'required' => true,
						'message' => 'Please enter password'
					),
				),
				'confirm_password' => array(
					'validateChangePassword' => array(
						'rule' => 'validateChangePassword',
						'required' => true,
						'message' => 'Confirm password does not match with password'
					),
					'notEmpty' => array(
						'rule' => 'notEmpty',
						'required' => true,
						'message' => 'Please enter confirm password'
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
						),
					'maxLength' => array(
						'rule' => array('maxLength', 20),
						'message' => 'Password must be 6 to 20 characters long'
					),
					'minLength' => array(
						'rule' => array('minLength', 6),
						'message' => 'Password must be  6 to 20 characters long'
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
						'message'=>'Password does not match'
					)	
						
				)
			),
			'EditProfile'=>array(
				'name' => array(
					'notEmpty' =>array(
						'rule' 		=> 'notEmpty',
						'required' 	=> true,
						'message' 	=> 'Please enter customer name'
					)
				),
				'email' => array(
					'notEmpty' =>array(
						'rule' 		=> 'notEmpty',
						'required' 	=> true,
						'message' 	=> 'Please enter email address'
					),
					'email' =>  array(				   
						'rule'		=> 'email',
						'required'	=> true,
						'message' 	=> 'Please enter a valid email address'	
					),
					'isUnique' =>  array(				   
						'rule'		=> 'isUniqueEmail',
						'required'	=> true,
						'message' 	=> 'Email address already registered with us'	
					)
				)
			)
	);	
	
	// Check old password
	function checkOldPassword() {
		if(isset($this->data)){
			$old_password= Security::hash($this->data['Customer']['old_password'], null, true);
			$data = $this->find('count', array('conditions' => array('Customer.password' => $old_password)));
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
			if($this->data['Customer']['new_password'] == $this->data['Customer']['confirm_password']){
				return true;
			}
		}
	}
	
	// Check unique Email ID
	function isUniqueEmail() {
		if(isset($this->data['Customer']['email'])){
			$conditions = array();
			if(!empty($this->data['Customer']['id'])){
				$conditions['id <>'] 	= $this->data['Customer']['id'];
				$conditions['email'] = $this->data['Customer']['email'];
			}else{
				$conditions['email']  = $this->data['Customer']['email'];
			}
			
			$get_rec = $this->find('count',array('conditions'=>$conditions));
			
			if($get_rec > 0){
				return false;
			}else{
				return true;
			}
		}
	}
	/*Validate Change Password*/
	function validateChangePassword($data) {
		if ($this->data['Customer']['new_password'] !== $this->data['Customer']['confirm_password']) {
            return false;
        }
        return true;
    }
	
};?>