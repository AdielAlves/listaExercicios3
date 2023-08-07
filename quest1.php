<?php

function soma($valor1, $valor2){
    $res = $valor1 + $valor2;
    if($res < 0){
        $res = 0;
    }
    else{
        $res = $valor1 + $valor2;
    }
    return $res;
}
$resultado = soma(7,5);
echo "Soma do valores da funcao: $resultado";