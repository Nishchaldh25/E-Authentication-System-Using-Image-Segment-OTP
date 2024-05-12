<?
session_start();

$_SESSION["otp"];

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
        <center><h1> Verify OTP</h1></center>
<div class="form_settings">
<form  action="myotp1.php" method="post">
<p align="right">
	
	Enter OTP			 : <input type ="text" 	                    name="my_otp" ><br><br><br>

	
	<p style="padding-left:15px"><span>&nbsp;</span> <input type="submit" class="submit" value="Verify OTP" ></p>
<br>
<a href="otpgen1.php">Resend OTP</a>
</div>

</div>
</div>
<div id="content_footer"></div>
    <div id="footer">

    </div>
  </div>
</body>
</html>
	