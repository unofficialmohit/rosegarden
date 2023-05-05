<?php
$con=mysqli_connect("localhost","root","","rose");
if(mysqli_connect_errno())
{
echo "failed to connect to mysql: ".mysql_connect_error();
}
$uname=$_COOKIE['username'];
$pass=$_COOKIE['password'];
$sql="delete from login where username=\"$uname\" and pass=\"$pass\"";
if(mysqli_query($con, $sql))
{
	echo ("<script LANGUAGE='JavaScript'>
		window.alert('Account Deleted Successfully..Redirecting........');
		window.location.href='index.php';
		</script>");
	}
	else {
		echo "ERROR";
	}
?>
