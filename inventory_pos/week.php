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

<form action='week_print.php' method='post'>

<div align="center"><br><font color="lightgreen"><h2>Inventory Report<b><?php echo $_POST['daycusname']; ?>
</b>&nbsp;&nbsp;From:<strong> <?php echo $_POST['dayfrom']; ?></strong>&nbsp;&nbsp;To:<strong> <?php echo $_POST['dayto']; ?>
</font></h2><br />
    
	

 <?php
mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("inventory");

$a=$_POST['dayfrom'];
$b=$_POST['dayto'];
$daycusname=$_POST['daycusname']; 
$sql = mysql_query("select * from productlist where dayfrom like '%$a%' and dayto like '%$b%' and daycusname like '%$daycusname%'");


		$result1 = mysql_query("SELECT * FROM productlist WHERE date BETWEEN '$a' AND '$b'")
	or die(mysql_error());  

echo "<center><table width='1000px' border='0' class='tbody' cellpadding='5' background='img/login3.png'>";
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
		<th>Time</th>
		<th>Selling Price</th>
		</tr>";

while($row = mysql_fetch_array($result1))
{
$ID =$row['id'];
$ID=$row['id'];
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
echo "</table>";
echo"<br><br><input name='dayfrom' type='hidden' value='$a' class='tcal' />";
echo"<br><br><input name='dayto' type='hidden' value='$b'class='tcal' />";
echo"<INPUT TYPE='submit' value='Print'></center>";
?>  
      </div></td>
  </tr>
</table>
</form>