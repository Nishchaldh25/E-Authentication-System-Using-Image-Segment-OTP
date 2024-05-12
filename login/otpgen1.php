<?
session_start();
$uname=$_SESSION['name'];
$pass=$_SESSION['password'];

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
           <li><a href="../signup/signup.html">User Registration</a></li>
          <li><a href="login.html">User Login</a></li>
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
        <center><h1>Recover Sequence</h1></center>


<?
$f=0;


include("db.php");





$phno="null";
$otp=mt_rand(1000,100000);
$_SESSION["otp"]=$otp;

include("db.php");

$i = "select * from user where username='$uname' and password='$pass'  ";
$h = mysql_query($i);


$f=mysql_num_rows($h);



if($f>0)
{
while($tr=mysql_fetch_array($h))
{
$phno=$tr[5];
}

/*
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk?authorization=Dt4ruBcQTb3A9YGmXf7Cs02VUFoHyJNkilWO1IRhMz5KwZSjnehTDVoIeCwBnfGlk815E0ruSi4spLxt&sender_id=FSTSMS&message=".urlencode(" Graphical Password Authentication System OTP:$otp")."&language=english&route=p&numbers=".urlencode($phno),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

//echo "<script> alert('Sent Successfully')</script>";
//echo "<script>window.location.href = 'view_reg.php'</script>";

*/



$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulkV2?authorization=Dt4ruBcQTb3A9YGmXf7Cs02VUFoHyJNkilWO1IRhMz5KwZSjnehTDVoIeCwBnfGlk815E0ruSi4spLxt&message=".urlencode("Graphical Password Authentication System OTP:$otp")."&language=english&route=q&numbers=".urlencode($phno),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}




echo "<script> alert('OTP Sent to Registered phone number')</script>";
echo "<script>window.location.href = 'verify1.php'</script>";
}

else
{
echo "<center>Invalid user name or password</center>";
}



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
	


	