<?php

	$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);

$a=$_POST['a'];
$b=$_POST['b'];
$d=$_POST['d'];
$i=$_POST['i'];
$e=$_POST['e'];
$f=$_POST['f'];
$g=$_POST['g'];
$h=$_POST['h'];
$m=$_POST['m'];

mysql_query("UPDATE productlist SET pcode = '$a', pdesc = '$b', pleft = '$d',  punit = '$i', pprice = '$e', pcategory = '$f', psupplier = '$g', psellingprice = '$h'
WHERE id = '$m'");

  header("location: products.php");
		


mysql_close($con)

	
?>