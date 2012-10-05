<?php
include("include/bd.php");
?>

<html>
<head>
<title>WEB</title>
<link rel="stylesheet" type="text/css" href="style_css/css_style.css" />

</head>
<body>

<h1>WEB</h1>
<a href="index.php">Main page</a><br>


<h1>go go go</h1>

					
<h2>Hello Tema, Slava, Julia, Toxa</h2>
<table border = 1>
	<tr>	
		<td colspan =3 width = 1000 height = 300>Site's head  [ gradient -> Julie]</td>
	</tr>
	<tr>	
		<td colspan =3 width = 1000 height = 20>
		[ gradient -> Julie]
		<a href = 'index.php'>Main page</a>
		<a href = 'index.php'>Timetable</a>
		<a href = 'hall.php'>Halls</a>
		<a href = 'bron.php'>Reservation</a>
		
		</td>
	</tr>
	<tr>	
		<td colspan =3 width = 1000 height = 80>Search head [ gradient -> Julie] 
		<form action="search.php" method="post">
		<input name="text" type="text" size="100" maxlength="98">
		<input type="submit" name="submit" value="Search">
		<a href = ''>
		</form>
		</td>
	</tr>
	
	<tr>	
		<td width = 200>Film name + image [ white ]</td>
		<td>Information [ white ]</td>
		<td widht = 200>table of time [white]</td>

	</tr>
	<tr>	
		<td colspan =3>bottom [ gradient -> Julie]</td>

	</tr>
</table>
</body>
</html>