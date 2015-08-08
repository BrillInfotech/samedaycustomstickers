<?php
class GeneralHelper extends AppHelper {

	var $helpers = array('Html', 'Session','Time','Form'); 
	
	function getGenderBlankPhoto($type = null){
		$image = $this->Html->image('backend/default-male.jpg');
		if($type == 'Female'){
			$image = $this->Html->image('backend/default-female.jpg');
		}
		return $image;
	}
	
	
}
?>