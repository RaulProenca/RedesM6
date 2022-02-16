<?php

class Pessoa{

    private $nome;
    private $morada;
    private $pais;
    private $genero;

    function __construct($nome, $morada, $pais, $genero) {
      $this->nome = $nome;
      $this->morada = $morada;
      $this->pais = $pais;
      $this->genero = $genero;
    }

    function setNome($nome) {
        $this->nome = $nome;
      }
    
      function getNome() {
        return $this->nome;
    }

    function setMorada($morada) {
        $this->morada = $morada;
      }
    
      function getMorada() {
        return $this->morada;
    }

    function setPais($pais) {
        $this->pais = $pais;
      }
    
      function getPais() {
        return $this->pais;
    }

    function setGenero($genero) {
        $this->genero = $genero;
      }
    
      function getGenero() {
        return $this->genero;
    }
}





?>