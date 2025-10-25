<?php include('../../header.html');

$pts=array(0,25,22,20,18,16,15,14,13,12,11,10,9,8,7,6,5,4,3,2,1);

$mod=array
(
	array(23,"BPC Racing",		$pts[0],$pts[0],$pts[1],$pts[0]),
	array('98A',"Wide Open Racing",$pts[0],$pts[0],$pts[2],$pts[0]),
	array(11,"Bay Mills/Shinault Racing",$pts[0],$pts[1],$pts[0],$pts[0]),
	array('924',"WAG Racing",	$pts[0],$pts[2],$pts[0],$pts[0])
);

include('../pointsTable.php');

?>