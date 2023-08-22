<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document PHP</title>
 
</head> 

<body> 


<h1> 

  <?php echo 'hola mundo','desde PHP'."<br>".'como estan todos';
  //echo solo permite imprimir varios strings
    print 'DEVS'; // print solo permite imprimir 1 string
  ?> 
</h1>

<section>
  <?php

  class MiObjeto {/*...*/}

  //tipos de variables
  $a=true||false;
  $a=10;
  $a=12.354;
  $a=-123;
  $a=0x1A;
  $a=0b11111111;
  $a='hola mundo desde PHP';
  $b=7E-10;
  
  //compuestos
  $a=array();
  $a= new MiObjeto();

  // tipos especiales
  $n=null;
  //$c=fopen('foo','w'); // recurso
  
   ?>
</section>

<section>
  <?php
  $nombre='pablo';$edad=28;  // se puede declarar variables lado a lado 
  $edadNueva=$edad+6;
  echo "Mi nombre es $nombre y tengo $edadNueva años <br>"; 
  echo "$edad <br>";
  echo "$edadNueva <br>";
  ?>
</section>

<section>
  <?php
    define("SALUDO","Hola mundo"); // SALUDO ES NOMBRE DE LA CONSTANTE Y hola mundo su valor, siempre en mayusculas
    echo SALUDO."<br>";

    define("NOMBRE","pablo silva");
    define("EDAD",30);
    echo "mi nombre es".NOMBRE."y tengo".EDAD."años";
 ?>

</section>

<section>
  <?php
  echo "OPERADORES";
  $a=35;
  $b=34;
  $res=$a+$b;
  echo $res;

  ?>
</section>

<section>
<?php
echo "ASIGNACION";
$valor=13;
$valor+=5;
echo "el valor es:$valor"."<br>";

$valor=13;
$valor-=5;
echo "el valor es:$valor"."<br>";


$valor=13;
$valor*=5;
echo "el valor es:$valor"."<br>";


$valor=13;
$valor/=5;
echo "el valor es:$valor"."<br>";
$valor=13;
$valor%=5;
echo "el valor es:$valor"."<br>";


?>

</section>

<section>
 <?php
 echo "INCREMENTOS Y DECREMENTOS"."<br>";
 $num=5;
 echo ++$num."<br>";
 echo $num++."<br>";
 echo $num."<br>";
  
 echo "DECREMENTOS"."<br>";
 $num=10;
 echo --$num."<br>";
 echo $num--."<br>";
 echo $num."<br>";
 
 echo "CONCATENACION"."<br>";
 // .= concatena y asigna
 $caja1="hola";
 $caja2="mundo";
 echo $caja1.=" ".$caja2;

 
 ?>

</section>

<section>
 <?php
 // forma 1 de crear un array
 echo "ARRAYS";
 $productos=array();
 $productos[0]="pr1";
 $productos[1]="pr2";
 $productos[2]="pr3";
 $productos[3]="pr4"."<br>";

 // forma 2 de crear un array

 $prod=array("p1","p2","p3");
 $prod[0]="pp";
 echo $prod[2]."<br>";

 // forma 3
 $nombres=["pablo","ana","pepito"];
 $frutas=["manzana","pera","sandia"];
 echo $frutas[2]."<br>";

 $edad=["pablo"=>30, "robert"=>32];// este tipo de array es asociativa
 echo $edad["pablo"]."<br>";
 echo "hola me llamo {$nombres[0]}, tengo {$edad["pablo"]} años y me gusta la {$frutas[2]}"."<br>";

 ?>

</section>

<section>
  <?php
  echo "ARRAYS MULTIMDIMENSIONALES 2"."<br>";
  $frutas=[["manzana","uva"],["limon ","naranja"]];
  echo $frutas[1][1]."<br>";
   
  $usuarios=["nombres"=>["user1"=>"Pablo","user2"=>"Silvia","user3"=>"Peter"],"edades"=>["user1"=>30,"user2"=>34]];
  echo "el usuario: {$usuarios["nombres"]["user1"]}"."<br>"." y este usuario tiene {$usuarios["edades"]["user1"]} años"."<br>";


  echo "ARRAYS MULTIMDIMENSIONALES 3"."<br>";
  $frutas=[["manzana","uva"],["limon ","naranja",["higo","kiwi"]]];
  echo $frutas[1][2][1]."<br>";
  


  ?>
</section>

</body>
</html>