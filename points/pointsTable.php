<table width="850" border="0" style="color:gold">
	<tr><th>pts</th><th>position</th><th>Number</th><th>Name</th><th>Newberry</th><th>Drummond</th><th>Rockview 1</th><th>Rockview 2</th><th>Total</th></tr>

<?php

	function cmp($a, $b)
	{
	    if ($a[2]+$a[3]+$a[4]+$a[5] == $b[2]+$b[3]+$b[4]+$b[5]) {
	        return 0;
	    }
	    return ($a[2]+$a[3]+$a[4]+$a[5] > $b[2]+$b[3]+$b[4]+$b[5]) ? -1 : 1;
	}
	
	usort($mod, "cmp");
	
	$count = 0;
	foreach($mod as $team) {
		echo "<tr><td>";
		echo $pts[$count+1];
		echo "</td><td>";
		echo $count+1;
		echo "</td><td>";
		echo $team[0];
		echo "</td><td>";
		echo $team[1];
		echo "</td><td>";
		echo $team[2];
		echo "</td><td>";
		echo $team[3];
		echo "</td><td>";
		echo $team[4];
		echo "</td><td>";
		echo $team[5];
		echo "</td><td>";
		echo $team[2]+$team[3]+$team[4]+$team[5];
		echo "</td></tr>";
		$count = $count +1 ;
	}
?>

</table>