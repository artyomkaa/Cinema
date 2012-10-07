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
	
	<tr>	
		<?php 
		//+databese
		include('include/bd.php');
		//+class film + func
		include('class/film.php');
		include('function/fun.php');
		//
		$f_a = getFilmAmount();
		
		?>
		<td colspan = 3>
			<?php
			$films[] = new film;
			//take information about films
			echo "<table border = 0>";
			for($i = 0; $i < $f_a; $i++){
				$films[$i] = new film;
				$films[$i] -> getFilm($i + 1);
				echo "<tr>";
				echo "<td colspan = 2>";
				echo "<h3>".$films[$i]->titre.'<a href=films.php?id='.$films[$i]->id.'> read more</a></h3><br>';
				echo "</td></tr>";
				echo "<tr>";
				echo "<td width = 140>";
				echo '<img src = '.$films[$i]->img.' width = 130 heigth = 100>';
				echo "</td>";
				echo "<td>";
				echo "Summary<br>";				
				echo $films[$i]->resume."<br>";
				echo "<br>DUREE<br>";
				echo $films[$i]->duree."<br>";
				echo "</td>";
				echo "</tr>";
				echo "<tr height = 10><td></td></tr>";
				//echo $films[$i]->img;

			}
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