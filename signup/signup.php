<?
session_start();
?>
<?

			$name=$_POST['name'];
			$password=$_POST['password'];
			$collname=$_POST['collname'];
			$email=$_POST['email'];
			$phone=$_POST['phone'];
			$realname=$_POST['realname'];


			$_SESSION['name']=$name;
			$_SESSION['password']=$password;
			$_SESSION['collname']=$collname;
			$_SESSION['email']=$email;
			$_SESSION['phone']=$phone;
			$_SESSION['realname']=$realname;


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
      <h1><a href="index.html">Graphical Password Authentication System
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
        <center><h1>User Registration</h1></center>




<?
	
include("db.php");


$q="select * from user where username='$name' or phone='$phone' or email='$email' ";
$result=mysql_query($q);
echo mysql_num_rows($result); 



		if (mysql_num_rows($result)>0)
			{
echo "sorry...user Name:$name or phone number: $phone or email:$email  Exist";

echo "<a href='signup.html'>Back</a>";
				}
else
{

header('Location:reg_layer1.php');
}



/*



$result=mysql_query("select * from user where email='$email'");
				if (mysql_num_rows($result)>0)
				{
				echo "<script>alert('email exist')</script>";
echo "<script>window.location.href = 'signup.html'</script>";

	
				}

$result=mysql_query("select * from user where phone=$phone");
				if (mysql_num_rows($result)>0)
				{
				echo "<script>alert('phone exist')</script>";
echo "<script>window.location.href = 'signup.html'</script>";

	
				}


*/

?>




</div>
</div>
<div id="content_footer"></div>
    <div id="footer">
 DRR GOVT POLYTECHNIC ,DAVANGERE
    </div>
  </div>
</body>
</html>
	