<?php
	function getFilmAmount(){
	$qu = mysql_query("select count(1) from FILM");
	$tmp  = mysql_fetch_array($qu);
	return $tmp[0];
	}
	
?>