<?php

namespace AlexNagore\EjercicioKata;

class ListaCompra
{
    public function list(string $string): string
    {
        $response = explode(" " , $string);
        $product = $response[1];
        $number = count($response) == 3 ? $response[2] : 1;

        return $product . " x". $number;
    }
}