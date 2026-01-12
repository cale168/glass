<div id="header"></div>

<style>
	body {
		background-color: rgb(0, 0, 0);
	}
</style>

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

<script>
const points = new Array(0,25,22,20,18,16,15,14,13,12,11,10,9,8,7,6,5,4,3,2,1);

const results = new Array(
	Array("R2",	"Team D",points[1],points[0],points[8]),
	Array("94",	"Performance Racing",points[2],points[0],points[0]),
	Array("0H",	"Outlaw Racing",points[3],points[3],points[5]),
	Array(1,	"Team Chippewa",points[4],points[2],points[3]),
	Array("44",	"Kyle VanSloten",points[5],points[1],points[10]),
	Array("T2",	"Robins Farms",points[6],points[0],points[6]),
	Array('62',	'North Channel Outdoors', points[0],points[5],points[0]),
	Array('144','Dunn Racing',points[0],points[4],points[0]),
	Array('8',	'Warner Racing',points[0],points[6],points[7]),
	Array('98',	'Wide Open Racing',points[0],points[7],points[0]),
	Array('173','Blue Thunder',points[0],points[0],points[1]),
	Array('86',	'MPH Racing',points[0],points[0],points[2]),
	Array('924','WAG Racing',points[0],points[0],points[4]),
	Array('11',	'Bay Mills Racing',points[0],points[0],points[9]),
	Array('54',	'Furkey Racing',points[0],points[0],points[11]),
	Array('11W','Bay Mills Racing',points[0],points[0],points[13]),
	Array('3B','IBS Racing',points[0],points[0],points[14]),
	Array('15','Zach Frazier',points[0],points[0],points[0]),
	Array('','','','','',''),
	Array('','','','','','')
);

</script>

<table width="850" border="0" style="color:gold">
	<tr><th>pts</th><th>position</th><th>Number</th><th>Name</th><th>Newberry</th><th>Drummond</th><th>Rockview 1</th><th>Rockview 2</th><th>Total</th></tr>

<script src="../pointsTableBuilder.js"></script>
