<?php  session_start(); ?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>

<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<!-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"> -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

<ul class="nav nav-tabs">
  <li class="nav-item">
    <!-- <a class="nav-link <?php if ($filename == "index") {  echo 'active';} ?>" href="index.php">Inicio</a> -->
    <?php if (isset($_SESSION['user'])) {echo '<a class="nav-link ';if ($filename == "index") {  echo 'active';}echo '"  href="index.php">Inicio</a>';} ?>
  </li>
  <li class="nav-item">
    <!-- <a class="nav-link <?php if ($filename == "search") {  echo 'active';} ?>" href="search.php?q=">Buscador</a> -->
    <?php if (isset($_SESSION['user'])) {echo '<a class="nav-link ';if ($filename == "search") {  echo 'active';}echo '"  href="search.php">Buscador</a>';} ?>
  </li>
  <li class="nav-item">
    <?php if (isset($_SESSION['user']) && ($_SESSION['user_type'] == 1)) {echo '<a class="nav-link ';if ($filename == "add") {  echo 'active';}echo '"  href="add.php">Añadir Entrada</a>';} ?>
  </li>
  <li class="nav-item">
    <?php if (!isset($_SESSION["user"])) {echo '<a class="nav-link ';if ($filename == "login") {  echo 'active';}echo '"  href="login.php">Iniciar Sesión</a>';} ?>
  </li>
  <li class="nav-item">
    <?php if (isset($_SESSION['user']) && ($_SESSION['user_type'] == 1)) {echo '<a class="nav-link ';if ($filename == "register") {  echo 'active';}echo '"  href="register.php">Registrar Usuario</a>';} ?>
  </li>
  <li class="nav-item">
    <?php if (isset($_SESSION['user']) && ($_SESSION['user_type'] == 1)) {echo '<a class="nav-link ';if ($filename == "admin") {  echo 'active';}echo '"  href="admin.php">Administración</a>';} ?>
  </li>
  <li class="nav-item">
    <?php if (isset($_SESSION["user"])) {echo '<a class="nav-link ';if ($filename == "account") {  echo 'active';}echo '"  href="account.php"><b>'.$_SESSION["user_name"].'</b></a>';} ?>
  </li>
  <li class="nav-item">
    <?php if (isset($_SESSION["user"])) {echo '<a class="nav-link"  href="index.php?action=logout">Cerrar Sesión</a>';} ?>
  </li>
</ul>
<br>
