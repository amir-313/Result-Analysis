<?php
	include("DBClass.php");
	$dbObj = new DBClass();
	$id = $_REQUEST['id'];
	$name = $_REQUEST['name'];
	$city = $_REQUEST['city'];
    

	if($id == 0)
	{  

		$query = "INSERT INTO students(name, city) VALUES('" . $name . "', '" . $city . "')";
		$dbObj->executeQuery($query);
		 $query="select max(id) as id from students";
	    $result= $dbObj->executeQuery($query);
	    $row=mysqli_fetch_assoc($result);
	    $id=$row['id'];
	}
	else
	{
		$query = "update students SET name = '" . $name . "', city = '" . $city . "' WHERE id = " . $id;
		$dbObj->executeQuery($query);	
	}

	 if(!empty($_FILES['file']['name'])){
     $_store="upload/". $id. ".png";
     $_tmp=$_FILES['file']['tmp_name'];
     move_uploaded_file($_tmp,$_store);

    $query = "update students SET image ='" .$_store."'  WHERE id = " . $id;
    $dbObj->executeQuery($query);

	}

	header("Location:students.php");

?>