

<html>
<!--
<font>
<title>
	Better Ice Cream
</title>
<body background="blue.jpg">

<p class='box'><a href="IceCreamHome.php" class="home">Your orders:</a></p>


<form method="post" action="ChangeResults.php">
<p align='center'>
	Change <select name="field">
			<option value="N/A">---Select Field---</option>
			<option value="Vanilla">Vanilla</option>
			<option value="Chocolate">Chocolate</option>
			<option value="Strawberry">Strawberry</option>
			<option value="Mint Chocolate Chip">Mint Choclate Chip</option>
			<option value="Coffee">Coffee</option>
	   </select>
	To <input type="value" name="newValue"/><br/><br/>
	<input type="submit" value="submit"/>
</p>

</html>

<?php

	

  
	$con = mysqli_connect("localhost","root","cubby99","IceCreamShop");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
  
	$sql="SELECT * FROM icecream JOIN customers ON customers.id=icecream.subject_id WHERE icecream.subject_id=".$search."";
  
	$result = mysqli_query($con, $sql);
	if ( ($result === false))  {
		printf("error: %s\n", mysqli_error($con));
	}
	else {
		echo "";
	}
	
	echo"
	<table size='70%' border='1' align='center' style='color:#99FFFF'>
	<tr>
		<th>Order ID</th>
	    <th>Flavor</th>
		<th>Scoops</th>
		<th>Container</th>
		<th>Sprinkles</th>
		<th>Payment</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		
	</tr>
		";


	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc()) 
		{
			echo "<tr>
					<td>$row[id]</td>
					<td>$row[flavor]</td> 
					<td>$row[scoops]</td> 
					<td>$row[container]</td> 
					<td>$row[sprinkles]</td>
					<td>$row[payment]</td>
					<td>$row[fName]</td> 
					<td>$row[lName]</td> 
					<td>$row[email]</td>
				</tr>";
		}
	} 
	else 
	{
		echo "<p align='center'>0 results</p>";
	}
?>
</table>
<html>
	<p align="center">
		<button type="button" align="center"> <a href="IceCreamChangeID.php" class="return">Choose a different ID</a></button>
	</p>
	
	

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
	
	p.box{
		text-align: center;
		font-size: 20px;
		color: black;
		background-color: #99FFFF;
		width: 225px;
		border: 5px solid black;
		padding: 5px;
		margin: 10px auto;
		align: center;
	}
	
	table, td, th{
		color: black;
		background-color: #99FFFF;
		border: 4px solid black;
		border-collapse: collapse;
	}
	
	a.home:link    {color:black;; background-color:transparent; text-decoration:none}
	a.home:visited {color:black;; background-color:transparent; text-decoration:none}
	a.home:hover   {color:black;; background-color:transparent; font-size: 115%; transition: .5s }
	a.home:active  {color:black;; background-color:transparent; }
	
	a.return:link    {color:black;; background-color:transparent; text-decoration:none}
	a.return:visited {color:black;; background-color:transparent; text-decoration:none}
	a.return:hover   {color:black;; background-color:transparent; }
	a.return:active  {color:black;; background-color:transparent; }
	
	button{
		background-color: #99FFFF;
		border: 1px solid black;
		border-radius: 5px;
	}
-->
</style>