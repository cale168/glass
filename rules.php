<div id="header"></div>


<script>
// Load external HTML into the #header div
fetch('/glass/header.html')
  .then(response => {
    if (!response.ok) throw new Error("Failed to load HTML");
    return response.text();
  })
  .then(data => {
    document.getElementById('header').innerHTML = data;
  })
  .catch(err => console.error(err));
</script>

<style>
body {
    color: white;
}
</style>
<br>
<br>

<table width="850" border="0">
<tbody>
<tr>
<td>

<p align="left"> <span style="color:white">
<font size="5">General</font>
	</br>
1 &nbsp&nbsp Ski hoops on metal ski's must be wrapped to 1" Diameter </br>
2 &nbsp&nbsp Must wear approved snell helmet	</br>
3 &nbsp&nbsp Must wear approved chest protector	</br>
4 &nbsp&nbsp Must have 144 square inches of race orange on front and back of jacket	</br>
5 &nbsp&nbsp Must have working tether at all times (will be enforced) Mount on snowmobile not handlebars</br>	
6 &nbsp&nbsp Must have working tail light at start of race (does not have to run off motor)	</br>
7 &nbsp&nbsp Must have warm up stand with back and sides	</br>
8 &nbsp&nbsp Must have rear <b>snow flap</b> at all times	</br>
9 &nbsp&nbsp Must have fire extinguisher in pits at all times	</br>
10 &nbsp&nbsp You may refuel with a running engine as long as up to date fire extinguisher is within quick reach.</br>	
11 &nbsp No changing motors during race	</br>
</span></p>


<p align="center" style="text-align:left"><font size="5.5">
<span style="font-family: 'Berlin Sans FB',sans-serif">
Modified Sled Rules 2016: </font> <br>
<font size="4.5">
<a href="modrules.php">Snow Enduro, Snow Sprint</a> </br>
<a href="modRulesIce.php">Ice Enduro</a></span></font></p>


<p align="center" style="text-align:left"><font size="5.5">
<span style="font-family: 'Berlin Sans FB',sans-serif">
Stock Sled Rules 2016: </font> <br>
<font size="4.5">
<a href="stockrules.php">Snow Enduro, Snow Sprint</a> </br>
<a href="stockRulesIce.php">Ice Enduro</a></span></font></p>

<p align="center" style="text-align:left"><font size="5.5">
<span style="font-family: 'Berlin Sans FB',sans-serif">
Twin Stock Sled Rules 2016: </font> <br>
<font size="4.5">
<a href="twinStockRules.php">Snow Enduro, Snow Sprint</a> </br>
<a href="twinStockRulesIce.php">Ice Enduro</a></span></font></p>

<p align="center" style="text-align:left"><font size="5.5">
<span style="font-family: 'Berlin Sans FB',sans-serif">
<a href="ISREnduroRules.pdf">For All Ice Racing, we must conform to ISR standards</a></span></font></p>

</font><span style="font-family: &quot;Berlin Sans FB&quot;,&quot;sans-serif&quot;; font-size: 36pt;"><br />&nbsp;</span></p>
<p align="center"><br />&nbsp;</p>
<p align="center">&nbsp;</p>
</td>
</tr>
<tr>
<td align="center">
<p align="center">&nbsp; 

</p>
</td>
</tr>
</tbody>
</table>
</div>
</body>

</html>