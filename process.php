<html>
<font>
<head>
<title >Process Order</title>
</head>
<body background="blue.jpg">
 <p class="box"><a href="IceCreamHome.php">Order added.</a></p>

 <?php
 
 $flavor=$_POST['flavor'];
 $scoops=$_POST['scoops'];
 $container=$_POST['container'];
 $sprinkles=$_POST['sprinkles'];
 $payment=$_POST['payment'];
 $subject_id=$_POST['subject_id'];
 
  $con = mysqli_connect("localhost","root","cubby99","IceCreamShop");
 // Check connection
  if (mysqli_connect_errno())
  {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  

$sql= "INSERT INTO icecream (flavor,scoops,container,sprinkles,payment,subject_id, day) 
	   VALUES ('$flavor','$scoops','$container','$sprinkles','$payment','$subject_id', curdate())";


	$result1 = mysqli_query($con, $sql);
	if ( ($result1 === false))  {
	  printf("error: %s\n", mysqli_error($con));
	}
	else {
		echo "<h1 align='center'>Order Successfully Placed! Your customer id is: ".$subject_id.", use it for future orders!</h1>";
	}
	
	$sqlYOU="SELECT * FROM icecream JOIN customers ON customers.id=icecream.subject_id WHERE icecream.subject_id=".$subject_id."";
	$resultYOU = mysqli_query($con, $sqlYOU);
	$sqlALL = "SELECT * FROM icecream JOIN customers ON customers.id=icecream.subject_id";
	$resultALL = $con->query($sqlALL);
echo"
	<div><h3 align=center>Your Orders</h3></div>
	<table size='70%' border='1' align='center' style='color: black'>
	<tr>
	    <th>Flavor</th>
		<th>Scoops</th>
		<th>Container</th>
		<th>Sprinkles</th>
		<th>Payment</th>
	</tr>
		";


	if ($resultYOU->num_rows > 0) 
	{
		while($row = $resultYOU->fetch_assoc()) 
		{
			echo "<tr>
					<td>$row[flavor]</td> 
					<td>$row[scoops]</td> 
					<td>$row[container]</td> 
					<td>$row[sprinkles]</td>
					<td>$row[payment]</td>
				";
		}
	} 
	else 
	{
		echo "<p align='center'>0 results</p>";
	}
	echo "</table>";
echo"
	<div><h3 align=center>All Orders</h3></div>
	<table size='70%' border='1' align='center' style='color: black'>
	<tr>
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


	if ($resultALL->num_rows > 0) 
	{
		while($row = $resultALL->fetch_assoc()) 
		{
			echo "<tr>
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
	echo "</table>";
	
  mysqli_close($con);
 ?>
 </table>
 
	<p align="center">
		<button type="button" align="center"> <a href="placeOrder.php">Return to Store</a></button>
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
	
	table, td, th{
		background-color: #99FFFF;
		border: 4px solid black;
		border-collapse: collapse;
	}
	
	p.box{
		text-align: center;
		font-size: 30px;
		color: black;
		background-color: #99FFFF;
		width: 225px;
		border: 5px solid black;
		padding: 5px;
		margin: 5px auto;
		align: center;
	}
	
	div {
	color: black;
    background-color: #99FFFF;
    width: 200px;
    border: 5px solid black;
    padding: 5px;
    margin: 25px auto;
	align: center;
	}
	
		a:link    {color:black;; background-color:transparent; text-decoration:none}
		a:visited {color:black;; background-color:transparent; text-decoration:none}
		a:hover   {color:black;; background-color:transparent; font-size: 115%; transition: .5s }
		a:active  {color:black;; background-color:transparent; }

}
</style>