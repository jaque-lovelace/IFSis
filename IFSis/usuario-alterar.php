<?php

require_once('conexao.php');

require_once("verificaSessao.php");


$id = $_POST['id'];
//bloco de atualização - ALTERAR
if (isset($_POST['salvar'])) {

    $nome = $_POST['nome'];
    $email = $_POST['email'];

    $sql = "UPDATE usuario
        SET nome     = '{$nome}',
            email    = '{$email}',
            WHERE id = '{$id}'";

    mysqli_query($conexao, $sql);
    $mensagem = "Registro atualizado com sucesso.";
}


//bloco de consulta
$sql = "SELECT * FROM usuario WHERE id = {$id}";
$resultado = mysqli_query($conexao, $sql);
$linha = mysqli_fetch_array($resultado);



?>

<?php
$titulo = "Alterar";
require_once("cabecalho.php");
?>

<?php
$cardtitulo = "Alterar Usuário"; 
require_once("usuario-form.php");
?>
<?php require_once("rodape.php");?>