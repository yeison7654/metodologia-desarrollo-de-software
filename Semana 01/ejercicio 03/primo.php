<?php

/**
 * @var mixed
 * es primo
 */
$numeroN = 7;
if ($numeroN < 2) {
    echo "No es primo";
    die();
}
for ($i = 2; $i <= sqrt($numeroN); $i++) {
    if ($numeroN % $i == 0) {
        echo "No es primo";
        die();
    }
}
echo "Es primo";