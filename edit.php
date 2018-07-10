<?php include ("controller.php") ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include ("header.php"); ?>
    <?php if (!isset($_SESSION['user']) || ($_SESSION['user_type'] != 1)) {header('Location: index.php');} ?>
    <?php if (isset ($_GET["modified"]) && $_GET["modified"] == "true") {
      echo "Entrada Modificada Correctamente";
    } ?>
    <form class="" action="edit.php" method="GET">
      <label for="">Procedimiento / Examen: </label> <input type="text" name="procedimientoExamen" value="<?php echo $entry["procedimientoExamen"]; ?>"><br>
      <label for="">Servicio: </label> <input type="text" name="servicio" value="<?php echo $entry["servicio"]; ?>"><br>
      <label for="">Ubicación: </label> <input type="text" name="ubicacion" value="<?php echo $entry["ubicacion"]; ?>"><br>
      <label for="">Toma de Hora: </label> <input type="text" name="tomaHora" value="<?php echo $entry["tomaHora"]; ?>"><br>
      <label for="">observaciones: </label> <input type="text" name="observaciones" value="<?php echo $entry["observaciones"]; ?>"><br>
      <input type="hidden" name="modified" value="true">
      <input type="hidden" name="id" value="<?php echo $entry["id"]; ?>">
      <input type="hidden" name="action" value="editEntry">
      <input type="submit" name="" value="Modificar">
    </form>
  <?php include ("footer.php"); ?>
  </body>
</html>
