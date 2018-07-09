<?php

header('Content-Type: text/html; charset=utf-8');
include ("model.php");
include ("credentials.php");

$connection = connectMySQL($server,$user,$password,$db);

function addComment($proc_id,$comment,$connection) {
  $query = "INSERT INTO comments (id, proc_id, comment, datetime) VALUES (NULL, '".$proc_id."', '".$comment."', CURRENT_TIMESTAMP);";
	$result = $connection->query($query);
  echo $query;
}

addComment($_GET["proc_id"],$_GET["comment"],$connection)

 ?>
