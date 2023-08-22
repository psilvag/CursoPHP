


<?php
  class Persona{
    //  modificadores de acceso PUBLIC PROTECTED Y PRIVATE
    // PUBLIC: CUALQUIERA LO PUEDE USAR
    // PROTECTED: LA PROPIEDAD NO SE PUEDE USAR CON INSTANCIAS, SOLO DE LA CLASE, PERO SI LA PUEDEN USAR CLASES QUE HEREDAN ESTE PROTECTED
    // PRIVATE: LA PROPIEDAD SE PUEDE USAR EXCLUSIVAMENTE DENTRO DE LA CLASE


    protected $nombre; 
    protected $apellido;
    protected $edad;
      

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


  }

  $usuario1=new Persona("pablo",30);
  $usuario1->saludar();
  
  echo $usuario1->getNombre();
  $usuario1->setNombre('marcelo');
  echo "<br>";
  echo $usuario1->getNombre();  echo "<br>";
  $usuario1->ejecutar();
   
 
  
  

  

  
  

?>