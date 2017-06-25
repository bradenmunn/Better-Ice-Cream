<html>
<font>

<!------------------------------------------------->

<title>
	Better Ice Cream
</title>
<body background="blue.jpg">

<p class="box"><a href="IceCreamHome.php">Input Your Information:</a></p>
<form method="post" action="CustomerProcess.php">
<table size="70%" align="center">

			
			 <tr>
				<td>First Name</td>
				<td><input type="text" name="fName" size="30"/></td>
			</tr>
			 <tr>
				<td>Last Name</td>
				<td><input type="text" name="lName" size="30"/></td>
			</tr>
			 <tr>
				<td>Email</td>
				<td><input type="text" name="email" size="30"/></td>
			</tr>
	 
</table>

	<p align="center">
		<input type="submit" value="submit"/>
	</p>

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

		a:link    {color:black;; background-color:transparent; text-decoration:none}
		a:visited {color:black;; background-color:transparent; text-decoration:none}
		a:hover   {color:black;; background-color:transparent; font-size: 115%; transition: .5s }
		a:active  {color:black;; background-color:transparent; }

</style>