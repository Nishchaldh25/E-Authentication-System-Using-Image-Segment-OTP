<?
session_start();
include("db.php");
		$name=$_SESSION['name'];
		$password=$_SESSION['password'];
		

?>
<?
		

			$q1=$_POST['q1'];
			$q2=$_POST['q2'];
			$q3=$_POST['q3'];
			$q4=$_POST['q4'];
			$q5=$_POST['q5'];


			

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
        <center><h1>Query</h1></center>




<?
	
include("db.php");

mysql_query ("insert into feedback values ('$name','$q1','$q2','$q3','$q4','$q5')")  or die(mysql_error()) ;
echo  "  <script>alert('Added Successfully..')</script>";
echo "<script>window.location.href = 'feedback.php'</script>";


?>




 </div>
    </div>

    <div id="content_footer"></div>
    <div id="footer">

    </div>
  </div>
</body>
</html>

