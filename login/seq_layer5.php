<?
session_start();
include("db.php");
		$name=$_SESSION['name'];
		$password=$_SESSION['password'];
		

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
          <li class="selected"><a href="home.php">Home</a></li>
         <li><a href="feedback.php">Add Feedback</a></li>
	  <li><a href="logout.php">Log Out </a></li>
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
        <center><h1>Change Sequence</h1></center>
<?


$_SESSION['l4']=$_GET['l4'];

$img1=$_SESSION['l1'];
$img2=$_SESSION['l2'];
$img3=$_SESSION['l3'];
$img4=$_SESSION['l4'];






mysql_query("update user set image1='$img1',image2='$img2',image3='$img3',image4='$img4' where username='$name'")  or die(mysql_error()) ;
	
echo  "  <script>alert('sequence Updated')</script>";

echo "<script>window.location.href = 'home.php'</script>";






?>
</div>
</div>
<div id="content_footer"></div>
    <div id="footer">

    </div>
  </div>
</body>
</html>
	
