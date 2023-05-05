<html>
<head>
<title>ROSE GARDEN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

<td align="center" width=10% bgcolor="skyblue"><a href="user1.php">Home</a></td>
<td align="center" width=10%><a href="Gallery1.php">Gallery</a></td>
<td align="center" width=10%><a href="about1.php">About</a></td>
<td align="center" width=10%><a href="contact1.php">Contact</a></td>
<td align="center" width=10%><a href="feedback1.php">Feedback</a></td>
<td align="center" width=10%><a href="index.php">Logout</a></td>
</tr>
<?php
$user=$_POST['username'];
$password=$_POST['password'];
$password=md5($password);
setcookie('username',$user,time()+60*60*24*30);
setcookie('password',$password,time()+60*60*24*30);
$con=mysqli_connect("localhost","root","","rose");
if(mysqli_connect_errno())
{
echo "failed to connect to mysql: ".mysql_connect_error();
}
$result=mysqli_query($con,"select username,pass from login where username=\"$user\" and pass=\"$password\"");
$count = mysqli_num_rows($result);
if($count==1)
{
echo "
<tr><td width='100%' colspan='6'>
 <div class='slideshow-container'>
 <div class='mySlides fade'>
      <img src='image/main.jpg' width=100% height=600 style='width:100%'>
      <div class='text'>Rose Garden</div>
    </div>
		<div class='mySlides fade'>
      <img src='image/main1.jpg' width=100% height=600 style='width:100%'>
      <div class='text'>Rose Garden</div>
    </div>
    <div class='mySlides fade'>
      <img src='image/main2.jpg' width=100% height=600 style='width:100%'>
      <div class='text'>49th rose festival 2021</div>
    </div>
    <div class='mySlides fade'>
      <img src='image/main3.jpg' width=100% height=600 style='width:100%'>
      <div class='text'>Rose Garden</div>
    </div>
    <a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
    <a class='next' onclick='plusSlides(1)'>&#10095;</a>
  </div>
  <br>
  <div style='text-align:center'>
    <span class='dot' onclick='currentSlide(1)'></span>
    <span class='dot' onclick='currentSlide(2)'></span>
    <span class='dot' onclick='currentSlide(3)'></span>
		<span class='dot' onclick='currentSlide(4)'></span>
  </div>
</td></tr>
	<script>
	var slideIndex = 1;
	showSlides(slideIndex);

	// Next/previous controls
	function plusSlides(n) {
	showSlides(slideIndex += n);
	}

	// Thumbnail image controls
	function currentSlide(n) {
	showSlides(slideIndex = n);
	}

	function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName('mySlides');
	var dots = document.getElementsByClassName('dot');
	if (n > slides.length) {slideIndex = 1}
	if (n < 1) {slideIndex = slides.length}
	for (i = 0; i < slides.length; i++) {
			slides[i].style.display = 'none';
	}
	for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(' active', '');
	}
	slides[slideIndex-1].style.display = 'block';
	dots[slideIndex-1].className += ' active';
	}
	</script>
<tr>
<td colspan=6  class='head'>
<h2 class=\"xyz\" style=\"border: 5px solid brown ;width:300;text-align:center; height:35\">Welcome $user </h2><br><Br></td></tr>
<tr>
<td colspan=6  class='xyz' id=borderimg>
<h2>Rose&nbspGarden<br>Chandigarh</h2>
<p> Zakir Hussain Rose Garden, is a botanical garden in Chandigarh, India and spread over 30 acres (120,000 m2) of land,[1] with 50,000 rose-bushes of 1600 different species.</p>
<p>Named after India's former president, Zakir Hussain and created in 1967 under the guidance of Dr Dr M.S. Randhawa, Chandigarh's first chief commissioner, the garden has the distinction of being Asia's largest.The garden has not only roses, but also trees of medicinal value. Some of the medicinal plants that can be spotted here are bel, bahera, harar, camphor and yellow gulmohar. The rose plants have been planted in carved-out lawns and flower beds.</p></br>
<p>Apart from serving as a host of other events, the Zakir Rose Garden serves as the venue for hosting an annual rose festival called Rose Festival, a major cultural event in Chandigarh during February or March.</p>
<p>Celebrated mainly as a tribute to the magnificence of the rose itself, the attractions include food, drinks, joyrides, and contests of varying nature, such as photography, gardening, landscaping, bonsai, and Rose Prince and Princess. The contests are open to the residents or institutions from nearby places</p><br><Br>
</td>
</tr>
<tr>
<td colspan=6  class='head'>
<p><a href ='about1.php'>Read More</a></p>
</td>
</tr>
<tr>
<td width=100% colspan=6><h2 style='padding:0 50px; text-align:left;'>Gallery</h2><td>
</tr>
<tr>
<td><img src='image/1.jpg' style='width:239px; height:200px;'></td>
<td><img src='image/2.jpg' style='width:239px; height:200px;'></td>
<td><img src='image/3.jpg' style='width:239px; height:200px;'></td>
<td><img src='image/4.jpg' style='width:239px; height:200px;'></td>
<td><img src='image/5.jpg' style='width:239px; height:200px;'></td>
<td><img src='image/11.jpg' style='width:239px; height:200px;'></td>
</tr>
<tr>
<td><img src='image/6.jpg' style='width:239px; height:200px;'></td>
<td><img src='image/7.jpg' style='width:239px; height:200px;'></td>
<td><img src='image/12.jpg' style='width:239px; height:200px;'></td>
<td><img src='image/8.jpg' style='width:239px; height:200px;'></td>
<td><img src='image/9.jpg' style='width:239px; height:200px;'></td>
<td><img src='image/10.jpg' style='width:239px; height:200px;'></td>
</tr>";
}
else {
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('ENTER VALID USERNAME OR PASSWORD');
    window.location.href='login.php';
    </script>");
  }
?>
<tr width="100%" class="back">
<td colspan="2" style="text-align:center"><img src="image/logo.png" width="250" height="80"></td>
<td colspan="2" style="text-align:center"> <p style="color:white;">All Right Reserved</p></td>
<td colspan="2" style="text-align:center" class="social"><img src="image/facebook.png" width="20" height="20"><img src="image/twitter-old.png" width="20" height="20"><img src="image/YOUTUBE.png" width="20" height="20"><img src="image/insta.png" width="20" height="20"></td>
</tr>
</table>
</body>
</html>
