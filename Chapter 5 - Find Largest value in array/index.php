<?php
$arr=array(0,11,12,100,13,10,15);
$temp=$arr[0];
foreach($arr as $x)
{
	if($x>$temp){
		$temp=$x;
	}
}
echo "Largest value = ".$temp;
?>