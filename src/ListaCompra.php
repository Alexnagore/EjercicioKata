<?php

namespace AlexNagore\EjercicioKata;

class ListaCompra
{
    public array $listaCompra = [];

    public function list(string $string): string
    {
        $item = explode(" " , $string);
        $product = $item[1];
        $number = count($item) == 3 ? $item[2] : 1;
        if(in_array($product, array_keys($this->listaCompra))) {
            $this->listaCompra[$product] = $this->listaCompra[$product] + $number;
        }
        else{
            $this->listaCompra[$product] = $number;
        }
        $response = $product . " x" . $this->listaCompra[$product];
        echo $response;
        return $response;
    }
}