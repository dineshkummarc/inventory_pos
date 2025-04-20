
 <a href="home.php"><img src="img/64x64/28.png" alt="back" border="0" /></a>

<CENTER>
<br>
<font name ="centaur"  size="6" color="black">REPORTS</b><br></font></center><BR><BR>
<body bgcolor ="gray">
<center>
<?php
	$db=mysql_connect ("localhost","root","")or die ('Cannot connect to the MySQL Database beacause :' . mysql_error());
	//select db to use
	$mydb=mysql_select_db ("inventory");
	//query the db table
	$sql="SELECT * FROM sales";
	//run the query						
	$result=mysql_query($sql)or die(mysql_error());						
		
	echo "<table border='1' cellpadding='2' cellspacing='2'>";
	echo "<tr><td>Pcode</td><td>name</td> <td>qty</td><td>total</td><td><center>code</td><td>date</td><td>time</td><td>PRICE</td></tr>";
	
	while($row=mysql_fetch_array($result))
		{		
			$a=$row['pcode'];
			$b=$row['name'];
			$c=$row['qty'];
			$d=$row['total'];
			$e=$row['code'];
			$f=$row['date'];
			$g=$row['time'];
			$h=$row['PRICE'];

			echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$e</td><td>$f</td><td>$g</td><td>$h</td></tr>";	
		}
	echo "</table>";
?>