<?php
	require_once('auth.php');
?>
   
 
    
    <script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
    <script src="./js/application.js" type="text/javascript" charset="utf-8"></script>
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
  </style>
  
  <br>
  
<body bgcolor ="gray">
<body id="index">
<body onLoad="ShowTime()">
<div align="center" class="style2" size="20"><b>WELCOME TO PRODUCT</div>
<br />
  <a href="home.php"><img src="img/64x64/28.png" alt="back" border="0" /></a>
<p align="left"><a  rel="" href="addproduct.php"><font size="5">Add Product</font> </a> </p>
    <div id="pagewrap">
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
						
												
	 <div id="body">
	 <center>
<table cellpadding="5" cellspacing="7" id="resultTable">
          <thead>
            <tr bgcolor="blue" style="margin-bottom:10px;">
              <th>Code</th>
              <th>Description</th>
			  <th>Qty Sold</th>
              <th>Qty</th>
              <th>Price</th>
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

$result = mysql_query("SELECT * FROM addproduct order by pdesc ASC ");

while($row = mysql_fetch_array($result))
  {
    echo '<tr>';
       echo '<td>'.$row['pcode'].'</td>';
      echo '<td>'.$row['pdesc'].'</td>';
         echo '<td><div align="center">'.$row['pleft'].'</div></td>';
		  echo '<td><div align="center">'.$row['psold'].'</div></td>';
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



