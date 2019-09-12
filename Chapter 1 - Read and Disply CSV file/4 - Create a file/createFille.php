<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create a file</title>
</head>

<body>
<?php
	if(file_exists("myDiary.txt")){
		$file = fopen("myDiary.txt","r");
		echo "Reading";
	}
	else{
		$file = fopen("myDiary.txt","w");
	 	echo "Txt File successfully created";
	}
	 
	 
?>
</body>
</html>