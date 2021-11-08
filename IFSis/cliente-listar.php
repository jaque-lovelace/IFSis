<?php


require_once("conexao.php");

require_once("verificaSessao.php");


//bloco de esxclusão
if (isset($_POST['excluir'])) {

    $sql = "DELETE from cliente where id = {$id}";

    mysqli_query($conexao, $sql);


    $mensagem = "Registro excluído com sucesso";
}


//bloco de lista
$sql = "SELECT * from cliente";

$resultado = mysqli_query($conexao, $sql);

$qtd = mysqli_num_rows($resultado);

mysqli_close($conexao);

?>

<?php
$titulo = "Listar";
require_once("cabecalho.php");
?>


<div class="card bg-light">

    <div class="card-body">
        <h2 class="card-title">Lista de clientes</h2>
        <p class="card-text"> <?= $qtd ?> Registros Encontrados.</p>
        <a href="cliente-cadastrar.php">
            <button type="button" class="btn btn-primary"><i class="far fa-plus-square"></i> Cadastrar</button>
        </a>


    </div>
</div>


<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF/CNPJ</th>
            <th scope="col">email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Logradouro</th>
            <th scope="col">Número</th>
            <th scope="col">cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Situação</th>

        </tr>
    </thead>
    <tbody>
        <?php
        while ($linha = mysqli_fetch_array($resultado)) :
        ?>
            <tr>
                <th><?= $linha['id'] ?></th>
                <td><?= $linha['nome'] ?></td>
                <td><?= $linha['cpfcnpj'] ?></td>
                <td><?= $linha['email'] ?></td>
                <td><?= $linha['telefone'] ?></td>
                <td><?= $linha['endereco'] ?></td>
                <td><?= $linha['numero'] ?></td>
                <td><?= $linha['cidade'] ?></td>
                <td><?= $linha['estado'] ?></td>
                <td><?= $linha['situacao'] ?></td>
                
                <td class="d-flex">

                    <form action="cliente-alterar.php" method="post">
                        <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                        <button type="submit" name="alterar" value="alterar" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></button>
                    </form>


                    <form action="cliente-listar.php" method="post" onsubmit=" return confirm ('Deseja mesmo remover o cliente selecionado?')">
                        <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                        <button type="submit" name="excluir" value="excluir" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                    </form>

                </td>
            </tr>

        <?php endwhile ?>

    </tbody>
</table>
<?php require_once("rodape.php"); ?>