<?php

namespace AlexNagore\EjercicioKata\Test;

use AlexNagore\EjercicioKata\ListaCompra;
use PHPUnit\Framework\TestCase;

class ListaCompraTest extends TestCase
{
    /**
     * @test
     */
    public function addProductAndNoNumberReturnsListWithProductAndOne(): void
    {
        $listaCompra = new ListaCompra();
        $response = $listaCompra->list("añadir pan");
        $this->assertEquals("pan x1", $response);
    }

    /**
     * @test
     */
    public function addProductAndNoNumberReturnListWithProductAndNumber(): void
    {
        $listaCompra = new ListaCompra();
        $response = $listaCompra->list("añadir pan 2");
        $this->assertEquals("pan x2", $response);
    }


}