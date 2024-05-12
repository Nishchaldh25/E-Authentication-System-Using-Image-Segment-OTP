<?
session_start();
?>
<?
		$qid=mt_rand(30000,600000);

			$name=$_POST['name'];
			$sub=$_POST['sub'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$q=$_POST['q'];


			

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
          <li class="selected"><a href="index.html">Home</a></li>
          <li><a href="signup.html">User Registration</a></li>
          <li><a href="login.html">User Login</a></li>
  	  <li><a href="help.html">Help</a></li>
	  <li><a href="feedback.html">Feed Back</a></li>

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

mysql_query ("insert into add_query values ('$qid','$name','$sub','$email','$phone','$q')")  or die(mysql_error()) ;
echo  "  <script>alert('Added Successfully..')</script>";
echo "<script>window.location.href = 'query.html'</script>";


?>




 </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">

    </div>
  </div>
</body>
</html>
