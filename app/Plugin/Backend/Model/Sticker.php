<?phpclass Sticker extends BackendAppModel {	var $name = 'Sticker';	var $useTable = 'stickers';	var $actsAs = array('Multivalidatable');		var $validationSets = array(			'NewSticker'=>array(				'name' => array(					'notEmpty' =>array(						'rule' 		=> 'notEmpty',						'required' 	=> true,						'message' 	=> 'Please enter sticker name'					),					'isUnique' =>  array(				   						'rule'		=> 'isUniqueName',						'required'	=> true,						'message' 	=> 'Material name already exist'						)				),				'price' => array(					'notEmpty' =>array(						'rule' 		=> 'notEmpty',						'required' 	=> true,						'message' 	=> 'Please enter sticker price'					)				)				)		);	// Check unique name	function isUniqueName() {		if(isset($this->data['Sticker']['name'])){			$conditions = array();			if(!empty($this->data['Sticker']['id'])){				$conditions['id <>'] 	= $this->data['Sticker']['id'];				$conditions['name'] = $this->data['Sticker']['name'];			}else{				$conditions['name']  = $this->data['Sticker']['name'];			}						$get_rec = $this->find('count',array('conditions'=>$conditions));			if($get_rec > 0){				return false;			}else{				return true;			}		}	}};?>