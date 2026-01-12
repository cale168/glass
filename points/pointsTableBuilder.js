
// Comparator function equivalent to PHP cmp()
function cmp(a, b) {
    let sumA = a[2] + a[3] + a[4] + a[5];
    let sumB = b[2] + b[3] + b[4] + b[5];
    return sumA > sumB ? -1 : 1; // Descending order
}

// Sort the array
results.sort(cmp);

let count = 0;
results.forEach(team =>{
	team
	document.write("<tr><td>");
	document.write(points[count+1]);
	document.write("</td><td>");
	document.write(count+1);
	document.write("</td><td>");
	document.write(team[0]);
	document.write("</td><td>");
	document.write(team[1]);
	document.write("</td><td>");
	document.write(team[2]);
	document.write("</td><td>");
	document.write(team[3]);
	document.write("</td><td>");
	document.write(team[4]);
	document.write("</td><td>");
	document.write(team[5]);
	document.write("</td><td>");
	document.write(team[2]+team[3]+team[4]+team[5]);
	document.write("</td></tr>");
	count = count +1 ;
})
