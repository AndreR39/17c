<?php
if (isset($_POST["registar"])) {
  ?>
    <script type="text/javascript">
      alert("Registo feito com sucesso!");
    </script>
  <?php
  header("Refresh:0; url=registo.php");
}
?>
