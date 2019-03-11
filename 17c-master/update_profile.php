<!DOCTYPE html>
<html lang="pt_pt" dir="ltr">
    <head>
        <?php require_once("include/assets.php"); ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Projecto</title>
    </head>
    <body>
        <main>
			<?php require_once("include/header.php"); ?>
            <section>
                <form class="needs-validation" novalidate action="update.php" method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center">
                                <img src="img/perfil.jpg" class="rounded-circle" alt="">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 col-md-4 col-lg-6">
                                <label for="validationCustom01">Nome</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Nome" name="first_name" required>
                            </div>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-6">
                                <label for="validationCustom02">Apelido</label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Apelido" name="last_name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-4 col-lg-6">
                                <label for="inputEmail3">Email</label>
                                <input type="email" class="form-control" id="validationCustom02" placeholder="Email" name="email" required>
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-4 col-lg-6">
                                <label for="inputAddress">Telefone</label>
                                <input type="text" class="form-control" id="validationCustom04" placeholder="Morada" name="phone" maxlength="9" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-4 col-lg-6">
                                <label for="inputGrouping">Agrupamento</label>
                                <input type="text" class="form-control" id="inputGrouping" placeholder="Agrupamento" required>
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-4 col-lg-6">
                                <label for="inputState">Distrito</label>
                                <select id="inputState" class="form-control" required>
                                    <option value="">Escolha um Distrito...</option>
                                    <option value="portimao">Portimão</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-md-4 col-lg-6">
                                <label for="inputPassword4">Palavra-Chave</label>
                                <input type="password" class="form-control" id="validationCustom05" placeholder="Palavra-Chave" name="password" required>
                            </div>
                            <div class="col-sm-6 col-md-4 col-md-4 col-lg-6">
                                <label for="inputPassword4">Confirmar Palavra-Chave</label>
                                <input type="password" class="form-control" id="validationCustom06" placeholder="Confirmar Palavra-Chave" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-right">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck3" required>
                                        <label class="form-check-label" for="invalidCheck3">
                                        Confirmar Alterações.
                                        </label>
                                        <div class="invalid-feedback">
                                        Têm que confirmar antes de continuar!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-right">
                                <button type="submit" class="btn btn-primary" name="update">Guardar Alterações</button>
                                <a href="index.php" class="btn btn-danger">Cancelar</a>
                            </div>
                        </div>
                    </div>
                </form>
                    <script>
                        // Example starter JavaScript for disabling form submissions if there are invalid fields
                        (function() {
                          'use strict';
                          window.addEventListener('load', function() {
                            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                            var forms = document.getElementsByClassName('needs-validation');
                            // Loop over them and prevent submission
                            var validation = Array.prototype.filter.call(forms, function(form) {
                              form.addEventListener('submit', function(event) {
                                if (form.checkValidity() === false) {
                                  event.preventDefault();
                                  event.stopPropagation();
                                }
                                form.classList.add('was-validated');
                              }, false);
                            });
                          }, false);
                        })();
                    </script>
            </section>
        </main>

        <?php
			require_once("include/footer.php");
		?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
