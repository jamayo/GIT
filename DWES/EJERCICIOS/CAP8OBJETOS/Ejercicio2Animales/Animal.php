<?php
  abstract class Animal {
    
    // atributo de clase
    private static $animalesCreados = 0;
    //private static $vehiculosCreados = 0;

    //atributos
    private $nombre;
    private $sexo;
    private $peso;
    private $edad;
    
    //constructor
    public function __construct($nombre, $sexo, $peso, $edad) {
      $this->nombre = $nombre;
      $this->sexo = $sexo;
      $this->peso = $peso;
      $this->edad = $edad;
    }
    
    // método de clase
    public static function getAnimalesCreados() {
      return Animal::$animalesCreados;
       //return self::$animalesCreados; //puedo usar self en vez de Animal
    }
    
    //getter y setter
    public function getNombre() {
      return $this->nombre;
    }
    public function getEdad() {
      return $this->edad;
    }
    public function setSexo($sexo) {
      $this->sexo = $sexo;
    }
    public function getSexo() {
      return $this->sexo;
    }
    public function setEdad($edad) {
      $this->edad = $edad;
    }
    public function getPeso() {
      return $this->peso;
    }
    public function setPeso($peso) {
      $this->peso = $peso;
    }
    
    //metodo de instancia
    public function come() {
      return "<br>Soy un animal y estoy comiendo";
    }
    public function duerme() {
      return "<br>Soy un animal y voy a dormir";
    }
    

    
    public function __toString() {
      return "<br>Sexo: $this->sexo"
          . "<br>Peso: $this->peso"
          . "<br>Edad: $this->edad";
    }
   
  }

