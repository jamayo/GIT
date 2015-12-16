<?php
  abstract class Vehiculo {
    
    // atributo de clase
    private static $kilometrajeTotal = 0;
    private static $vehiculosCreados = 0;

    //atributos
    private $marca;
    private $modelo;
    private $kilometraje;
    
    //constructor
    public function __construct($ma, $mo) {
      $this->marca = $ma;
      $this->modelo = $mo;
      $this->kilometraje = 0;
    }
    
    // método de clase
    public static function getKmTotales() {
      return Vehiculo::$kilometrajeTotal;
      //return self::$kilometrajeTotal; //puedo usar self en vez de Vehiculo
    }
    public static function getVehiculosCreados() {
      return Vehiculo::$vehiculosCreados;
      //return self::$vehiculosCreados; //puedo usar self en vez de Vehiculo
    }
    //metodo de instancia
    public function getKmRecorridos() {
      return $this->kilometraje;
    }
    public function anda($km) {
      $this->kilometraje += $km;
      Vehiculo::$kilometrajeTotal += $km;
      return "<br>Mi ". $this->marca ." empieza a andar y recorro ". $this->kilometraje;
    }
    public function getMarca() {  //creo este método para enviar la marca a las subclases y que éstas desde sus métodos usen dicho dato.
      return $this->marca;
    }
    
    public function __toString() {
      return "<br>Marca: $this->marca"
          . "<br>Modelo: $this->modelo"
          . "<br>Km: $this->kilometraje";
    }
   
  }

