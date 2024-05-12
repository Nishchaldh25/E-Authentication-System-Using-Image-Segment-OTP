<?
session_start();
$uname=$_SESSION['name'];
$pass=$_SESSION['pass'];

$oldotp=$_SESSION["otp"];
$newotp=$_POST["my_otp"];
?>
<!DOCTYPE HTML>
<html>

<head>
  <title>colour_blue</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />

</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
      <h1><a href="index.html">E Authentication System Using Image Segment & OTP

<span class="logo_colour"></span></a></h1>
  
        </div>
      </div>

       <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
           <li><a href="../signup/signup.html">User Registration</a></li>
          <li><a href="login.html">User Login</a></li>
  	   </ul>
      </div>
    </div>


 <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <center><h1></h1></center>
<form  action="myotp.php" method="post">
<p align="right">
<?
if($oldotp==$newotp)
{
//echo "<script>window.location.href = 'log_layer1.php'</script>";
echo "<script>window.location.href = 'home.php'</script>";	
}	
else
{
echo "<script>alert('Invalid OTP')</script>";
echo "<script>window.location.href = 'verify1.php'</script>";
}
?>	
<br>



</div>
</div>
<div id="content_footer"></div>
    <div id="footer">

    </div>
  </div>
</body>
</html>
	