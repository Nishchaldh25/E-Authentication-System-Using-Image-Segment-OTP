<?php
session_start();
?>
<?
include("db.php");
$name=$_SESSION['name'];
$password=$_SESSION['password'];
		
?>

<?

$activedate="null";


	include("db.php");

	$query = "SELECT * FROM user where username='$name' ";

	$result = mysql_query($query);

	while ($row=mysql_fetch_array($result))
	{


$activedate=$row['nextday'];

}

?>

<?
echo $activedate;
?>

<body>
<h1><font color="red">Login Blocked Till:</font></h1>
<hr>

<script language="JavaScript">
TargetDate = "<?php  echo $activedate ?>";
//TargetDate = "<?php echo $closedate ?>";
//TargetDate = "3/23/2020 10:30";
//TargetDate = "10/28/2017 5:00";


BackColor = "";
ForeColor = "navy";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
								

DisplayFormat = "%%D%% Days, %%H%% Hours, %%M%% Minutes, %%S%% Seconds.";



							
FinishMessage = "Bidding closed!";


								
</script>
<script language="JavaScript" src="countdown.js"></script>
		 




</body>
</html>

