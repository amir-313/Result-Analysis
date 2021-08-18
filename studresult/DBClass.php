<?php
	class DBClass
	{
		var $servername = "localhost";
		var $username = "root";
		var $dbname = "resultanalysis";
		var $password = "";

		public function executeQuery($query)
		{
			$conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
			$data = mysqli_query($conn, $query);
			return $data;
		}
	}
?>