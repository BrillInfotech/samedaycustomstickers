<?php
class GeneralHelper extends AppHelper {

	var $helpers = array('Html', 'Session','Time','Form'); 
	
	function getGenderBlankPhoto($type = null, $class = null){
		$image = $this->Html->image('front/default-male.jpg', array('class'=>$class));
		if($type == 'Female'){
			$image = $this->Html->image('front/default-female.jpg', array('class'=>$class));
		}
		return $image;
	}
	
	function checkDOB($birthday){
		//date in mm/dd/yyyy format; or it can be in other formats as well
		  $birthDate = date('m/d/Y', strtotime($birthday));
		  //explode the date to get month, day and year
		  $birthDate = explode("/", $birthDate);
		  //get age from date or birthdate
		  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
			? ((date("Y") - $birthDate[2]) - 1)
			: (date("Y") - $birthDate[2]));
		  return $age .' yrs';
	  }
	
	
}
?>