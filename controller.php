<?php
header('Content-Type: text/html; charset=utf-8');
include ("model.php");
include ("credentials.php");

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
  if ($searchResult->num_rows > 0) {
    while ($row = $searchResult->fetch_assoc())
    {
        $data[] = $row;

    }
    return $data;
  }
  else {
    return false;
  }
}

if (isset($_GET["action"])) {
  if ($_GET["action"] == "addEntry") {
    addEntry($_GET["procedimientoExamen"],$_GET["servicio"],$_GET["ubicacion"],$_GET["tomaHora"],$_GET["observaciones"],$connection);
  }
}

 ?>
