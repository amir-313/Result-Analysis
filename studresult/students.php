<style type="text/css">
	 #maintable td.green {color:#23db0f;} 
	  #maintable td.red {color:#ef0000;} 
	  #maintable td.yellow {color:#0620e5;} 
	  

</style>
<?php
	include("header.php");
	include("DBClass.php");
	$dbObj = new DBClass();
	$query = "SELECT * FROM students";
	$result = $dbObj->executeQuery($query);
	
   
    
    $query="SELECT count(*) as totalsubcount from subjects";
	$result = $dbObj->executeQuery($query);
   	$row = mysqli_fetch_assoc($result);
   	$total = $row['totalsubcount'];

    $query="SELECT *,(SELECT count(*) from marks where marks.stud_id=students.id) as studsubcount from students";
    $result = $dbObj->executeQuery($query);
 ?>
<div class="row">
	<div class="col-lg-6">
		<h4>Student List</h4>
	</div>
	<div class="col-lg-6 text-right">
		<a class="btn btn-primary" href="student.php">Add Student</a>
	</div>
</div>
<div class="row">
	<table class="table"  id="maintable">
		<tr>
			<td>Action</td>
			<td>No</td>
			<td>Image</td>
			<td>Name</td>
			<td>marks Filled</td>
			<td>City</td>
			<td>Marks</td>
			<td>PRINT</td>
		</tr>
		<?php
			$count =1;
			while ($row = mysqli_fetch_assoc($result))
			{
				echo "<tr>";
				echo "<td><a href='student.php?id=" . $row['id'] . "&mode=edit'>Edit</a>";
				echo "&nbsp;<a onclick='return confirm(\"Sure to delete?\");' href='student.php?id=" . $row['id'] . "&mode=delete'>Delete</a></td>";

				echo "<td>". $count . "</td>";
				echo"<td><img src='". $row['image']."' height='100' width='100'></td>";
				echo "<td>". $row['name'] . "</td>";
				if($row['studsubcount']==$total)
				echo "<td class='green'>FULL</td>";
			elseif($row['studsubcount']==0)
				echo "<td class='red'>EMPTY</td>";
			elseif($row['studsubcount']<$total)
				echo "<td class='yellow'>PARTIAL</td>";
				echo "<td>". $row['city'] . "</td>";
				echo "<td><a href='marks.php?id=".$row['id']."'>Marks</a></td>";
				echo "<td><a href='results.php?id=".$row['id']."'>PRINT</a></td>";
				echo "</tr>";

				$count++;
			}
		?>
	</table>
</div>
<?php
	include("footer.php");
?>