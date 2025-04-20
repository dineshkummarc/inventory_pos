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
<title>SALES</title>

<?php

$f=$_POST['f'];
$cash=$_POST['cash'];
$change=$_POST['change'];


echo"<center><h1>Official Reciept</center></h1>";
        	// Get all the data from the table
	$result = mysql_query("SELECT * FROM sales WHERE code = '$f' and status='yes'") 
		or die(mysql_error());  
	
		
	

	echo "<center><table width='50%' border='0' class='tbody' cellpadding='5'>";
		echo "<tr class='thead'> <th>Receipt Code</th><th>Product Code</th><th>Name Product</th><th>Quantity</th><th>Price</th></tr>";
	while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table 
	
	echo "<tr><td><div align='center'>";
	echo $row['code'];
	echo "</td><td><div align='center'>"; 
	echo $row['pcode'];
	echo "</td><td><div align='center'>"; 
	echo $row['name'];
	echo "</td><td><div align='center'>";
	echo $row['qty'];
	echo "</td><td><div align='center'>";
	echo $row['PRICE'];
		}
			
		
	    echo" </table>";
		
$a=$_REQUEST['tretail'];
echo"<br>";
  echo"Total Amount:&nbsp";
	echo"$a<br><br>";
	  echo"Cash Amount:&nbsp";
	echo"$cash<br><br>";
  echo"Change:&nbsp";
	echo"$change<br><br>";


echo"<a href='print2.php'><INPUT TYPE='button' value='Print'></center>";
	 ?>
	<style type="text/css">
table, td, th
{
border:1px solid green;
}
th
{
background-color:white;
color:blue;
}
</style>



	