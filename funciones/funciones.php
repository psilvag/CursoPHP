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

    echo "PARAMETRO POR VALOR"."<br>";
    function saludar(){
        echo "HOLA DESDE PHP"."<br>";
    }
    echo saludar();

    
    echo "PARAMETRO POR DEFECTO"."<br>";

    function saludo($nombre="user"){
      echo "hola $nombre";
    }
   
    echo saludo("ricardo");


    echo "PARAMETRO POR REFERENCIA"."<br>";
    
    $numero=1;    
    function incrementar(&$num){
      return $num++;
    }
    
    echo incrementar($numero);
    echo incrementar($numero);
    echo incrementar($numero);
    echo incrementar($numero);

    ?>
</section>

<section>
    <?php
    echo "====scope de las variables"."<br>";
    echo "====PALABRA GLOBAL."."<br>";

   
    function saludos(){

        global $nombre;
        $nombre="RUPERT";
        $saludarNombre="hola $nombre como estas";
        echo "$saludarNombre"."<br>";

    }
    echo saludos();
    

    echo "====PALABRA SUPER GLOBALES."."<br>";
    echo "====PALABRAS DE PHP: GLOBAL,SERVER,GET,POST,FILES,COOKIES,REQUEST,SESSION,ENV"."<br>";
    $a=1;
    $b=3;
    $c=4;
    $d=true;
    $e="nombre";

     echo $GLOBALS ['a'];
     echo $GLOBALS ['e'];
     echo $GLOBALS ['c'];


    ?>
   
</section>

<section>
    <?php
       echo "====FUNCIONES ANONIMAS."."<br>";
       $mifuncion=function(){
        echo "hola mundo jeje"."<br>";
       };
       $mifuncion();
      
       echo "====FUNCIONES CLOUSURE."."<br>";

        function crearsuma($n){
             return function ($m) use ($n){
                return function($x) use ($m,$n){
                    return $n+$m+$x;
                };
              };
        }
        $resul=crearsuma(10);
        $resul=$resul(20);
        echo $resul(100);


        echo "====VARIABLE ESTATICA."."<br>";

        function increm(){
            // la palabra estatica permite que la variable se quede en ese valor solo 1 vez
             static $valor=0; 
             $valor++;
             echo "valor: $valor";
        }
        echo increm()."<br>";
        echo increm()."<br>";
        echo increm()."<br>";
        echo increm()."<br>";   
    ?>
   

</section>

<section>
    <?php
     echo "====VARIABLE ESTATICA."."<br>";
     function escribir($args,$callback=null){
        echo "argumento: $args"."<br>";
        if($callback!=null){
            if(gettype($callback)=="object"){
                $callback();
            }else{
             echo "ERROR:function required"."<br>";
            }
        }
     }
    
    $callbackfunction= function(){
        echo"SOY UN CALLBACK"."<br>";
    };
  
    escribir("hola mundo", $callbackfunction);
    ?>
</section>
    
</body>
</html>
