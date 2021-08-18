<?php
	include("header.php");
	include("DBClass.php");
	$dbObj = new DBClass();

	$id = 0;
	$name = "";
	$city = "";

	if(isset($_GET['id']))
	{
		$id = $_GET['id'];
		if($_GET['mode'] == "edit")
		{
			$query = "SELECT * FROM subjects WHERE id = " . $id;
			$result = $dbObj->executeQuery($query);
			$row = mysqli_fetch_assoc($result);
			$name = $row['name'];
			$marks = $row['marks'];
			$min_marks = $row['min_marks'];
		}
		else
		{
			$query = "DELETE FROM subjects WHERE id = " . $id;
			$dbObj->executeQuery($query);

			header("Location:subjects.php");
		}
	}

?>
<div class="row">
	<div class="col-lg-6">
		<h4></h4>
	</div>
</div>
<div class="row">
	<div class="col-lg-12">
	<form action="subjectcode.php" method="POST">
		<input type="hidden" name="id"  value="<?php echo $id; ?>" name="">
		<div class="col-lg-12">
			Subject Name:
			<br />
			<input type="text" name="name" placeholder="subject name" value="<?php echo $name; ?>" class="form-control" required>
		</div>
		<br />

			<input type="submit" name="submit" value="Save" class="btn btn-primary">
		</div>
	</form>
</div>
</div>
<?php
	include("footer.php");
?>