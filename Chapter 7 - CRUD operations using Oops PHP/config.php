<?php
	class clsCon{
		
		public $conn;
		public $host = "localhost";
		public $user = "root";
		public $pass = "";
		public $db = "crud_operations";
		
		protected function connect(){
			$conn = new MySQLi($this->host,$this->user,$this->pass,$this->db);
			return $conn;
		}
	}

?>