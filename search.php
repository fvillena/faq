<?php
include ("controller.php");
header('Content-Type: text/html, charset=utf-8');
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Búsqueda</title>
  </head>
  <body>
    <?php include ("header.php"); ?>
    <form class="" action="search.php" method="GET">
      <input type="text" name="q" value='<?php if (isset($_GET["q"])) {echo $_GET["q"];} ?>'>
      <input type="submit" name="" value="Buscar">
    </form>
    <table border="1">
      <?php if (isset ($_GET["q"])) {
        $data = searchResults($connection,$_GET["q"]);
        if ($data == false) {
          echo "no hay resultados";
        }
        else if (count($data) == 1) {
          header('Location: view.php?action=viewEntry&id='. $data[0]["id"]);
        } else {
          echo '
          <thead>
            <th>Procemimiento / Examen</th>
            <th>Servicio</th>
            <th>Ubicación</th>
            <th>Toma de Hora</th>
            <th>observaciones</th>
            <th>Estado</th>
          </thead>';
          foreach ($data as $key) {
            echo '
            <tr>
              <td>
                <a href="view.php?action=viewEntry&id='.$key["id"].'">'.$key["procedimientoExamen"].'</a>
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
              <td>
                '.$key["state"].'
              </td>
            </tr>
            ';
          }
          echo '
          </table>';
        }

      }
      else {
        echo 'ingrese búsqueda';
      }
      ?>

  <?php include ("footer.php"); ?>
  </body>
</html>
