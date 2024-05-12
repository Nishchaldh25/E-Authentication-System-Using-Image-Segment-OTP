<?
session_start();
include("db.php");
		$name=$_SESSION['name'];
		$password=$_SESSION['password'];
		

?>




<?


$_SESSION['l4']=$_GET['l4'];

$img1=$_SESSION['l1'];
$img2=$_SESSION['l2'];
$img3=$_SESSION['l3'];
$img4=$_SESSION['l4'];


$f=0;

include("db.php");

	

	$query = "SELECT * FROM user where username='$name' ";

	$result = mysql_query($query);

	while ($row=mysql_fetch_array($result))
	{


		
if($row["image1"]==$_SESSION['l1'] && $row["image2"]==$_SESSION['l2'] && $row["image3"]==$_SESSION['l3'] && $row["image4"]==$_SESSION['l4'] )

			{
                              $f=1;
			}

        }





	if($f==1)
	{
echo "<script>window.location.href = 'otpgen1.php'</script>";

//echo "<script>window.location.href = 'home.php'</script>";

	}

	else
	{


	
	echo  "  <script>alert('invalid  sequence')</script>";

	echo "<script>window.location.href = 'log_layer1.php'</script>";


	}





?>
