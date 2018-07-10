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
function addEntry($procedimientoExamen,$servicio,$ubicacion,$tomaHora,$observaciones,$connection) {
  $query = "INSERT INTO procedimientos (id, procedimientoExamen, servicio, ubicacion, tomaHora, observaciones) VALUES (NULL, '".$procedimientoExamen."', '".$servicio."', '".$ubicacion."', '".$tomaHora."', '".$observaciones."');";
	$result = $connection->query($query);
}
function viewEntry ($id,$connection) {
  $query = "SELECT * FROM procedimientos WHERE id = " . $id;
	$result = $connection->query($query);
	return $result;
}
function editEntry($id,$procedimientoExamen,$servicio,$ubicacion,$tomaHora,$observaciones,$connection) {
  $query = 'UPDATE procedimientos SET procedimientoExamen = "'.$procedimientoExamen.'", servicio = "'.$servicio.'", ubicacion = "'.$ubicacion.'", tomaHora = "'.$tomaHora.'", observaciones = "'.$observaciones.'" WHERE id = '.$id.'';
	$result = $connection->query($query);
}
function addComment($proc_id,$comment,$connection,$user_id) {
  $query = "INSERT INTO comments (id, proc_id, comment, user_id, datetime) VALUES (NULL, '".$proc_id."', '".$comment."','".$user_id."', CURRENT_TIMESTAMP);";
	$result = $connection->query($query);
}
function listComments($id,$connection) {
  $query = "SELECT comments.id,comments.proc_id,comments.comment,comments.datetime,users.name as name FROM comments,users WHERE comments.user_id = users.id AND proc_id=".$id." ORDER BY `comments`.`datetime` DESC";
	$result = $connection->query($query);
	return $result;
}
function addUser ($user,$name,$password,$type,$connection) {
  $query = "INSERT INTO users (id, user, name, password, type) VALUES (NULL, '".$user."', '".$name."', '".$password."', '".$type."');";
	$result = $connection->query($query);
}
 ?>
