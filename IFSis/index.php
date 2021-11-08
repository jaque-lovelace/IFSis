<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>

<body>

    <div class="container pt-3">

        <?php if (isset($mensagem)) : ?>
            <div class="alert alert-warning" role="alert">
                <?php echo $mensagem ?>
            </div>
        <?php endif ?>

        <div class="container">

            <div class="card bg-light">

                <div class="card-body">
                    <h2 class="card-title">Tela de Login

                    </h2>
                </div>
                <form action="autenticacao.php" method="post">
                    <input type="hidden">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email </label>
                        <input name="email" type="email" class="form-control" id="email">

                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input name="senha" type="password" class="form-control" id="senha">
                    </div>

                    <button name="entrar" type="submit" class="btn btn-primary">Entrar</button>
                </form>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>