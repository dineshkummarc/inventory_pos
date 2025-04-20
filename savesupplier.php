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
$m='0';	



	
	$sql="INSERT INTO supplier(scode, sdesc, sleft, sprice, scategory, ssupplier, ssellingprice, ssold)
VALUES ('$a', '$b', '$d', '$e', '$f', '$g', '$h', '$m')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  header("location: supplier.php");
			exit();


mysql_close($con)

	
?>