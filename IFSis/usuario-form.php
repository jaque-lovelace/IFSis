<div class="card bg-light">

    <div class="card-body">
        <h2 class="card-title"><?=$cardtitulo; ?>

        </h2>
    </div>

</div>
<form name="form" class="pt - 3" action="usuario-cadastrar.php" method="post">

    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nome">

    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input name="senha" type="password" class="form-control" id="senha">
    </div>

    <button name="salvar" value="salvar" type="submit" class="btn btn-primary">Salvar</button>

    <a href="usuario-listar.php">
        <button name="voltar" type="button" class="btn btn-secondary"> <i class="fas fa-long-arrow-alt-left"></i> Voltar</button>
    </a>
