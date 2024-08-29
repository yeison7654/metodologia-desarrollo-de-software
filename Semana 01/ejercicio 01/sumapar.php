<?php
/**
 * @var mixed
 * suma de numeros pares
 */
$numeroN = 6;
$sumaPar = 0;
for ($i = 1; $i <= $numeroN; $i++) {
   if(($i%2)== 0){
    $sumaPar+=$i;
   }
}
echo "La suma de los numeros pares es: " . $sumaPar;
