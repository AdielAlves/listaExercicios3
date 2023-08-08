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

$resultado = notas(9,10);
if($resultado == true){
    echo "O aluno foi aprovado";
}
else{
    echo "O aluno foi reprovado";
}