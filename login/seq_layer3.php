<?
session_start();
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
        <center><h1>Change Sequence</h1></center>
<?$_SESSION['l2']=$_GET['l2'];?>
<!--

<?


$_SESSION['l2']=$_GET['l2'];


$img[0]="1.jpg";
$img[1]="2.jpg";
$img[2]="3.jpg";
$img[3]="4.jpg";
shuffle($img);
for($i=0;$i<4;$i++)
{
?>



<a href="reg_layer4.php?l3=<? echo $img[$i] ?> "><img src="<? echo $img[$i] ?>" hight="200" width="200"></img><a/>
<?


}

?>

-->


<?php
include("db.php");

			$i = "select * from  myimage order by rand() ;
";
			$h = mysql_query($i);
			while($tr=mysql_fetch_array($h))
			{


?>

<a href="seq_layer4.php?l3=<?php echo $tr[1]; ?> ">
<img src="/drr_grap/admin/seq_upload/<?php echo $tr[1]; ?> " hight="200" width="200" /></img><a/>

<?
}


?>

</div>
</div>
<div id="content_footer"></div>
    <div id="footer">

    </div>
  </div>
</body>
</html>
	