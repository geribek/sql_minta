<?php
if(!function_exists('sqlerror')){
	function sqlerror($process){
		global $mysqli;
		die("<div class=\"sqlerror\">Error: <b>".$process." - ".$mysqli->error."</b></div>");
	}
}

//VÁLTOZÓ MEGADÁS
$server="localhost";
$db="kvikgt";
$username="kvikgt";
$password="password";
date_default_timezone_set('Europe/Budapest');
$mysqli=new mysqli($server,$username,$password,$db);
if($mysqli->connect_errno){
	die('error:'.$mysqli->error);
}
$mysqli->query("SET NAMES utf8") or sqlerror('Set names');
?>
