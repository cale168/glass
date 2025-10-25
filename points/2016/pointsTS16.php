<?php include('../../header.html');

$pts=array(0,25,22,20,18,16,15,14,13,12,11,10,9,8,7,6,5,4,3,2,1);

$mod=array
(
	array("27H","Outlaw Racing",	$pts[1],$pts[3],$pts[4],$pts[0]),
	array(4,"H & C Racing",			$pts[2],$pts[2],$pts[12],$pts[0]),
	array("X1","Holeshot Racing",	$pts[3],$pts[4],$pts[1],$pts[0]),
	array(23,"BPC Racing",			$pts[4],$pts[0],$pts[2],$pts[0]),
	array(21,"Straw",				$pts[5],$pts[0],$pts[8],$pts[0]),
	array(549,"Full Circle Racing",	$pts[6],$pts[0],$pts[9],$pts[0]),
	array(11,"Bay Mills Racing",	$pts[7],$pts[1],$pts[6],$pts[0]),
	array(60,"Full Circle Racing",	$pts[8],$pts[0],$pts[3],$pts[0]),
	array(85,"Hardlock Racing",		$pts[9],$pts[0],$pts[0],$pts[0]),
	array("X2","Holeshot Racing",	$pts[10],$pts[0],$pts[0],$pts[0]),
	array(98,"Team Tater",			$pts[11],$pts[0],$pts[0],$pts[0]),
	array(2,"Outlaw Racing",		$pts[12],$pts[0],$pts[0],$pts[0]),
	array("0H","Outlaw Racing",		$pts[13],$pts[0],$pts[0],$pts[0]),
	array(7,"Killackey Racing",		$pts[14],$pts[5],$pts[7],$pts[0]),
	array('219','K & L Racing',		$pts[0],$pts[6],$pts[0],$pts[0]),
	array('13','Warner Racing',		$pts[0],$pts[0],$pts[11],$pts[0]),
	array('63','Autore Racing',		$pts[0],$pts[0],$pts[0],$pts[0]),
	array('98-2','Wide Open Racing',$pts[0],$pts[0],$pts[5],$pts[0]),
	array('86','MPH Racing',		$pts[0],$pts[0],$pts[10],$pts[0]),
	array('98','Wide Open Racing',	$pts[0],$pts[0],$pts[13],$pts[0])
);

include('../pointsTable.php');

?>