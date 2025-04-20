<?php

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="inventory"; // Database name

$new=$_GET['new'];
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

 $result = mysql_query("SELECT * FROM sales WHERE status='yes'");
        while($row = mysql_fetch_array($result))
         {
	
				$a=$row['status'];
			
		} //end of while

 $sql=("UPDATE sales SET status='no'");
	      $result=mysql_query($sql);	
		  


// if successfully insert data into database, displays message "Successful".
if($result){


}

else {
echo "ERROR";
}
header('location:auto.php?new=$new');
// close connection
//mysql_close();
?>

