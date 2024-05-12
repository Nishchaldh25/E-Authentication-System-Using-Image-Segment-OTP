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
 	 <li><a href="view_user.php">View Users </a></li>
	  <li><a href="view_feedback.php">View FeedBack </a></li>
	<li><a href="view_comments.php">View Query</a></li>
	<li><a href="login.html">Logout</a></li>
          </ul>
      </div>
    </div>

 <div id="site_content">
      <div class="sidebar">
        <!-- insert your sidebar items here -->
        
        
        
      </div>
      <div id="content">
        <!-- insert the page content here -->
        
        <?
$user_name=$_GET['user_name'];


include("db.php");




$photo=null;

$q="select * from   user where username='$user_name'";

$r = mysql_query($q);
while($row=mysql_fetch_array($r))
{
$image_name=$row['userimage'];
}






$query1 = "delete  FROM  user  where  username='$user_name'  ";

	$result1 = mysql_query($query1);


$file_to_delete = "../login/upload/$image_name";
unlink($file_to_delete);






echo  "  <script>alert('Deleted')</script>";

echo "<script>window.location.href = 'view_user.php'</script>";

  ?>                   


      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">

    </div>
  </div>
</body>
</html>

