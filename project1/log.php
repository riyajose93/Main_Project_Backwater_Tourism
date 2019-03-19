<?php
include 'dbconnection.php';
session_start();
if(isset($_POST['submit'])){
	login($con);
}
function login($con)
{
	$email=$_POST["email"];
	// $password=$_POST["pwd"];
	$password=md5($_POST["pwd"]);

	$sql="SELECT * FROM `tbl_login` WHERE email='$email' and password='$password'";
	$res=mysqli_query($con,$sql);
	while($fetch=mysqli_fetch_array($res))
	{
		if($fetch['role']==0)
		{
			$_SESSION['logid'] = $fetch['lid'];
			header("location:admin/home.php");
			
		}
		if($fetch['role']==1)
		{
			
			$_SESSION['logid'] = $fetch['lid'];
			header("location:userhome.php");
		}
		if($fetch['role']==2)
		{
			
			$_SESSION['logid'] = $fetch['lid'];
			header("location:staff/staff home.php");
		}
		if($fetch['role']==3)
		{   
			$_SESSION['logid'] = $fetch['lid'];
			header("location:owner_home.php");
		}
	}
}
 
?>
