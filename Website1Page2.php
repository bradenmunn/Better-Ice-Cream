<html>
<head>
	<title>Braden's Webernet</title>
</head>

<body bgcolor=(66FFFF)>

	<h1 align="center">Braden Munn </h1>
	
	<h2 id="time" align="center">
		<script>
			document.getElementById("time").innerHTML = Date();
		</script>
	</h2>
	
	<p align="center">
		<button type="button"><a href="Website1.php">Go To Page 1</a></button>
	</p>
	
	<h2 align="center"> Colleges I'm Interested In... </h2>

	<table border="1"style="width:90%" align="center" id="rcorners1">
		
		<tr style="white">
			<th>College</th>
			<th>Logo</th> 
			<th>City/State</th>
		</tr>
		<tr >
			<td>University of Texas</td>
			<td><center><img src="UT.jpg" alt="Picture Not Found" style="width:200;height:150;" align="center"></center></td> 
			<td>Austin, TX</td>
		</tr>
		<tr>
			<td>Baylor</td>
			<td><center><img src="Baylor.jpg" alt="Picture Not Found" style="width:200;height:150;" align="center" id="rcorners2"></center></td> 
			<td>Waco, TX</td>
		</tr>
		<tr>
			<td>Vanderbilt</td>
			<td><center><img src="Vandy.gif" alt="Picture Not Found" style="width:200;height:150;" align="center" id="rcorners2"></center></td> 
			<td>Nashville, Tennessee</td>
		</tr>
		<tr>
			<td>UCLA</td>
			<td><center><img src="UCLA.png" alt="Picture Not Found" style="width:200px;height:150;" align="center" id="rcorners2"></center></td> 
			<td>Los Angeles, California</td>
		</tr>
		<tr>
			<td>University of California, Berkeley</td>
			<td><center><img src="Berk.jpg" alt="Picture Not Found" style="width:200;height:150;" align="center" id="rcorners2"></center></td> 
			<td>Berkeley, California</td>
		</tr>
		
		<style type="text/css">
		
		#rcorners1 
		{
			border-radius: 30px;
			background: #4D4D4D;
			padding: 15px;
			width: 200px;
			height: 150px;
		}
	
		th{
		background-color: white;
		}
		
		tr:nth-child(odd){
			background-color: white;
		}
		
		tr:nth-child(even){
			background-color: #D9D9D9;
		}
		
		</style>
	</table>
	




</body>
</html>