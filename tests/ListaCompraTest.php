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
    public function addProductAndNumberReturnsListWithProductAndNumber(): void
    {
        $listaCompra = new ListaCompra();
        $response = $listaCompra->list("añadir pan 2");
        $this->assertEquals("pan x2", $response);
    }

    /**
     * @test
     */
    public function addProductAlreadyInListReturnsListWithProductAndSumNumbers(): void
    {
        $listaCompra = new ListaCompra();
        $listaCompra->list("añadir pan 2");
        $response = $listaCompra->list("añadir pan 1");
        $this->assertEquals("pan x3", $response);
    }


}