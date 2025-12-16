<?php

require __DIR__ . '/src/Modelo/Filme.php';

echo "Bem-vindo ao sistema de filmes!\n";

$filme = new Filme("O Poderoso Chefão", 1972, Genero::Drama);

$filme->avalia(8.5);
$filme->avalia(6);
$filme->avalia(10);
$filme->avalia(2);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";