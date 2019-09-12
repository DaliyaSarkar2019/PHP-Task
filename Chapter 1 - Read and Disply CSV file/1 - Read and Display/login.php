<?php
	$user=$_POST["user"];
	$pass=$_POST["pass"];
	include("connection.php");
	$query=mysql_query(" select `id` from `login` where `username`='$user' and `password`='$pass' ");
	$result=mysql_fetch_array($query);
	$id=$result['id'];
	$num=mysql_num_rows($query);
	if(!$user && !$pass)
	{
		echo "All Fields required";
	}
	else if(!$user)
		{
			echo "Username required";
		}
		else if(!$pass)
			{
				echo "Password required";
			}
			else if($num==0)
				{
					echo "Invalid data";
				}
				else
				{
					session_start();
					$_SESSION['id']=$id;
					echo '<script>window.location.href="file.php"</script>';
				}
?>