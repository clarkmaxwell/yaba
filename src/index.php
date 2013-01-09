<?php
$data = file_get_contents(__DIR__.'/../template/index.html');
$pattern = "/(\{\#)(\w+)\s*(\\|)\s*(\w+)(\,\w+)*(\#\})/";
preg_match($pattern, $data,$result);
//$functionName = $result[2];
//$functionParam = $result[4];
//call_user_func($functionName,$functionParam);

function turker($param)
{
	echo $param;
}
var_dump($result);
//echo preg_replace($pattern, "$2,$4", $data);
