<?php
class Coupon extends BackendAppModel {

	var $name = 'Coupon';
	var $useTable = 'coupons';
	var $actsAs = array('Multivalidatable');
	var $validationSets = array(
			'NewCoupon' => array(
					'name' => array(
						'notEmpty' => array(
							'rule' 		=> 'notEmpty',
							'required' 	=> true,
							'message' 	=> 'Please enter coupon name'
						),
						'isUnique' =>  array(				   
							'rule'		=> 'isUniqueCouponCode',
							'required'	=> true,
							'message' 	=> 'Coupon code already created'	
						)
					),
					'code' => array(
						'notEmpty' => array(
							'rule' 		=> 'notEmpty',
							'required' 	=> true,
							'message' 	=> 'Please enter coupon code'
						)
					),
					'discount' => array(
						'notEmpty' => array(
							'rule' 		=> 'notEmpty',
							'required' 	=> true,
							'message' 	=> 'Please enter discount'
						)
					),
					'start_date' => array(
						'notEmpty' => array(
							'rule' 		=> 'notEmpty',
							'required' 	=> true,
							'message' 	=> 'Please select start date'
						)
					),
					'end_date' => array(
						'notEmpty' => array(
							'rule' 		=> 'notEmpty',
							'required' 	=> true,
							'message' 	=> 'Please select end date'
						)
					),
				)
			);	
		
	// Check unique user name
	function isUniqueCouponCode() {
		if(isset($this->data['Coupon']['code'])){
			$conditions = array();
			if(!empty($this->data['Coupon']['id'])){
				$conditions['id <>'] 	= $this->data['Coupon']['id'];
				$conditions['code'] = $this->data['Coupon']['code'];
			}else{
				$conditions['code']  = $this->data['Coupon']['code'];
			}
			
			$get_rec = $this->find('count',array('conditions'=>$conditions));
			
			if($get_rec > 0){
				return false;
			}else{
				return true;
			}
		}
	}		

			
};?>