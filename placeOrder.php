<html>
<head>
<font>
<title>Better Ice Cream</title>
</head>
<body background="blue.jpg">
<p class="box" style="font-size: 30px"><a href="IceCreamHome.php">Better Ice Cream</a></p>
<h3 align='center'>

<?php
	echo date("l".', '."F j".', '."Y");
	if(date("l")=="Friday"){
		echo "<br>IT'S FRIDAY, 1/2 PRICE ICE CREAM!";
	}
?>

</h3>

<h3><u><center>Place Your Order:</center></u></h3>
<form method="post" action="process.php">

	<table border="0"  align="center" class="alpha">

	
	<tr>
		<td>Customer ID</td>
		<td><input type='value' name='subject_id' size='3'/></td>
	</tr>
	<tr>
	  <td>Flavor:</td>
	  <td>
	   <select name="flavor">
		<option value="N/A">---Select Flavor---</option>
		<option value="Vanilla">Vanilla</option>
		<option value="Chocolate">Chocolate</option>
		<option value="Strawberry">Strawberry</option>
		<option value="Mint Chocolate Chip">Mint Chocolate Chip</option>
		<option value="Coffee">Coffee</option>
	   </select>
	  </td>
	 </tr>
	 <tr>
	  <td>Scoops:</td>
	  <td><input type="number" name="scoops" min="1" max="3"/></td>
	 </tr>
	 <tr>
	  <td>Cup or Cone?</td>
	  <td>
	   <input type="radio" name="container" value="cup"/><label for="ContainerLabel">Cup</label>   
	   <input type="radio" name="container" value="cone"/>Cone 
	  </td>
	 </tr>
	 <tr>
	  <td>Sprinkles?</td>
	  <td>
	   <input type="radio" name="sprinkles" value="yes"/>Yes  
	   <input type="radio" name="sprinkles" value="no"/>No
	  </td>
	 </tr>
	 <tr>
	  <td>Payment:</td>
	  <td>
	   <input type="radio" name="payment" value="cash"/>Cash
	   <input type="radio" name="payment" value="credit"/>Credit
	  </td>
	 </tr>
	 </table>
	 
	
	<p  class="submit" align="center">
	 <input type="submit" value="submit"/>
	</p>


<p align="center" style="font-size: 20px">Forgot your Customer ID?</p>

<?php

	$con = mysqli_connect("localhost","root","cubby99","IceCreamShop");
	 // Check connection
	  if (mysqli_connect_errno())
	  {
		 echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	  
	$sqlSELECT1 = "SELECT * FROM customers";
	$resultSELECT1 = $con->query($sqlSELECT1);

echo"
	<table style='width:20%' align='center' border='1px solid black'  class='beta'>
		<tr>
			<th>Customer ID</th>
			<th>Last Name</th>
		</tr>
		";


	if ($resultSELECT1->num_rows > 0) 
	{
		while($row = $resultSELECT1->fetch_assoc()) 
		{
			echo "
			<tr>
				<td>$row[id]</td>
				<td>$row[lName]</td> 
			</tr>";
		}
	} 
	else 
	{
		echo "<p align='center'><a href='NewCustomer.php'>Click here to enter <br/> your New Customer Information</a></p>";
	}
	echo "</table>";
?>
</form>
</body>
</font>
</html>
<style>
@font-face {
   font-family: myFont;
   src: url(Helamica7.27.40PM.ttf);
}

body {
   font-family: myFont;
}

input, select, value {
	box-sizing: border-box;
    border: 2px solid black;
    border-radius: 8px;
	padding: 4px;
    background-color: #99FFFF;
    color: black;
	transition: 0.5s;
	outline: none;
}

input[type=text]:focus {
    border: 2px solid #99FFFF;
}

	a:link    {color:black;; background-color:transparent; text-decoration:none}
	a:visited {color:black;; background-color:transparent; text-decoration:none}
	a:hover   {color:black;; background-color:transparent; font-size: 115%; transition: .5s }
	a:active  {color:black;; background-color:transparent; }
	
	table.beta{
		background-color: #99FFFF;
		border: 4px solid black;
		border-collapse: collapse;
	}
	p.box{
		text-align: center;
		color: black;
		background-color: #99FFFF ;
		width: 225px;
		border: 5px solid black;
		padding: 5px;
		margin: 10px auto;
		align: center;
		}

	.floatLeft { 
		width: 50%; 
		float: left; 
		
	}
	
	.floatRight {
		width: 50%; 
		float: right; 
	}
</style>