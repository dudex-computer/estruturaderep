<?php

$numero = $_POST ['numero'];
$i=0;

for($i=0; $i<11; $i++)
{
    $result= $numero * $i;
    echo "$numero x $i = $result <br>";
}

?>
