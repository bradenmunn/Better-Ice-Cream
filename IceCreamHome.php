<html>
<font>
<title>
	Better Ice Cream
</title>
<body background="blue.jpg">
	<p class="name">Better Ice Cream!</p>
	<br/>
	<br/>
	<p class="welcome">Select an option by clicking<br/>
					   on one of the scoops!</p>




	<div class="StrawberryPosLeft">
		<a href="placeOrder.php"><img src="StrawberryScoop.png" alt="Place an Order!" width="200" height="175"></a>
		<div class="center"><a href="placeOrder.php"> Place an <br/> Order!</a></div>
	</div>
	
	<div class="VanillaPosLeft">
		<a href="NewCustomer.php"><img src="VanillaScoop.png" alt="New Customer!" width="200" height="175"></a>
		<div class="center"><a href="NewCustomer.php"> New <br/> Customers!</a></div>
	</div>
	
	<div class="ConePosLeft">
		<img src="HomeCone.png" alt="Search for an Order!" width="300" height="300">
	</div>
	
	
	<div class="VanillaPosRight">
		<a href="CustomerID.php"><img src="VanillaScoop.png" alt="Customer Page!" width="200" height="175"></a>
		<div class="center"><a href="CustomerID.php"> Customer <br/> Page!</a></div>
		
	</div>
	
	<div class="StrawberryPosRight">
		<a href="UnderConstruction.php"><img src="StrawberryScoop.png" alt="Under Contruction" width="200" height="175"></a>
		<div class="center"><a href="UnderConstruction.php"> Under<br/>Construction!</a></div>
		
	</div>
	
	<div class="ConePosRight">
		<img src="HomeCone.png" alt="Search for an Order!" width="300" height="300">
	</div>
	
	
</body>
</html>
<style>
div.StrawberryPosLeft {
	position: absolute;
	top: 80px;
	left: 200px;
	width: 200px;
	height: 100px;
	z-index: 2;
}

div.VanillaPosLeft {
	position: absolute;
	top: 210px;
	left: 200px;
	width: 200px;
	height: 100px;
	z-index: 1;
}

div.ConePosLeft {
	position: absolute;
	top: 300px;
	left: 155px;
	width: 200px;
	height: 100px;
	z-index: 0;
}

div.VanillaPosRight {
	position: absolute;
	top: 80px;
	right: 200px;
	width: 200px;
	height: 100px;
	z-index: 2;
}

div.StrawberryPosRight {
	position: absolute;
	top: 210px;
	right: 200px;
	width: 200px;
	height: 100px;
	z-index: 1;
}

div.ConePosRight {
	position: absolute;
	top: 300px;
	right: 245px;
	width: 200px;
	height: 100px;
	z-index: 0;
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
	

@font-face {
	font-family: myFont;
	src: url(Helamica7.27.40PM.ttf);
}

body {
   font-family: myFont;
}

p.name{
	text-align: center;
	font-size: 45px;
	color: black;
	background-color: #99FFFF;
	width: 225px;
	border: 5px solid black;
	padding: 5px;
	margin: 25px auto;
	align: center;
}

p.welcome{
	text-align: center;
	font-size: 30px;
	color: black;
	background-color: #99FFFF;
	width: 225px;
	border: 5px solid black;
	padding: 5px;
	margin: 25px auto;
	align: center;
}
	
</style>