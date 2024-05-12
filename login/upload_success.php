
<?

session_start();
include("db.php");


		$name=$_SESSION['name'];
		$password=$_SESSION['password'];
		
$photo=$_FILES["file"]["name"];

//echo $photo ;

  move_uploaded_file($_FILES["file"]["tmp_name"],
    	  "upload/" . $_FILES["file"]["name"]);


						
						

	$query="update user set userimage='$photo' where username='$name'";
						$result=mysql_query($query);

echo  "  <script>alert('Uploaded...')</script>";

echo "<script>window.location.href = 'home.php'</script>";

?>