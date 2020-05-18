<?php
// strict mode
declare(strict_types=1);

class Profisao {
}

function bio(
    string $name, 
    int $age, 
    float $weight, 
    string $address,
    Profisao $profissao = null
): string {
    return "Name: $name<br>Age: $age<br>Weight: $weight
        <br>Address: $address<hr>";
}

$name = "J. Kataleko";
$age = 25;
$weight = 62.0;
$address = "Graça, Benguela, Angola";

echo bio($name, $age, $weight, $address);

function soma(float $a, float $b):float {
    return (int)$a + $b;
}

echo "Resultado: " . soma(23.0, 12.45);

function saoIguais(int $a, int $b):bool {
    if($a === $b) return true;
    return false;
}

// strict mode