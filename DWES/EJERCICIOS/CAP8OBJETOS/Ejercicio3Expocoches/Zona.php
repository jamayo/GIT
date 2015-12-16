<?php
  class Zona {

    //atributos
    private $nombreZona;
    private $numEntradasDisponibles;
    private $numEntradasVendidas;
    
    //constructor
    public function __construct($nombre, $entradas) {
      $this->nombreZona = $nombre;
      $this->numEntradasDisponibles = $entradas;
      $this->numEntradasVendidas = 0;
    }

    //getter y setter
    public function getNumEntradasDisponibes() {
      return $this->numEntradasDisponibles;
    }
    public function setNumEntradasDisponibles($entradas) {
      $this->numEntradasDisponibles = $entradas;
    }
    public function getNumEntradasVendidas() {
      return $this->numEntradasVendidas;
    }
    public function setNumEntradasVendidas($entradas) {
      $this->numEntradasVendidas = $entradas;
    }
    public function venderEntradas ($cantidadVendida) {
      $this->numEntradasDisponibles -= $cantidadVendida;
      $this->numEntradasVendidas += $cantidadVendida;
    }
    public function getNombreZona() {
      return $this->nombreZona;
    }
    
    
    public function __toString() {
      return "----------------------------------------------------------------<br>"
      . "<br>$this->nombreZona"
          . "<br>Entradas disponibles: $this->numEntradas <br>";
    }
  }

