<?php
session_start();
?>
<?
include("db.php");
$name=$_SESSION['name'];
$password=$_SESSION['password'];
		
?>
<html>
<head>
<title>
Successful!!
</title>
</head>
<body> You successfully selected the image sequence ! <br>

<?php

	
	




	$myq1="update user set mycount='0' where username='$name'" ;
mysql_query($myq1);



		//header('Location:login.html');
		//$_SESSION['selectagain']=1;



?>


	
		

		





</body>
</html>

