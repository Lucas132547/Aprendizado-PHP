<?php

require __DIR__ . '/src/Modelo/Filme.php';

echo "Bem-vindo ao sistema de filmes!\n";

$filme = new Filme();
$filme->nome = "Thor - Ragnarok";
$filme->genero = "Ação";
$filme->anoLancamento = 2023;
$filme->nota = 8.9;