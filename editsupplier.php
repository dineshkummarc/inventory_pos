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
						$result = mysql_query("SELECT * FROM supplier WHERE id = $member_id");
						
						$row = mysql_fetch_array($result);
						$id=$row["id"];
						$scode=$row["scode"];
						$sdesc=$row["sdesc"];
						$ssold=$row["ssold"];
						$sleft=$row["sleft"];
						$sprice=$row["sprice"];
						$scategory=$row["scategory"];
						$ssupplier=$row["ssupplier"];
						$ssellingprice=$row["ssellingprice"];
						mysql_close($con);
						}
						
						?>
<form action="editsupplierexe.php" method="post">
<input name="a" type="text" value="<?php echo $scode; ?>" /><input name="m" type="hidden" value="<?php echo $id; ?>" /><br />
description:<br />
<input name="b" type="text" value="<?php echo $sdesc; ?>" size="70" />
<br />
quantity:<br />
<input name="d" type="text" value="<?php echo $sleft; ?>" /><br />
price:<br />
<input name="e" type="text" value="<?php echo $sprice; ?>" /><br />
category:<br />
<input name="f" type="text" value="<?php echo $scategory; ?>" /><br />
suuplier:<br />
<input name="g" type="text" value="<?php echo $ssupplier; ?>" /><br />
selling price:<br />
<input name="h" type="text" value="<?php echo $ssellingprice; ?>" /><br />

<input name="submit" type="submit" value="save">
</form>
