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
<h2 align='center'>Your Customer Page</h2>

</html>

<?php
	$_SESSION['customerID'] = $_POST['customerID'];

  
	$con = mysqli_connect("localhost","root","cubby99","IceCreamShop");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
  
	
	$sql="SELECT * FROM icecream JOIN customers ON customers.id=icecream.subject_id WHERE icecream.subject_id=".$_SESSION['customerID']."";
  

	$result = mysqli_query($con, $sql);
	if ( ($result === false))  {
		printf("error: %s\n", mysqli_error($con));
	}
	else {
		echo "";
	}
	
	
	$query = "SELECT day FROM icecream";
	
	
	echo"
	<table size='70%' border='1' align='center'>
	<tr>
	    <th>Flavor</th>
		<th>Scoops</th>
		<th>Container</th>
		<th>Sprinkles</th>
		<th>Payment</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Days</th>
		
	</tr>
		";


	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc()) 
		{
			echo "<tr>
					<td>$row[flavor]</td> 
					<td>$row[scoops]</td> 
					<td>$row[container]</td> 
					<td>$row[sprinkles]</td>
					<td>$row[payment]</td>
					<td>$row[fName]</td> 
					<td>$row[lName]</td> 
					<td>$row[email]</td>";
					$DayIn = new DateTime("$row[day]");
					$Now = new DateTime();
					$diff = $DayIn->diff($Now);
					echo"<td>$diff->d</td>
				</tr>";
		}
	} 
	else 
	{
		echo "<p align='center'>0 results</p>";
	}
?>
</table>
<br/>




	

	<div class="StrawberryPos">
		<a href="IceCreamDelete.php"><img src="StrawberryScoop.png" alt="Delete an Order!" width="200" height="175"></a>
		<div class="center"><a href="IceCreamDelete.php"> Delete an <br/> Order!</a></div>
	</div>

	<div class="VanillaPos">
		<a href="IceCreamUpdate.php"><img src="VanillaScoop.png" alt="Update an Order!" width="200" height="175"></a>
		<div class="center"><a href="IceCreamUpdate.php"> Update <br/> an Order!</a></div>
	</div>

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
	
	 div.StrawberryPos {
		position: relative;
		left: 375px;
		width: 200px;
		height: 100px;
	}

	div.VanillaPos {
		position: relative;
		left: 600px;
		bottom: 100px;
		width: 200px;
		height: 100px;
	}
	
	div.center {
		position: absolute;
		left: 0;
		top: 55%;
		width: 105%;
		text-align: center;
		font-size: 20px;
		color: black;
	} 
	
	a:link    {color:black; background-color:transparent; text-decoration:none}
	a:visited {color:black; background-color:transparent; text-decoration:none}
	
</style>