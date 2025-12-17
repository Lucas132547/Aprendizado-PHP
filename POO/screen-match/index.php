<?php

require __DIR__ . '/src/Modelo/Genero.php';
require __DIR__ . '/src/Modelo/Titulo.php';
require __DIR__ . '/src/Modelo/Filme.php';
require __DIR__ . '/src/Modelo/serie.php';

echo "Bem-vindo ao sistema de filmes!\n";

$filme = new Filme("O Poderoso Chefão", 1972, Genero::Drama, 180);

$filme->avalia(8.5);
$filme->avalia(6);
$filme->avalia(10);
$filme->avalia(2);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";

$serie = new serie(
    "Breaking Bad", 
    2008, 
    Genero::Drama, 
    5, 
    13, 
    47
);

echo $serie->anoLancamento . "\n";

$serie->avalia(9.5);
$serie->avalia(8);

echo $serie->media() . "\n";