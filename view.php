<?php include ("controller.php"); ?>
<?php $filename = basename(__FILE__, '.php'); ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $entry["procedimientoExamen"]; ?></title>
  </head>
  <body class="container">
    <?php include ("header.php"); ?>
    
    <h1 class="display-4"><?php echo $entry["procedimientoExamen"]; ?></h1>
    
    <br>
    <hr>

 <div class="container">
   <div class="row">
      <div class="col">
         <p>Servicio</p>
         <h2><?php echo $entry["servicio"]; ?></h2>
      </div>
      <div class="col">
         <p>Ubicación</p>
         <h2><?php echo $entry["ubicacion"]; ?></h2>
      </div>
   </div>
   <br>
   <div class="row">
      <div class="col">
         <p>Toma de Hora</p>
         <h2><?php echo $entry["tomaHora"]; ?></h2>
      </div>
      <div class="col">
         <p>Observaciones</p>
         <h2><?php echo $entry["observaciones"]; ?></h2>
      </div>
   </div>
</div>
    <br>
    <hr>
    
    <h2>Comentarios</h2>
    <ul>
    <?php if ($comments == false) {
      echo 'sin comentarios';
    } else {
      foreach ($comments as $comment) {
        echo '<li><abbr title="'.$comment["datetime"].'"><b>'.$comment["name"].'</b></abbr>: '.$comment["comment"].' '; if (isset($_SESSION["user_id"]) && ($comment["user_id"] == $_SESSION["user_id"])) {echo '  | <a href="view.php?action=viewEntry&id='.$_GET["id"].'&action2=deleteComment&comment_id='.$comment["id"].'">Eliminar</a>';} echo '</li>';
      }
    }
    ?>
    </ul>
    <?php if (isset($_SESSION["user"])) {echo '
      <h3>Agregar Comentario</h3>
      <form class="" action="view.php" method="get">
        <input type="text" name="addComment" value="">
        <input type="hidden" name="action" value="viewEntry">
        <input type="hidden" name="id" value="'.$_GET["id"].'">
        <input type="hidden" name="user_id" value="'.$_SESSION["user_id"].'">
        <input type="submit" name="" value="Comentar">
      </form>
      ';} ?>
      <?php if (isset($_SESSION['user']) && ($_SESSION['user_type'] == 1)) {echo '<p><a href="edit.php?action=editEntry&id='.$entry["id"].'">Editar</a></p>';} ?>
    <?php include ("footer.php"); ?>
  </body>
</html>
