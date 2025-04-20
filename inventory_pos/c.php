<?php
	require_once('auth.php');
?>
<li class="top"><a href="index.php" class="top_link"><span style="font-size:24px; font-weight:bold;"><font color="lightgreen" size="3">Logout</span></a></li>
<script language="JavaScript" type="text/javascript" src="suggest.js"></script>
<script language="JavaScript" type="text/javascript" src="productsearch.js"></script>
<script language="JavaScript" type="text/javascript" src="productnamesearch.js"></script>


<style type="text/css">

a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
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
      document.getElementById('time1').value=h+" : "+m+" : "+s
      t=setTimeout('ShowTime()',1000)
	  	
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
	
	








<script language="javascript" type="text/javascript">

function multiply(){

a=Number(document.abc.QTY.value);
d=Number(document.abc.AQTY.value);

b=Number(document.abc.psellingprice.value);


c=a*b;
e=d-a;


document.abc.TOTAL.value=c;
document.abc.RQTY.value=e;

if (a!=0) 
    {document.getElementById("xx").disabled = false;}
  else 
    {document.getElementById("xx").disabled = true;}
	
	}

function addCommas(nStr){
 nStr += '';
 x = nStr.split('.');
 x1 = x[0];
 x2 = x.length > 1 ? '.' + x[1] : '';
 var rgx = /(\d+)(\d{3})/;
 while (rgx.test(x1)) {
  x1 = x1.replace(rgx, '$1' + ',' + '$2');
 }
 return x1 + x2;
}


function mul(){


b=Number(document.mn.tretail.value);
d=Number(document.mn.aba.value);


c=b*d;
o=b-c;
D=o.toFixed(2)

document.mn.tdiscount.value=addCommas(c);
document.mn.gtotal.value=D;
document.mn.gtotal1.value=addCommas(D);
}


</script>








  


  
  
  
 <script language="javascript" type="text/javascript">
 
function checkNumeric(objName)
  {
    var lstLetters = objName;

    var lstReplace = lstLetters.replace(/\,/g,'');
  }   
 function remain()
 {
 var d = document.getElementById('RQTY').value
 
	 if( d>=0 && d<=10 )
		{
			alert('You have ' + d + ' remaining items! You need to order soon.');
		}
	if(d<0)
		{
			alert('Sorry! You do not have enough quantity! Please order soon.');
			
			return false;
		}

 }
 </script>
  
  
<body bgcolor ="black">

<body onLoad="ShowTime()">
<div align="center" class="style1" ><font color="lightgreen"><b>Sales</b></div>

<?php

if(isset($_POST['submit']))
{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$yes='yes';
$pname=$_POST['pname'];
$date=$_POST['date'];
$QTY=$_POST['QTY'];
$punit=$_POST['punit'];
$time=$_POST['time'];
$TOTAL=$_POST['TOTAL'];
$CODE=$_POST['CODE'];
$psellingprice=$_POST['psellingprice'];
$id=$_POST['id'];
$code1=$_POST['prcoede'];
$today=getdate();
$day_name=$today['weekday'];
$month=$today['month'];
$day=$today['mday'];
$year=$today['year'];
$sold1=$today['sold'];

	
$a=$_POST['QTY'];
$a1=$_POST['prcoede'];

 $result = mysql_query("SELECT * FROM productlist WHERE pcode='$a1'");
        while($row = mysql_fetch_array($result))
         {
	
			$left=$row['pleft'];
			
		} 
$total=($left-$a);
if ($left == '0' || $a > $left){

      
  echo"<center><font color='red'><div class='denied'>
	<h1>Sorry!</h1>
	<p>Not Enough Quantity!!<br>You need to order!</p>
	</div></center></font>";

			}
			else {
// Insert data into mysql
$sql=("UPDATE productlist SET pleft='$total',sold='$a' where pcode='$a1'");


$result=mysql_query($sql);
$sql="INSERT INTO sales (name, qty, punit, total, code, date, time, price, pcode, status, day_name, month, day, year)
VALUES ('$pname', '$QTY', '$punit', '$TOTAL', '$CODE',  '$date', '$time', '$psellingprice','$code1', '$yes', '$day_name', '$month', '$day', '$year')";
	$result=mysql_query($sql);
if($result){
header('location:auto.php');
}
}
}
?>


