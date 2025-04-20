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

<form action='week_salesprint.php' method='post'>	

<div align="center"><br><font color="lightgreen"><h2>Inventory Report<b><?php echo $_POST['daycusname']; ?>
</b>&nbsp;&nbsp;From:<strong> <?php echo $_POST['dayfrom']; ?></strong>&nbsp;&nbsp;To:<strong> <?php echo $_POST['dayto']; ?>
</font></h2><br />
    
  <?php
mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("inventory");

$c=$_POST['dayfrom'];
$b=$_POST['dayto'];
$daycusname=$_POST['daycusname']; 
$sql = mysql_query("select * from sales where dayfrom like '%$c%' and dayto like '%$b%' and daycusname like '%$daycusname%'");

$today=getdate();


$result1 = mysql_query("SELECT * FROM sales WHERE date BETWEEN '$c' AND '$b'")
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
		
while($row = mysql_fetch_array($result1))
{
		$ID =$row['id'];
		  $ID=$row['id'];
				$item=$row['total'];	
				$total[] = $item;

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
	
	$totals=$item+$totals;
	
 }
	echo "</table>";

		echo "<h1>Total Income:P <font color='red'>$totals</h1>";
echo"<input name='dayfrom' type='hidden' value='$c' class='tcal' />";
echo"<input name='dayto' type='hidden' value='$b'class='tcal' />";
echo"<INPUT TYPE='submit' value='Print'></center>";

mysql_close($con);
?>  
      </div></td>
  </tr>
</table>
</form>