<?php

  include_once 'Ave.php';
  
  class Canario extends Ave {
    
    //atributos
    private $procedencia;
    //private $tipo; //tipo de bicicleta(montaña, carreras, etc)
    
   //constructor
    public function __construct($nombre, $sexo, $peso, $edad, $tipoAve, $procedencia) {
      parent::__construct($nombre, $sexo, $peso, $edad, $tipoAve);  //estos atributos se construyen con el constructor de la clase abstracta Animal
      $this->procedencia = $procedencia;
    }

    // método de instancia
    public function getProcedencia() {
      return $this->procedencia;
    }
    public function canta() {
      return "<br>Mi ". $this->getNombre() ." canta, piopio, piopiiiiii<br>";
    }
    
    
    
    public function __toString() {
      return parent::__toString() . "<br>Velocidades: $this->velocidades"
                                 . "<br>Tipo: $this->tipo";
    }
  }

