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


  if ($_GET["action"] == "editEntry") {
    if (isset ($_GET["procedimientoExamen"])) {
      editEntry($_GET["id"],$_GET["procedimientoExamen"],$_GET["servicio"],$_GET["ubicacion"],$_GET["tomaHora"],$_GET["observaciones"],$connection);
    }
    if (isset ($_GET["id"])) {
      $result = viewEntry($_GET["id"],$connection);
      $entry = $result->fetch_assoc();
    }
  }
  if (isset($_GET["addComment"])) {
    addComment($_GET["id"],$_GET["addComment"],$connection);
  }
  if ($_GET["action"] == "viewEntry") {
    $result = viewEntry($_GET["id"],$connection);
    $entry = $result->fetch_assoc();
    $commentsResult = listComments($_GET["id"],$connection);
    if ($commentsResult->num_rows > 0) {
      while ($row = $commentsResult->fetch_assoc())
      {
          $comments[] = $row;

      }
    }
    else {
      $comments = false;
    }
  }
}

 ?>
