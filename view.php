<?php include ("controller.php"); ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include ("header.php"); ?>
    <h1><?php echo $entry["procedimientoExamen"]; ?></h1>
    <h2>Servicio</h2>
    <?php echo $entry["servicio"]; ?>
    <h2>Ubicación</h2>
    <?php echo $entry["ubicacion"]; ?>
    <h2>Toma de Hora</h2>
    <?php echo $entry["tomaHora"]; ?>
    <h2>Observaciones</h2>
    <?php echo $entry["observaciones"]; ?>
    <p><a href="edit.php?action=editEntry&id2=<?php echo $entry["id"]; ?>">Editar</a></p>
    <?php include ("footer.php"); ?>
  </body>
</html>
