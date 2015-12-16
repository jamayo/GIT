<?php

  include_once 'Animal.php';
  
  class Ave extends Animal {
    
    //atributos
    private $tipoAve;
    //private $tipo; //tipo de bicicleta(montaña, carreras, etc)
    
   //constructor
    public function __construct($nombre, $sexo, $peso, $edad, $tipoAve) {
      parent::__construct($nombre, $sexo, $peso, $edad);  //estos atributos se construyen con el constructor de la clase abstracta Animal
      $this->tipoAve = $tipoAve;
    }

    // método de instancia
    public function getTipoAve() {
      return $this->tipoAve;
    }
    public function vuela() {
      return "<br>Mi ". $this->getNombre() ." vuela. !Vuela pajarillo, vuela¡<br><img src='img/vuela.gif'>";
    }
    
  }