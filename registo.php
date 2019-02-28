<!DOCTYPE html>
<html lang="pt" dir="ltr">
  <head>
    <?php require_once("include/assets.php"); ?>
    <meta charset="utf-8">
    <title>Registar</title>
  </head>
  <body>
    <div id="wrap">
			<?php require_once("include/header.php"); ?>

      <div class="container">
        <div class="row">
          <div class="col">
              <div id="register" class="col">
                <form  method="post">
                  <h1>Registar</h1>
                  <br>
                  <form>
                    <div class="form-group">
                      <label for="exampleInputNºAgrup1">Nº do Agrupamento</label>
                      <input type="text" class="form-control" id="exampleInputAgrup" aria-describedby="AgrupHelp" placeholder="Introduza o nº de agrupamento">
                      <small id="AgrupHelp" class="form-text text-muted">Nunca iremos divulgar o seu email.</small>
                    </div>
                    <br>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password do Agrupamento</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      <small id="PassHelp" class="form-text text-muted">Nunca iremos divulgar a sua password.</small>
                    </div>
                    <br>
                    <div class="form-group">
                      <label for="exampleInputPassword2">Confirma a Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Confirma Password">
                    </div>
                    <br>
                    <div class="form-group">
                      <label for="exampleInputEmail">Seu email</label>
                      <input type="text" class="form-control" id="exampleInputEmail" placeholder="Seu email">
                    </div>
                    <br>
                    <button type="submit" name="registar" class="btn btn-primary">Registar</button>
                  </form>
                </div>
          </div>
        </div>
      </div>
		</div>
		<?php
      require_once("php/registar.php");
			require_once("include/footer.php");
		?>
  </body>
</html>
