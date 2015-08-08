<?php if(!empty($cityList)){
		$string = "";
		foreach($cityList as $city_id => $city_name){
			$string .='<option value="'.$city_id.'">'.$city_name.'</option>';	
		}
		echo $string;
	}		
?>