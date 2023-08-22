<?php 
namespace a;
require "test.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <section>

 <?php
    class Prueba{
        public function decirHola(){
            return  "HOLA DESDE A"."<br>";
        }

    }
        
    function imprimir(){
        return "IMPRIMIENDO....."."<br>";
    }
    $a=7;

    namespace a\b;
    class Prueba{
        public function decirHola(){
            return  "HOLA DESDE A\B";
        }

    }
    function imprimir(){
        return "IMPRIMIENDO POR SEGUNDA VEZ.....";
    }
    $a=78;

   namespace a\b\c;
    
   // primer metodo para llamar clases o metodos de un espacio
   use a\b\Prueba as Pa_b;
   use function a\imprimir;

   $prueba=new Pa_b();
   echo $prueba->decirHola()."<br>";
   echo imprimir();

   // segundo metodo para llamar clases o metodos de un espacio
   use a\b;
   $prueba=new b\Prueba();
   echo $prueba->decirHola()."<br>";
   echo b\imprimir();

   // imprime la variable $a sino encuentra sube al anterior nivel a buscarla
   // CONSTANTES: sino la encuentra se sale de todos los namespaces a buscar afuera
   // FUNCIONES: sino la encuentra se sale de todos los namespaces a buscar afuera
   echo $a."<br>"; 
   
   // HEREDANDO DE UNA CLASE FUERA DE LOS NAMESPACES
   
   class Prueba extends \Prueba{
    
   }
   $pruebaC=new Prueba();// instancear la clase Prueba del espacio a\b\c
   echo $pruebaC->saludo()."<br>";
   
  
   $pruebaC=new \Prueba();  // instancear la clase Prueba del archivo test.php directamente
   echo $pruebaC->saludo()."<br>";

  // PARA VARIAS CLASES
  // use a\b\c\{CLASE1,CLASE2,CLASE3}
   // PARA VARIAS FUNCIONES
  // use function  a\b\c\{funcion1,funcion2,funcion3}
   // PARA VARIAS CONSTANTES
  // use const  a\b\c\{Const1,Const2,Const3}
   
 ?>

 </section>



</body>
</html>



