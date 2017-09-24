<html>
<head> 
</head>
<body font="Tahoma" bgcolor="#33CCCC" alink="#0033FF" vlink="#0033FF" link="#0033FF">
<?php
$var=mysql_connect("localhost","root","") or die ('not working');
$new=mysql_select_db("travel",$var);
$qry="select * from booking ORDER BY bno ASC";
$val=mysql_query($qry);

?>
<center> <h2 style="color:blue; text-decoration:underline;">Booking Up To Date</h2>

<center>
<table width="90%"  style="border:2px solid #8AB8E6; ">
<tr style="background-color:#5CADFF">
	<th>Sno</th>
	<th>Date(Y-M-D)</th>
	<th>Package Name </th>
	<th>No Of Persons</th>
	<th>Tax</th>
	<th>Total Amount</th>
	<th>Name</th>
	<th>Phone</th>
	<th>Email</th>
	<th>Address</th>

	</tr>
<?php
while($row = mysql_fetch_array($val))
  {
  echo "<tr >";
  echo "<td align='center'>" . $row['bno'] . "</td>";
  echo "<td align='center'>" . $row['date'] . "</td>";
  echo "<td align='center'>" . $row['package name'] . "</td>";
  echo "<td align='center'>" . $row['no of persons'] . "</td>";
  echo "<td align='center'>" . $row['tax'] . "</td>";
  echo "<td align='center'>" . $row['amount'] . "</td>";
  echo "<td align='center'>" . $row['name'] . "</td>";
  echo "<td align='center'>" . $row['phone'] . "</td>";
  echo "<td align='center'>" . $row['email'] . "</td>";
  echo "<td align='center'>" . $row['address'] . "</td>";
  echo "</tr>";
  }
  ?>
</table><br><a href="admin1.php">Back</a>

</center>

</div>

</body>
</html>