<form action="auto.php" method="post" name="abc" onsubmit='return remain()' ><div class="wraper">
		
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
						

						<?php
							if (isset($_GET['id']))
							{
						$con = mysql_connect('localhost','root',"");
						if (!$con)
						  {
						  die('Could not connect: ' . mysql_error());
						  }
						
						mysql_select_db("inventory", $con);
						
						$member_id = $_GET['id'];						
						$result = mysql_query("SELECT * FROM productlist WHERE id = $member_id");
						$row = mysql_fetch_array($result);
						$name=$row["pdesc"];
						$qty_left=$row["pleft"];
						$punit=$row["punit"];
						$price=$row["psellingprice"];
						$id=$row["id"];
						$prcoede=$row["pcode"];
						mysql_close($con);
						}
						
						
						?>
						
								
	<td width="80"><div align="right" ><font color="lightgreen" size="3">Date : </td>
    <td width="80"><input name="date" type="text" value="<?php echo $da; ?>" size="8" style="border:0px;" readonly/>
    <input name="time" type="text" id="txt" size="8" style="border:0px; margin-left:-10px;" readonly/></td>
   </div>
						<div class="top">
    <div class="topleft">
	<font color="lightgreen">Enter Product Code Here:<br />
	<input type="text" id="amots" name="amots"  onKeyUp="bleble();" />
	<div id="layer2" style="margin-right:-30px;"></div>
	</div>
  <tr>
  <td><div align="center">Reciept Code : </div></td>
    <td><center><input name="CODE" type="text" id="CODE" value="<?php if(isset($_GET['new'])==''){ echo $_SESSION['SESS_MEMBER_ID'];} ?>" size="20" style="border:0px;" readonly="readonly"/></td>
  
  <td width="20"><div align="center">Product code : </div></td>
      <center><input name="prcoede" type="visible" value="<?php echo $prcoede;?>" size="10" align="center" style="border:0px;" readonly="readonly"/>
	  
    <td width="20"><div align="center">Product Name : </div></td>
    <td colspan="3"><center><input name="pname" type="text" value="<?php echo $name ?>" size="20" style="border:0px;" readonly="readonly"/>
      <input name="id" type="hidden" value="<?php echo $id; ?>" readonly="readonly"/>
	  
      <input name="less" type="hidden"/>	  </td>
   </tr>
   <td width="20"><div align="center">Unit: </div></td>
    <td colspan="3"><center><input name="punit" id="punit" type="text" value="<?php echo $punit ?>" size="20" style="border:0px;" readonly="readonly"/>
  <tr>
    <td><div align="center">Product Price : </div></td>
    <td width="165"><span style="margin-left: 0px;">
      <input name="psellingprice" id="psellingprice" type="text" value="<?php echo $price ?>" size="20" style="border:0px;" readonly="readonly"//>
    </span></td>
    <td width="119"><div align="center">Quantity : </div></td>
    <td width="184">
      <input name="QTY" id="QTY" type="text" onkeyup="multiply()" onkeypress="return checkIt(event)" />   </td>
      
	  <td><div align="center">Available Qty: </div></td>
    <td>
      <input name="AQTY" id="AQTY" type="text" name="sold" value="<?php echo $qty_left ?>" size="10" style="border:0px;" readonly/>    </td>
	    <tr>
    
    <td><div align="center">Sub Total : </div></td>
    <td><input name="TOTAL" id="TOTAL" type="text" style="border:0px;" readonly="readonly"/></td>
		<input name="RQTY" id="RQTY" type="hidden" style="border:0px;" readonly="readonly"/>
	 <td width="110" rowspan="3"><input name="submit" type="submit" value="OK" style="height: 30px; width: 100px; cursor:pointer;" id="xx" /></td>
	 <input type='reset' value='refresh'>
    <td></td>
    <td>&nbsp;</td>
	<br><br>
  </tr>
</table>	
    
  </fieldset>
</form>
  <fieldset style="border-width: 0px;">
