<?php
/**
 * Factorial de un numero
 */
$numeroN=10;
$factorial=1;
for ($i=1; $i <=$numeroN ; $i++) { 
    $factorial*=$i;
}
echo "EL factorial del numero ".$numeroN." es ".$factorial;