<?php

function gerarSenha($quantidade){

$caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*";

$senha = "";

for($i = 0; $i < $quantidade; $i++){

$posicao = rand(0, strlen($caracteres) - 1);

$senha .= $caracteres[$posicao];
}

return $senha;
}

echo gerarSenha(10);
