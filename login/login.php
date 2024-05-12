<?
session_start();
?>
<?

			$name=$_POST['name'];
			$password=$_POST['password'];
			


			$_SESSION['name']=$name;
			$_SESSION['password']=$password;
			


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
          
          </ul>
      </div>
    </div>

	


		

<?php
$f=0;

include("db.php");


	$query = "SELECT username,password FROM user";

	$result = mysql_query($query);

	while ($row=mysql_fetch_array($result))
	{
		if($row["username"]==$_SESSION['name'] && $row["password"]==$_SESSION['password'] )


			{
                              $f=1;


			}

        }


if($f==1)
{


//echo "<script>window.location.href = 'otpgen1.php'</script>";

echo "<script>window.location.href = 'log_layer1.php'</script>";

}

else
{
echo  "  <script>alert('invalid user/password')</script>";

echo "<script>window.location.href = 'login.html'</script>";


}

?>









</font>
</body>