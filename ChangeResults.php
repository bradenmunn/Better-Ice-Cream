<?php
	session_start();
?>
<html>
<font>
<title>
	Better Ice Cream
</title>
<body background="blue.jpg">

<p class='box'><a href="IceCreamHome.php" class="home">Better Ice Cream</a></p>

</html>

<?php
	$IceCreamID = $_POST['IceCreamID'];
	$Field = $_POST['field'];
	$NewValue = $_POST['NewValue'];
	

	$con = mysqli_connect("localhost","root","cubby99","IceCreamShop");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
		
	$sql="UPDATE icecream SET ".$Field."='".$NewValue."' WHERE id=".$IceCreamID."";
  
	$result = mysqli_query($con, $sql);
	if ( ($result === false))  {
		printf("error: %s\n", mysqli_error($con));
	}
	else {
		echo "";
	}
	$sqlLEFT="SELECT customers.id AS customerID, icecream.id AS IceCreamID, flavor, container, sprinkles, payment, scoops FROM icecream JOIN customers ON customers.id=icecream.subject_id WHERE icecream.subject_id=".$_SESSION['customerID']."";
  
	$resultLEFT = mysqli_query($con, $sqlLEFT);
	if ( ($resultLEFT === false))  {
		printf("error: %s\n", mysqli_error($con));
	}
	else {
		echo "<h1 align='center'>Here is your updated order</h1>";
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
		
	</tr>
		";


	if ($resultLEFT->num_rows > 0) 
	{
		while($row = $resultLEFT->fetch_assoc()) 
		{
			echo "<tr>
					<td>$row[IceCreamID]</td>
					<td>$row[flavor]</td> 
					<td>$row[scoops]</td> 
					<td>$row[container]</td> 
					<td>$row[sprinkles]</td>
					<td>$row[payment]</td>
				</tr>";
		}
	} 
	else 
	{
		echo "<p align='center'>0 results</p>";
	}
?>
</table>
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
		background-color: white;
		border: 1px solid black;
		border-radius: 5px;
	}
	
	button:hover{
		font-size: 80%; 
		transition: .5s;
	}
	
</style>