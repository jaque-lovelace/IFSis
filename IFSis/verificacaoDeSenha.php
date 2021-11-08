<?php

$senha = "12345";
$hashDoBanco="";
if(password_verify($senha, $hashDoBanco)){
    echo "Senhas iguais";
}else {
    echo "Senhas diferentes";
}
