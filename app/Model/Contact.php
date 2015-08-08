<?php
class Contact extends AppModel {

	var $name = 'Contact';
	var $useTable = 'contact';
	

	var $validate  = array(
		'name'=>array(
			'notEmpty'=>array(
				'rule' => 'notEmpty',
				'message' => 'Please enter name'
			)
		),
		'mobile_number'=>array(
			'notEmpty'=>array(
				'rule' => 'notEmpty',
				'message' => 'Please enter Mobile_number'
			),
			'numeric'=>array(
				'rule' => 'numeric',
				'message' => 'Mobile number should be Numeric'
			),
			'between' => array(
				'rule' => array('between', 7, 10),
				'message' => 'Please enter mobile Number between 7 to 10 numbers'
				)
		),
		'email_id'=>array(
			'notEmpty'=>array(
				'rule' => 'notEmpty',
				'message' => 'Please enter Email Id'
			), 
			'email' => array(
				'rule' => 'email',
				'message' => 'Please enter valid Email Address'
			),
			'isUnique' => array(
				'rule'=>'isUnique',
				'message' => 'Email already registered'
			)
		),
		'message'=>array(
			'notEmpty'=>array(
				'rule'=>'notEmpty',
				'message'=>'Please enter Message'
			)
		),
		
	);
	
};?>