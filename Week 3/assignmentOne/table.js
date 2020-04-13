var table = "<table>";

table += "<tr><th>Number</th><th>Square</th><th>Cube</th></tr>";

for (var i = 2; i <= 8; i++) {
	table += "<tr>";
	table += "<td>" + i + "</td>";
	table += "<td>" + i ** 2 + "</td>";
	table += "<td>" + i ** 3 + "</td>";
	table += "</tr>";
}

table += "</table>";

document.write(table)