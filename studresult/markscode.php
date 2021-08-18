<?php
	include("DBClass.php");
	$dbObj = new DBClass();
    
	$studid = $_POST['studid'];
	$count = $_POST['count'];

	$query = "DELETE FROM marks WHERE stud_id = " . $studid;
	$dbObj->executeQuery($query);

	for($i = 0; $i <= $count; $i++)
	{
		$subid = $_POST['id' . $i];
		$mark = $_POST['mark' . $i];

		$query = "INSERT INTO marks(stud_id, sub_id, mark) VALUES(" . $studid . ", " .  $subid. ", " . $mark . ")";
		$dbObj->executeQuery($query);
	}
	header("Location:students.php");
?>