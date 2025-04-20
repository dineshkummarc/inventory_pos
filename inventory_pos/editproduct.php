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
						$id=$row["id"];
						$pcode=$row["pcode"];
						$pdesc=$row["pdesc"];
						$pleft=$row["pleft"];
						$punit=$row["punit"];
						$pprice=$row["pprice"];
						$pcategory=$row["pcategory"];
						$psupplier=$row["psupplier"];
						$psellingprice=$row["psellingprice"];
						mysql_close($con);
						}
						
						?>
<form action="editexec.php" method="post">
<center><b>Code<br/>
<input name="a" type="text" value="<?php echo $pcode; ?>" size="10" /><input name="m" type="hidden" value="<?php echo $id; ?>" /><br />
Description:<br />
<input name="b" type="text" value="<?php echo $pdesc; ?>" size="10" />
<br />
Quantity:<br />
<input name="d" type="text" value="<?php echo $pleft; ?>" size="7" readonly/> <br />
Unit:<br />
<select name='i' onchange='price()' value="<?php echo $punit; ?>" / >
<option value='pc(s)' name='pc'>pc(s)</option>
<option value='box(s)' name='box'>box(s)</option>
<option value='ream(s)' name='ream'>ream(s)</option>
<option value='sack(s)' name='sack'>sack(s)</option>
</select><br />
Price:<br />
<input name="e" type="text" value="<?php echo $pprice; ?>" size="5" /><br />
Category:<br />
<select name='f' onchange='price()' value="<?php echo $pcategory; ?>" / >
<option value='Grocery' name='Grocery'>Grocery</option>
<option value='Drinks' name='Drinks'>Drinks</option></select><br />
Suplier:<br />
<input name="g" type="text" value="<?php echo $psupplier; ?>" size="10" /><br/>
Selling price:<br />
<input name="h" type="text" value="<?php echo $psellingprice; ?>" size="5" /><br />

<input name="submit" type="submit" value="save">
</form>
