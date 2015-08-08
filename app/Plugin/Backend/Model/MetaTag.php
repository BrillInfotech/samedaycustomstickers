<?php
class MetaTag extends BackendAppModel {

	var $name = 'MetaTag';
	var $useTable = 'meta_tags';
	var $actsAs = array('Multivalidatable');
	var $validationSets = array(
		'NewMetaTag'=>array(
		
			'title' => array(
				'notEmpty' =>array(
					'rule' 		=> 'notEmpty',
					'required' 	=> true,
					'message' 	=> 'Please enter title'
				),
				'length' => array(
					'rule' => array('maxLength', 60),
					'required' => true,
					'Message' => 'Title should be less to 60 character'
				)
			),
			'description' => array(
				'notEmpty' =>array(
					'rule' 		=> 'notEmpty',
					'required' 	=> true,
					'message' 	=> 'Please enter description'
				),
				'length' => array(
					'rule' => array('maxLength', 160),
					'required' => true,
					'Message' => 'Description should be less to 160 character'
				)
			),
			'keyword' => array(
				'notEmpty' =>array(
					'rule' 		=> 'notEmpty',
					'required' 	=> true,
					'message' 	=> 'Please enter keyword'
				)
			)
		),
	);
	
};?>