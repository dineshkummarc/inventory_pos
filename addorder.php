
<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$yes='yes';
$pname=$_POST['pname'];
$date=$_POST['date'];
$QTY=$_POST['QTY'];
$time=$_POST['time'];
$TOTAL=$_POST['TOTAL'];
$CODE=$_POST['CODE'];
$psellingprice=$_POST['psellingprice'];
$id=$_POST['id'];
$code1=$_POST['prcoede'];
$today=getdate();
$day_name=$today['weekday'];
$month=$today['month'];
$day=$today['mday'];
$year=$today['year'];
$sold1=$today['sold'];

	
$a=$_POST['QTY'];
$a1=$_POST['prcoede'];

 $result = mysql_query("SELECT * FROM productlist WHERE pcode='$a1'");
        while($row = mysql_fetch_array($result))
         {
	
			$left=$row['pleft'];
			
		} 
$total=($left-$a);
if ($left == '0' || $a > $left){
			}
			else {
// Insert data into mysql
$sql=("UPDATE productlist SET pleft='$total',sold='$a' where pcode='$a1'");

$result=mysql_query($sql);
$sql="INSERT INTO sales (name, qty, total, code, date, time, price,pcode,status,day_name,month,day,year)VALUES ('$pname', '$QTY', '$TOTAL', '$CODE', '$date', '$time', '$psellingprice','$code1', '$yes', '$day_name', '$month', '$day', '$year')";
	$result=mysql_query($sql);
if($result){
header('location:auto.php');
}
}

?>

