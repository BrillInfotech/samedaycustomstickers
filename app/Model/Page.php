<?php
class Page extends AppModel {

	var $name = 'Page';
	var $useTable = 'Pages';
	
	function getPageDetails($slug = null){
		if(!empty($slug)){
			$conditions = array();
			$conditions['Page.slug'] = $slug;
			$conditions['Page.enabled'] = 1;
			$data = $this->find('first', array(
								'conditions'=>$conditions
								)
							);
			return $data;				
		}
	}
	
	
};?>