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
	
	<h3 align="center">
		<?php
			echo date("l, F j, Y");
			echo "<br><br>";
			$t = date("l");
			if ($t == "Friday") {
				echo "WOOHOO, IT'S FRIDAY!";
			}

		?>
	</h3>
	
	<p align="center">
		<button type="button" align="center"> <a href="Website1Page2.php">Go To Page 2</a></button>
	</p>
	
	<p><br></p>
	
	<!-- Table -->
	
	<table border="0"style="width:90%" align="center" id="BlueBox">
		
		<tr style="color:0499F3">
			<th>Period Number</th>
			<th>Class</th> 
			<th>Teacher</th>
		</tr>
		<tr >
			<td>1</td>
			<td>U.S. History</td> 
			<td>Jones</td>
		</tr>
		<tr>
			<td>2</td>
			<td>Calculus BC</td> 
			<td>Wright</td>
		</tr>
		<tr>
			<td>3</td>
			<td>English III</td> 
			<td>Davenport</td>
		</tr>
		<tr>
			<td>4</td>
			<td>Lunch</td> 
			<td>N/A</td>
		</tr>
		<tr>
			<td>5</td>
			<td>Oracle</td> 
			<td>Ekstrom</td>
		</tr>
		<tr>
			<td>6</td>
			<td>Chemistry II</td> 
			<td>Chuang</td>
		</tr>
		<tr>
			<td>7</td>
			<td>Spanish IV</td> 
			<td>Moises</td>
		</tr>
		<tr>
			<td>8</td>
			<td>Study Hall</td> 
			<td>Sanders</td>
		</tr>
		
		<style type="text/css">
		
		#rcorners1 
		{
			border-radius: 30px;
			background: #4d94ff;
			padding: 15px;
			width: 200px;
			height: 150px;
		}
	
		th{
		background-color: #F7FC8C;
		}
		
		tr:nth-child(odd){
			background-color: #66FFFF;
		}
		
		tr:nth-child(even){
			background-color: #66FF66;
		}
		
		</style>
	</table>
		
		
		
		
		<!-- WEBSITES -->
		
		<br>
		
		
			
			<h3 style="font-size:18pt;" id="ListBox"><u>A list of my favorite websites</u>
			<ul style="list-style-type:disc">
				<li><a style="font-size: 15pt;" href="https://www.netflix.com/browse">Netflix</a></li>
				<li><a style="font-size: 15pt;" href="https://moodle.hpisd.org">Moodle</a></li>
				<li><a style="font-size: 15pt;" href="http://www.webassign.net/v4cgi/student.pl?UserPass=8b0ed6211c2cf1a04eea52be4929d2d0">WebAssign</a></li>
			</ul>
			</h3>
		
		
		<style>
			a:link    {color:black; background-color:transparent; text-decoration:none}
			a:visited {color:black; background-color:transparent; text-decoration:none}
			a:hover   {color:red; background-color:transparent; text-decoration:underline}
			a:active  {color:red; background-color:transparent; text-decoration:underline}
			
		</style>
		<!-- ALERT -->

		<script>
			alert("Welcome to the webernet");
		</script>
	
	
		<!-- PICTURE -->
		<p><br></p>
		<h3 align="center">Me!</h3>
		<center><img src="https://pbs.twimg.com/profile_images/768617837657264129/AlGAJLI-.jpg" alt="Picture Not Found" style="width:225px;height:250px;" align="center" id="BlueBox"></center>
		<style>
			#BlueBox {
				border-radius: 30px;
				background: #4d94ff;
				padding: 15px;
				width: 200px;
				height: 150px;
			}
			#ListBox {
				border-radius: 30px;
				background: #8cff1a;
				padding: 20px;
				width: 200px;
				height: 150px;
				
				border-style: solid;
				border-width: 12px;
				border-color: #4d94ff;
			
			}
		</style>
		
		<?php
			echo "<br><br><table border =\"1\" align='center' style=width:50%>";
				$a=1;
				$b=1;
				for($rows = 1; $rows<=25; $rows++)
				{
					echo "<tr align='center'>"; 
						for($cols = 1; $cols <=4; $cols++)
						{
							echo "<td>$a</td>";
							$a+=25;
						}
						$b++;
						$a=$b;
				echo "</tr>"; 
				}
			echo "</table>";
		?>
		
		<h3 align="center">String Manipulation!</h3>
		
		<?php
			$name = 'Braden Walker Munn';
			echo ($name)."<br>";
			echo "Length of String: ".strlen($name)."<br>";
			echo "Word count: ".str_word_count($name)."<br>";
			echo "Reversed: ".strrev($name)."<br>";
			function initials($name) 
			{
				$ret = '';
				foreach (explode(' ', $name) as $word)
					$ret .= strtoupper($word[0]).'.';
				return $ret;
			}
			echo 'My initials: '. initials($name).'<br>';
			echo "X's on spaces: ".str_replace(' ','x',$name).'<br>';
			echo "Random shuffle: ".str_shuffle($name)."<br>";
			$str_arr = explode(' ',$name); 
			$i=0; 
			echo "Reverse Order: ";
			for($i=(count($str_arr)-1);$i>=0;$i--){ 
				echo $str_arr[$i].' '; 
			}
			echo '<br>';
			echo "All capital: ".strtoupper($name)."<br>";
			echo "All lowercase: ".strtolower($name)."<br>";
			
			$reversed = "";
			$tmp = "";
			for($i = 0; $i < strlen($name); $i++) {
			if($name[$i] == " ") {
			$reversed .= $tmp . " ";
			$tmp = "";
			continue;
			}
			$tmp = $name[$i] . $tmp;    
			}
			$reversed .= $tmp;

			
			echo 'Backwards but in correct order: '.$reversed;
			
			
		?>
		
		
		

</body>
<html>