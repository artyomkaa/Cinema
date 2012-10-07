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
<table border = 1 width=1000>
	<tr>	
		<td colspan =3 width = 1000 height = 100>Site's head  [ gradient -> Julie]</td>
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
	<td colspan = 3>
	<?php
	//+databese
	include('include/bd.php');
	//+class film + func
	include('class/film.php');
	include('function/fun.php');
	$st = strtolower($_POST['string']);
	$f_a = getFilmAmount();
	$films[] = new film;
	for($i = 0; $i < $f_a; $i++){
		$films[$i] = new film;
		$films[$i] -> getFilm($i + 1);
		$mystring = strtolower($films[$i]->titre);
		$pos = strstr($mystring, $st);
		if($pos == false){
			//echo $pos."Don/'t find<br>";
			;
			}
		else{
			echo "<h3>".$films[$i]->titre."</h3><br>";
			echo "RESUME<br>";
			echo $films[$i]->resume."<br>";
			echo "<br>DUREE<br>";
			echo $films[$i]->duree."<br>";
		
			}
		}
	?>
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