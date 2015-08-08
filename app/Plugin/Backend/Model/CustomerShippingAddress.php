<?php
class CustomerShippingAddress extends BackendAppModel {

	var $name = 'CustomerShippingAddress';
	var $useTable = 'customer_shipping_address';
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
				'phone'=> array(
					'notEmpty' =>array(
						'rule' 		=> 'notEmpty',
						'required' 	=> true,
						'message' 	=> 'Please enter phone no'
					)
					),
				'address1'=> array(
					'notEmpty' =>array(
						'rule' 		=> 'notEmpty',
						'required' 	=> true,
						'message' 	=> 'Please enter address'
					)
					),	
					'city'=> array(
					'notEmpty' =>array(
						'rule' 		=> 'notEmpty',
						'required' 	=> true,
						'message' 	=> 'Please enter city'
					)
					),
			        'zipcode'=> array(
					'notEmpty' =>array(
						'rule' 		=> 'notEmpty',
						'required' 	=> true,
						'message' 	=> 'Please enter zipcode'
					)
					),
			)
		);	

};?>