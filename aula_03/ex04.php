<?php


    function tabuada($num) {
        for ($i=1; $i <= 10; $i++) { 
            $resul = $num * $i;
            echo $num.'x'.$i.'='.$resul."<br>";
        };
    }

    tabuada(5);

?>