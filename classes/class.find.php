<?php

class findElements{

	//Seek a value within an array
	function seekArray($arr, $val){
		
		foreach($arr as $subarr){
			if(is_numeric($subarr) && !is_array($subarr) && $subarr == $val){
				echo "1";
				exit;	
			}
			
			if(is_array($subarr)){
				seekArray($subarr, $val);
			}
		}
	}	
	
	//Seek a value within an object	
	function seekObject($obj, $val){
		
		foreach($obj as $subobj){
			if(is_numeric($subobj) && !is_object($subobj) && $subobj == $val){
				echo "1";
				exit;	
			}
			
			if(is_object($subobj)){
				seekObject($subobj, $val);
			}
		}
	}	
	
	
}

?>