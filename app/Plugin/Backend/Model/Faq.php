<?php
class Faq extends BackendAppModel{
	var $name = 'Faq';
	var $useTable = 'faq';
	var $actsAs = array('Multivalidatable');
	var $validationSets = array(
		'faq'=>array(
			'title'=> array(
				'notEmpty' =>array(
					'rule' 		=> 'notEmpty',
					'required' 	=> true,
					'message' 	=> 'Please enter title'
				),
				'isUnique' =>  array(				   
					'rule'		=> 'isUniqueFaq',
					'required'	=> true,
					'message' 	=> 'FAQ title already exist'	
				)
			),
			'description'=> array(
				'notEmpty' =>array(
					'rule' 		=> 'notEmpty',
					'required' 	=> true,
					'message' 	=> 'Please enter description'
				)
			)
		)
	);
	
	// Check unique user name
	function isUniqueFaq() {
		if(isset($this->data['Faq']['title'])){
			$conditions = array();
			if(!empty($this->data['Faq']['id'])){
				$conditions['id <>'] 	= $this->data['Faq']['id'];
				$conditions['title'] = $this->data['Faq']['title'];
			}else{
				$conditions['title']  = $this->data['Faq']['title'];
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