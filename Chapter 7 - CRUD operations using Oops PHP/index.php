<?php
	include 'busLogic.php';
	$obj = new clsUser;
	
	if(isset($_POST['btn1']))
	{
		$obj->name = $_POST['name1'];
		$obj->age = $_POST['age1'];
		$obj->salary = $_POST['salary1'];
		$obj->address = $_POST['address1'];
		$obj->gender = $_POST['gender1'];
		$obj->sports = implode(',',$_POST['chk']);
		$obj->funcSave();
	}
?>
<?php
	if(isset($_GET['did']))
	{
		$obj->id = $_GET['did'];
		$obj->funcDelete();
	}
?>

<?php
	if(isset($_GET['uid']))
	{
		$obj->id = $_GET['uid'];
		$objEdit = $obj->funcEdit();
		foreach($objEdit as $obedit) { 
		
		}
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP CRUD operations using Oops</title>
</head>

<body>
	<h2>Basic Registration Form</h2>
	<form name="f1" action="index.php" method="post">
    	<table>
        	<tr>
            	<td>NAME :</td>
                <td><input type="text" name="name1" placeholder="Enter Name" autocomplete="off" value="<?php echo !empty($obedit)?$obedit['name']:''; ?>"></td>
            </tr>
            <tr>
            	<td>AGE :</td>
                <td><select name="age1">
                	<option value="-1">--Select age--</option>
                    <?php
						for($i=18;$i<=60;$i++)
						{
							echo "<option value='$i'>$i</option>";
						}
					?>
                </td>
            </tr>
            <tr>
            	<td>SALARY :</td>
                <td><input type="text" name="salary1" placeholder="Enter Salary" autocomplete="off"></td>
            </tr>
            <tr>
            	<td>ADDRESS :</td>
                <td><textarea rows="3" cols="25" name="address1" placeholder="Enter Address"></textarea></td>
            </tr>
            <tr>
            	<td>GENDER :</td>
                <td><input type="radio" name="gender1" value="Male">Male
                <input type="radio" name="gender1" value="Female">Female</td>
            </tr>
            <tr>
            	<td>SPORTS :</td>
                <td><input type="checkbox" name="chk[]" value="Cricket">Cricket
                <input type="checkbox" name="chk[]" value="Football">Football
                <td><input type="checkbox" name="chk[]" value="Hockey">Hockey
                <input type="checkbox" name="chk[]" value="Boxing">Boxing</td>
            </tr>
            <tr>
                <td><input type="submit" name="btn1" value="SUBMIT"></td>
                <td><input type="submit" name="btn2" value="CANCEL"></td>
            </tr>
        </table>
    </form>
    <br/><br/>
    <?php 
		$retRec = $obj->funcSelect();
	?>
    <table border="1">
    	<tr>
        	<th>Name</th>
            <th>Age</th>
            <th>Address</th>
            <th>salary</th>
            <th>Gender</th>
            <th>Sports</th>
            <th>Action</th>
        </tr>
        <?php foreach($retRec as $ret) { ?>
        	<tr>
            	<td><?php echo $ret['name'] ?></td>
                <td><?php echo $ret['age'] ?></td>
                <td><?php echo $ret['address'] ?></td>
                <td><?php echo $ret['salary'] ?></td>
                <td><?php echo $ret['gender'] ?></td>
                <td><?php echo $ret['sports'] ?></td>
                <td><a href="index.php?uid=<?php echo $ret['id'] ?>">EDIT</a> <a href="index.php?did=<?php echo $ret['id'] ?>">DELETE</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>