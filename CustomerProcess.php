<html>
<font>
<head>
<title >Better Ice Cream</title>
</head>
<body background="blue.jpg">
<p class="box"><a href="IceCreamHome.php">Information Added!</a></p>

 <?php
 
 $fName=$_POST['fName'];
 $lName=$_POST['lName'];
 $email=$_POST['email'];
 
 
  $con = mysqli_connect("localhost","root","cubby99","IceCreamShop");
 // Check connection
  if (mysqli_connect_errno())
  {
     echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  

$sql="INSERT INTO customers (fName,lName,email)
	   VALUES ('$fName','$lName','$email')";



	$result1 = mysqli_query($con, $sql);
	if ($result1 === false)  {
	  printf("error: %s\n", mysqli_error($con));
	}
	else {
		echo "<h1 align='center'>Customer Successfully Added!</h1>";
	}
	
	
	$sqlSELECT1 = "SELECT * FROM customers";
	$resultSELECT1 = $con->query($sqlSELECT1);

echo"
	<table size='70%' border='1' align='center' style='color: black'>
	<tr>
		<th>Customer ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
	</tr>
		";


	if ($resultSELECT1->num_rows > 0) 
	{
		while($row = $resultSELECT1->fetch_assoc()) 
		{
			echo "<tr>
					<td>$row[id]</td>
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
	
	
  mysqli_close($con);
 ?>
 </table>
 
	<p align="center">
		<button type="button" align="center"> <a href="NewCustomer.php">Add New Customer</a></button>
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
		color: black;
		background-color: #99FFFF;
		border: 4px solid black;
		border-collapse: collapse;
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
	
	input, select, value {
		box-sizing: border-box;
		border: 2px solid black;
		border-radius: 8px;
		padding: 8px;
		background-color: #99FFFF;
		color: black;
		transition: 0.5s;
		outline: none;
		}

	input[type=text]:focus {
		border: 2px solid #99FFFF;
	}

		a:link    {color: black; background-color:transparent; text-decoration:none}
		a:visited {color: black; background-color:transparent; text-decoration:none}
		a:hover   {color: black; background-color:transparent; font-size: 115%; transition: .5s }
		a:active  {color: black; background-color:transparent}


</style>