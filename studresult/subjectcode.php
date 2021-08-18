<?php
	include("DBClass.php");
	$dbObj = new DBClass();
	$id = $_REQUEST['id'];
	$name = $_REQUEST['name'];
	$marks = $_REQUEST['marks'];
	$min_marks = $_REQUEST['min_marks'];

	if($id == 0)
	{
		$query = "INSERT INTO subjects(name, marks,min_marks) VALUES('" . $name . "', '" . $marks . "','".$min_marks."')";
		$dbObj->executeQuery($query);
	}
	else
	{
		$query = "UPDATE subjects SET name = '" . $name . "', marks = '" . $marks . "',min_marks = '" . $min_marks . "' WHERE id = " . $id;
		$dbObj->executeQuery($query);	
	}

	header("Location:subjects.php");

?>