<?php

function calcularMedia($notas){

$maiorNota = max($notas); 

$menorNota = min($notas); 

$soma = array_sum($notas); 
$quantidade = count($notas); 

$mediaNota = $soma / $quantidade;

if($mediaNota >= 7){
    $situacao = "Aprovado"; 
}elseif($mediaNota >= 5 && $mediaNota <= 7 ){
    $situacao = "Recuperação";
}else{
    $sitaucao = "Reprovado";
}

return [

'maiorNota' => $maiorNota,
'menorNota' => $menorNota,
'mediaNota' => $mediaNota,
'situacao' =>  $situacao



];
}
    

$notasAluno = [7, 8, 10];
$resultado = calcularMedia($notasAluno);

echo "Maior Nota: " . $resultado ['maiorNota'] . "<br>";
echo "Menor Nota: " .  $resultado ['menorNota'] . "<br>";
echo "Média da Nota: " . $resultado ['mediaNota'] . "<br>";
echo "Situação final: " . $resultado ['situacao'] . "<br>";
?>