<html>
<head> 
</head>
<body font="Tahoma" bgcolor="#33CCCC" alink="#0033FF" vlink="#0033FF" link="#0033FF">
>
<?php
$var=mysql_connect("localhost","root","") or die ('not working');
$new=mysql_select_db("travel",$var);
$qry="select * from enquiry ORDER BY sno ASC";
$val=mysql_query($qry);

?>
<center> <h2 style="color:blue; text-decoration:underline;">Enqiry Stats</h2>

<center>
<table width="90%"  style="border:2px solid #8AB8E6; ">
<tr style="background-color:#5CADFF">
	<th>Sno</th>
	<th>Name</th>
	<th>Phone</th>
	<th>Email</th>
	<th>Message</th>

	</tr>
<?php
while($row = mysql_fetch_array($val))
  {
  echo "<tr >";
  echo "<td align='center' >" . $row['sno'] . "</td>";
  echo "<td align='center'>" . $row['name'] . "</td>";
  echo "<td align='center' >" . $row['phone'] . "</td>";
  echo "<td align='center' >" . $row['email'] . "</td>";
  echo "<td align='center' >" . $row['message'] . "</td>";
  echo "</tr>";
  }
  ?>
</table><br><a href="admin1.php">Back</a>

</center>

</div>

</body>
</html>