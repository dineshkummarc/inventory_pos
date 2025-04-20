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
  
  <SCRIPT LANGUAGE="JavaScript">
function checkIt(evt) {
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        status = "This field accepts numbers only."
        return false
    }
    status = ""
    return true
}
</SCRIPT>


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
	
	<script type="text/javascript">
function chrg()
	{
	var e=parseFloat(document.getElementById('e').value);
	var c=parseFloat(document.getElementById('charge').value);
	
	if(e>0){}else{e=0;}
	
	var d=e*c;
	var sprice=d+e;
	
	ttl = "" + ((Math.round(sprice * 100)) / 100);
	te = "" + ((Math.round(e * 100)) / 100);

	dec1 = ttl.substring(ttl.length-3, ttl.length-2);
	dec2 = ttl.substring(ttl.length-2, ttl.length-1);
	dec3 = te.substring(te.length-3, te.length-2);
	dec4 = te.substring(te.length-2, te.length-1);

	if(c==0)
	{
	if (dec3 != '.' ) { // adds trailing zeroes if necessary
	if (dec4 == '.') te += "0";
	else te += ".00";
	}
	document.getElementById('h').value=te; // display total amount	
	}
	else
	{
	if (dec1 != '.' ) { // adds trailing zeroes if necessary
	if (dec2 == '.') ttl += "0";
	else ttl += ".00";
	}
	document.getElementById('h').value=ttl; // display total amount
	}
		
	}
function ifbox()
{
var a=document.getElementById('i').value

if(a=='box(s)' || a=='ream(s)')
{
	document.getElementById('hpcs').hidden=false;
	document.getElementById('hpcs').disabled=false;
	document.getElementById('huprice').hidden=false;
}else
{
	document.getElementById('hpcs').hidden=true;
	document.getElementById('hpcs').disabled=true;
	document.getElementById('huprice').hidden=true;
}
}
    </script>
 <body bgcolor ="gray"> 
<body id="index">
<body onLoad="ShowTime()">
<br><br>
<div align="center"><font size='5'><b>WELCOME TO PRODUCT</div>
  <a href="home.php"><img src="img/64x64/28.png" alt="back" border="0" /></a>
    <div id="pagewrap">


    <form method="get" action="products.php" id="search"><br />
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
						
	<td width="80"><div align="right" ><font color="lightgreen" size="3">Date : </td>
    <td width="80"><input name="date" type="text" value="<?php echo $da; ?>" size="8" style="border:0px;" />
    <input name="time" type="text" id="txt" size="8" style="border:0px; margin-left:-10px;" readonly/></td>
   </div>
	<div class="top"></font>
	
	
		<center><font size = '5' color = 'blue'></font>
		<div id="search">
        <label for="filter">Search Product:</label> 
		<input type="text" name="filter" value="<?php echo $pcode; ?>" id="filter" />
     
		<input class="search" type="hidden" name="search" size = '20' style = "font-family: lucida fax; font-size: 20px; font-weight: italic;"/>
		<input name="submit" type="image" style="border: 0px; margin: 0 0 -9px 5px;" src="img/add.png" alt="Search" title="Ma Search Ka???" /></center>
	 </div></form>
</table><br>   

 <center>  
<table width="30%" border="0" cellspacing="0" cellpadding="0" background="img/login2.png"style="border-color:; border-width:thick; font-size:18px;">
 <tr>
