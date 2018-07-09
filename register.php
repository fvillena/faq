<?php include ("controller.php"); ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php include ("header.php") ?>
    <?php if (isset($_POST["userAdded"])) {
      echo 'usuario '.$_POST["user"].' creado';
    } ?>
    <form class="" action="register.php" method="POST">
      <label for="">Correo Electrónico: </label>
      <input type="email" name="user" value=""><br>
      <label for="">Nombre</label>
      <input type="text" name="name" value=""><br>
      <label for="">Contraseña: </label>
      <input type="password" name="password" value=""><br>
      <label for="">Tipo de Usuario: </label>
      <select class="" name="type">
        <option value="1">Administrador</option>
        <option value="2">Ejecutiva</option>
      </select><br>
      <input type="hidden" name="action" value="addUser">
      <input type="hidden" name="userAdded" value="true">
      <input type="submit" name="" value="Agregar">
    </form>
    <?php include ("footer.php") ?>
  </body>
</html>
