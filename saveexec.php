<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="inventory"; // Database name
$tbl_name="productlist"; // Table name

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

//get the date
//$today=getdate();
$a=$_POST['name'];
$a1=$_POST['name1'];

 $result = mysql_query("SELECT * FROM productlist WHERE pcode='$a'");
        while($row = mysql_fetch_array($result))
         {
	
			$left=$row['pleft'];
			
		} 
$total=($a1+$left);
// Insert data into mysql
$sql=("UPDATE $tbl_name SET pleft='$total' where pcode='$a'");
$result=mysql_query($sql);

// if successfully insert data into database, displays message "Successful".
if($result){


}

else {
echo "ERROR";
}
header('location:products.php');
?>
