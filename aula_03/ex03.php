<?php 

function ParImpar($n) {
    if ($n % 2 == 0){
        return "Par";
    }
    else{
        return "Ímpar";
    }
}

$resul = ParImpar(10);
echo $resul;

?>