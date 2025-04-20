<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 
</head>

<body>
<form action="index.php" method="post">
From: <input name="from" type="text" class="tcal"/>
To: <input name="to" type="text" class="tcal"/>
<input name="" type="submit" value="Seach" />
</form><br />
Total Sales:  
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("between", $con);
function formatMoney($number, $fractional=false) {
    if ($fractional) {
        $number = sprintf('%.2f', $number);
    }
    while (true) {
        $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
        if ($replaced != $number) {
            $number = $replaced;
        } else {
            break;
        }
    }
    return $number;
}		
$a=$_POST['from'];
$b=$_POST['to'];
$result1 = mysql_query("SELECT sum(sales) FROM sales where date BETWEEN '$a' AND '$b'");
	while($row = mysql_fetch_array($result1))
	{
		$rrr=$row['sum(sales)'];
		echo formatMoney($rrr, true);
	}
mysql_close($con);
?>

</body>
</html>
