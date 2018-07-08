<?php include ("controller.php") ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include ("header.php"); ?>
    <?php if (isset ($_GET["added"]) && $_GET["added"] == "true") {
      echo "Entrada Agegada Correctamente";
    } ?>
    <form class="" action="add.php" method="GET">
      <label for="">Procedimiento / Examen: </label> <input type="text" name="procedimientoExamen" value=""><br>
      <label for="">Servicio: </label> <input type="text" name="servicio" value=""><br>
      <label for="">Ubicación: </label> <input type="text" name="ubicacion" value=""><br>
      <label for="">Toma de Hora: </label> <input type="text" name="tomaHora" value=""><br>
      <label for="">observaciones: </label> <input type="text" name="observaciones" value=""><br>
      <input type="hidden" name="added" value="true">
      <input type="hidden" name="action" value="addEntry">
      <input type="submit" name="" value="Agregar">
    </form>
  <?php include ("footer.php"); ?>
  </body>
</html>
