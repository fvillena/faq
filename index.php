<?php $filename = basename(__FILE__, '.php'); ?>
<?php
include ("controller.php");
header('Content-Type: text/html, charset=utf-8');
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Inicio</title>
  </head>
  <body class="container">
    <?php include ("header.php"); ?>
    <?php if (!isset($_SESSION['user'])) {header('Location: login.php');} ?>
    <?php $entry =getEntry($connection);?>
    <h1>Bienvenido <?php if (isset($_SESSION["user"])) {echo $_SESSION["user_name"];} ?></h1>
    <hr>
    <br>
    <font color="AAAAAA"><h2>¿Sabías Que?</h2></font>

    <blockquote class="blockquote">
  <p class="mb-0"><?php echo $entry["procedimientoExamen"]; ?> se realiza en <?php echo $entry["ubicacion"]; ?> y la toma de hora se realiza en <?php echo $entry["tomaHora"]; ?></p>
</blockquote>

<br>
    <hr>
    <!-- <table class="display table table-responsive">
      <thead>
        <th>Procedimiento / Examen</th>
        <th>Servicio</th>
        <th>Ubicación</th>
        <th>Toma de Hora</th>
        <th>observaciones</th>
      </thead>
      <tr>
        <td><?php echo $entry["procedimientoExamen"]; ?></td>
        <td><?php echo $entry["servicio"]; ?></td>
        <td><?php echo $entry["ubicacion"]; ?></td>
        <td><?php echo $entry["tomaHora"]; ?></td>
        <td><?php echo $entry["observaciones"]; ?></td>
      </tr>
    </table> -->
    <h2>Noticias del Hospital</h2>
    <?php

    $x = getFeed("https://twitrss.me/twitter_user_to_rss/?user=redclinica");

    $i = 1;
    foreach($x->channel->item as $entry) {
        echo "<p>" . $entry->description . "</p>";
        if($i == 2) break;
        $i++;
    }

     ?>

  <?php include ("footer.php"); ?>
  </body>
</html>
