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
<title>Inventory</title>
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
echo"<center><h1>Inventory For  Today Of $day_name</center></h1>";
        	// Get all the data from the table
	$result = mysql_query("SELECT * FROM sales WHERE month='$month' and day='$day' and year='$year'") 
		or die(mysql_error());  
	
		
	

	echo "<center><table width='800px' border='0' class='tbody' cellpadding='5' background='img/login3.png'>";
		echo "<tr class='thead'>
		<th>Product Code</th>
		<th>Name</th>
		<th>Quantity</th>
		<th>Unit</th>
		<th>Price</th>
		<th>Time</th>
		<th>Date</th>
		<th>Total</th>
		</tr>";
	while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table
                $ID=$row['id'];
				$a=$row['total'];	
			$total[]= $a;
	echo "<tr><td><div align='center'>"; 
	echo $row['pcode'];
	echo "</td><td><div align='center'>"; 
	echo $row['name'];
	echo "</td><td><div align='center'>";
	echo $row['qty'];
	echo "</td><td><div align='center'>";
	echo $row['punit'];
	echo "</td><td><div align='center'>";
	echo $row['PRICE'];
	echo "</td><td><div align='center'>";
	echo $row['time'];
	echo "</td><td><div align='center'>";
	echo $row['date'];
	echo "</td><td><div align='center'>";
	echo $row['total'];
	
	$totals=$a+$totals;
	
	
		}
			
		
	    echo" </table>";
		
		echo "<h1>Total Income:Php <font color='red'>$totals</h1>";
echo"<a href='day_print.php'><INPUT TYPE='button' value='Print'></center>";
	 ?>
