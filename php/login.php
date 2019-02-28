<?php
  if (isset($_POST["entrar"])) {
    ?>
      <script type="text/javascript">
        alert("Login com sucesso!")
      </script>
    <?php
    header("Refresh:0; url=login.php");
  }
?>
