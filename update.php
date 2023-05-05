<html>
<head>
<title>Update</title>
<link rel="stylesheet" href="css/style.css">
<link rel="icon" type="image/x-icon" href="image/title.png">
</head>
<body bgcolor=#99ff99>
<table style="width:100%;" cellpadding="5" border-collapse="0">
  <tr ><td colspan="5"  bgcolor="#3A6D0B" style="text-align:center"><a href="user1.php"><img src="image/logo.png" width="250" height="80"></a></td>
	<td bgcolor="skyblue" style="text-align:center;border: 3px solid black;border-collapse: collapse;"><a href="udata.php"> <img src="image/user.png" width="60" height="50"></a>
	</td>
	</tr>
<tr style="font-size: 13pt;" width="100%" bgcolor="#214202" class="clr">
<td align="center" width="10%"><a href="user1.php">Home</a></td>
<td align="center" width="10%"><a href="Gallery1.php">Gallery</a></td>
<td align="center" width="10%"><a href="about1.php">About</a></td>
<td align="center" width="10%"><a href="contact1.php">Contact</a></td>
<td align="center" width="10%"><a href="feedback1.php">Feedback</a></td>
<td align="center" width="10%"><a href="index.php">Logout</a></td>
</tr>
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
$phone=$row['phone'];
$email=$row['email'];
$state=$row['state'];
$gender=$row['gender'];
echo "
<tr>
<td colspan=\"6\" ><h2></h2>
    <center>
    <form class=\"xyz\" action=\"usucess.php\" method=\"POST\">
<fieldset align=center>
<legend align=center><h1>Update User Data</h1></legend>
Username&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type=\"text\" name=\"username\" class=\"input11\" value=\"$user\" required><br><br>
Phone&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type=\"text\" name=\"phone\" class=\"input11\" value=\"$phone\" required><br><br>
Email&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type=\"text\" name=\"email\" class=\"input11\" value=\"$email\" required><br><br>
State&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: <input type=\"text\" name=\"state\" class=\"input11\" value=\"$state\" required><br><br>
Gender&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
if($gender=="male")
{
  echo"
Male&nbsp&nbsp&nbsp&nbsp<input type=\"radio\" name=\"gender\" value=\"male\"  checked required>&nbsp&nbsp
Female&nbsp&nbsp&nbsp&nbsp<input type=\"radio\" name=\"gender\" value=\"Female\"  required><br><br>";
}
else {
  echo "
  Male&nbsp&nbsp&nbsp&nbsp<input type=\"radio\" name=\"gender\" value=\"male\" required>&nbsp&nbsp
  Female&nbsp&nbsp&nbsp&nbsp<input type=\"radio\" name=\"gender\" value=\"Female\" checked  required><br><br>";
}
echo"
Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:<input type=\"text\" name=\"password\" class=\"input11\"  required><br><br>
<input type=\"submit\" value=\"Submit\" class=\"button\">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type=\"reset\" class=\"button\">
<br><Br><Br>
</fieldset>
</form>
</center>
</td>
  </tr>
";
    ?>
</tr>
<tr class="back">
<td colspan="2"><img src="image/logo.png" width="250" height="80"></td>
<td colspan="2"> <p style="color:white;">All Right Reserved</p></td>
<td colspan="2" class="social"><img src="image/facebook.png" width="20" height="20"><img src="image/twitter-old.png" width="20" height="20"><img src="image/YOUTUBE.png" width="20" height="20"><img src="image/insta.png" width="20" height="20"></td>
</tr>
</table>
</body>
</html>
