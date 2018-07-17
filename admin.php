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
      echo '
      <table id="myTable" class="display table table-responsive">
        <thead>
          <th>Usuario</th>
          <th>Comentario</th>
          <th>Procedimiento</th>
          <th>Acciones</th>
          <th>Fecha</th>
        </thead>
      ';
      foreach ($comments as $comment) {
        echo '
        <tr>
          <td><b>'.$comment["name"].'</b></td>
          <td>'.$comment["comment"].'</td>
          <td><a href="view.php?action=viewEntry&id='.$comment["proc_id"].'">'.$comment["procedimientoExamen"].'</a></td>
          <td><a href="admin.php?action2=deleteComment&comment_id='.$comment["id"].'">Eliminar</a></td>
          <td>'.$comment["datetime"].'</td>
        </tr>
        ';
      }
      echo "</table>";
    }
    ?>
    <?php include ("footer.php"); ?>
    <script type="text/javascript">
    $(document).ready( function () {
  $('#myTable').DataTable({
    "language": {
        "sProcessing": "Procesando...",
        "sLengthMenu": "Mostrar _MENU_ registros",
        "sZeroRecords": "No se encontraron resultados",
        "sEmptyTable": "Ningún dato disponible en esta tabla",
        "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix": "",
        "sSearch": "Buscar:",
        "sUrl": "",
        "sInfoThousands": ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst": "Primero",
            "sLast": "Último",
            "sNext": "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    },
    bFilter: false
  });
} );
    </script>
  </body>
</html>
