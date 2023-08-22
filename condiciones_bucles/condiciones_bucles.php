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
 // IF, IF-ELSE, ELSE
 
   $a=209;
   $b=54;
   
   if($a===$b){
    echo "son iguales";
   }
   else if($a<=3){
    echo" $a es menor que 3";
   }
   else{
    echo "no son iguales";
   }

   // and-----> && o escribir and
   // or -----> || o escribir or
   // xor ----> xor
   $z=3<5;
   $v=40>5;
   if($z && $v){
    echo "z y v es true"."<br>";
} 
else{
    echo"FALSE"."<br>";
}
   // SWITCH
   $valor=51;
   switch($valor){
     case 0:
        echo "el valor es $valor";
        break;
     case 2:
    echo "el valor es $valor";
    case 5:
        echo "encontraste el valor 5";
        break;
    default :
    echo "NO HAY EL VALOR 5"."<br>";
   }

   // WHILE
   $a=0;
   while ($a<=5){
    echo "CICLO WHILE $a"."<br>";
    $a++;
   }
   
// DO-WHILE
    $b=10;
    do{
     echo "CICLO DO WHILE$b"."<br>";
     $b--;
    }while($b>0);

// FOR
   for($i=0;$i<10;$i++){
    echo "valor $i"."<br>";
   }
 ?>

</section>

<section>
    <table>
        <tbody>
            <?php
              echo "CICLO FOR";
              for($i=0;$i<=10;$i++){
                echo "<tr>
                      <td>9</td><td>x</td><td>$i</td><td>=</td><td>", $i*9, "</td> 
                      </tr>";
               }   
            ?>
        </tbody>
    </table>
</section>

<section>
 
    <?php
       echo "BUCLE FOR"."<br>";
      $colores=["rojo","azul","verde","naranja","violeta","marron","rosa"];
      for($i=0;$i<count($colores);$i++){
        echo "$colores[$i]"."<br>";
      }
    // FOR EACH
    echo "BUCLE FOR EACH"."<br>";
      foreach($colores as $valor){
        echo "valor : $valor"."<br>";
      }
    
    // break- continue
    echo "BREAK"."<br>";
    for($i=0;$i<=10;$i++){
      
        if($i===5){break;}
        echo "valor: $i"."<br>";
      }
    echo "el valor de i es $i"."<br>";
    
   // CONTINUE
   echo "CONTINUE"."<br>";
    for($j=0;$j<=10;$j++){
    
        if($j===7){
            continue;  // vuelve al ciclo for, no se muestra el 7
        }
        echo "valor: $j"."<br>";
      }
    
    $w=0;
    while($w<7){
        $w++;
        switch($w){
            case 2:
                continue 2;
            case 4:
                continue 2;
            case 6: 
                continue 2;
        }

   
     echo "valor de w: $w"."<br>";
    }


    ?>

</section>

</body>
</html>