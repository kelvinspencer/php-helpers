<?php

class convertElements {
	function convertToObject($array) {
		$object = new stdClass();
		foreach ($array as $key => $value) {
			if (is_array($value)) {
				$value = convertToObject($value);
			}
			$object->$key = $value;
		}
		return $object;
	}
	
	function convertToArray($object) {
		$array = array();
		foreach ($object as $key => $value) {
			if (is_object($value)) {
				$value = convertToArray($value);
			}
			$array["$key"] = $value;
		}
		return $array;
	}
}

?>