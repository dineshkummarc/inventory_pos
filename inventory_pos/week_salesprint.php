<?php
global $myusername;
// Make a MySQL Connection
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("inventory") or die(mysql_error());
?>
<a href="home.php" style="text-decoration:none">

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="stylesheets/style.css" rel="stylesheet" type="text/css" />
<title>Inventory</title>

<body onload ='window.print()'>

<div align="center"><font color="black"><h2>Inventory Report<b><?php echo $_POST['daycusname']; ?>
</b>&nbsp;&nbsp;From:<strong> <?php echo $_POST['dayfrom']; ?></strong>&nbsp;&nbsp;To:<strong> <?php echo $_POST['dayto']; ?>
</font></h2>
    
<?php
mysql_connect ("localhost", "root","")  or die (mysql_error());
mysql_select_db ("inventory");

$c=$_POST['dayfrom'];
$b=$_POST['dayto'];
$daycusname=$_POST['daycusname']; 
$sql = mysql_query("select * from sales where dayfrom like '%$c%' and dayto like '%$b%' and daycusname like '%$daycusname%'");


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
				$a=$row['total'];	
				$total[] = $a;

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

 }
echo "</table>";

		$add=$total[0]+$total[1]+$total[2]+$total[3]+$total[4]+$total[5]+$total[6]+$total[7]+$total[8]+$total[9]+$total[10]+$total[11]+$total[12]+$total[13]+$total[14]+$total[15]+$total[16]+$total[17]+$total[18]+$total[19]+$total[20]
		+$total[21]+$total[22]+$total[23]+$total[24]+$total[25]+$total[26]+$total[27]+$total[28]+$total[29]+$total[30]+$total[31]+$total[32]+$total[33]+$total[34]+$total[35]+$total[36]+$total[37]+$total[38]+$total[39]+$total[40]+$total[41]
		+$total[42]+$total[43]+$total[44]+$total[45]+$total[46]+$total[47]+$total[48]+$total[49]+$total[50];
		echo "<h1>Total Income:P <font color='red'>$add</h1>";
echo"<INPUT TYPE='submit' value='Print'></center>";

?>  
	<style type="text/css">
table, td, th
{
border:1px solid black;
}
th
{
background-color:black;
color:white;
}
</style>
</a href>
      </div></td>
  </tr>
</table>
</form>