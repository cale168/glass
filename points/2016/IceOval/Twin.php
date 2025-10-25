<?php include('../../../header.html');

$pts=array(0,25,22,20,18,16,15,14,13,12,11,10,9,8,7,6,5,4,3,2,1);

$mod=array
(
	array("59"," ",					$pts[1],$pts[0],$pts[0]),
	array(20,"Wilkosz Racing",		$pts[2],$pts[0],$pts[0]),
	array("8","Warner Racing",		$pts[3],$pts[0],$pts[1]),
	array(21,"Top Shelf",			$pts[4],$pts[0],$pts[0]),
	array(56,"CMS Racing",			$pts[5],$pts[0],$pts[0]),
	array(549,"Full Circle Racing",	$pts[6],$pts[0],$pts[0]),
	array(11,"Bay Mills Racing",	$pts[7],$pts[0],$pts[0]),
	array('X-1','Dunn Racing',		$pts[0],$pts[0],$pts[2]),
	array('21','Straw Racing',		$pts[0],$pts[0],$pts[3]),
	array('11','Bay Mills Racing',	$pts[0],$pts[0],$pts[4]),
	array('15','Zach Frazier',		$pts[0],$pts[0],$pts[5]),
	array('','','','','',''),
	array('','','','','',''),
	array('','','','','',''),
	array('','','','','',''),
	array('','','','','',''),
	array('','','','','',''),
	array('','','','','',''),
	array('','','','','',''),
	array('','','','','','')
);

include('pointsTable.php');

?>