<?php

function analisarTexto($texto){

$palavras = str_word_count($texto);

$caracteres = strlen($texto);

$vogais = 0;
$consoantes = 0;

$texto = strtolower($texto);

for($i = 0; $i < strlen($texto); $i++){

$letra = $texto[$i];

if($letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u"){
$vogais++;
}
else if($letra >= "a" && $letra <= "z"){
$consoantes++;
}
}

echo "Palavras: " . $palavras . "<br>";
echo "Caracteres: " . $caracteres . "<br>";
echo "Vogais: " . $vogais . "<br>";
echo "Consoantes: " . $consoantes;
}

analisarTexto("Eu gosto do homem de ferro, é meu heróio favorito, mas ele morreu em vingadores ultimato, isso me deixou triste");

?> 
