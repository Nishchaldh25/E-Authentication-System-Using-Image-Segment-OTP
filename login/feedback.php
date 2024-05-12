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
        <center><h1>Feed Back Form</h1></center>
   
        <form action="feedback1.php" method="post">
          <div class="form_settings">

	 <p><span>Is the project user friendly</span>			: <select name="q1"><option>Y</option><option>N</option></select></p>

	
	 <p><span>Is the  project portable</span>			: <select name="q2"><option>Y</option><option>N</option></select></p>

	 <p><span>is the Password Change Facility  </span>		: <select name="q3"><option>Y</option><option>N</option></select></p>

	 <p><span>Whether project is useful</span>			: <select name="q4"><option>Y</option><option>N</option></select></p>
 	
	<p><span>Whether the  project provide more security</span>	: <select name="q5"><option>Y</option><option>N</option></select></p>

	 			



           	 <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="submit" value="Submit" /></p>
          </div>
        </form>
       
</p>
      </div>
</div>
<div id="content_footer"></div>
    <div id="footer">

    </div>
  </div>
</body>
</html>
	