<?php
	include("header.php");
	include("DBClass.php");
	$dbObj = new DBClass();
    
	$studid = $_GET['id'];
	$query = "SELECT * FROM students WHERE id = " . $studid;
	$result = $dbObj->executeQuery($query);
	
	$row = mysqli_fetch_assoc($result);
	$_store=$row['image'];
	$name = $row['name'];
	$city = $row['city'];
	
	$query = "SELECT S.id, S.name, M.mark FROM subjects AS S LEFT OUTER JOIN marks AS M ON S.id = M.sub_id AND M.stud_id = " . $studid;
	$result = $dbObj->executeQuery($query);
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Marks</title>
	<style type="text/css">
		.table th{
			color: black;
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 style="margin-left: 10px; font-size: 25px;padding: 10px;">Student Marks</h3><br>
			</div>
		</div>
			
		<div class="row">
			<div class="col-md-4">
				<h4>Student Name: <?php echo $name; ?></h4>
					
			</div>

			<div class="col-md-4">
				<h4>City: <?php echo $city; ?></h4>

			</div>
			<div class="col-md-4">
				 <?php echo "<img src='". $row['image']."' height='130' width='130'>" ?>
					
			</div>
		</div>	

		<div class="row">
			<form action="markscode.php" method="post">
			<div class="col-md-12">
				<table class="table">
					<br><br>
					<tr>
						
						<th>No</th>
						<th>Subject Name</th>						
						<th>Marks Obtained</th>
					</tr>
					<?php
						$count =1;
						while ($row = mysqli_fetch_assoc($result))
						{
							echo "<tr>";
							echo "<td>". $count . "</td>";
							echo "<td>". $row['name'] . "</td>";
							echo "<td><input type='number' readonly='true' class='form-control'onkeyup='calculatemarks();' id='mark" . $count . "' name='mark" . $count . "' value='" . $row['mark']  . "'  required/>
							<input type='hidden' class='form-control' name='id" . $count . "' value='" . $row['id'] . "' /></td>";
							echo "<td></td>";
							echo "</tr>";

							$count++;
						}
					?>
				</table>
				TOTAL:<input type="text" readonly="true" name="total" id="total" />
				<input type="hidden" name="studid" value="<?php echo $studid; ?>" />
				<input type="hidden" id="count"readonly="true" name="count" value="<?php echo $count - 1; ?>" />
				<input type="submit" class="btn btn-primary" value="Save" />
				<button onclick='return myfunction();' class="btn btn-primary">Print</button>
			</div>
			</form>
		</div>
	</div>
</body>
</html>
 <script>
    function calculatemarks()
    {
        var count = document.getElementById("count").value;
        var total = 0;
        for(var i = 1; i <= count; i++)
        {
            var mark = parseFloat("0" + document.getElementById("mark" + i).value);
            total += mark;
        }
        document.getElementById("total").value = "" + total;
    }
    calculatemarks();
    
</script>
<script>
	function myfunction(){
   window.print();
    }
    myfunction();
    
</script>