<?php
header('Content-Type: text/html; charset=utf-8');
include ("model.php");
include ("credentials.php")

$connection = connectMySQL($server,$user,$password,$db);

function listAll($connection) {
  $result = selectEntries($connection);
  $data = array();
  while ($row = $result->fetch_assoc())
  {
      $data[] = $row;

  }
  return $data;
}

function searchResults($connection,$searchQuery) {
  $searchResult = searchEntries($connection,$searchQuery);
  while ($row = $searchResult->fetch_assoc())
  {
      $data[] = $row;

  }
  return $data;
}


 ?>
