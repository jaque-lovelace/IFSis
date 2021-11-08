<?php


require_once("conexao.php");

require_once("verificaSessao.php");


//bloco de esxclusão
if (isset($_POST['excluir'])) {

    $sql = "DELETE from usuario WHERE id = {$id}";

    mysqli_query($conexao, $sql);


    $mensagem = "Registro excluído com sucesso";
}


//bloco de lista
$sql = "SELECT * FROM usuario";

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
        <h2 class="card-title">Usuário Listar</h2>
        <p class="card-text"> <?= $qtd ?>Registros Encontrados.</p>
        <a href="usuario-cadastrar.php">
            <button type="button" class="btn btn-primary"><i class="far fa-plus-square"></i> Cadastrar</button>
        </a>


    </div>
</div>


<table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
        while ($linha = mysqli_fetch_array($resultado)) :
        ?>
            <tr>
                <th><?= $linha['id'] ?></th>
                <td><?= $linha['nome'] ?></td>
                <td><?= $linha['email'] ?></td>
                <td class="d-flex">

                    <form action="usuario-alterar.php" method="post">
                        <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                        <button type="submit" name="alterar" value="alterar" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></button>
                    </form>


                    <form action="usuario-listar.php" method="post" onsubmit=" return confirm ('Deseja mesmo remover o usuário selecionado?')">
                        <input type="hidden" name="id" value="<?= $linha['id'] ?>">

                        <button type="submit" name="excluir" value="excluir" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>
                    </form>

                </td>
            </tr>

        <?php endwhile ?>

    </tbody>
</table>
<?php require_once("rodape.php");?>