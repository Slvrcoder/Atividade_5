<?php

function inverterTexto($texto){
echo "Quantidade de caracteres: " . strlen($texto) . "<br>";

return strrev($texto);
}

$texto = "demorei para descobrir o bglh mais simples possivel pqp";

echo "Texto invertido: " . inverterTexto($texto);

?> 


