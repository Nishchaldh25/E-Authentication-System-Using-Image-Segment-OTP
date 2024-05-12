<?
session_start();
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
        <center><h1>Your Sequence</h1></center>
    
<?php
include("db.php");

$uname=$_SESSION['name'];


$pass=$_SESSION['pass'];

$i = "select * from user where username='$uname' and password='$pass'  ";
$h = mysql_query($i);


$f=mysql_num_rows($h);



if($f>0)
{
while($tr=mysql_fetch_array($h))
{
?>
							


<img src="/drr_grap/admin/seq_upload/<?php echo $tr[7]; ?>" hight="150" width="150"></img>
<img src="/drr_grap/admin/seq_upload/<?php echo $tr[8]; ?>" hight="150" width="150"></img>
<img src="/drr_grap/admin/seq_upload/<?php echo $tr[9]; ?>" hight="150" width="150"></img>
<img src="/drr_grap/admin/seq_upload/<?php echo $tr[10]; ?>" hight="150" width="150"></img>
			


<?
}
}
else
{
echo "<center>Invalid user name or password</center>";
}
?>
</font>
<p align="center">
<a href="login.html"><font color="white">Login page </font></a>
</p>


</div>
</div>
<div id="content_footer"></div>
    <div id="footer">

    </div>
  </div>
</body>
</html>
		