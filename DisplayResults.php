<html>
<style>
	@font-face {
		font-family: myFont;
		src: url(Helamica7.27.40PM.ttf);
	}

	body {
	   font-family: myFont;
	}
</style>
<font color="99FFFF">




<title>
	Better Ice Cream
</title>
<body background="cone.jpg">

<h1 align='center'>Your Results:</h1>

</html>

<?php

	$search=$_POST['search'];

  
	$con = mysqli_connect("localhost","root","cubby99","IceCreamShop");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
  
	$sql="SELECT * FROM theOrder, orderInfo WHERE lName='".$search."'";
  
	$result = mysqli_query($con, $sql);
	if ( ($result === false))  {
		printf("error: %s\n", mysqli_error($con));
	}
	else {
		echo "<h1 align='center'>Here are the orders under last name $search</h1>";
	}
	
	echo"
	<table size='70%' border='1' align='center' style='color:#99FFFF'>
	<tr>
		<th>ID</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Hour</th>
		<th/>
		<th>Minute</th>
	</tr>
		";


	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc()) 
		{
			echo "<tr>
					<td>$row[id]</td> 
					<td>$row[fName]</td> 
					<td>$row[lName]</td> 
					<td>$row[email]</td>
					<td>$row[hour]</td>
					<td>:</td>
					<td>$row[minute]</td>
				</tr>";
		}
	} 
	else 
	{
		echo "0 results";
	}
?>
<html>
	<p align="center">
		<button type="button" align="center"> <a href="IceCreamSearch.php">Return to Search</a></button>
	</p>
	
	<style>
		a:link    {color:black; background-color:transparent; text-decoration:none}
		a:visited {color:black; background-color:transparent; text-decoration:none}
		a:hover   {color:red; background-color:transparent; text-decoration:underline}
		a:active  {color:red; background-color:transparent; text-decoration:underline}
	</style>

</body>
</font>
</html>