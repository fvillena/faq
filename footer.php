<hr>
Desarrollado con <i class="fas fa-heart"></i> y <i class="fas fa-coffee"></i> por Estudiantes del Magíster en Informática Médica de la Universidad de Chile
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-50179084-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  <?php if (isset($_SESSION["user_id"])) { echo "gtag('set', {'user_id': '".$_SESSION["user_id"]."'});";} ?>
  gtag('config', 'UA-50179084-1');
</script>
