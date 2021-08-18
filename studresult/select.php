<?php
include("header.php");
	include("DBClass.php");
	$dbObj = new DBClass();
	$query = "SELECT * FROM students";
	$result = $dbObj->executeQuery($query);
    $row=mysqli_fetch_assoc($result);
        $id=$row['id'];
        $_tmp="";
        $_store="upload/". $id . ".png";
        move_uploaded_file($_tmp,$_store);

$query = "select students.name, subjects.name, MAX(marks.mark) 
   FROM marks 
   INNER JOIN students ON students.id=marks.stud_id 
   INNER JOIN subjects ON subjects.id=marks.sub_id";
    $result = $dbObj->executeQuery($query);
   
?>

<h3><center>Student Subject Topper</center></h3>
<div class="row">
	<table class="table">
		<tr>
            
			<td>Student Name</td>
            <td>Subject Name</td>
			<td>Marks</td>
            <td>Image</td>
        </tr>
        <?php

    // output data of each row
    
    while($row = mysqli_fetch_assoc($result)) 
    {
        echo "<tr>";
        echo "<td>". $row['name']."</td>"; 
        echo "<td>". $row['name']."</td>"; 
        echo"<td>". $row['mark']."</td>";
        echo "<td><img class='img img-thumbnail' src = '".$row['image']."' height='100' width='100' /></td>";
        echo"</tr>";
    
    }

        ?>
</table>
</div>
<h3><center>Subjects Offered</center></h3>
<div class="row">
	<table class="table">
		<tr>
            <td>Subject ID</td>
			<td>Subject Name</td>
        </tr>

<?php
$query = "SELECT subjects.id,subjects.name FROM subjects";
	$result = $dbObj->executeQuery($query);
    
     $count=1;
    while($row = mysqli_fetch_assoc($result)) 
    {   
       
        echo "<tr>";
        echo "<td>". $count."</td>";
        echo "<td>". $row['name']."</td>";
        echo"</tr>";
        $count++;
    }

?>
    </table>
</div>

 

 
    