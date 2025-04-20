<br><br><br><center><b>
<font name ="arial"  size="3" color="white">NSCA MULTI-PURPOSE COOPERATIVE</b><br><br></center>

		


<script type="text/javascript">
function showmenu(elmnt)
{
document.getElementById(elmnt).style.visibility="visible"
}
function hidemenu(elmnt)
{
document.getElementById(elmnt).style.visibility="hidden"
}
</script>

<link href="../fonts.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div align="left"></div>
<table width="754" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr>
    <td width="750" height="18" align="left" valign="top" class="yellow"><span class="yellow"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr class="white">
    <td align="left" valign="top" class="white"><table width="99%" border="0" align="left" cellpadding="5" cellspacing="0">
      <tr>
        <td width="4%" valign="top">&nbsp;</td>
        <td width="96%" align="left" valign="top"><table width="95%" border="0" cellpadding="2" cellspacing="2" class="text_black">
          <tr class="yellow">
            <td></td>
          </tr>
          <tr>
            <td>
</table>       
<center>
<input type="button" value="View Groceries" onclick="grocery.style.display='block'">|
<input type="button" value="Hide" onclick="grocery.style.display='none'"><br>
<div id="grocery" style="display: none;">

<?php
	$db=mysql_connect ("localhost","root","")or die ('Cannot connect to the MySQL Database beacause :' . mysql_error());
	//select db to use
	$mydb=mysql_select_db ("poss_db");
	//query the db table
	$sql="SELECT * FROM grocery";
	//run the query						
	$result=mysql_query($sql)or die(mysql_error());						
		
	echo "<table border='1' cellpadding='2' cellspacing='2'>";
	echo "<tr><td>Item Code</td><td>Item Description</td> <td> Quantity</td></tr>";
	
	while($row=mysql_fetch_array($result))
		{		
			$a=$row['itemcode'];
			$b=$row['itemdescription'];
			$c=$row['quantity'];

			echo "<tr><td>$a</td><td>$b</td><td>$c</td></tr>";	
		}
	echo "</table>";
?>
</div>
</form>
</body>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>POS/INVENTORY</title>
<link href="fonts.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
table.menu {
	font-size:100%;
	position:absolute;
	visibility:hidden;
	width: 177px;
	background-color: #E5E5E5;
}
-->
</style>

<script type="text/javascript">
function showmenu(elmnt)
{
document.getElementById(elmnt).style.visibility="visible"
}
function hidemenu(elmnt)
{
document.getElementById(elmnt).style.visibility="hidden"
}
</script>



<link href="../fonts.css" rel="stylesheet" type="text/css" />
</head>

<body>


<div align="left"></div>
<table width="754" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr>
    <td width="750" height="18" align="left" valign="top" class="yellow"><span class="yellow"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr class="white">
    <td align="left" valign="top" class="white"><table width="99%" border="0" align="left" cellpadding="5" cellspacing="0">
      <tr>
        <td width="4%" valign="top">&nbsp;</td>
        <td width="96%" align="left" valign="top"><table width="95%" border="0" cellpadding="2" cellspacing="2" class="text_black">
          <tr class="yellow">
            <td></td>
          </tr>
          <tr>
            <td>

</table>       
<center>
<input type="button" value="View Sacked Product" onclick="sacked_product.style.display='block'">|
<input type="button" value="Hide" onclick="sacked_product.style.display='none'"><br>
<div id="sacked_product" style="display: none;">



<?php
	$db=mysql_connect ("localhost","root","")or die ('Cannot connect to the MySQL Database beacause :' . mysql_error());
	//select db to use
	$mydb=mysql_select_db ("poss_db");
	//query the db table
	$sql="SELECT * FROM sacked_product";
	//run the query						
	$result=mysql_query($sql)or die(mysql_error());						
		
	echo "<table border='1' cellpadding='2' cellspacing='2'>";
	echo "<tr><td>Item Code</td><td>Item Description</td> <td> Quantity</td></tr>";
	
	while($row=mysql_fetch_array($result))
		{		
			$a=$row['itemcode'];
			$b=$row['itemdescription'];
			$c=$row['quantity'];

			echo "<tr><td>$a</td><td>$b</td><td>$c</td></tr>";	
		}
	echo "</table>";
?>
<br>



</div>
</form>


</body>

</html>

