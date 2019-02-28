<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <?php require_once("include/assets.php"); ?>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <div id="wrap">
			<?php require_once("include/header.php"); ?>

      <div class="container">
        <div class="row">
          <div class="col">
              <div class="formulario">
                <h1>Login</h1>
                <br>
                <form method="post">
                  <div class="form-group">
                    <label for="n_agrupamento">Nº do Agrupamento</label>
                    <input type="text" class="form-control" id="n_agrupamento" placeholder="Introduza o nº do seu agrupamento">
                    <small id="agrupamento_help" class="form-text text-muted">Nunca iremos divulgar o seu email.</small>
                  </div>
                  <br>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password do Agrupamento</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <small id="password_help" class="form-text text-muted">Nunca divulgue a password a ninguem.</small>
                  </div>
                  <br>
                  <button type="submit" name="entrar" class="btn btn-primary">Entrar</button>
                </form>
              </div>
          </div>
        </div>
      </div>

		</div>
		<?php
      require_once("php/login.php");
			require_once("include/footer.php");
		?>

  </body>
</html>
