<?php
include  'dbms.php';
if (isset($_POST['submit']))
{
	$Name=$_POST['name'];
	$Contact=$_POST['contact'];
	$Email=$_POST['email'];
	$Message=$_POST['message'];
	
	
	$sql="INSERT INTO p11form(name,contact,email,message)values('$Name','$Contact','$Email','$Message')";
	if(mysqli_query($con,$sql))
	{
		echo "<script>alert('record submitted')</script>";
		echo "<script>window.open('cont.html','_self')</script>";
	}
	else
	{
		echo "error:" .mysqli_error($con);
	}
	mysqli_close($con);
}
?>