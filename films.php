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

					
<h2>Hello Tema, Slava, Julia</h2>
<table border = 0 width = 1000>
	<tr>	
		<td colspan =3 width = 1000 height = 320>Site's head  [ gradient -> Julie]</td>
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
	
	<tr><td>	
		<?php 
		//+databese
		include('include/bd.php');
		//+class film + func
		include('class/film.php');
		include('function/fun.php');
		//
		$films = new film;
		$num = $_GET['id'];
		//take information about films
		$films -> getFilm($num);

		echo "<table border = 0>";
		echo "<tr>";
		echo "<td colspan = 2>";
		echo "<h1>".$films->titre.'<a href=films.php?id='.$films->id.'></h1><br>';
		echo "</td></tr>";
		echo "<tr>";
		echo "<td width = 410>";
		echo '<img src = '.$films->img.' width = 400>';
		echo "</td>";
		echo "<td>";
		echo "Summary<br>";				
		echo $films->resume."<br>";
		echo "<br>DUREE<br>";
		echo $films->duree."<br>";
		echo "<br>PUBLIC CIBLE<br>";
		echo $films->public_cible."<br>";
		echo "<br>SAMPLE<br>";
		//WORK HERE WITH SITE'S LINK
		//echo '<video width=320 height=240 controls=controls><source src='.$films->sample.'</video>';
		echo $films->sample."<br>";
		echo "</td>";
		echo "</tr>";

				
				//echo $films[$i]->img;
			echo "</table>";
		?>
		
		
		
		
	</td>
	</tr>
	<tr>	
		<td colspan =3>bottom [ gradient -> Julie]</td>

	</tr>
</table>
</body>
</html>