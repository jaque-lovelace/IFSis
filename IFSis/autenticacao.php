<?php

if (isset($_POST['email']) && isset($_POST['senha'])) {
    //receber os dados do e-mail e da senha

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    require_once("conexao.php");

    $sql = "SELECT *
            FROM usuario
            WHERE email = '{$email}'
    ";

    $resultado = mysqli_query($conexao, $sql); //mysqli_query - Executa a SQL

    $totalDeRegistros = mysqli_num_rows($resultado); //retorna o número de registros encontrados na consulta select


    //carrega o objeto usuário no BD
    $usuario = mysqli_fetch_array($resultado);

    if ($totalDeRegistros == 1 && password_verify($senha, $usuario['senha'])) {

        //Procede com o login

        //Inicia a sessão se não tiver nenhuma sessão ativa
        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];

        header("location: principal.php");
        die();

    } else {
        $mensagem ="Usuário/Senha inválidos";
        header("location: index.php?mensagem={$mensagem}");
        die();
    }
}
