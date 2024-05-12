
<?

session_start();
include("db.php");


		$name=$_SESSION['name'];
		$password=$_SESSION['password'];
		
$photo=$_FILES["file"]["name"];

//echo $photo ;

  move_uploaded_file($_FILES["file"]["tmp_name"],
    	  "seq_upload/" . $_FILES["file"]["name"]);


			$img_id=mt_rand(4000,100000);			
	$query="insert into myimage values('$img_id','$photo')"; 					

	
						$result=mysql_query($query);

echo  "  <script>alert('Uploaded...')</script>";

echo "<script>window.location.href = 'admin_menu.php'</script>";

?>
<div id="content_footer"></div>
    <div id="footer">

    </div>
  </div>
</body>
</html>
