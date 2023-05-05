<html>
<head>
<title>User</title>
<link rel="stylesheet" href="css/style.css">
<link rel="icon" type="image/x-icon" href="image/title.png">
<style>
#borderimg {
  border: 10px solid transparent;
  padding: 1%;
  border-image: url(image/border.png) 30 round;
}
</style>
</head>
<body bgcolor=#99ff99>
<table style="width:100%;" cellpadding="5" border-collapse="0">
	<tr ><td colspan="5"  bgcolor="#3A6D0B" style="text-align:center"><a href="index.php"><img src="image/logo.png" width="250" height="80"></a></td>
	<td bgcolor="skyblue" style="text-align:center;border: 3px solid black;border-collapse: collapse;"><a href="udata.php"> <img src="image/user.png" width="60" height="50"></a>
	</td>
	</tr><tr style="font-size: 13pt;" width="100%" bgcolor="#214202" class="clr">
  <td align="center" width="10%"><a href="user1.php">Home</a></td>
 <td align="center" width="10%"><a href="Gallery1.php">Gallery</a></td>
 <td align="center" width="10%"><a href="about1.php">About</a></td>
 <td align="center" width="10%"><a href="contact1.php">Contact</a></td>
 <td align="center" width="10%"><a href="feedback1.php">Feedback</a></td>
 <td align="center" width="10%"><a href="index.php">Logout</a></td>
</tr>
<tr>
<td colspan="6"  class="xyz" id=borderimg>
<legend>	<h1> USER DATA </h1><br></legend>
<br><br>
<h2  class="xyz" style="background: #b3ffb3">
<?php
$con=mysqli_connect("localhost","root","","rose");
if(mysqli_connect_errno())
{
echo "failed to connect to mysql: ".mysql_connect_error();
}
$user=$_COOKIE['username'];
$pass=$_COOKIE['password'];
$result=mysqli_query($con,"select * from login where username=\"$user\" and pass=\"$pass\"");
$row=mysqli_fetch_array($result);
$user=$row['username'];
$phone=$row['phone'];
$email=$row['email'];
$state=$row['state'];
$gender=$row['gender'];
echo "<br>
Name =  $user
<br><br>
Phone = $phone
<br><br>
Email = $email
<br><br>
Gender = $gender
<br><br>
State = $state
<br><br><br>
";
 ?>
</h2>
<br>
<Center>
<p>
 <a href="update.php"><button type="button" class="button">Update Data</button></a>
  <a href="ddata.php"><button type="button" class="button" style="padding-right:40px;">Delete Account</button></a></p></center>
</td>
</tr>
<tr class="back">
<td colspan="2"><img src="image/logo.png" width="250" height="80"></td>
<td colspan="2"> <p style="color:white;">All Right Reserved</p></td>
<td colspan="2" class="social"><img src="image/facebook.png" width="20" height="20"><img src="image/twitter-old.png" width="20" height="20"><img src="image/YOUTUBE.png" width="20" height="20"><img src="image/insta.png" width="20" height="20"></td>
</tr>
</table>
</body></html>
