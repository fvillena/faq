<?php include ("header.php") ?>
<?php include ("controller.php") ?>
<?php

    // Esta función me permite manipular las variavles de sesión.
    // La sesión permite controlar el estado de nuestra aplicación.
    // En este caso, vamos a recordar el usuario que está en el sistema.

    // Esta variable indicará dentro del HTML si es que hay una sesión iniciada.
    $login = false;

    // Caso en que la sesión fue iniciada.
    if (isset($_SESSION['user'])) {
        $login = true;
    }

    // Caso en que llegamos desde index.php.
    if ($_POST) {

        // Los datos del formulario.
        $user = $_POST['user'];
        $password = crypt($_POST['password'], 'hcuch');

        // Buscamos el usuario en la base de datos.
        $consulta = "SELECT * FROM users WHERE user = '$user'";
        $resultado = mysqli_query($connection, $consulta);

        // Obtenemos la clave.
        $fila = mysqli_fetch_assoc($resultado);
        $password_bd = $fila['password'];

        // Marcamos la variable que indica el inicio de sesión.
        $login = $password_bd == $password;
        if ($login) {
            $_SESSION['user'] = $user;
        }
        else {
          echo 'incorrecto';
        }
    }
?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method="POST" action="login.php">
            <label for="user">E-mail:</label>
            <input type="email" name="user">
            <br>
            <label for="password">Password: </label>
            <input type="password" name="password">
            <br>
            <input type="submit" value="Ingresar">
        </form>
    <?php include ("footer.php") ?>
    <?php if ($login) {
      header('Location: index.php');
    } ?>
  </body>
</html>
