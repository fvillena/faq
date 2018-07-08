<?php
include ("controller.php");
header('Content-Type: text/html, charset=utf-8');
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title></title>
  </head>
  <body>
    <?php include ("header.php"); ?>
    <table border="1">
      <thead>
        <th>Procemimiento / Examen</th>
        <th>Servicio</th>
        <th>Ubicación</th>
        <th>Toma de Hora</th>
        <th>observaciones</th>
      </thead>
    <?php
    $data = listAll($connection);
    foreach ($data as $key) {
      echo '
      <tr>
        <td>
          '.$key["procedimientoExamen"].'
        </td>
        <td>
          '.$key["servicio"].'
        </td>
        <td>
          '.$key["ubicacion"].'
        </td>
        <td>
          '.$key["tomaHora"].'
        </td>
        <td>
          '.$key["observaciones"].'
        </td>
      </tr>
      ';
    }
    ?>
  </table>
  </body>
</html>
