<?php

class calculadoraDeMaratona
{
    private int $duracaoMaratona = 0;

    public function inclui(Titulo $titulo): void
    {
        $this->duracaoMaratona += $titulo->duracaoEmMinutos();
    }

    public function getDuracaoTotal(): int
    {
        return $this->duracaoMaratona;
    }
}