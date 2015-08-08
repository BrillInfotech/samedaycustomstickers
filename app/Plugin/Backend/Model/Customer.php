<?php
class Customer extends BackendAppModel {

	var $name = 'Customer';
	var $useTable = 'customers';
	var $actsAs = array('Multivalidatable');
	var $validationSets = array(
			'NewCustomer' => array(
				'name' => array(
					'notEmpty' => array(
						'rule' 		=> 'notEmpty',
						'required' 	=> true,
						'message' 	=> 'Please enter customer name'
					)
				),
				'new_password' => array(
					'maxLength' => array(
						'rule' => array('maxLength', 20),
						'message' => 'Password must be 6 to 20 characters long',
						'allowEmpty' => true
					),
					'minLength' => array(
						'rule' => array('minLength', 6),
						'message' => 'Password must be  6 to 20 characters long',
						'allowEmpty' => true
					)
				),
				'confirm_password' => array(
					'validateChangePassword' => array(
						'rule' => 'validateChangePassword',
						'message' => 'Confirm password does not match with password',
						'allowEmpty' => true
					)
				),
				'email'=> array(
					'notEmpty' =>array(
						'rule' 		=> 'notEmpty',
						'required' 	=> true,
						'message' 	=> 'Please enter email'
					),
					'email' => array(
						'rule' 		=> 'email',
						'required' 	=> true,
						'message' 	=> 'Please enter valid email'
					),
					'isUnique' =>  array(				   
						'rule'		=> array('isUniqueCustomerEmail', 'email'),
						'required'	=> true,
						'message' 	=> 'Customer email already exist'	
					)
				)
				
			)
			
		);	
	// Check unique customer name
	function isUniqueCustomerEmail() {
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
	// Validate Change Password
	function validateChangePassword($data) {
		if ($this->data['Customer']['new_password'] !== $this->data['Customer']['confirm_password']) {
            return false;
        }
        return true;
    }
	
};?>