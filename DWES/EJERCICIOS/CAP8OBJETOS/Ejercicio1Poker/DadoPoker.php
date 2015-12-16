<?php
  class DadoPoker {
    
    // atributo de clase
    private static $tiradasTotales = 0;

    //atributos
    private $figura;
    //private $cara;
    
    //constructor
    public function __construct() {
      $this->caras = ["As", "K", "Q", "J", "7", "8"];
      
    }
    
    // método de clase
    public static function getTiradasTotales() {
      return DadoPoker::$tiradasTotales;
      //return self:://puedo usar self en vez de Vehiculo
    }
    public static function setTiradasTotales($tiradas) {
      DadoPoker::$tiradasTotales = $tiradas;
    }
    
    //metodo de instancia
    public function tirar() {
      $tirada = rand ( 0, 5 );
      $this->figura = $this->caras[$tirada];
      DadoPoker::$tiradasTotales++;
    }
    public function nombreFigura() {
      return $this->figura;
    }
    
 /*   public function __toString() {
      return "<br>Marca: $this->marca"
          . "<br>Modelo: $this->modelo"
          . "<br>Km: $this->kilometraje";
    }*/
   
  }

