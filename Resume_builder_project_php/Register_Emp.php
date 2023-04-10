<?php
include("All_Database.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
	
	$id=$_POST['id'];
	$name=$_POST['name'];
	$vaccancy=$_POST['vaccancy'];
	$comany=$_POST['comany'];
	$qulification=$_POST['qulification'];
	
$sql="INSERT INTO emp_reg(id , name ,vaccancy ,company,qulification) 
		VALUES('$id','$name','$vaccancy','$comany','$qulification')";
$con->exec($sql);
echo '<script>alert("Account Created SucessFully...!")</script>';
}
?>
<html>
</body>
<form method="POST">
<center>
	<h1>Employee SignUp</h1>
<label><b> Employee Id</label>
	<input type="text" name="id"><br><br>
	
<label>Employee Name:-</label>
	<input type="text" name="name"><br><br>

<label>No Of vaccancy</label>
	<input type="text" name="vaccancy"><br><br>
	
<label>Name Of Comany</label>
	<input type="comany" name="comany"><br><br>
	
<label>Qulification Required</label>
	<input type="text" name="qulification"><br><br>
	
	<input type="Submit"  value="Submit">
	
	</center>
</form>
</body>
</html>