<?php
include("include/bd.php");
?>

<html>
<head>
<title>WEB</title>
<link rel="stylesheet" type="text/css" href="style_css/css_style.css" />

</head>
<body>


<table width= 1000 border = 0>
	<tr><td colspan =3 width = 1000 height = 100>
		Site's head  [ gradient -> Julie]
	</td></tr>
	<tr><td colspan =3 width = 1000 height = 20>
		<?php
		//INCLUDE MENU
		include('include/menu_head.php');
		?>
	</td></tr>
	<tr><td colspan =3 width = 1000 height = 80>
		<?php
		//INCLUDE HEAD
		include('include/head.php');
		?>
	</td></tr>
	
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
	<tr><td colspan =3>
		<?php
		//INCLUDE BOTTOM
		include('include/bottom.php');
		?>
	</td></tr>
</table>
</body>
</html>