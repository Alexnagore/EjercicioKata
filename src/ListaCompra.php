<?php

namespace AlexNagore\EjercicioKata;

class ListaCompra
{
    public function list(string $string): string
    {
        $response = explode(" " , $string);
        $product = $response[1];
        if (count($response) == 3){
            $number = $response[2];
        }
        else {
            $number = 1;
        }

        return $product . " x". $number;
    }
}