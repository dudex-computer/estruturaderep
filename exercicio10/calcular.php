<?php

$numero = $_POST['numero']; 
$intervalo = $_POST['intervalo']; 

    for ($i = $numero; $i >= 0; $i -= $intervalo) {
        echo "$i <br>";
    }

?>