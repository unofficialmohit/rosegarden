<?php
$con=mysqli_connect("localhost","root","","rose");
if(mysqli_connect_errno())
{
echo "failed to connect to mysql: ".mysql_connect_error();
}
$uname=$_COOKIE['username'];
$pass=$_COOKIE['password'];
$sql="select complaint from feedback  JOIN login On login.phone=feedback.phone where username=\"$uname\" and pass=\"$pass\"";
$result=mysqli_query($con,$sql);
$count = mysqli_num_rows($result);
if($count==1)
{
$row=mysqli_fetch_array($result);
$cmp=$row['complaint'];
$sql1="delete from feedback where complaint=\"$cmp\"";
if(mysqli_query($con, $sql1))
{
	echo ("<script LANGUAGE='JavaScript'>
		window.alert('FeedBack Deleted Successfully');
		window.location.href='feedback1.php';
		</script>");
	}
	else {
		echo "ERROR";
	}

}
?>
