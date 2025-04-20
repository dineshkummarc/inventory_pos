<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 

<body bgcolor ="gray">
<script type="text/javascript">
function showDiv(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
 
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		
 
		if(selectedOption == "1")
		{
			displayDiv(prefix,"1");
		}
		if(selectedOption == "2")
		{
			displayDiv(prefix,"2");
		}
		
		
		
 
}
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script>
</head>
<body>
<div align ='center'>
<font size="5">
<div id="div1" style="display:none; color:#000000"><b>
<form action="week_sales.php" method="post" style="color:lightgreen;">

From: <input name="dayfrom" type="text" class="tcal" />&nbsp;&nbsp;&nbsp;
To: <input name="dayto" type="text" class="tcal" />&nbsp;&nbsp;&nbsp;
<input name="" type="submit" value="Search" /></form>
</div>

<form action="week_sales.php" method="post" style="color:lightgreen;">
<br />
From: <input name="dayfrom" type="text" class="tcal" />&nbsp;&nbsp;&nbsp;
To: <input name="dayto" type="text" class="tcal" />&nbsp;&nbsp;&nbsp;
<input name="" type="submit" value="Search" /></form>
</div>
</body>
</html>
