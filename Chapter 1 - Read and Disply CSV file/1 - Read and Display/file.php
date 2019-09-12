<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Display Excel Data</title>
<style>
	.table{
		border:1px solid #000;
		border-collapse:collapse;
	}
	td{
		width:200px;
		padding:10px;
	}
	.table td:nth-child(even){
		background-color: #f2f2f2;
	}

	

</style>
</head>

<body>
	<a href="logout.php">LOGOUT</a>
	<?php
		$row = 1;
		if (($file = fopen('student_info.csv', 'r')) !== FALSE)
		{
			fgetcsv($file);
			while (($line = fgetcsv($file, 1000, ',')) !== FALSE) {
			$num = count($line);
			echo "<p> $num fields in line $row: <br/></p>";
			$row++;
			
			for ($i = 0; $i<$num;$i++){
		 		echo $line[$i]. "<br/>\n"; 
			}
		}
			fclose($file);
		}
	?>
    

</body>
</html>