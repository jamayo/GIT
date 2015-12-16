<?php

  include_once 'Animal.php';
  
  class Mamifero extends Animal {
    
    //atributos
    private $tiempoGestacion;
    //private $tipo; //tipo de bicicleta(montaña, carreras, etc)
    
   //constructor
    public function __construct($nombre, $sexo, $peso, $edad, $tiempoGestacion) {
      parent::__construct($nombre, $sexo, $peso, $edad);  //estos atributos se construyen con el constructor de la clase abstracta Animal
      $this->tiempoGestacion = $tiempoGestacion;
      //$this->tipo = $tip;
      //$this->kilometraje = 0; //el atributo kilometraje ya se establece en el contructor de la clase abstracta.
    }

    // método de instancia
    public function getTiempoGestacion() {
      return $this->tiempoGestacion;
    }
    public function amamanta() {
      return "<br>Mi ". $this->getNombre() ." amamanta a su cria<br>";
    }
    public function corre() {
      return "<br>Mi ". $this->getNombre() ." corre Forest, corre<br>";
    }
    
    
    
    public function __toString() {
      return parent::__toString() . "<br>Velocidades: $this->velocidades"
                                 . "<br>Tipo: $this->tipo";
    }
  }

