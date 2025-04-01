<?php

namespace AlexNagore\EjercicioKata;

class ListaCompra
{
    public function list(string $string): string
    {
        $response = explode(" " , $string);
        return $response[1];
    }
}