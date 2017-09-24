<?php ob_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$city = $_REQUEST['city'];
$date = $_REQUEST['date'];
$pack = $_REQUEST['p1'];
$p = $_REQUEST['p'];
$count = $_REQUEST['count'];
$tax = $_REQUEST['tax'];
$total = $_REQUEST['total'];
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$address = $_REQUEST['add'];
//dbms connect statments
$var=mysql_connect("localhost","root","") or die ('not working');
$new=mysql_select_db("travel",$var);
$ins = "INSERT INTO `travel`.`booking` (`bno`, `start city`, `date`, `package name`, `no of persons`, `tax`, `amount`, `name`, `phone`, `email`, `address`) VALUES (NULL, 'Jaipur', '$date', '$pack', '$count', '$tax', '$total', '$name', '$phone', '$email', '$address')";
	mysql_query($ins) or die(mysql_error());

	header("location:book.php");
	
?>
</body>
</html>