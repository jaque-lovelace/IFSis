<div class="card bg-light">

    <div class="card-body">
        <h2 class="card-title"><?=$cardtitulo; ?>

        </h2>
    </div>

</div>
<form name="form" class="pt - 3" action="cliente-cadastrar.php" method="post">

    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input name="nome" type="text" class="form-control" id="nome" aria-describedby="nome">

    </div>
    <div class="mb-3">
        <label for="cpfcnpj" class="form-label">CPF/CNPJ</label>
        <input name="cpfcnpj" type="text" class="form-control" id="cpfcnpj" aria-describedby="cpfcnpj">

    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input name="email" type="email" for="email" class="form-control" id="email" placeholder="seuemail@domino" required>
    </div>
    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone</label>
        <input name="telefone" type="text" class="form-control" id="telefone" aria-describedby="telefone">

    </div>
    <div class="mb-3">
        <label for="endereco" class="form-label">Logradouro</label>
        <input name="endereco" type="text" class="form-control" id="endereco" aria-describedby="endereco">

    </div>
    <div class="mb-3">
        <label for="numero" class="form-label">Número</label>
        <input name="numero" type="text" class="form-control" id="numero" aria-describedby="numero">

    </div>

    <div class="mb-3">
        <label for="cidade" class="form-label">Cidade</label>
        <select name=cidade id="cidade" class="form-select" for="cidade">
            <option selected>Selecione</option>
            <option>Toledo</option>
            <option>Umuarama</option>
            <option>Outras</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="estado" class="form-label">Estado</label>
        <select name=estado id="estado" class="form-select" asp-for="estado">
            <option selected>Selecione</option>
            <option>Paraná</option>
            <option>Rio Grande do Sul</option>
            <option>Santa Catarina</option>
        </select>
    </div>


    <div class="mb-3">
        <label for="situacao" class="form-label">Status</label>
        <input name="situacao" type="text" class="form-control" id="situacao">
    </div>

    <button name="salvar" type="submit" class="btn btn-primary">Salvar</button>

    <a href="cliente-listar.php">

        <button name="voltar" type="button" class="btn btn-secondary"> <i class="fas fa-long-arrow-alt-left"></i> Voltar</button>
    </a>

