<?php 
ob_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Enquiry</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="wrapper">
  <div id="white_bg">
    <div id="header">
      <div id="logo"> <h3>Jaipur Darshan</h3>
        pardharo Saa....</div>

      <div id="top_nav">
        <ul>
          <li><a class="purple" href="index.php">Home</a></li>
          <li><a class="green" href="packages.php">Tour Package</a></li>
          <li><a class="orange" href="contact.php">Contact us</a></li>
        </ul>
      </div>
    </div>
    <div id="main_nav">
      <ul>
        <li><a href="about us.php">About Us&ensp;&ensp;</a></li>
        <li class="separate"><a href="traditional.php">Tradition&ensp;&ensp;</a></li>
        <li class="separate"><a href="heritage.php">Heritage&ensp;&ensp;</a></li>
        <li class="separate"><a href="eats.php">Jaipur Eats&ensp;&ensp;</a></li>
        <li class="separate"><a href="hotels.php">Hotels&ensp;&ensp;</a></li>
        <li class="separate"><a href="enquiry.php">Enquiry&ensp;&ensp;</a></li>
      </ul>
    </div>
    <div id="content">
   <pre style="font-size:15px; text-align:left";> 
    <table align="center">
     
<form method="get" >
<th align="left"><h2><em><u>ENQUIRY</u></em></h2><br /><br /></th>
<tr><td><strong>Name:     <input type="text" name="name"/></strong><br /><br /></td></tr>
<tr><td><strong>Phone No</strong>:<input type="text" name="phone" /><br /><br /></td></tr>
<tr><td><strong>E-Mail</strong>:   <input type="text" name="email"/><br /><br /></td></tr>
<tr><td><strong>Message</strong>:  <textarea rows=10 cols=50 name="message"> </textarea><br /><br /></td></tr>
<tr align="center"><td><input type="submit" value="submit" name="submit" /></td></tr>
		</form>
        </table>
        </pre>   
      </div>
    </body>
</html>
<?php 
$var=mysql_connect("localhost","root","") or die ('not working');
$new=mysql_select_db("travel",$var);


if(isset($_REQUEST['submit']))
{
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$email = $_REQUEST['email'];
	$message = $_REQUEST['message'];
	$a = "INSERT INTO `travel`.`enquiry` (`sno`, `name`, `phone`, `email`, `message`) VALUES (NULL, '$name', '$phone', '$email', '$message')";
	$e = mysql_query($a) or die(mysql_error());
		header("location:index.php");

}

?>