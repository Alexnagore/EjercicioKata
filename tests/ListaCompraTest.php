<?php

namespace AlexNagore\EjercicioKata\Test;

use AlexNagore\EjercicioKata\ListaCompra;
use PHPUnit\Framework\TestCase;

class ListaCompraTest extends TestCase
{
    /**
     * @test
     */
    public function addProductReturnsListWithProduct(): void
    {
        $listaCompra = new ListaCompra();
        $response = $listaCompra->list("añadir pan");
        $this->assertEquals("pan", $response);
    }

}