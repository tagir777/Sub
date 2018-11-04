<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class Sub{
	
	var $name;
	
	public function subst($str){
	
		echo $str."<br/>";

		$arr1 = preg_split('/([a-zA-Zа-яА-Я0-9])+/', $str);

		$arr2 = preg_split('/([^a-zA-Zа-яА-Я0-9])+/', $str);

		krsort($arr1);

		function sum($key1, $key2) {
			return "$key1$key2";
		}
		$sum = array_map("sum", $arr1, $arr2);

		$result = implode("", $sum);

		echo $result;
	}
}

$sub = new Sub;
$str = 'bvr&njn"bhb$gvh&hjb$';

echo $sub->subst($str);






