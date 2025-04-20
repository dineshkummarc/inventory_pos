<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User registration</title>
<link href="stylesheets/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">
	<div id="header_wrapper">
    	<ul id="menu">
   			<li><a href="index.php" target="_self" title="Home" class="current">Home</a></li>
   			<li><a href="customer.php" target="_self" title="Customers">Customers</a></li>
   			<li><a href="#" target="_self" title="Register">Register</a></li>
   			<li><a href="main_login.php" target="_self" title="Inventory">Inventory</a></li>
   			<li><a href="" target="_self" title="About us">About us</a></li>
		</ul>
    </div>

	
        	 <html>
    <head>
     
     
   <SCRIPT language=javascript type="text/javascript">
     
    function calculate() {
   
    
	var d=parseInt(document.getElementById("txt4").value);
    
	{
	if(document.getElementById("txt6").checked==true)
	{
	var a=parseInt(document.getElementById("txt1").value);
	q=a;
	}
	else{
	q=0;
	}
	}
	
	
	{
	if(document.getElementById("txt11").checked==true)
	{
	var y=parseInt(document.getElementById("txt12").value);
	u=y;
	}
	else{
	u=0;
	}
	}
	


	
	  c=q*20;
	  l=u*10;
	  k=l+c;
          
	  e=d-k;
if(e<0)
e="insuficient money";

   document.getElementById("txt5").value=k;
   document.getElementById("txt8").value=e;
    }


    </script>

    </script>
    <body >
	    <form name="form1"  action="post" action="insert.php" >
            <center>
	    <body bgcolor="gray">
	    <tr>
	    <td>
		<font size="5">
	   
		<br>
 <b>price 20</b>
	<br>

        <input type="checkbox" id="txt6" value="" onClick="calculate();">
	habon


        <select name="quantity" value="" id="txt1"onblur="calculate();" onKeyUp="calculate();this.blur();this.focus();" onChange="calculate();"><br>
			 <option value="1">1</option>
			<option value='2'>2</option>
			<option value='3'>3</option>
			<option value='4'>4</option>
			<option value='5'>5</option>
		 </select>
	pieces.
             </td>

            

<br><br>
             <td>
             <font size="5">
    price:10
        <br>
           <input type="checkbox" id="txt11" value="" onClick="calculate();">
		   colgate

    



        <select name="quantity" value="" id="txt12"onblur="calculate();" onKeyUp="calculate();this.blur();this.focus();" onChange="calculate();"><br>
			 <option value="1">1</option>
			<option value='2'>2</option>
			<option value='3'>3</option>
			<option value='4'>4</option>
			<option value='5'>5</option>
		 </select>
        pieces.
             </td>
             </tr>

<br><br>
             <tr>
             <td align="center" >
             <font size="5">
	   total price
	   <input readonly="readonly" id="txt5"name ="totalbox" size="5" maxlength="5">
	   <br>
	cash amount:
	   <input type="text" id="txt4" size="5" maxlength="5" onblur="calculate();" onKeyUp="calculate();this.blur();this.focus();" onChange="calculate();"><br>
	   change:
	   <input type="text" id="txt8" size="15" readonly="readonly" size="5" maxlength="5">
             </td>
			 <br> <br>
			 <input type="submit" value="submit">
			  <input type="reset" value="clear">
             <tr>
	     </table>
    </form>
	<style type="text/css">
table, td, th
{
border:1px solid green;
}
th
{
background-color:green;
color:blue;
}
</style>

		</div>
        </div>
    </div>
</div>


</body>
</html>