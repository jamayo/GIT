<?php

  include_once 'Vehiculo.php';
  
  class Coche extends Vehiculo {
    
    //atributos
    private $puertas; //numero puertas del vehiculo
    private $combustible; //tipo de combustible que usa
    
   //constructor
    public function __construct($marca, $modelo, $puertas, $combustible) {
      parent::__construct($marca, $modelo);  //estos dos atributos se construyen con el constructor de la clase abstracta Vehiculo
      $this->puertas = $puertas;
      $this->combustible = $combustible;
      //$this->kilometraje = 0; //el atributo kilometraje ya se establece en el contructor de la clase abstracta.
    }

    // método de instancia
    public function getPuertas() {
      return $this->puertas; // no usar Bicicleta se usa $this->
    }
    public function getCombustible() {
      return $this->combustible; // no usar Bicicleta se usa $this->
    }
    public function quemaRueda() {
      return "<br> Mi " . $this->getMarca() . "  quema rueda<br>";
    }
  }

