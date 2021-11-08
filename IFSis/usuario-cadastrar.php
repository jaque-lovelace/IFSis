<?php

require_once("verificaSessao.php");


if (isset($_POST['salvar'])) {

    //1. Receber os dados do formulário
    $nome = $_POST['nome'];

    $email = $_POST['email'];

    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);


    require_once("conexao.php");

    //2. Abrir a conexão com o  Banco de dados 
    $conexao = mysqli_connect('127.0.0.1', 'root', '', 'web');


    //3. Preparar a SQL

    $sql = "INSERT INTO usuario (nome, email, senha)
     VALUES ('{$nome}','{$email}','{$senha}' )";

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
$cardtitulo = "Cadastro de Usuário"; 
require_once("usuario-form.php");
?>

<?php require_once("rodape.php");?>