<td width="10%">
	<?php
	if(isset($_GET['filter']))
	{
		$pcode='0';
		$pcode=$_GET['filter'];

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
		echo"<br><font color='red'>$foundnum</font> found in database such as $pcode.<br>";
echo"
If you want to add this product just fill up the form.<p>


<form action='list.php' method='post'><center>
<input name='date' type='hidden' value='$da' />
<input name='time' type='hidden' id='txt1'  style='border:0px; margin-left:-10px;' readonly/><font color ='blue'>
&nbsp&nbsp&nbsp&nbsp&nbsp
code:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  description:
<input name='a' type='text' required/>
<input name='b' type='text' size='' required/><br/>
quantity/unit:<br/>
<input name='d' type='text' size='3'onKeyPress='return checkIt(event)'
required/><br/>
Unit:<br />
<select name='i' id='i' onchange='ifbox()' required/>
<option value=></option>
<option value='pc(s)' name='pc'>pc(s)</option>
<option value='box(s)' name='box'>box(s)</option>
<option value='ream(s)' name='ream'>ream(s)</option>
<option value='sack(s)' name='sack'>sack(s)</option>
</select> <input type='text' name='hpcs' id='hpcs' value='pc(s)' size='2' hidden readonly disabled><br />
Unit price:<br />
<input name='e' id='e' type='text' size='3'  onkeyup='chrg()' onKeyPress='return checkIt(event)'
required/><input type='text' name='huprice' id='huprice' size='3' onKeyPress='return checkIt(event)' hidden><br />
category:<br />
<select name='f'  onchange='price()'required>
<option value=''></option>
<option value='Grocery' name='Grocery'>Grocery</option>
<option value='Drinks' name='Drinks'>Drinks</option></select><br />
Charge:<br />
<select name='charge' id='charge' onchange='chrg()' required>
<option value='0'></option>
<option value='0.07' name='7%'>7%</option>
<option value='0.08' name='8%'>8%</option>
<option value='0.09' name='9%'>9%</option>
<option value='0.10' name='10%'>10%</option></select><br />
supplier:<br />
<input name='g' type='text' size='7'required/><br />
selling price:<br />
<input name='h' id='h' type='text' size='5' readonly/ required/><br /><br />
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
				$i=$row['punit'];
				$f=$row['pcategory'];
				$g=$row['psupplier'];
				$h=$row['psellingprice'];
			
				echo "<form action='saveexec.php' method='post'>";
				
				echo "<center>
				
				Code:&nbsp&nbsp
				<input type='text' size='10' value='$a' name='name' readonly/><br>
				Description:
				<input type='text' size='15' value='$b' readonly/><br>
				Quantity:
				<input type='text' size='10' value='' name='name1'><br>
				&nbsp&nbsp
				Unit:
				<input type='text' size='10' value='$i' readonly/><br>
				&nbsp&nbsp
				Unit Price:&nbsp&nbsp&nbsp
				<input type='text'size='10' value='$e' readonly/><br>
				Category:
				<input type='text'size='10' value='$f' readonly/><br>
				Supplier:&nbsp
				<input type='text' size='10' value='$g' readonly/><br>
				Sellingprice:
				<input type='text' size='10' value='$h' readonly/><br><br>
				<input name='submit' type='submit' value='save' >
				</tr>";

			}
			
			}
	
		}
?>
</center></table></tr></td>
<p align="left" class="text_black_huge">&nbsp;</p>
</td></tr>
</table>      
</form>
</html>
</body>
    
    <script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
    <script src="./js/application.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
  
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  </style>
   <br>
<body bgcolor ="gray">
<body id="index">

<center>
<table width="60%" cellpadding="5" cellspacing="7" id="resultTable" background="img/login3.png">
          <thead>
            <tr bgcolor="blue" style="margin-bottom:10px;">
              <th>Code</th>
              <th>Description</th>
              <th>Qty</th>
			   <th>Unit</th>
              <th>Unit Price</th>
			  <th>Category</th>
			  <th>Supplier</th>
			  <th>Selling Price</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);

$result = mysql_query("SELECT * FROM productlist");

while($row = mysql_fetch_array($result))
  {
    echo '<tr>';
       echo '<td><div align="center">'.$row['pcode'].'</td>';
      echo '<td><div align="center">'.$row['pdesc'].'</td>';
      echo '<td><div align="center">'.$row['pleft'].'</div></td>';
      echo '<td><div align="center">'.$row['punit'].'</div></td>';
      echo '<td><div align="center">'.$row['pprice'].'</div></td>';
	  echo '<td><div align="center">'.$row['pcategory'].'</div></td>';
	  echo '<td><div align="center">'.$row['psupplier'].'</div></td>';
	  echo '<td><div align="center">'.$row['psellingprice'].'</div></td>';
      echo '<td><div align="center">'.'<a rel="facebox" href=editproduct.php?id=' . $row["id"] .'>edit</a>'.'|'.'</div></td>';
    echo '</tr>';
  }

mysql_close($con);
?> 
          </tbody>
       </table>
      </div>
    </div>
</body>
</html>



