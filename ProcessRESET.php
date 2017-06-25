<html>
<font>
<title>
	Better Ice Cream
</title>
<body background="blue.jpg">

<p class='box'><a href="IceCreamHome.php" class="home">Better Ice Cream</a></p>
</html>
<?php
$con = mysqli_connect("localhost","root","cubby99","IceCreamShop");
	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
		
	$sql1="DELETE FROM customers";
	$sql2="DELETE FROM icecream";
	$sql3="ALTER TABLE customers AUTO_INCREMENT=1";
	$sql4="ALTER TABLE icecream AUTO_INCREMENT=1";
  
	$result1 = mysqli_query($con, $sql1);
	$result2 = mysqli_query($con, $sql2);
	$result3 = mysqli_query($con, $sql3);
	$result4 = mysqli_query($con, $sql4);
	if ( ($result1 && $result2 && $result3 && $result4) === false)  {
		printf("error: %s\n", mysqli_error($con));
	}
	else {
		echo "<h3 align='center'>All Records Clear</h3>";
	}
?>
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
	
	a.home:link    {color:black;; background-color:transparent; text-decoration:none}
	a.home:visited {color:black;; background-color:transparent; text-decoration:none}
	a.home:hover   {color:black;; background-color:transparent; font-size: 115%; transition: .5s }
	a.home:active  {color:black;; background-color:transparent; }
	

	
</style>