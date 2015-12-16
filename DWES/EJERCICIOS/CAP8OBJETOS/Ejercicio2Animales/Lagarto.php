<?php

  include_once 'Animal.php';
  
  class Lagarto extends Animal {
    
    //atributos
    private $especie;
    //private $tipo; //tipo de bicicleta(montaña, carreras, etc)
    
   //constructor
    public function __construct($nombre, $sexo, $peso, $edad, $especie) {
      parent::__construct($nombre, $sexo, $peso, $edad);  //estos atributos se construyen con el constructor de la clase abstracta Animal
      $this->especie = $especie;
      //$this->tipo = $tip;
      //$this->kilometraje = 0; //el atributo kilometraje ya se establece en el contructor de la clase abstracta.
    }

    // método de instancia
    public function getEspecie() {
      return $this->especie;
    }
    public function desova() {
      return "<br>Mi ". $this->getNombre() ." desova en un agujero<br>";
    }
    
    
    
    public function __toString() {
      return parent::__toString() . "<br>Velocidades: $this->velocidades"
                                 . "<br>Tipo: $this->tipo";
    }
  }

