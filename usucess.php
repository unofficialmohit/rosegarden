<html>
<head>
<title>Update</title>
<link rel="stylesheet" href="css/style.css">
<link rel="icon" type="image/x-icon" href="image/title.png">
</head>
<body bgcolor=#99ff99>
<table style="width:100%;" cellpadding="5" border-collapse="0">
	<tr ><td colspan="5"  bgcolor="#3A6D0B" style="text-align:center"><a href="user1php"><img src="image/logo.png" width="250" height="80"></a></td>
	<td bgcolor="skyblue" style="text-align:center;border: 3px solid black;border-collapse: collapse;"><a href="udata.php"> <img src="image/user.png" width="60" height="50"></a>
	</td>
	</tr>
<tr style="font-size: 13pt;" width="100%" bgcolor="#214202" class="clr">
<td align="center" width="10%"><a href="index.php">Home</a></td>
<td align="center" width="10%"><a href="Gallery.php">Gallery</a></td>
<td align="center" width="10%"><a href="about.php">About</a></td>
<td align="center" width="10%"><a href="contact.php">Contact</a></td>
<td align="center" width="10%"><a href="feedback.php">Feedback</a></td>
<td align="center" width="10%"><a href="login.php">Logout</a></td>
</tr>
<tr>
<td colspan="6"  class="head"><h2></h2>
<?php
$user=$_POST['username'];
$pass=$_POST['password'];
$pass=md5($pass);
$phone=$_POST['phone'];
$state=$_POST['state'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$user1=$_COOKIE['username'];
$pass1=$_COOKIE['password'];
$con=mysqli_connect("localhost","root","","rose");
if(mysqli_connect_errno())
{
echo "failed to connect to mysql: ".mysql_connect_error();
}
$sql="UPDATE login set username=\"$user\",pass=\"$pass\",phone=\"$phone\",email=\"$email\",state=\"$state\",gender=\"$gender\" where username=\"$user1\" and pass=\"$pass1\"";
if(mysqli_query($con, $sql)) {
	echo ("<script LANGUAGE='JavaScript'>
		window.alert('UserData Successfull Updated.');
		window.location.href='udata.php';
		</script>");
	}
	else {
		echo "ERROR";
		echo"$user<br>$pass<br>$phone<br>$email<br>$state<br>$gender<br>$user1<br>$pass1";
	}
  setcookie('username',$user,time()+60*60*24*30);
  setcookie('password',$pass,time()+60*60*24*30);
?>
</td>
</tr>
<tr class="back">
<td colspan="2"><a href="index.php"><img src="image/logo.png" width="250" height="80"></a></td>
<td colspan="2"> <p style="color:white;">All Right Reserved</p></td>
<td colspan="2" class="social"><img src="image/facebook.png" width="20" height="20"><img src="image/twitter-old.png" width="20" height="20"><img src="image/YOUTUBE.png" width="20" height="20"><img src="image/insta.png" width="20" height="20"></td>
</tr>
</table>
</body>
</html>
