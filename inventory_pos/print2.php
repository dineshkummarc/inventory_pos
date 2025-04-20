<?php
global $myusername;
// Make a MySQL Connection
mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("inventory") or die(mysql_error());
?>
<a href="cashierhome.php" font color="black" style="text-decoration:none">

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="stylesheets/style.css" rel="stylesheet" type="text/css" />
<title>SALES</title>
<body onload ='window.print()'>


	 <script type="text/javascript">
    function ShowTime()
    {
      var time=new Date()
      var h=time.getHours()
      var m=time.getMinutes()
      var s=time.getSeconds()

      m=checkTime(m)
      s=checkTime(s)
      document.getElementById('txt').value=h+" : "+m+" : "+s
      t=setTimeout('ShowTime()',1000)
	  
	  a=Number(document.abc.QTY.value);

if (a!=0) 
    {document.getElementById("xx").disabled = false;}
  else 
    {document.getElementById("xx").disabled = true;}
	
	
i=Number(document.mn.cash.value);
p=Number(document.mn.amount.value);
l=Number(document.ble.gtotal.value);
k=Number(document.mn.payable.value);

if (l<=i) 
    {document.getElementById("ble").disabled = false;}
	else if (l<=p) 
    {document.getElementById("ble").disabled = false;}
	
	else if (k>0) 
    {document.getElementById("ble").disabled = false;}
  else 
    {document.getElementById("ble").disabled = true;}	
	
	
    }
    function checkTime(i)
    {
      if (i<10)
      {
        i="0" + i
      }
      return i
    }
    </script>
	
<body onLoad="ShowTime()">
<br>
<div class="topleft">
						<?php
						
						/*$q=20;
						$s=86400;
						$r=$q*$s;*/
						$timestamp=time(); //current timestamp
						/*$tm=$timestamp+$r; // Will add 2 days to the $timestamp*/
						$da=date("m/d/Y", $timestamp);
						
						$time=$_POST['time1'];
						/*$tm=$timestamp+$r; // Will add 2 days to the $timestamp*/
						$da=date("m/d/Y", $timestamp);
						/*
						echo "Current time string: $da <br>";
						$da1=date("F j, Y", $tm);
						echo "Modified time: $da1 <br>";*/
						?>
						
		
	<td width="80"><div align="left" ><font color="black" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date : </td>
    <td width="80"><input name="date" type="text" value="<?php echo $da; ?>" size="8" style="border:0px;" />
    <input name="time" type="text" id="txt" value="<?php echo $time; ?>" size="5" style="border:0px; margin-left:-10px;" readonly/></td>
   </div>
<div class="top">						

<br>
<br>

<?php

$f=$_POST['f'];
$tretail=number_format($_POST['tretail'], 2, '.', ',');
$cash=$_POST['cash'];
$change=$_POST['change'];

echo"<font size='5' color='black'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;<b>Official Reciept</b></font><br><br>";

        	// Get all the data from the table
	$result = mysql_query("SELECT * FROM sales WHERE code='$f' AND status='yes'") 
		or die(mysql_error());  
	
		
	

	echo "<table width='400px' border='0' cellpadding='' >";
		echo "<tr>
		<th>Reciept Code</th>
		<th>Product Name</th>
		<th>Quantity</th>
		<th>Unit</th>
		<th>Price</th>
		</tr>";
	while($row = mysql_fetch_array( $result )) {
	// Print out the contents of each row into a table 
	
	echo "<tr><td>";
	echo "<font size='2'>";	
	echo "<align='center'>";	
	echo $row['code'];
	echo "</td><td>"; 
	echo "<font size='3'>";
	echo $row['name'];
	echo "</td><td>";
	echo "<font size='3'>";
	echo $row['qty'];
	echo "</td><td>&nbsp;";
	echo "<font size='3'>";
	echo $row['punit'];
	echo "</td><td>";
	echo $row['PRICE'];
	
	$qty=$row['qty'];
	$price=$row['PRICE'];
	
	$qty1=$qty1+$qty;
	$price1=$price1+$price;
		}
			
	$a=$qty1*$price1;
	
	    echo" </table>";
		
echo"<br>";
  echo"<font size='3' color='black'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Amount:&nbspPhp&nbsp";
	echo"$tretail<br><br>";
	echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;Cash Amount:&nbspPhp&nbsp";
	echo"$cash<br>";
  echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;Change:&nbspPhp&nbsp";
	echo"$change<br><br>";


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


</body>
</a href>