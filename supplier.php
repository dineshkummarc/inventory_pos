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
  <br>
<body bgcolor ="gray">
<body id="index">
<div align="center" class="style2" size="20"><b>WELCOME TO SACKED PRODUCT</div>
<br />
  <a href="home.php"><img src="img/64x64/28.png" alt="back" border="0" /></a>
<p align="left"><a rel="facebox" href="addsupplier.php"><font size="5">Add Sacked Product</font> </a> </p>
    <div id="pagewrap">

	 <div id="body">
	 <center>
<table cellpadding="5" cellspacing="7" id="resultTable">
          <thead>
            <tr bgcolor="blue" style="margin-bottom:10px;">
              <th>Code</th>
              <th>Description</th>
              <th>Qty Sold</th>
			  <th>Qty Left</th>
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

$result = mysql_query("SELECT * FROM supplier");

while($row = mysql_fetch_array($result))
  {
    echo '<tr>';
       echo '<td>'.$row['scode'].'</td>';
      echo '<td>'.$row['sdesc'].'</td>';
      echo '<td><div align="center">'.$row['ssold'].'</div></td>';
      echo '<td><div align="center">'.$row['sleft'].'</div></td>';
      echo '<td><div align="center">'.$row['sprice'].'</div></td>';
	  echo '<td><div align="center">'.$row['scategory'].'</div></td>';
	  echo '<td><div align="center">'.$row['ssupplier'].'</div></td>';
	  echo '<td><div align="center">'.$row['ssellingprice'].'</div></td>';
      echo '<td><div align="center">'.'<a rel="facebox" href=editsupplier.php?id=' . $row["id"] .'>edit</a>'.'|'.'<a rel="facebox" href=deletes.php?id=' . $row["id"] .'>delete</a>'.' </div></td>';
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



