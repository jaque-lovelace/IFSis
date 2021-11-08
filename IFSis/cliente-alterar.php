<?php

require_once('conexao.php');

require_once("verificaSessao.php");


$id = $_POST['id'];
//bloco de atualização - ALTERAR
if (isset($_POST['salvar'])) {

    $nome = $_POST['nome'];
    $cpfcnpj = $_POST['cpfcnpj'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $situacao = $_POST['situacao'];


    $sql = "UPDATE cliente
        SET nome     = '{$nome}',
            cpfcnpj  = '{$cpfcnpj}',
            email    = '{$email}',
            telefone = '{$telefone}',
            endereco = '{$endereco}',
            numero   = '{$numero}',
            cidade   = '{$estado}',
            estado   = '{$estado}',
            situacao = '{$situacao}'

            WHERE id = '{$id}'";

    mysqli_query($conexao, $sql);
    $mensagem = "Registro atualizado com sucesso.";
}


//bloco de consulta
$sql = "SELECT * FROM cliente WHERE id = {$id}";
$resultado = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_array($resultado);



?>

<?php
$titulo = "Alterar";
require_once("cabecalho.php");
?>

<?php
$cardtitulo = "Alterar Cliente";
 require_once("cliente-form.php");
 ?>

<?php require_once("rodape.php");?>