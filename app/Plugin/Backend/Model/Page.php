<?php
class Page extends BackendAppModel {

	var $name = 'Page';
	var $useTable = 'pages';
	var $actsAs = array('Multivalidatable');
	var $validationSets = array(
	'NewPage'=>array(
		'title'=> array(
			'notEmpty' =>array(
				'rule' 		=> 'notEmpty',
				'required' 	=> true,
				'message' 	=> 'Please enter page title'
			),
			'isUnique' =>  array(				   
				'rule'		=> 'isUniquePage',
				'required'	=> true,
				'message' 	=> 'Page title already exist'	
			)
		),
		'heading'=> array(
			'notEmpty' =>array(
				'rule' 		=> 'notEmpty',
				'required' 	=> true,
				'message' 	=> 'Please enter page heading'
			)
		)
		
	)
	);
		
	// Check unique page name
	function isUniquePage() {
		if(isset($this->data['Page']['title'])){
			$conditions = array();
			if(!empty($this->data['Page']['id'])){
				$conditions['id <>'] 	= $this->data['Page']['id'];
				$conditions['title'] = $this->data['Page']['title'];
			}else{
				$conditions['title']  = $this->data['Page']['title'];
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