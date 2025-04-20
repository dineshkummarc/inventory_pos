<?php
global $myusername;
// Make a MySQL Connection
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("inventory") or die(mysql_error());
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="stylesheets/style.css" rel="stylesheet" type="text/css" />
<title>inventory</title>
<body bgcolor ="gray">
<div id="wrapper">
	<div id="header_wrapper">
    	<ul id="menu">
   		
		</ul>
    </div>
	   
  
<?php

//get the date
$today=getdate();

$day_name=$today['weekday'];
$month=$today['month'];
$day=$today['mday'];
$year=$today['year'];
echo"<center><h1>Inventory For  the Month Of $month</center></h1>";
        	// Get all the data from the table
	$result = mysql_query("SELECT * FROM productlist WHERE month='$month' and year='$year'") 
		or die(mysql_error());  
	
		
	

	echo "<center><table width='900px' border='0' class='tbody' cellpadding='5' background='img/login3.png'>";
		echo "<tr class='thead'> 
		<th>Product Code</th>
		<th>Name</th>
		<th>Sold Product</th>
		<th>Quantity</th>
		<th>Unit</th>
		<th>Price</th>
		<th>Category</th>
		<th>Supplier</th>
		<th>Date</th>
		<th>Time</th>\
		<th>Selling Price</th>
		</tr>";
	while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
                $ID=$row['id'];
				$a=$row['psellingprice'];	
			$psellingprice[]= $a;
	
	echo "<tr><td><div align='center'>"; 
	echo $row['pcode'];
	echo "</td><td><div align='center'>"; 
	echo $row['pdesc'];
	echo "</td><td><div align='center'>";
	echo $row['sold'];
	echo "</td><td><div align='center'>";
	echo $row['pleft'];
	echo "</td><td><div align='center'>";
	echo $row['punit'];
	echo "</td><td><div align='center'>";
	echo $row['pprice'];
	echo "</td><td><div align='center'>";
	echo $row['pcategory'];
	echo "</td><td><div align='center'>";
	echo $row['psupplier'];
	echo "</td><td><div align='center'>";
	echo $row['date'];
	echo "</td><td><div align='center'>";
	echo $row['time'];
	echo "</td><td><div align='center'>";
	echo $row['psellingprice'];
	
		}
			  echo" </table>";
		echo"<br><br>";
echo"<a href='month_deliveryprint.php'><INPUT TYPE='button' value='Print'></center>";

	 ?>
	
	<style type="text/css">
table, 
{
border:1px solid black;
}
th
{
background-color:black;
color:white;
}
</style>
