<?php
	require_once('auth.php');
?>
<body background ="http://localhost/inventory_pos/logo.jpg">
<br>
<font name= "Forte" size="6" color="yellowgreen"><b><center> INVENTORY AND POINT OF SALE OF NSCA MULTI-PURPOSE COOPERATIVE</center></b></font>
<br>

<link rel="stylesheet" type="text/css" href="pro_dropdown_2/pro_dropdown_2.css" />

<script src="pro_dropdown_2/stuHover.js" type="text/javascript"></script>
<style type="text/css">
<!--
.indexwraper{
width:70%;
height:500px;
border-style:solid;
border-width:thin;
margin:0 auto;
border-width: 3px;
}
-->
</style>
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
</head>

<body>

<span class="preload1"></span>
<span class="preload2"></span>
</div><center><div style="width:43.5%; margin:0 auto; height:50px; border-style:solid; border-color:#FFFFFF;">
<center>
<ul id="nav">
	<li class="top"><a href="index.php" class="top_link"><span style="font-size:15px; font-weight:bold;">Logout</span></a></li>
	<li class="top"><a href="#nogo22" id="services" class="top_link"><span class="down" style="font-size:15px; font-weight:bold;">Delivery</span></a>
		<ul class="sub">
			<li><a href="products.php"><span style="font-size:18px; font-weight:bold;">Product</span></a></li>
						
		</ul>
	</li>

	<li class="top"><a href="#" id="shop" class="top_link"><span class="down" style="font-size:15px; font-weight:bold;">Product Inventory</span></a>
			<ul class="sub">
			<li><a href="day_delivery.php"><span style="font-size:18px; font-weight:bold;">Day</span></a></li>
			<li><a href="week_delivery.php"><span style="font-size:18px; font-weight:bold;">Weekly</span></a></li>
			<li><a href="month_delivery.php"><span style="font-size:18px; font-weight:bold;">Month</span></a></li>
			<li><a href="year_delivery.php"><span style="font-size:18px; font-weight:bold;">Year</span></a></li>
			<li><a href="previous_delivery.php"><span style="font-size:18px; font-weight:bold;">Previous</span></a></li>
			</ul>
	</li>

	<li class="top"><a href="#" id="shop" class="top_link"><span class="down" style="font-size:15px; font-weight:bold;">Sales Inventory</span></a>
		<ul class="sub">
			<li><a href="day.php"><span style="font-size:18px; font-weight:bold;">Day</span></a></li>
			<li><a href="week_search.php"><span style="font-size:18px; font-weight:bold;">Weekly</span></a></li>
			<li><a href="month.php"><span style="font-size:18px; font-weight:bold;">Month</span></a></li>
			<li><a href="year.php"><span style="font-size:18px; font-weight:bold;">Year</span></a></li>
			<li><a href="previous.php"><span style="font-size:18px; font-weight:bold;">Previous</span></a></li>
			</ul>
	</li>

		
			
		</ul>
	</li>
</ul>


</div><center>
</body>
</html>
