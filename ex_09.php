<?php

function analisarNumero($numero){

    if($numero < 1){

        return "O número deve ser inteiro";
    }

    $par = ($numero % 2 === 0); 
 
    $ePrimo = true; 

    if($numero <= 1){

        $ePrimo = false;

    }else{

        for($i = 2; $i <= sqrt($numero); $i++){ 
            if ($numero % $i === 0){
                $ePrimo = false;
                break;
            }

        }

    }

    if($numero <= 1){
        $ePerfeito = false;
    }else{
        $somaDivisores = 1;

        for($i = 2; $i < $numero; $i++){ 
            if($numero % $i === 0){
                $somaDivisores += $i;
            }
        }

        $ePerfeito = ($somaDivisores === $numero);
    }

    return [

        'numero' => $numero,
        'par' => $par,
        'impar' => !$par,
        'primo' => $ePrimo,
        'perfeito' => $ePerfeito
    ];
}

$resultado = analisarNumero(27);

echo "O numero analisado foi: " . $resultado['numero'] . "<br>";

if($resultado['par']){
    echo "Este número é par! <br>";
    
}else{
    echo "Este número é impar! <br>";
}

if($resultado['primo']){
    echo "Este número é primo! <br>";

}else{
    echo "Este núemro não é primo! <br>";
}

if($resultado['perfeito']){
    echo "Este número é perfeito! <br>";

}else{
    echo "Este número não é perfeito! <br>";
}

?>