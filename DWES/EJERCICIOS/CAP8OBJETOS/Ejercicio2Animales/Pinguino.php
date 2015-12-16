<?php

  include_once 'Ave.php';
  
  class Pinguino extends Ave {
    
    //atributos
    private $subtipo;
    //private $tipo; //tipo de bicicleta(montaña, carreras, etc)
    
   //constructor
    public function __construct($nombre, $sexo, $peso, $edad, $tipoAve, $subtipo) {
      parent::__construct($nombre, $sexo, $peso, $edad, $tipoAve);  //estos atributos se construyen con el constructor de la clase abstracta Animal
      $this->subtipo = $subtipo;
    }

    // método de instancia
    public function getSubTipo() {
      return $this->subtipo;
    }
    public function nada() {
      return "<br>". $this->getNombre() ." se lanza al mar... nada, nada nada...<br><img src='img/nada.gif'>";
    }
    
    
    
    public function __toString() {
      return parent::__toString() . "<br>Velocidades: $this->velocidades"
                                 . "<br>Tipo: $this->tipo";
    }
  }

