<?php

if(isset($_POST['submit'])!='')
{
include('db_poss.php');

$username=$_POST['username'];
$password=$_POST['password'];

$query=mysql_query("SELECT * FROM admin WHERE username='$username'");
$numrows=mysql_numrows($query);

while($row=mysql_fetch_array($query))
{
	$dbusername=$row['Username'];
	$dbpassword=$row['Password'];
}

if(md5($password)==$dbpassword)
{
header('location:admin2.php');
}
else
echo"incorrect password";
}
else
?>
<br><br><br><center><b>
<font name ="Arial black"  size="5" color="gray">NSCA MULTI-PURPOSE COOPERATIVE</b><br><br></center>
<div align="left" class="style3">
  <table width="200" border="1">
  
    <tr>
      <td align="center" valign="middle" bordercolor="#33FFFF" bgcolor="#696969" scope="col"><span class="style2"><a href="http://localhost/point%20of%20sale/logg.php">ADMIN </span></td>

    </tr>
    <tr>
      <td align="center" valign="middle" bordercolor="#0066FF" bgcolor="#996600"><span class="style2"><a href="http://localhost/point%20of%20sale/login.php">USER</span></td></a>
    </tr>
      </table>
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
<div align="center"></div>
<table width="754" border="0" align="center" cellpadding="0" cellspacing="2">
  <tr>
    <td width="750" height="18" align="center" valign="top" class="yellow"><span class="yellow"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr class="white">
    <td align="left" valign="top" class="white"><table width="99%" border="0" align="center" cellpadding="5" cellspacing="0">
      <tr>
        <td width="4%" valign="top">&nbsp;</td>
        <td width="96%" align="left" valign="top"><table width="95%" border="0" cellpadding="2" cellspacing="2" class="text_black">
          <tr class="yellow">
            <td><p class="text_black_huge">Administrative Area </p>
              <p>Please Login </p></td>
          </tr>
          <tr>
            <td><img src ="http://localhost/point%20of%20sale/oo/46.png" width ="100" height ="100">
<form action='logg.php' method='post'>
username:<input type='text' name='username' id='username'><br>
password:<input type='password' name='password' id='password'>
<input type='submit' name='submit' value='Submit'>
</table>          
          <p align="justify" class="text_black_huge">&nbsp;</p>
          </td>
      </tr>
    </table>      </td>
  </tr>
  <tr class="black">
    <td align="center" valign="top" class="text_white"></td>
  </tr>
</table>
</form>
</html>