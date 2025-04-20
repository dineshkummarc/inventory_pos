<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	//unset($_SESSION['SESS_LAST_NAME']);
?>

<body>
<body background="http://localhost/inventory_pos/logo.jpg">
<br><center><b><br>
<br><br><br>
<font name ="Arial black"  size="5" color="lightgreen"><b>
<div align='right'>

NSCA MULTI-PURPOSE COOPERATIVE</b></center>
<center>
              <p>&nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
Please Login </p></td>
            &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<div align='right'><body> 
<table width="37%" height='38%' border="0" cellspacing="0" cellpadding="5"  background="img/login.png" style="border-color:; border-width:thick; font-size:18px; ">

 <tr>
<td width="10%">
<br>
 <form id="form1" name="form1" method="post" action="mainloginexec.php" size="3">
 
  <label><b><font color="black"><div align="right">
USERNAME :
  <input type="text" name="username" />
  </label>
  <p>
    <label>
	<br>
PASSWORD :
    <input type="password" name="password" />
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="LOGIN" style="margin-left:32%;" />
    </label>
  </p>
  </table>          
          
</form>
</div>
</body>
</html>
