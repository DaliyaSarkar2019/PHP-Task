<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Search System</title>
</head>

<body>
	<form action="search.php" method="post">
        <input type="Search" name="s1" id="s1" autocomplete="off" placeholder="Enter the ID">
       	<input type="submit" name="b1" value="Search"> <br/><br/>
    </form>
    <table border="1">
    	<tr>
        	<th>Sl No.</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Age</th>
            <th>Mobile Number</th>
            <th>Email Address</th>
            <th>Gender</th>
            <th>Address</th>
        </tr>
        <?php
		include("connection.php");
		$d1 = mysqli_query($conn, "select * from employee_add");
        while($row=mysqli_fetch_array($d1))
        {
        ?>
            <tr>
            <td><?php echo $row[0] ?></td>
            <td><?php echo $row[1] ?></td>
            <td><?php echo $row[2] ?></td>
            <td><?php echo $row[3] ?></td>
            <td><?php echo $row[4] ?></td>
            <td><?php echo $row[5] ?></td>
            <td><?php echo $row[6] ?></td>
            <td><?php echo $row[7] ?></td>
            </tr>
        <?php
        }
    echo "</table>";
	echo"<br/>";
	echo"<br/>";
	?>
    <?php
		if(isset($_POST['b1']))
		{
			include("connection.php");
			$s2 = $_POST['s1'];
			if ($s2 == "")
			{
				echo "Search field can't be blank";
			}
			elseif ($s3 = mysqli_query($conn, "select * from employee_add where id = '$s2'")) 
			{
				$num = mysqli_num_rows($s3);
				if ($num == 0)
				{
					echo "There is no result to show";
				}
				else
				{
					echo "<h3>Search result</h3>";
					echo "<table border='1'>";
					echo "<tr>";
					echo "<th>Sl no.</th>";
					echo "<th>FirstName</th>";
					echo "<th>LastName</th>";
					echo "<th>Age</th>";
					echo "<th>Mobile Number</th>";
					echo "<th>Email Address</th>";
					echo "<th>Gender</th>";
					echo "<th>Address</th>";
					echo "</tr>";
					while($result=mysqli_fetch_array($s3))
					{
					?>
                        <tr>
                        <td><?php echo $result[0] ?></td>
                        <td><?php echo $result[1] ?></td>
                        <td><?php echo $result[2] ?></td>
                        <td><?php echo $result[3] ?></td>
                        <td><?php echo $result[4] ?></td>
                        <td><?php echo $result[5] ?></td>
                        <td><?php echo $result[6] ?></td>
                        <td><?php echo $result[7] ?></td>
                        <td>1</td>
                        </tr>
            		<?php
					}
				}
			}
			elseif ($s4 = mysqli_query($conn, "select * from employee_add where firstname = '$s2'")) 
			{
				$num1 = mysqli_num_rows($s4);
				if ($num1 == 0)
				{
					echo "There is no result to show";
				}
				else
				{
					echo "<h3>Search result</h3>";
					echo "<table border='1'>";
					echo "<tr>";
					echo "<th>Sl no.</th>";
					echo "<th>FirstName</th>";
					echo "<th>LastName</th>";
					echo "<th>Age</th>";
					echo "<th>Mobile Number</th>";
					echo "<th>Email Address</th>";
					echo "<th>Gender</th>";
					echo "<th>Address</th>";
					echo "</tr>";
					while($rs2=mysqli_fetch_array($s4))
					{
					?>
						<tr>
						<td><?php echo $rs2[0] ?></td>
						<td><?php echo $rs2[1] ?></td>
						<td><?php echo $rs2[2] ?></td>
						<td><?php echo $rs2[3] ?></td>
						<td><?php echo $rs2[4] ?></td>
						<td><?php echo $rs2[5] ?></td>
						<td><?php echo $rs2[6] ?></td>
						<td><?php echo $rs2[7] ?></td>
                        <td>4</td>
						</tr>
					<?php
					}
				}
			}	
			elseif ($s5 = mysqli_query($conn, "select * from employee_add where lastname = '$s2'")) 
			{
				$num2 = mysqli_num_rows($s5);
				if ($num2 == 0)
				{
					echo "There is no result to show";
				}
				else
				{
					echo "<h3>Search result</h3>";
					echo "<table border='1'>";
					echo "<tr>";
					echo "<th>Sl no.</th>";
					echo "<th>FirstName</th>";
					echo "<th>LastName</th>";
					echo "<th>Age</th>";
					echo "<th>Mobile Number</th>";
					echo "<th>Email Address</th>";
					echo "<th>Gender</th>";
					echo "<th>Address</th>";
					echo "</tr>";
					while($rs1=mysqli_fetch_array($s5))
					{
					?>
						<tr>
						<td><?php echo $rs1[0] ?></td>
						<td><?php echo $rs1[1] ?></td>
						<td><?php echo $rs1[2] ?></td>
						<td><?php echo $rs1[3] ?></td>
						<td><?php echo $rs1[4] ?></td>
						<td><?php echo $rs1[5] ?></td>
						<td><?php echo $rs1[6] ?></td>
						<td><?php echo $rs1[7] ?></td>
                        <td>3</td>
						</tr>
					<?php
					}
				}
			}	
			elseif ($s6 = mysqli_query($conn, "select * from employee_add where firstname LIKE '$s2%'")) 
			{
				$num3 = mysqli_num_rows($s6);
				if ($num3 == 0)
				{
					echo "There is no result to show";
				}
				else
				{
					echo "<h3>Search result</h3>";
					echo "<table border='1'>";
					echo "<tr>";
					echo "<th>Sl no.</th>";
					echo "<th>FirstName</th>";
					echo "<th>LastName</th>";
					echo "<th>Age</th>";
					echo "<th>Mobile Number</th>";
					echo "<th>Email Address</th>";
					echo "<th>Gender</th>";
					echo "<th>Address</th>";
					echo "</tr>";
					while($rs2=mysqli_fetch_array($s6))
					{
					?>
						<tr>
						<td><?php echo $rs2[0] ?></td>
						<td><?php echo $rs2[1] ?></td>
						<td><?php echo $rs2[2] ?></td>
						<td><?php echo $rs2[3] ?></td>
						<td><?php echo $rs2[4] ?></td>
						<td><?php echo $rs2[5] ?></td>
						<td><?php echo $rs2[6] ?></td>
						<td><?php echo $rs2[7] ?></td>
                        <td>4</td>
						</tr>
					<?php
					}
				}
			}	
			elseif ($s7 = mysqli_query($conn, "select * from employee_add where lastname LIKE '$s2%'")) 
			{
				$num4 = mysqli_num_rows($s7);
				if ($num4 == 0)
				{
					echo "There is no result to show";
				}
				else
				{
					echo "<h3>Search result</h3>";
					echo "<table border='1'>";
					echo "<tr>";
					echo "<th>Sl no.</th>";
					echo "<th>FirstName</th>";
					echo "<th>LastName</th>";
					echo "<th>Age</th>";
					echo "<th>Mobile Number</th>";
					echo "<th>Email Address</th>";
					echo "<th>Gender</th>";
					echo "<th>Address</th>";
					echo "</tr>";
					while($rs3=mysqli_fetch_array($s7))
					{
					?>
						<tr>
						<td><?php echo $rs3[0] ?></td>
						<td><?php echo $rs3[1] ?></td>
						<td><?php echo $rs3[2] ?></td>
						<td><?php echo $rs3[3] ?></td>
						<td><?php echo $rs3[4] ?></td>
						<td><?php echo $rs3[5] ?></td>
						<td><?php echo $rs3[6] ?></td>
						<td><?php echo $rs3[7] ?></td>
                        <td>5</td>
						</tr>
					<?php
					}
				}
			}
			elseif ($s8 = mysqli_query($conn, "select * from employee_add where CONCAT(firstname,' ',lastname) LIKE '%$s2%'")) 
			{
				$num5 = mysqli_num_rows($s8);
				if ($num5 == 0)
				{
					echo "There is no result to show";
				}
				else
				{
					echo "<h3>Search result</h3>";
					echo "<table border='1'>";
					echo "<tr>";
					echo "<th>Sl no.</th>";
					echo "<th>FirstName</th>";
					echo "<th>LastName</th>";
					echo "<th>Age</th>";
					echo "<th>Mobile Number</th>";
					echo "<th>Email Address</th>";
					echo "<th>Gender</th>";
					echo "<th>Address</th>";
					echo "</tr>";
					while($rs4=mysqli_fetch_array($s8))
					{
					?>
						<tr>
						<td><?php echo $rs4[0] ?></td>
						<td><?php echo $rs4[1] ?></td>
						<td><?php echo $rs4[2] ?></td>
						<td><?php echo $rs4[3] ?></td>
						<td><?php echo $rs4[4] ?></td>
						<td><?php echo $rs4[5] ?></td>
						<td><?php echo $rs4[6] ?></td>
						<td><?php echo $rs4[7] ?></td>
                        <td>6</td>
						</tr>
					<?php
					}
				}
			}
			elseif ($s9 = mysqli_query($conn, "select * from employee_add where age = '$s2'")) 
			{
				$num6 = mysqli_num_rows($s9);
				if ($num6 == 0)
				{
					echo "There is no result to show";
				}
				else
				{
					echo "<h3>Search result</h3>";
					echo "<table border='1'>";
					echo "<tr>";
					echo "<th>Sl no.</th>";
					echo "<th>FirstName</th>";
					echo "<th>LastName</th>";
					echo "<th>Age</th>";
					echo "<th>Mobile Number</th>";
					echo "<th>Email Address</th>";
					echo "<th>Gender</th>";
					echo "<th>Address</th>";
					echo "</tr>";
					while($rs5=mysqli_fetch_array($s9))
					{
					?>
						<tr>
						<td><?php echo $rs5[0] ?></td>
						<td><?php echo $rs5[1] ?></td>
						<td><?php echo $rs5[2] ?></td>
						<td><?php echo $rs5[3] ?></td>
						<td><?php echo $rs5[4] ?></td>
						<td><?php echo $rs5[5] ?></td>
						<td><?php echo $rs5[6] ?></td>
						<td><?php echo $rs5[7] ?></td>
                        <td>7</td>
						</tr>
					<?php
					}
				}
			}	
			elseif ($s10 = mysqli_query($conn, "select * from employee_add where PhoneNumber LIKE '$s2%'")) 
			{
				$num7 = mysqli_num_rows($s10);
				if ($num7 == 0)
				{
					echo "There is no result to show";
				}
				else
				{
					echo "<h3>Search result</h3>";
					echo "<table border='1'>";
					echo "<tr>";
					echo "<th>Sl no.</th>";
					echo "<th>FirstName</th>";
					echo "<th>LastName</th>";
					echo "<th>Age</th>";
					echo "<th>Mobile Number</th>";
					echo "<th>Email Address</th>";
					echo "<th>Gender</th>";
					echo "<th>Address</th>";
					echo "</tr>";
					while($rs6=mysqli_fetch_array($s10))
					{
					?>
						<tr>
						<td><?php echo $rs6[0] ?></td>
						<td><?php echo $rs6[1] ?></td>
						<td><?php echo $rs6[2] ?></td>
						<td><?php echo $rs6[3] ?></td>
						<td><?php echo $rs6[4] ?></td>
						<td><?php echo $rs6[5] ?></td>
						<td><?php echo $rs6[6] ?></td>
						<td><?php echo $rs6[7] ?></td>
                        <td>7</td>
						</tr>
					<?php
					}
				}
			}
			elseif ($s11 = mysqli_query($conn, "select * from employee_add where address = '$s2'")) 
			{
				$num8 = mysqli_num_rows($s11);
				if ($num8 == 0)
				{
					echo "There is no result to show";
				}
				else
				{
					echo "<h3>Search result</h3>";
					echo "<table border='1'>";
					echo "<tr>";
					echo "<th>Sl no.</th>";
					echo "<th>FirstName</th>";
					echo "<th>LastName</th>";
					echo "<th>Age</th>";
					echo "<th>Mobile Number</th>";
					echo "<th>Email Address</th>";
					echo "<th>Gender</th>";
					echo "<th>Address</th>";
					echo "</tr>";
					while($rs7=mysqli_fetch_array($s11))
					{
					?>
						<tr>
						<td><?php echo $rs7[0]; ?></td>
						<td><?php echo $rs7[1];?></td>
						<td><?php echo $rs7[2]; ?></td>
						<td><?php echo $rs7[3]; ?></td>
						<td><?php echo $rs7[4]; ?></td>
						<td><?php echo $rs7[5]; ?></td>
						<td><?php echo $rs7[6]; ?></td>
						<td><?php echo $rs7[7]; ?></td>
                        <td>8</td>
						</tr>
					<?php
					}
				}
			}
			else{
				echo "No Data";
			}
					
			echo "</table>";
			
		}
	?>
</body>
</html>