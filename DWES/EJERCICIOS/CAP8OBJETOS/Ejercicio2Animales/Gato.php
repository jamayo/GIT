<?php

  include_once 'Mamifero.php';
  
  class Gato extends Mamifero {
    
    //atributos
    private $raza;
    //private $tipo; //tipo de bicicleta(montaña, carreras, etc)
    
   //constructor
    public function __construct($nombre, $sexo, $peso, $edad, $tiempoGestacion, $raza) {
      parent::__construct($nombre, $sexo, $peso, $edad, $tiempoGestacion);  //estos atributos se construyen con el constructor de la clase abstracta Animal
      $this->raza = $raza;
      //$this->tipo = $tip;
      //$this->kilometraje = 0; //el atributo kilometraje ya se establece en el contructor de la clase abstracta.
    }

    // método de instancia
    public function getRaza() {
      return $this->raza;
    }
    public function maulla() {
      return "<br>". $this->getNombre() ." maulla, miauuuu, miauuuu<br><img src='img/maulla.gif'>";
    }
    
    
    public function __toString() {
      return parent::__toString() . "<br>Velocidades: $this->velocidades"
                                 . "<br>Tipo: $this->tipo";
    }
  }

