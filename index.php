<!DOCTYPE html>
<html>
	<head>
		<title>RainyDay | Finance for You</title>
		<link rel="stylesheet" type="text/css" href="styles/styles.css">

	</head>
	<body>
		<div id="top">
			
			<ul id="navigation">
				<li><a href="#index1" class="on">Info</a></li>
				<li><a href="#index2">Blog</a></li>
			</ul>
			<div id="app">
				<div id="logo">
					<h1 id="title">RainyDay</h1>
					<p>A NEW KIND OF FINANCE APP</p>
					
					
					<div class="projImgContainer">
				<a href="">
				<button id="LoginButton"   >Login</button>
				</a>
			
			</div>
			
				</div>
			</div>
		</div>
		<div id="pageWrap">
			<div class="section">
			
				<h1 id="headers" ><a name="index1">Info</a></h1>
				<div id="Team">	
					<table width="60%" align="center">
						<tr>
							<td width="20%"><img id="profiles" src=".png" alt="Dashboard" /></td>
							<td width="20%"><img id="profiles" src=".png" alt="Investments" /></td>
							<td width="20%"><img id="profiles" src=".png" alt="Bonds" /></td>
							<td width="20%"><img id="profiles" src=".png" alt="Pension" /></td>
							<td width="20%"><img id="profiles" src=".png" alt="Predictive Model" /></td>
						</tr>
					</table>
				</div>	
			</div>
			<div class="section">
				<h1 id="headers" ><a name="index2">Blog</a></h1>
				<?php
					include("blog_reader.php");
				?> 
				<li><a href="blog_set.php" class="on">(new post)</a></li>
				
				<p>Team members are: Alistair, Levi, Bhavin, Hemanth, Despoina, Stanislav.
				</p>
				
			</div>
			

			<h1 id="footer">Contact us at contact.rainyday@gmail.com</h1>			
			
		</div>
	</body>
</html>