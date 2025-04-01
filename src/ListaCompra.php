<?php

namespace AlexNagore\EjercicioKata;

class ListaCompra
{
    private array $listaCompra = [];

    public function list(string $string): string
    {
        $item = explode(" " , $string);
        $product = $item[1];
        $number = count($item) == 3 ? $item[2] : 1;
        if($this->productInList($product)) {
            $this->listaCompra[$product] = $this->listaCompra[$product] + $number;
        }
        else{
            $this->listaCompra[$product] = $number;
        }

        foreach ($product : array_keys($this->listaCompra)) {
            $response += $this->listaCompra[$product] . " x" . ;
        }
        $response = implode(", ", $this->listaCompra);
        return $response;
    }

    private function productInList(string $product): bool
    {
        return in_array($product, array_keys($this->listaCompra));
    }
}