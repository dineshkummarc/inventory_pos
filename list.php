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



<?php

$a=$_POST['a'];
$b=$_POST['b'];
$d=$_POST['d'];
$i=$_POST['i'];
$e=$_POST['e'];
$f=$_POST['f'];
$g=$_POST['g'];
$h=$_POST['h'];
$date=$_POST['date'];
$time=$_POST['time'];

$today=getdate();
$day_name=$today['weekday'];
$month=$today['month'];
$day=$today['mday'];
$year=$today['year'];


 $link=mysql_connect("localhost","root","") or die("Cannot Connect to the database!");
 
	mysql_select_db("inventory", $link) or die("Cannot Connect to the database!");
	
	$query="INSERT INTO productlist (pcode, pdesc, pleft, punit, pprice, pcategory, psupplier, psellingprice, date, time, day_name, month, day, year )
VALUES ('$a', '$b', '$d', '$i', '$e', '$f', '$g', '$h', '$date', '$time', '$day_name', '$month', '$day', '$year')";

if (!mysql_query ($query,$link))
  {
  die("Item Code is already existing.Please check and try again!");
   }
  else
  {
  header("location: products.php");
  }
			exit();


mysql_close($query)

	
?>