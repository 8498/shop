<?php
$mysqli = new mysqli("localhost:3307", "root", "123", "shop");
if ($mysqli->connect_errno) {
	$output = "<script>console.log('Failed to connect to MySQL: error number ".$mysqli->connect_errno."')</script>";
}
else
{
	$output = "<script>console.log('".$mysqli->host_info.". You are connected !!')</script>";
}


?>