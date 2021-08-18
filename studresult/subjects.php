<?php
	include("header.php");
	include("DBClass.php");
	$dbObj = new DBClass();
	$query = "SELECT * FROM subjects";
	$result = $dbObj->executeQuery($query);

?>
<div class="row">
	<div class="col-lg-6">
		<h4>Subject List</h4>
	</div>
	<div class="col-lg-6 text-right">
		<a class="btn btn-primary" href="subject.php">Add SUBJECT</a>
	</div>
</div>
<div class="row">
	<table class="table">
		<tr>
			<td>Action</td>
			<td>No.</td>
			<td>Name</td>
			
		</tr>
		<?php
			$count =1;
			while ($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td><a href='subject.php?id=" . $row['id'] . "&mode=edit'>Edit</a>";
				echo "&nbsp;<a onclick='return confirm(\"Sure to delete?\");' href='subject.php?id=" . $row['id'] . "&mode=delete'>Delete</a></td>";
				echo "<td>". $count . "</td>";
				echo "<td>". $row['name'] . "</td>";
				
				echo "<td></td>";
				echo "<td></td>";
				echo "</tr>";

				$count++;
			}
		?>
	</table>
</div>
