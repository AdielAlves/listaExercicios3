<?php

function notas($n1, $n2){
    $somaNotas = $n1 + $n2;
    if($somaNotas >= 19 && ($n1 > 7 && $n2 >7)){
        return true;
    }
    else{
        return false;
    }
}

$resultado = notas(8,10);

echo "O aluno foi $resultado";
