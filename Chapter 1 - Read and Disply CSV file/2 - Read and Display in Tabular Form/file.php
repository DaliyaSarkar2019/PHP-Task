<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Read and Display Excel Data in Tabular form</title>
<style>
	.table{
		border:1px solid #000;
		border-collapse:collapse;
	}
	td{
		width:200px;
		padding:10px;
	}
	.table tr:nth-child(even){
		background-color: #f2f2f2;
	}
	.table tr:hover{
		background-color: #ccc;
	}

	

</style>
</head>

<body>
	<?php
		echo "<table class='table' border='1'>";
		if (($file = fopen('student_info.csv', 'r')) !== FALSE)
		{
			echo "<tr>";
			echo "<th>Name</th>";
			echo "<th>Age</th>";
			echo "<th>Gender</th>";
			echo "<th>Phone Number</th>";
			echo "<th>Email Address</th>";
			echo "<th>Address</th>";
			echo "</tr>\n";
			fgetcsv($file);
			while (($line = fgetcsv($file, 1000, ',')) !== FALSE) {
			echo "<tr>";
			foreach ($line as $a) {
				echo "<td>" . $a . "</td>";
			}
			echo "</tr>\n";
		}
			fclose($file);
		}
		echo "</table>";
	?>
    

</body>
</html>