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
		
		if($_POST['btn1'] == 'Submit')
		{
			$obj->funcSave();
		}else{
			$obj->id = $_POST['hid'];
			$obj->funcUpdate();
		}
	}

	if(isset($_GET['did']))
	{
		$obj->id = $_GET['did'];
		$obj->funcDelete();
	}

	$sports = array();
	if(isset($_GET['uid']))
	{
		$obj->id = $_GET['uid'];
		$obedit = $obj->funcEdit();
		$sports = explode(',', $obedit['sports']);
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
    	<input type="hidden" name="hid" value="<?php echo !empty($_REQUEST['uid'])?$_REQUEST['uid']:''; ?>">
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
							$sel = !empty($obedit['age']) && $obedit['age'] == $i?'selected':'';
							echo "<option value='$i' $sel >$i</option>";
						}
					?>
                </td>
            </tr>
            <tr>
            	<td>SALARY :</td>
                <td><input type="text" name="salary1" placeholder="Enter Salary" autocomplete="off" value="<?php echo !empty($obedit)?$obedit['salary']:''; ?>"></td>
            </tr>
            <tr>
            	<td>ADDRESS :</td>
                <td><textarea rows="3" cols="25" name="address1" placeholder="Enter Address"><?php echo !empty($obedit)?$obedit['address']:''; ?></textarea></td>
            </tr>
            <tr>
            	<td>GENDER :</td>
                <td><input type="radio" name="gender1" value="Male" <?php echo !empty($obedit['gender']) && $obedit['gender'] == 'Male'?'checked':'' ?>>Male
                <input type="radio" name="gender1" value="Female" <?php echo !empty($obedit['gender']) && $obedit['gender'] == 'Female'?'checked':'' ?> >Female</td>
            </tr>
            <tr>
            	<td>SPORTS :</td>
                <td><input type="checkbox" name="chk[]" value="Cricket" <?php echo in_array('Cricket',$sports)?'checked':'' ?>>Cricket
                <input type="checkbox" name="chk[]" value="Football" <?php echo in_array('Football',$sports)?'checked':'' ?>>Football
                <td><input type="checkbox" name="chk[]" value="Hockey" <?php echo in_array('Hockey',$sports)?'checked':'' ?>>Hockey
                <input type="checkbox" name="chk[]" value="Boxing" <?php echo in_array('Boxing',$sports)?'checked':'' ?>>Boxing</td>
            </tr>
            <tr>
                <td><input type="submit" name="btn1" value="<?php echo !empty($obedit)?'Update':'Submit'; ?>"></td>
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