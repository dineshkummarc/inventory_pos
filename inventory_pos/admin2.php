<?php
	require_once('auth.php');
?>
   
 
    
    <script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
    <script src="./js/application.js" type="text/javascript" charset="utf-8"></script>
	
	
	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>

  <script type="text/javascript">
    function ShowTime()
    {
      var time=new Date()
      var h=time.getHours()
      var m=time.getMinutes()
      var s=time.getSeconds()

      m=checkTime(m)
      s=checkTime(s)
      document.getElementById('txt').value=h+" : "+m+" : "+s
      document.getElementById('txt1').value=h+" : "+m+" : "+s
      t=setTimeout('ShowTime()',1000)
	  
	  a=Number(document.abc.QTY.value);

if (a!=0) 
    {document.getElementById("xx").disabled = false;}
  else 
    {document.getElementById("xx").disabled = true;}
	
	
i=Number(document.mn.cash.value);
p=Number(document.mn.amount.value);
l=Number(document.ble.gtotal.value);
k=Number(document.mn.payable.value);

if (l<=i) 
    {document.getElementById("ble").disabled = false;}
	else if (l<=p) 
    {document.getElementById("ble").disabled = false;}
	
	else if (k>0) 
    {document.getElementById("ble").disabled = false;}
  else 
    {document.getElementById("ble").disabled = true;}	
	
	
    }
    function checkTime(i)
    {
      if (i<10)
      {
        i="0" + i
      }
      return i
    }
    </script>
 <body bgcolor ="gray"> 
<body id="index">
<body onLoad="ShowTime()">

<div align="center" class="style1">WELCOME TO SEARCH</div>
<br />
  <a href="products.php"><img src="img/64x64/28.png" alt="back" border="0" /></a>


    <form method="get" action="admin2.php" id="search"><br />
	<div class="topright">
						<?php
						/*$q=20;
						$s=86400;
						$r=$q*$s;*/
						$timestamp=time(); //current timestamp
						/*$tm=$timestamp+$r; // Will add 2 days to the $timestamp*/
						$da=date("m/d/Y", $timestamp);
						/*
						echo "Current time string: $da <br>";
						$da1=date("F j, Y", $tm);
						echo "Modified time: $da1 <br>";*/
						?>
						
	<td width="104"><div align="right" ><font color="lightgreen" size="3">Date : </td>
    <td width="169"><input name="date" type="text" value="<?php echo $da; ?>" size="10" style="border:0px;" />
    <input name="time" type="text" id="txt" size="10" style="border:0px; margin-left:-10px;" readonly/></td>
   </div>
	<div class="top"></font>
	
		<center><font size = '5' color = 'blue'>Search Product:</font>
		<input class="search" type="text" name="search" size = '30' style = "font-family: lucida fax; font-size: 20px; font-weight: italic;"/>
		<input name="submit" type="image" style="border: 0px; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Ma Search Ka???" /></center>
	</form>
</table><br>   

 <center>  
<table width="13%" border="10" cellspacing="0" cellpadding="20" style="border-color:#99987867; border-width:thick; font-size:18px;">
 <tr>
<td width="10%">
	<?php
	if(isset($_GET['search']))
	{
		$pcode='0';
		$pcode=$_GET['search'];

		//connect to db
		$db=mysql_connect ("localhost","root","")or die ('Cannot connect to the MySQL Database beacause :' . mysql_error());
		//select db to use
		$mydb=mysql_select_db ("inventory");
		//query the db table
		
		
		$sqlqwe="SELECT * FROM productlist WHERE pcode = '$pcode'";
		$run=mysql_query($sqlqwe);
		$foundnum= mysql_num_rows($run);
		
		if($foundnum==0)
		{
		echo"<font color='red'>$foundnum</font> found in database such as $pcode.<br><br>";
echo"
If you want to add this product just fill up the form.<p>


<form action='list.php' method='post'><center>
<input name='date' type='hidden' value='$da' />
<input name='time' type='hidden' id='txt1'  style='border:0px; margin-left:-10px;' readonly/><font color ='blue'>
code:<br />
<input name='a' type='text' /><br />
description:<br />
<input name='b' type='text' size='' />
<br />
quantity:<br />
<input name='d' type='text' /><br />
price:<br />
<input name='e' type='text' /><br />
category:<br />
<select name='f' onchange='price()'>
<option value=''></option>
<option value='Grocery' name='Grocery'>Grocery</option>
<option value='Drinks' name='Drinks'>Drinks</option></select><br />
supplier:<br />
<input name='g' type='text' /><br />
selling price:<br />
<input name='h' type='text' /><br />
<input name='submit' type='submit' value='save' >
</font>
</form>

";
		}
		
		else
		{
		$sql="SELECT * FROM `productlist` WHERE pcode = '$pcode'";
		//run the query						
		$result=mysql_query($sql)or die(mysql_error());						
		
		
		
		while($row=mysql_fetch_array($result))
			{		
				$a=$row['pcode'];
				$b=$row['pdesc'];
				$d=$row['pleft'];
				$e=$row['pprice'];
				$f=$row['pcategory'];
				$g=$row['psupplier'];
				$h=$row['psellingprice'];
			
				echo "<form action='saveexec.php' method='post'>";
				
				echo "Code:<input type='text' value='$a' name='name' readonly/><br>
				Description:<input type='text'value='$b' readonly/><br>
				Quantity:<input type='text'value='' name='name1'><br>
				Price:<input type='text'value='$e' readonly/><br>
				Category:<input type='text'value='$f' readonly/><br>
				Supplier:<input type='text'value='$g' readonly/><br>
				Sellingprice<input type='text'value='$h' readonly/><br>
				<input name='submit' type='submit' value='save' >
				</tr>";

			}
			
			}
	
		}
?>

			</center></table></tr></td>
		
          <p align="left" class="text_black_huge">&nbsp;</p>
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
</body>

</html>

