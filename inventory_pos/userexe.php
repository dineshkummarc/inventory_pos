<?php
	session_start();
	$errmsg_arr = array();
	$errflag = false;
	
	$link = mysql_connect('localhost','root',"");
	if(!$link) {
		die('Failed to connect to server: ' . mysql_error());
	}
	
	
	$db = mysql_select_db( inventory, $link);
	if(!$db) {
		die("Unable to select database");
	}
	
	
	function clean($str) {
		$str = @trim($str);
		if(get_magic_quotes_gpc()) {
			$str = stripslashes($str);
		}
		return mysql_real_escape_string($str);
	}
	
	
	
	

	$login = clean($_POST['username']);
	$password = clean($_POST['password']);
	
	

	$qry="SELECT * FROM use WHERE username='$login' AND password='$password'";
	$result=mysql_query($qry);
	
	
	if($result) {
		if(mysql_num_rows($result) > 0) {
		
			session_regenerate_id();
			$member = mysql_fetch_assoc($result);
			$_SESSION['SESS_MEMBER_ID'] = $member['password'];
			session_write_close();
			header("location: home.php");
			exit();
		}else {
			
			header("location: main.php");
			{
			echo"incorrect password";
			}
			exit();
		}
	}else {
		die("Query failed");
	}
?>