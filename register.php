<?php $filename = basename(__FILE__, '.php'); ?>
<?php include ("controller.php"); ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body class="container">
    <?php include ("header.php") ?>
    <?php if (!isset($_SESSION['user']) || ($_SESSION['user_type'] != 1)) {header('Location: index.php');} ?>
    <?php if (isset($_POST["userAdded"])) {
      echo 'usuario '.$_POST["user"].' creado';
    } ?>
    <!-- <form class="" action="register.php" method="POST">
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
    </form> -->
    <form class="" action="register.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Correo Electrónico</label>
    <input type="email" name="user" class="form-control" id="exampleInputEmail1" placeholder="Ingrese Correo Electrónico">
    <small id="emailHelp" class="form-text text-muted">Por favor utilice el correo electrónico institucional.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputName1">Nombre</label>
    <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Ingrese Nombre del Usuario">
    <small id="nameHelp" class="form-text text-muted">Por favor ingrese nombre y apellido del usuario.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Contraseña</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
  </div>
  <div class="form-group">
    <label for="exampleInputType1">Tipo de Usuario</label>
    <select class="form-control" name="type">
      <option value="1">Administrador</option>
      <option value="2">Ejecutiva</option>
    </select><br>
    <input type="hidden" name="action" value="addUser">
    <input type="hidden" name="userAdded" value="true">
  </div>
  <button type="submit" class="btn btn-primary">Agregar</button>
</form>
    <?php include ("footer.php") ?>
  </body>
</html>
