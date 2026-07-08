<?php

function mascararCpf($cpf){

$ultimos = substr($cpf, -4);

$mascara = str_repeat("*", strlen($cpf) - 4);

return $mascara . $ultimos;
}

$cpf = "08640111995";

echo mascararCpf($cpf);
