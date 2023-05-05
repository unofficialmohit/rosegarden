<html>
<head>
<title>FeedBack</title>
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
<?php
$con=mysqli_connect("localhost","root","","rose");
if(mysqli_connect_errno())
{
echo "failed to connect to mysql: ".mysql_connect_error();
}
$uname=$_COOKIE['username'];
$pass=$_COOKIE['password'];
$sql="select complaint,city,rating from feedback JOIN login On login.phone=feedback.phone where username=\"$uname\" and pass=\"$pass\"";
$result=mysqli_query($con,$sql);
$count = mysqli_num_rows($result);

if($count==1)
{
$row=mysqli_fetch_array($result);
$comp=$row['complaint'];
$city=$row['city'];
$rating=$row['rating'];
$name=$_COOKIE['username'];
echo"
<tr>
<td id=\"borderimg\" colspan=\"6\" class=\"xyz\" id=\"borderimg\ style=\"text-align:left;\">
<legend>	<h1  >FEEDBACK </h1><br></legend>
<fieldset style=\"border-width:10px;border-radius: 50px 20px;\" >
<center>
<br><br>
<h2 style=\"color:#666666\">Name: $name <br><br>
Rating Given : $rating <br><br>
City: $city <br><br>
Your Entered FeedBack is : <br></h2>
<h2 style=\"border: 5px solid brown; width:450px; height:200px\"><br>$comp</h2>
<br><br>
<button type=\"button\" class=\"button\" onclick=\"window.location.href='dfeed.php';\">Delete FeedBack</button></center>
</fieldset><br><br>
</td>
</tr>
";
}
else
{
echo"
<tr>
<td  colspan=\"6\"  class=\"head\"><h2></h2><center>
<form  class=\"feedback\" action=\"fsucess1.php\" method=\"POST\" style=\"background: #b3ffb3\">
<fieldset align=center>

<legend align=center bg-color=\"blue\"><h1>FeedBack</h1></legend><br>
<p>Dear Friend,<br>
Thank you for Visiting Rose Garden, Chandigarh. We would like to know how is your experience with your visit. Please spare some moments to give us your valuable feedback as it will help us in improving anything we can improve.</p>
<h4>Please rate your Visit at Rose Garden</h4>
1<input type=\"radio\" name=\"rating\" value=\"one\">
2<input type=\"radio\" name=\"rating\" value=\"two\">
3<input type=\"radio\" name=\"rating\" value=\"Three\">
4<input type=\"radio\" name=\"rating\" value=\"Four\">
5<input type=\"radio\" name=\"rating\" value=\"Five\"><br><br>
Any Suggestions: <input type=\"text\" name=\"acomp\" class=\"input11\" autofocus required><br><br>
City&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type=\"text\" name=\"city\" class=\"input11\" required><br><br><br>
<input type=\"submit\" value=\"Submit\" class=\"button\">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<input type=\"reset\" class=\"button\">
</fieldset>
</form>
</center>
</td>
</tr>
";
}
?>
<tr class="back">
<td colspan="2"><img src="image/logo.png" width="250" height="80"></td>
<td colspan="2"> <p style="color:white;">All Right Reserved</p></td>
<td colspan="2" class="social"><img src="image/facebook.png" width="20" height="20"><img src="image/twitter-old.png" width="20" height="20"><img src="image/YOUTUBE.png" width="20" height="20"><img src="image/insta.png" width="20" height="20"></td>
</tr>
</table>
</body>
</html>
