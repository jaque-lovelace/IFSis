<?php

require_once("verificaSessao.php");


if (isset($_POST['salvar'])) {

    //1. Receber os dados do formulário
    $nome = $_POST['nome'];
    $cpfcnpj = $_POST['cpfcnpj'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $situacao = $_POST['situacao'];


    require("conexao.php"); 

    //2. Abrir a conexão com o  Banco de dados 
    $conexao = mysqli_connect('127.0.0.1', 'root', '', 'web');


    //3. Preparar a SQL

    $sql = "INSERT INTO cliente (nome, cpfcnpj, email, telefone, endereco,numero, cidade, estado, situacao)
     VALUES ('{$nome}','{$cpfcnpj}','{$email}','{$telefone}','{$endereco}''{$numero}',{$cidade}','{$estado}','{$situacao}')";

    //4. Executar a SQL no Banco de dados
    mysqli_query($conexao, $sql);

    //5. Fechar a conexão
    mysqli_close($conexao);

    $mensagem = "REGISTRO INSERIDO COM SUCESSO.";
}


?>

<?php
$titulo = "Cadastrar";
require_once("cabecalho.php");
?>

<?php
$cardtitulo = "Cadastro de Cliente";
 require_once("cliente-form.php");
 ?>

<?php require_once("rodape.php"); ?>