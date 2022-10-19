<?php

$idade = 18;
$numeroDePessoas = 2;


echo "Voce só pode entrar se tiver mais de 18 anos." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar.";
} elseif ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você não tem $idade anos, mas está acompanhado(a), então pode entrar.";
} else {
    echo "Você não tem $idade anos. Você não pode entrar.";
}
