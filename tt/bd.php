<?php
	$i = 123;
	$db = mysql_connect("localhost","admin","admin");
	if($i)
		print("adwad");
	if($db)
		print("adwad");
	mysql_select_db('sw',$db);
	?>