

<?
session_start();
include("db.php");
		$name=$_SESSION['name'];
		$password=$_SESSION['password'];
		

?>
<!DOCTYPE HTML>
<html>

<head>
  <title>colour_blue</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
<style>




form {
  width: 500px;
  margin: 17% auto;
position:absolute;
top:00px;
left:300px;
}


.header {
  font-size: 35px;
  text-transform: uppercase;
  letter-spacing: 5px;
}








.header {
  font-size: 35px;
  text-transform: uppercase;
  letter-spacing: 5px;
text-color:red;
}


.description {
  font-size: 14px;
  letter-spacing: 1px;
  line-height: 1.3em;
  margin: -2px 0 45px;
}


.input {
  display: flex;
  align-items: center;
}



  
#email {
  width: 75%;
  background: #FDFCFB;
  font-family: inherit;
  color: #737373;
  letter-spacing: 1px;
  text-indent: 5%;
  border-radius: 5px 0 0 5px;
}


#submit {
  width: 25%;
  height: 46px;
  background: #E86C8D;
  font-family: inherit;
  font-weight: bold;
  color: inherit;
  letter-spacing: 1px;
  border-radius: 0 5px 5px 0;
  cursor: pointer;
  transition: background .3s ease-in-out;
}
  




#submit:hover {
  background: #d45d7d;
}
  

input:focus {
  outline: none;
  outline: 2px solid #E86C8D;
  box-shadow: 0 0 2px #E86C8D;
}





.button1 {
  display: inline-block;
  border-radius: 4px;
  background-color: blue;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
position:absolute;
top:300px;
left:700px;
}

.button2 {
  display: inline-block;
  border-radius: 4px;
  background-color: blue;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
position:absolute;
top:450px;
left:700px;
}



.button3 {
  display: inline-block;
  border-radius: 4px;
  background-color: blue;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
position:absolute;
top:600px;
left:700px;
}



.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}


.button2 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button2 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button2:hover span {
  padding-right: 25px;
}

.button2:hover span:after {
  opacity: 1;
  right: 0;
}









.button3 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button3 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button3:hover span {
  padding-right: 25px;
}

.button3:hover span:after {
  opacity: 1;
  right: 0;
}

.p1
{
color:red;
font-size:20px;
}


#bb1
{
position: absolute;
left:100px;
top:20px;
}

</style>

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
        <center><h1></h1></center>




<br>


<?
$profile_photo="null";
$uname="null";
$query = "SELECT * FROM user where username='$name'";

	$result = mysql_query($query);

	while ($row=mysql_fetch_array($result))
	{
		$profile_photo=$row["userimage"];

$uname=$row["name"];
			

        }

?>


<font  size="5"> 
welcome , 
<?echo $uname ?>
</font>
<br>

<br>
<img src="upload/<?echo $profile_photo ?>" height="200"  width="200" ></img>
<p>
&nbsp;&nbsp;&nbsp;<a href="upload_photo.php"><img src="upload_photo.png" hight="50" width="50"></img></a>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="pass_change.php"><img src="changepass.png" hight="50" width="50"></img></a>
&nbsp;&nbsp;&nbsp;<a href="seq_layer1.php"><img src="changesequence.png" hight="50" width="50"></img></a><br>
</p>

<div>
<button class="button1" style="vertical-align:middle"><span>Balance Enquiry</span></button>
</div>

<div>
<button class="button2" style="vertical-align:middle"><span>Transfer Fund</span></button>
</div>

<div>
<button class="button3" style="vertical-align:middle"><span>Transaction History</span></button>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</div>
</div>
<div id="content_footer"></div>
    <div id="footer">

    </div>
  </div>
</body>
</html>
	