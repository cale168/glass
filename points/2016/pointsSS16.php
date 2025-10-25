<?php include('../../header.html');

$pts=array(0,25,22,20,18,16,15,14,13,12,11,10,9,8,7,6,5,4,3,2,1);

$mod=array
(
	array(22,"Anderson Racing",	$pts[1],$pts[3],$pts[0],$pts[0]),
	array("1-W","Team Chippewa",$pts[2],$pts[2],$pts[1],$pts[0]),
	array(7,"Ellis Racing",		$pts[3],$pts[1],$pts[2],$pts[0]),
	array(11,"Bay Mills Racing",$pts[4],$pts[5],$pts[3],$pts[0]),
	array("70c","Old School Racing",$pts[5],$pts[0],$pts[0],$pts[0]),
	array(72,"Serial Piston Killers",$pts[6],$pts[0],$pts[0],$pts[0]),
	array(09,"Serial Piston Killers",$pts[7],$pts[0],$pts[0],$pts[0]),
	array(14,"ATF Motorsports",	$pts[8],$pts[4],$pts[6],$pts[0]),
	array(11,"Team SPK",		$pts[9],$pts[0],$pts[0],$pts[0]),
	array('5x','Last Chance Racing',$pts[0],$pts[0],$pts[4],$pts[0]),
	array('22','Anderson Racing',$pts[0],$pts[0],$pts[5],$pts[0]),
	array('98','Wide Open Racing',$pts[0],$pts[0],$pts[7],$pts[0]),
	array('54','Furkey Racing',$pts[0],$pts[0],$pts[8],$pts[0]),
	array('','','','','',''),
	array('','','','','',''),
	array('','','','','',''),
	array('','','','','',''),
	array('','','','','',''),
	array('','','','','',''),
	array('','','','','','')
);

include('../pointsTable.php');

?>