<?php

  include_once 'Mamifero.php';
  
  class Perro extends Mamifero {
    
    //atributos
    private $tipoComida;
    //private $tipo; //tipo de bicicleta(montaña, carreras, etc)
    
   //constructor
    public function __construct($nombre, $sexo, $peso, $edad, $tiempoGestacion, $tipoComida) {
      parent::__construct($nombre, $sexo, $peso, $edad, $tiempoGestacion);  //estos atributos se construyen con el constructor de la clase abstracta Animal
      $this->tipoComida = $tipoComida;
      //$this->tipo = $tip;
      //$this->kilometraje = 0; //el atributo kilometraje ya se establece en el contructor de la clase abstracta.
    }

    // método de instancia
    public function getTipoComida() {
      return $this->tipoComida;
    }
    public function setTipoComida($tipoComida) {
      $this->tipoComida = $tipoComida;
    }
    public function ladra() {
      return "<br>". $this->getNombre() ." ladra, guau, guau, guaguaguauuu<br><img src='img/ladra.gif'>";
    }
    
    
    public function __toString() {
      return parent::__toString() . "<br>Velocidades: $this->velocidades"
                                 . "<br>Tipo: $this->tipo";
    }
  }