<legend>List of Orders</legend>
    <table width="60%" border="2" cellspacing="0" cellpadding="0" style="border-color:#99987867; border-width:thin; font-size:12px;">
      <tr>
	  	<td width="9%"><div align="center"><strong><font color="lightgreen">PRODUCT CODE</strong></div></td>
        <td width="20%"><div align="center"><strong><font color="lightgreen">PRODUCT</strong></div></td>
        <td width="8%"><div align="center"><strong><font color="lightgreen">QTY</strong></div></td>
        <td width="8%"><div align="center"><strong><font color="lightgreen">UNIT</strong></div></td>
        <td width="8%"><div align="center"><strong><font color="lightgreen">RETAIL PRICE </strong></div></td>
        <td width="8%"><div align="center"><strong><font color="lightgreen">AMOUNT</strong></div></td>
		
        <td width="4%">&nbsp;</td>
      </tr>
	  
	  <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$f=$_SESSION['SESS_MEMBER_ID'];
$result = mysql_query("SELECT * FROM sales where code = '$f'and status='yes'");



function formatMoney($number, $fractional=false) {
						if ($fractional) {
							$number = sprintf('%.2f', $number);
						}
						while (true) {
							$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
							if ($replaced != $number) {
								$number = $replaced;
							} else {
								break;
							}
						}
						return $number;
					}	


while($row = mysql_fetch_array($result))
  {
      echo '<tr>';
	  	echo '<td><div align="center"><font color="lightgreen">'.$row['pcode'].'</div></td>';
        echo '<td><div align="left"><font color="lightgreen">&nbsp;&nbsp;&nbsp;'.$row['name'].'</div></td>';
        echo '<td><div align="center"><font color="lightgreen">'.$row['qty'].'</div></td>';
        echo '<td><div align="center"><font color="lightgreen">'.$row['punit'].'</div></td>';
        echo '<td><div align="center"><font color="lightgreen">';
		$ppp=$row['PRICE'];
		echo formatMoney($ppp, true);
		echo '</div></td>';
        echo '<td><div align="center"><font color="lightgreen">';
		$rr=$row['total'];
		echo formatMoney($rr, true);
		echo '</div></td>';
        echo '<td>';
		echo '<a href=delete.php?id=' . $row["id"] .'><font color="lightgreen">Remove</a>';
		echo '</td>';
      echo '</tr>';
	    
	  }

mysql_close($con);
?>

    </table>

  </fieldset>

<SCRIPT language=javascript type="text/javascript">
     
    function calculate() {
   
    
	var d=parseFloat(document.getElementById("cash").value);
    var k=parseFloat(document.getElementById("tretail").value);
	
	  e=d-k;
	 

ttl = "" + ((Math.round(e * 100)) / 100);

dec1 = ttl.substring(ttl.length-3, ttl.length-2);
dec2 = ttl.substring(ttl.length-2, ttl.length-1);

if(k>d)
{
   document.getElementById("change").value="insuficient money";
}
else
{
if (dec1 != '.' ) { // adds trailing zeroes if necessary
if (dec2 == '.') ttl += "0";
else ttl += ".00";
}
   document.getElementById("change").value=ttl;
}
  
    }


    </script>
	
	
	
	<div align="right" style="margin-top:10px;">
	  Total Retail :
	    <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$f=$_SESSION['SESS_MEMBER_ID'];
$result = mysql_query("SELECT sum(total) FROM sales where code = '$f'");

while($row2 = mysql_fetch_array($result))
  {
      $yy=$row2['sum(total)'];
	  
	  }

mysql_close($con);
?>

	<form action="print2.php" method='post'>
		<input type='hidden' name='f' value='<?php  echo"$f";?>'>
		<input type='hidden' id='time1' name='time1'>
	    <input name="tretail" type="hidden" id="tretail"  size="17"  <?php if(isset($_GET['new'])==''){ echo"value='$yy'";}?> readonly/>
		<input name="tretail1" type="text" id="tretail1" size="17"  <?php if(isset($_GET['new'])==''){ $dfg=$yy; echo"value=".formatMoney($dfg, true)."";}?> style="text-align:right;"  readonly/>

	    <br />
	<br>
	   cash amount:
	   <input type="text" name='cash' id="cash" size="15" maxlength="10" onblur="calculate();" onKeyPress="return checkIt(event)" onKeyUp="calculate();this.blur();this.focus();" onChange="calculate();" required><br>
	   change:
	   <input type="text" name='change' id="change" size="15" readonly="readonly" size="5" maxlength="5" required><br><br>
	    <input type="submit"  value="submit">
	    <a href="new.php?new=new" size="10"><font color="lightgreen">new</a>

 
</body>
</html>
</form>