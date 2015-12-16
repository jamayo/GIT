<?php

  include_once 'Vehiculo.php';
  
  class Bicicleta extends Vehiculo {
    
    //atributos
    private $velocidades; //velocidades del cambio
    private $tipo; //tipo de bicicleta(montaña, carreras, etc)
    
   //constructor
    public function __construct($marca, $modelo, $vel, $tip) {
      parent::__construct($marca, $modelo);  //estos dos atributos se construyen con el constructor de la clase abstracta Vehiculo
      $this->velocidades = $vel;
      $this->tipo = $tip;
      //$this->kilometraje = 0; //el atributo kilometraje ya se establece en el contructor de la clase abstracta.
    }

    // método de instancia
    public function getTipo() {
      return $this->tipo; // no usar Bicicleta se usa $this->
    }
    public function getVelocidades() {
      return $this->velocidades;
    }
    public function haceCaballito() {
      return "<br>Mi ". $this->getMarca() ." hace el caballito<br>";
    }
    public function __toString() {
      return parent::__toString() . "<br>Velocidades: $this->velocidades"
                                 . "<br>Tipo: $this->tipo";
    }
  }

