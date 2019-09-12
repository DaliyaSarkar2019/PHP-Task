<?php
	include 'config.php';
	class clsUser extends clsCon
	{
		public $id;
		public $name;
		public $age;
		public $salary;
		public $address;
		public $gender;
		public $sports;
		
		function funcSave()
		{
			$qry = "INSERT INTO `tbluser`(`name`, `age`, `address`, `salary`, `gender`, `sports`) VALUES ('$this->name','$this->age','$this->address','$this->salary','$this->gender','$this->sports')";
			
			$result = $this->connect()->query($qry);
			if($result)
			{
				echo "Record Saved!!";
			}else{
				echo "Error Occured, try again!!";
			}
		}
		
		function funcSelect()
		{
			$qry = "select * from tblUser";
			$res = $this->connect()->query($qry);
			$objArr = array();
			while($r = mysqli_fetch_assoc($res)){
				$objArr[] = $r;
			}
			return $objArr;
		}
		
		function funcDelete()
		{
			$qry = "delete from tblUser where id='$this->id'";
			$result = $this->connect()->query($qry);
			if($result)
			{
				echo "Record Deleted";
			}else{
				echo "Error Occured, try again!!";
			}
		}
		
		function funcEdit()
		{
			$qry = "select * from tblUser where id='$this->id'";
			$res = $this->connect()->query($qry);
			$objArr = array();
			while($r = mysqli_fetch_assoc($res)){
				$objArr[] = $r;
			}
			return $objArr;
		}
	}
?>