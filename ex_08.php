<?php

function ordenarNomes($nomes){

$lista = explode(",", $nomes); 
for($i =0; $i < count($lista); $i++){
    $lista[$i] = trim($lista[$i]); 

}

sort($lista);


return $lista;

}

$nomes = "Matheus, Igor, Gadotti, Menestra";

$resultado = ordenarNomes($nomes);

echo "<br> <br>" . "Forma mais organizada: " . "<br>";

for($i =0; $i < count($resultado); $i++){
    echo "<br>" . $resultado[$i] . "<br>";
};


?>