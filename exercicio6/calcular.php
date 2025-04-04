<?php

$numero = $_POST['numero'];


for ($i = 0; $i <= $numero; $i++) {
    if ($i % 2 == 0) { 
        echo "$i<br>";
    }
}
?>
