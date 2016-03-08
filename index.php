<?php

include_once("classes/class.find.php");
include_once("classes/class.convert.php");

$findDB = new findElements();
$convertDB = new convertElements();

//Seek Value
$val = 74;

//Sample Array
$arr = array();
$arr[0]["val"] = 30;
$arr[0]["left"] = array("val" => 14, "left" => array("val" => 4, "left" => array("val" => 7), "right" => array("val" => 1)), "right" =>  array("val" => 2, "left" => array("val" => 11), "right" => array("val" => 81)));
$arr[0]["right"] = array("val" => 54, "left" => array("val" => 74, "left" => array("val" => 27), "right" => array("val" => 21)), "right" =>  array("val" => 112, "left" => array("val" => 13), "right" => array("val" => 91)));


//convert to object
$object = $convertDB->convertToObject($arr);

//Convert to array
$array = $convertDB->convertToObject($object);


//Find Value in object
$convertDB->seekObject($arr,$val);

//Convert to array
$convertDB->seekArray($object,$val);



?>