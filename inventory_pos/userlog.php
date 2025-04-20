<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	//unset($_SESSION['SESS_LAST_NAME']);
?>

<style type="text/css">
<!--
body {
	background-image: url();
	background-repeat:no-repeat;
	background-position:top;
	background-color:#ffffff;
	
}
-->
</style></head>

<body>
<br><center><b>
<font name ="Arial black"  size="5" color="gray">NSCA MULTI-PURPOSE COOPERATIVE</b></center>
<center><br>
 Administrative Area
              <p>Please Login </p></td>
            <img src ="http://localhost/point%20of%20sale/oo/46.png" width ="100" height ="100"></center>
<center><body>
 <form id="form1" name="form1" method="post" action="userexec.php">
  <label>USERNAME :
  <input type="text" name="username" />
  </label>
  <p>
    <label>PASSWORD :
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
