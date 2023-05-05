<html>
<head>
<title>FeedBack </title>
<link rel="stylesheet" href="css/style.css">
<link rel="icon" type="image/x-icon" href="image/title.png">
</head>
<body bgcolor=#99ff99>
<table style="width:100%;" cellpadding="5" border-collapse="0">
	<tr ><td colspan="5"  bgcolor="#3A6D0B" style="text-align:center"><a href="user1.php"><img src="image/logo.png" width="250" height="80"></a></td>
	<td bgcolor="#99e699" style="text-align:center;border: 3px solid black;border-collapse: collapse;"><a href="udata.php"> <img src="image/user.png" width="60" height="50"></a>
	</td>
	</tr>
<tr style="font-size: 13pt;" width="100%" bgcolor="#214202" class="clr">

  <td align="center" width="10%"><a href="user1.php">Home</a></td>
  <td align="center" width="10%"><a href="Gallery1.php">Gallery</a></td>
  <td align="center" width="10%"><a href="about1.php">About</a></td>
  <td align="center" width="10%"><a href="contact1.php">Contact</a></td>
  <td align="center" width="10%" bgcolor="skyblue"><a href="feedback1.php">Feedback</a></td>
  <td align="center" width="10%"><a href="index.php">Logout</a></td>
</tr>
<tr>
<td colspan="6"  class="head"><h2></h2>
<?php
$ename=$_COOKIE['username'];
$pass=$_COOKIE['password'];
$comp=$_POST['acomp'];
$city=$_POST['city'];
$rating=$_POST['rating'];
$con=mysqli_connect("localhost","root","","rose");
if(mysqli_connect_errno())
{
echo "failed to connect to mysql: ".mysql_connect_error();
}
$sql1="SELECT phone from login where username=\"$ename\" and pass=\"$pass\"";
$result=mysqli_query($con,$sql1);
$count = mysqli_num_rows($result);
if($count==1)
{
$row=mysqli_fetch_array($result);
$phone=$row['phone'];
}

$sql="INSERT INTO feedback VALUES('$rating','$comp','$city','$phone')";
if(mysqli_query($con, $sql)){
    		  echo ("<script LANGUAGE='JavaScript'>
		    window.alert(\"$ename , Your FeedBack Has Been Submitted\");
		    window.location.href='feedback1.php';
		    </script>");
		  }
?>
</td>
</tr>
<tr class="back">
<td colspan="2"><img src="image/logo.png" width="250" height="80"></td>
<td colspan="2"> <p style="color:white;">All Right Reserved</p></td>
<td colspan="2" class="social"><img src="image/facebook.png" width="20" height="20"><img src="image/twitter-old.png" width="20" height="20"><img src="image/YOUTUBE.png" width="20" height="20"><img src="image/insta.png" width="20" height="20"></td>
</tr>
</table>
</body>
</html>
