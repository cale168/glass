<?php include('../../../header.html');

$pts=array(0,25,22,20,18,16,15,14,13,12,11,10,9,8,7,6,5,4,3,2,1);

$mod=array
(
	array("R2",	"Team D",$pts[1],$pts[0],$pts[8]),
	array("94",	"Performance Racing",$pts[2],$pts[0],$pts[0]),
	array("0H",	"Outlaw Racing",$pts[3],$pts[3],$pts[5]),
	array(1,	"Team Chippewa",$pts[4],$pts[2],$pts[3]),
	array("44",	"Kyle VanSloten",$pts[5],$pts[1],$pts[10]),
	array("T2",	"Robins Farms",$pts[6],$pts[0],$pts[6]),
	array('62',	'North Channel Outdoors', $pts[0],$pts[5],$pts[0]),
	array('144','Dunn Racing',$pts[0],$pts[4],$pts[0]),
	array('8',	'Warner Racing',$pts[0],$pts[6],$pts[7]),
	array('98',	'Wide Open Racing',$pts[0],$pts[7],$pts[0]),
	array('173','Blue Thunder',$pts[0],$pts[0],$pts[1]),
	array('86',	'MPH Racing',$pts[0],$pts[0],$pts[2]),
	array('924','WAG Racing',$pts[0],$pts[0],$pts[4]),
	array('11',	'Bay Mills Racing',$pts[0],$pts[0],$pts[9]),
	array('54',	'Furkey Racing',$pts[0],$pts[0],$pts[11]),
	array('11W','Bay Mills Racing',$pts[0],$pts[0],$pts[13]),
	array('3B','IBS Racing',$pts[0],$pts[0],$pts[14]),
	array('15','Zach Frazier',$pts[0],$pts[0],$pts[0]),
	array('','','','','',''),
	array('','','','','','')
);

include('pointsTable.php');

?>