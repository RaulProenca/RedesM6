<?php
class Carro
{
    public $matricula;
    public $nDias;
    public $marca;
    public $segmento;
    public $extras;
    public $total;

    function __construct($matricula, $nDias, $marca, $segmento, $extras, $total)
    {
        $this->matricula = $matricula;
        $this->nDias = $nDias;
        $this->marca = $marca;
        $this->segmento = $segmento;
        $this->extras = $extras;
        $this->total = $total;
    }

    function setMatricula($matricula)
    {
        $this->matricula = $matricula;
    }

    function setNDias($nDias)
    {
        $this->nDias = $nDias;
    }

    function setMarca($marca)
    {
        $this->marca = $marca;
    }

    function setSegmento($segmento)
    {
        $this->segmento = $segmento;
    }

    function setExtras($extras)
    {
        $this->extras = $extras;
    }

    function setTotal($total)
    {
        $this->total = $total;
    }

    function getMatricula()
    {
        return $this->matricula;
    }

    function getNDias()
    {
        return $this->nDias;
    }

    function getMarca()
    {
        return $this->marca;
    }

    function getSegmento()
    {
        return $this->segmento;
    }

    function getExtras()
    {
        return $this->extras;
    }

    function getTotal()
    {
        return $this->total;
    }
}