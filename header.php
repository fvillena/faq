<?php  session_start(); ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<a href="index.php">Inicio</a> | <a href="search.php">Buscador</a>
<?php if (isset($_SESSION['user']) && ($_SESSION['user_type'] == 1)) {echo ' | <a href="add.php">Añadir Entrada</a>';} ?>
<?php if (!isset($_SESSION["user"])) {echo ' | <a href="login.php">Iniciar Sesión</a>';} ?>
<?php if (isset($_SESSION['user']) && ($_SESSION['user_type'] == 1)) {echo ' | <a href="register.php">Registrar Usuario</a>';} ?>
<?php if (isset($_SESSION["user"])) {echo ' | <a href="account.php"><b>'.$_SESSION["user_name"].'</b></a>';} ?>
<?php if (isset($_SESSION["user"])) {echo ' | <a href="index.php?action=logout">Cerrar Sesión</a>';} ?>
<hr>
