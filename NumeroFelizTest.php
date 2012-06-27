<?php
require_once('NumeroFeliz.php');

class NumeroFelizTest extends PHPUnit_Framework_TestCase
{
    public $numeroFeliz;

    protected function setUp()
    {
        $this->numeroFeliz = new NumeroFeliz();
    }

    /* 
    * Tests sobre getSumandos
    */
    public function testGetSumandosDevuelve5SiNumeroEs5()
    {
        $this->assertEquals(array(5), $this->numeroFeliz->getSumandos(5));
    }

    public function testGetSumandosDevuelve3_4SiNumeroEs34()
    {
        $this->assertEquals(array(3,4), $this->numeroFeliz->getSumandos(34));
    }

    public function testGetSumandosDevuelve1_7_4SiNumeroEs174()
    {
        $this->assertEquals(array(1, 7, 4), $this->numeroFeliz->getSumandos(174));
    }

    /*
    * Tests sobre getSumaDeCuadrados
    */
    public function testGetSumaDeCuadradosDevuelve9SiNumeroEs3()
    {
        $this->assertEquals(9, $this->numeroFeliz->getSumaDeCuadrados(3));
    }

    public function testGetSumaDeCuadradosDevuelve97SiNumeroEs49()
    {
        $this->assertEquals(97, $this->numeroFeliz->getSumaDeCuadrados(49));
    }

    /*
    * Tests sobre getMayor
    */
    public function testGetMayorDevuelveNullSiNumeroEs1()
    {
        $this->assertEquals(null, $this->numeroFeliz->getMayor(1));
    }

    public function testGetMayorDevuelve1SiNumeroEs4()
    {
        $this->assertEquals(1, $this->numeroFeliz->getMayor(4));
    }


    public function testGetMayorDevuelve1SiNumeroEs5()
    {
        $numeroFeliz = new NumeroFeliz();
        $this->assertEquals(1, $numeroFeliz->getMayor(5));
    }


    public function testGetMayorDevuelve7SiNumeroEs10()
    {
        $numeroFeliz = new NumeroFeliz();
        $this->assertEquals(7, $numeroFeliz->getMayor(10));
    }


    public function testGetMayorDevuelve13SiNumeroEs14()
    {
        $numeroFeliz = new NumeroFeliz();
        $this->assertEquals(13, $numeroFeliz->getMayor(14));
    }
}
?>