<?php
	$mysqli = new mysqli('115.28.27.56', 'tkp', 'tkp', 'phpcms');
	if($mysqli->connect_error)
	{
		die('Connect Error (' . $mysqli->connect_errno . ') '
				. $mysqli->connect_error);
	}
	
?>