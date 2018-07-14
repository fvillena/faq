<?php include ("controller.php"); ?>
<?php $filename = basename(__FILE__, '.php'); ?>
<?php commentsToArray() ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body class="container">
    <?php include ("header.php"); ?>
    <?php if (!isset($_SESSION['user']) || ($_SESSION['user_type'] != 1)) {header('Location: index.php');} ?>
    <h1>Panel de Control</h1>
    <h2>Comentarios</h2>
    <?php if ($comments == false) {
      echo 'sin comentarios';
    } else {
      foreach ($comments as $comment) {
        echo '<li><abbr title="'.$comment["datetime"].'"><b>'.$comment["name"].'</b></abbr>: '.$comment["comment"].' en <a href="view.php?action=viewEntry&id='.$comment["proc_id"].'">'.$comment["procedimientoExamen"].'</a> | <a href="admin.php?action=deleteComment&id='.$comment["id"].'">Eliminar</a></li>';
      }
    }
    ?>
    <?php include ("footer.php"); ?>
  </body>
</html>
