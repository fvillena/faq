<?php
header('Content-Type: text/html; charset=utf-8');
function connectMySQL($server,$user,$password,$db) {
	$connection = new mysqli($server, $user, $password, $db);
  $connection->set_charset("utf8");
	return $connection;
}
function selectEntries($connection) {
  $query = "SELECT * FROM procedimientos";
	$result = $connection->query($query);
	return $result;
}
function searchEntries($connection,$searchQuery) {
  $query = "SELECT * FROM procedimientos WHERE procedimientoExamen LIKE '%".$searchQuery."%'";
	$result = $connection->query($query);
	return $result;
}
 ?>
