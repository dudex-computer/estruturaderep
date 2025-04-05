<?php

$numero = $_POST['numero']; 
$intervalo = $_POST['intervalo']; 


if ($intervalo < 1) {
    echo "O intervalo deve ser pelo menos 1.";
} else {

    for ($i = 0; $i <= $numero; $i += $intervalo) {
        echo "$i<br>"; 
    }
}
?>