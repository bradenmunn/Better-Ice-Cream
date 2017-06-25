<html>
<font>
<title>
	Order Search
</title>
<body background="blue.jpg">

<p class='box'><a href="IceCreamHome.php">Update Your order!</a></p>
<form method="post" action="IceCreamChangeField.php">
<p align='center'>
	Input Customer ID:
	<br/>
	<input type="value" name="search"/><br/>
	<input type="submit" value="submit"/>
</p>
<?php
	
	$con = mysqli_connect("localhost","root","cubby99","IceCreamShop");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
  
	$sql="SELECT  * FROM customers";
  
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
	    <th>Customer ID</th>
		<th>Last Name</th>
	</tr>
		";


	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc()) 
		{
			echo "<tr>
					<td>$row[id]</td> 
					<td>$row[lName]</td> 
				</tr>";
		}
	} 
	else 
	{
		echo "<p align='center'>0 results</p>";
	}
	
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
	
	a:link    {color:black;; background-color:transparent; text-decoration:none}
	a:visited {color:black;; background-color:transparent; text-decoration:none}
	a:hover   {color:black;; background-color:transparent; font-size: 115%; transition: .5s }
	a:active  {color:black;; background-color:transparent; }
</style>