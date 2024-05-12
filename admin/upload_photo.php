
<?

session_start();
include("db.php");
$name=$_SESSION['name'];

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
       <li class="selected"><a href="admin_menu.php">Home</a></li>
         <li><a href="upload_photo.php">Upload Image</a></li>
	 <li><a href="view_image.php">View Image</a></li>
 	 <li><a href="view_user.php">View Users </a></li>
	 <li><a href="view_feedback.php">View FeedBack </a></li>
	 <li><a href="view_comments.php">View Query</a></li>
	          </ul>
      </div>
    </div>



 <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
       
 <li><a href="login.html">Logout</a></li>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <center><h1>Upload Photo</h1></center>

<center>
<div class="form_settings">
<form action="upload_success.php" method="post" enctype="multipart/form-data"  >
					
					  
<input type="file" name="file">


    <p style="padding-left:15px"><span>&nbsp;</span>	<input type="submit" class="submit" value="Upload"> </p>
	
</center>
</div>
</div>
<div id="content_footer"></div>
    <div id="footer">

    </div>
  </div>
</body>
</html>
				

						 
