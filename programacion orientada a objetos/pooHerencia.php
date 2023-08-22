<?php



  class Persona{
    //  modificadores de acceso PUBLIC PROTECTED Y PRIVATE
    // PUBLIC: CUALQUIERA LO PUEDE USAR
    // PROTECTED: LA PROPIEDAD NO SE PUEDE USAR CON INSTANCIAS, SOLO DE LA CLASE, PERO SI LA PUEDEN USAR CLASES QUE HEREDAN ESTE PROTECTED
    // PRIVATE: LA PROPIEDAD SE PUEDE USAR EXCLUSIVAMENTE DENTRO DE LA CLASE

    protected $nombre; 
    protected $apellido;
    protected $edad;
    public static $genero="genero masculino/femenino";
    const MANOS=2;

    function __construct($nombre,$edad){
      $this->nombre=$nombre;
      $this->edad=$edad;
    }
    
    function saludar(){
        echo "Hola $this->nombre Esta es una clase de POO en php"."<br>";
        echo "Tu edad es $this->edad"."<br>";
    }

    function getNombre(){
        return $this->nombre;
    }
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    protected function metodo1(){
        echo "SOY EL METODO 1"."<br>";
    }
    private function metodo2(){
        echo "SOY EL METODO 2"."<br>";
    }
  
    function ejecutar(){
        echo $this->metodo1();
        echo $this->metodo2();
    }

    public static function saludoStatic(){
      return "Hola desde una funcion estatica";
    }

    public function ejecutar2(){
      return self::$genero;
    }
    
    public function ejecutarSaludoStatic(){
      return self::saludoStatic();
    }
    
  }
    
   // INSTANCEAMIENTO DE LA CLASE PERSONA
   $usuario= new Persona("pablo",30); 
    // STATIC function
   echo Persona::$genero."<br>";
   echo Persona::saludoStatic()."<br>";

   echo $usuario->ejecutar2()."<br>";
   echo $usuario->ejecutarSaludoStatic();

   
   // EXTENDS --> HERENCIA hereda el constructor, las propiedades y los metodos
   class ClaseHijo extends Persona{
      public function generoHeredado(){
        return $this->nombre."  ".parent::$genero;
      }
      public function ejecutarSaludoHeredado(){
        return parent::saludoStatic();      }
   }
    // INSTANCEAMIENTO DE LA CLASE HIJO
   $hijo=new ClaseHijo('Ana',20);
   echo $hijo->getNombre()."<br>";
   $hijo->ejecutar()."<br>";
   echo "IMPRIMIENDO LO HEREDADO..."."<br>";
   echo $hijo->generoHeredado()."<br>";
   echo $hijo->ejecutarSaludoHeredado()."<br>";
   
 

    
  


?>