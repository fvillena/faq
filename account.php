<?php $filename = basename(__FILE__, '.php'); ?>
<?php include ("controller.php"); ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body class="container">
    <?php include ("header.php"); ?>
    <h1>Mi Cuenta</h1>
    <p>Correo Electrónico: <?php echo $_SESSION["user"] ?></p>
    <p>Nombre: <?php echo $_SESSION["user_name"] ?></p>
    <?php if (isset($_GET["passwordChanged"])) { echo 'contraseña cambiada correctamente';} ?>
    <form class="" action="account.php" method="get">
      <label for="">Nueva Contraseña: </label><input type="password" name="newPassword" value="">
      <input type="hidden" name="action" value="changePassword">
      <input type="hidden" name="id" value="<?php echo $_SESSION["user_id"]; ?>">
      <input type="hidden" name="passwordChanged" value="true">
      <input type="submit" name="" value="Cambiar">
    </form>
    <?php include ("footer.php"); ?>
  </body>
</html>
