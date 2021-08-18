<?php
	include("header.php");
	include("DBClass.php");
	$dbObj = new DBClass();

	$id = 0;
	
	$name = "";
	$city = "";
	$_store="";

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		if($_GET['mode'] == "edit")
		{
			$query = "SELECT * FROM students WHERE id = " . $id;
			$result = $dbObj->executeQuery($query);
			$row = mysqli_fetch_assoc($result);
			
			$name = $row['name'];
			$city = $row['city'];
			$_store=$row['image'];
		}
		else
		{
			$query = "DELETE FROM students WHERE id = " . $id;
			$dbObj->executeQuery($query);

			header("Location:students.php");
		}
	}

?>
<div class="row">
	<div class="col-lg-6">
		<h4>Student Master</h4>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
	<form action="studentcode.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id"  value="<?php echo $id; ?>" name="">
		<div class="col-lg-12">
			Student Name
			<input type="text" name="name" placeholder="student name" value="<?php echo $name; ?>" class="form-control" required>
		</div>
		<div class="col-lg-12">
			<br/>
			Student City
			<input type="text" name="city" placeholder="student city" value="<?php echo $city; ?>" class="form-control" required>
		</div>
		<div class="col-lg-12">
			<br />
			Select Image:<input type="file" name="file" value="" accept="image/*">
		</div>
		<div class="col-lg-12">
			<br />
			<input type="submit" name="submit" value="Save" class="btn btn-primary">
		</div>
	</form>
</div>
</div>

