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
$e=$_POST['e'];
$f=$_POST['f'];
$g=$_POST['g'];
$h=$_POST['h'];
$m=$_POST['m'];

mysql_query("UPDATE supplier SET scode = '$a', sdesc = '$b', sleft = '$d', sprice = '$e',scategory = '$f', ssupplier = '$g', ssellingprice = '$h'
WHERE id = '$m'");

  header("location: supplier.php");
		


mysql_close($con)

	
?>