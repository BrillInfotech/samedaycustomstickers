<?php
class GeneralComponent extends Component {
	var $name = "General";
	var $components = array('Session'); 
	
	 function parseSlug($string){
		return strtolower(Inflector::slug($string, '-'));
	}
	
	function getDate($date, $format = "Y-m-d", $existing_format = "d/m/Y"){
		//echo $date;
		if( $existing_format == "d/m/Y" ) {
			$D = explode("/",$date);
			return $D['2'].'-'.$D[1].'-'.$D[0];
		}else{
			return date( $format , strtotime($date) );
		}
	}
	
	
	
	// Upload Image file size
	function getImageDimensionByWH($image_size, $SH = null,  $SW = null){

		if(!empty($image_size)){
			$IW = $image_size['0']; 
			$IH = $image_size['1'];
		}else{
			return; 
		}
		
		$W = ''; /* Width */
		$H = ''; /* Height*/
		$R = ''; /* Ratio */
		
		$data = array();
		
		if($IW == $IH){
			/*Square Mode*/
			$W = $IW;
			$H = $IH;
			if($IW < $SW){
				$W = $IW;
				$H = $IH;
			}else{
				$W = $SW;
				$H = $SH;
			}
			
		}else if($IW > $IH){ 
			/*Landscape Mode*/
			
			if($IW == $SW){
				$W = $SW;
				$H = $IH;
			}else if($IW < $SW){
				$W = $IW;
				if($IH > $SH){
					$R = $IH/$SH;
					$W = $IW/$R;
					$H = $IH/$R;
				}else{
					$H = $IH;
				}
				
			}else if($IW > $SW){
				$W = $SW;
				$R = $IW/$SW;
				$H = $IH/$R;
			}
			
		
		}else if($IW < $IH){
			/*Portrait Mode*/
			
			if($IW == $SW){
				$W = $SW;
				$H = $IH;
			}else if($IH < $SH){
				$W = $IW;
				$H = $IH;
			}else if( $IH > $SH){
				$R = $IH/$SH;
				$W = $IW/$R;
				$H = $IH/$R;			
			}else{
				$W = $IW;
				$H = $IH;
			}
			
		}
		
		$data['w'] = intval($W) ;
		$data['h'] = intval($H) ;
		
		return $data;
	}
	
	
}


?>