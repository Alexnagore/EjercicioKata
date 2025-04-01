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
        $result = $listaCompra->list("Pan");
        $this->assertEquals("Pan", $result);
    }

}