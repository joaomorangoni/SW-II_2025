<?php 

    function gera_aleatorio(){
        $vetor = array();

        for ($i=0; $i < 10; $i++) { 
            $vetor[$i] = rand(0 , 100);
        }

        return $vetor;
    }

    $receber_vetor = gera_aleatorio();

    print_r($receber_vetor);
?>