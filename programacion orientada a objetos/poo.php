


<?php
  class Persona{
    //  modificadores de acceso PUBLIC PROTECTED Y PRIVATE
    // PUBLIC: CUALQUIERA LO PUEDE USAR
    // PROTECTED: LA PROPIEDAD NO SE PUEDE USAR CON INSTANCIAS, SOLO DE LA CLASE, PERO SI LA PUEDEN USAR CLASES QUE HEREDAN ESTE PROTECTED
    // PRIVATE: LA PROPIEDAD SE PUEDE USAR EXCLUSIVAMENTE DENTRO DE LA CLASE


    public $nombre; 
    public $apellido;
    public $edad;
    

    function __construct($nombre,$edad){
      $this->nombre=$nombre;
      $this->edad=$edad;
    }
    
    function saludar(){
        echo "Hola $this->nombre Esta es una clase de POO en php"."<br>";
        echo "Tu edad es $this->edad"."<br>";
    }
 
    // la funcion destruct se ejecuta cada vez que instanceamos la clase
    function __destruct() 
    {
      echo "la clase salio de la memoria"."<br>";
    }

  }

  $usuario1=new Persona("pablo",30);
  $usuario1->saludar();
  
  
  // unset($usuario1); // eliminando la instancia de la clase

  

  
  

?>