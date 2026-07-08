<?php

function calcularDesconto($valor){

$desconto = 0;

if($valor > 1000){
$desconto = 30;
}
else if($valor > 500){
$desconto = 20;
}
else if($valor > 100){
$desconto = 10;
}

$valorDesconto = ($valor * $desconto) / 100;

$valorFinal = $valor - $valorDesconto;

echo "Valor original: R$ " . $valor . "<br>";
echo "Desconto: " . $desconto . "%<br>";
echo "Valor final: R$ " . $valorFinal;
}

calcularDesconto(1512);

?> 
