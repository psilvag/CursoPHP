<?php

$colores=['rojo','verde','amarillo','morado','azul','rosado','cafe','purpura','cyan','celeste'];
$letras=['r','v','a','r','z','s','f','p','y','c'];
$numeros=[1,6,45,8,9,12,19,17,35,20];
$frutas=['pera','durazno','sandia','melon','piña','coco','mango'];

echo "1. METODO count-----> retorna la longitud del array"."<br>"; 
$res1=count($colores);
echo "Longitud del array: $res1"."<br>";


echo "2. METODO in_array-----> busca un elemento en el array"."<br>"; 
if(in_array(45,$numeros,true)){
echo "SE ENCONTRO EL DATO"."<br>";
}else{
    echo "no se encontro el dato"."<br>";
}

echo "3. METODO array_unshift-----> añade un elemento al inicio del array"."<br>"; 
echo str_repeat('-',80)."<br>";
echo "ARRAY ORIGINAL"."<br>";
foreach($numeros as $clave)
{
    echo $clave,'-';
}
$res2=array_unshift($numeros,36,49,60,17,44);
echo "<br>".str_repeat('-',80);
echo "<br>";
echo "ARRAY CON UNSFHIT"."<br>";
foreach($numeros as $clave)
{
    echo $clave."-";
}
echo "<br>";

echo "4. METODO array_shift-----> elimina un elemento al inicio del array"."<br>"; 
echo str_repeat('-',80)."<br>";
echo "ARRAY ORIGINAL"."<br>";
foreach($numeros as $clave)
{
    echo $clave,'-';
}
$res3=array_shift($numeros);
echo "<br>".str_repeat('-',80);
echo "<br>";
echo "ARRAY CON SFHIT"."<br>";
foreach($numeros as $clave)
{
    echo $clave."-";
}
echo "<br>";


echo "5. METODO array_push-----> añade un elemento al final del array"."<br>"; 
echo str_repeat('-',80)."<br>";
echo "ARRAY ORIGINAL"."<br>";
foreach($frutas as $clave)
{
    echo $clave,'-';
}
$res4=array_push($frutas,'3','chirimoya');
echo "<br>".str_repeat('-',80);
echo "<br>";
echo "ARRAY CON PUSH"."<br>";
foreach($frutas as $clave)
{
    echo $clave."-";
}
echo "<br>";

echo "6. METODO array_pop-----> elimina un elemento del final del array"."<br>"; 
echo str_repeat('-',80)."<br>";
echo "ARRAY ORIGINAL"."<br>";
foreach($frutas as $clave)
{
    echo $clave,'-';
}
$res5=array_pop($frutas);
echo "<br>".str_repeat('-',80);
echo "<br>";
echo "ARRAY CON POP"."<br>";
foreach($frutas as $clave)
{
    echo $clave."-";
}
echo "<br>";


echo "7. METODO array_key_exist-----> verifica si existe el indice en el array"."<br>"; 
echo str_repeat('-',80)."<br>";
if(array_key_exists(55,$frutas)){
    echo "SE ENCONTRO EL INDICE"."<br>";
    }else{
        echo "no se encontro el INDICE"."<br>";
    }
echo "<br>";

echo "8. METODO array_search-----> devuelve el indice de un elemento"."<br>"; 
echo str_repeat('-',80)."<br>";
echo array_search('amarillo',$colores,true);
echo "<br>";


echo "9. METODO array_slice-----> recorta un array desde un punto a otro"."<br>"; 
echo str_repeat('-',80)."<br>";
echo "ARRAY ORIGINAL"."<br>";
foreach($letras as $clave)
{
    echo $clave,'-';
}
echo "<br>".str_repeat('-',80);
echo "<br>";
$res6=array_slice($letras,2);
echo "ARRAY CON SLICE desde el indice 2 para adelante"."<br>";
foreach($res6 as $clave)
{
    echo $clave."-";
}
echo "<br>";

$res7=array_slice($letras,5,2);
echo "ARRAY CON SLICE desde el indice 5 y toma 2 elementos mas desde el indice 5"."<br>";
foreach($res7 as $clave)
{
    echo $clave."-";
}

echo "<br>";

$res8=array_slice($letras,-3,2);
echo "ARRAY CON SLICE desde el indice -3 y toma 2 elementos mas desde el indice -3---->hacia adelante "."<br>";
foreach($res8 as $clave)
{
    echo $clave."-";
}
echo "<br>";

$res9=array_slice($letras,-6,-3);
echo "ARRAY CON SLICE desde el indice -6 y toma -3 elementos contando desde atras desde el principio <----------"."<br>";
foreach($res9 as $clave)
{
    echo $clave."-";
}
echo "<br>";
echo "si se coloca UN TRUE COMO ULTIMO PARAMETRO EN array_slice devuelve los elementos con SUS INDICES ORIGINALES"."<br>";



$numeros2=[1,6,45,8,9,12,19,17,35,20];
echo "10. METODO array_splice-----> elimina una parte del array segun indices indicados"."<br>"; 
echo str_repeat('-',80)."<br>";
echo "ARRAY ORIGINAL"."<br>";
foreach($numeros2 as $clave)
{
    echo $clave,'-';
}
echo "<br>".str_repeat('-',80);
echo "<br>";
$res10=array_splice($numeros2,4,3,['hola','pablo']);
echo "ARRAY CON SPLICE, primer parametro cuenta la cantidad que debe avanzar y el segundo param elimina la cantidad de elementos  "."<br>"; 
foreach($numeros2 as $clave)
{
    echo $clave."-";
}
echo "<br>";  //return [1,6,19,17,35,20]


$numeros3=[1,66,45,8,99,12,19,17,55,66,8,9,55,99];
echo "11. METODO array_unique-----> elimina los elementos repetidos "."<br>"; 
echo str_repeat('-',80)."<br>";
echo "ARRAY ORIGINAL"."<br>";
foreach($numeros3 as $clave)
{
    echo $clave,'-';
}
echo "<br>".str_repeat('-',80);
echo "<br>";
$res11=array_unique($numeros3);
echo "ARRAY CON UNIQUE, elimina duplicados  "."<br>"; 
foreach($res11 as $clave)
{
    echo $clave."-";
}
echo "<br>";  



$misletras=['r','v','a','r','z','s','f','p','y','c',3,5,0,1,'r'];
echo "12. METODO sort----->ordena el array "."<br>"; 
echo str_repeat('-',80)."<br>";
echo "ARRAY ORIGINAL"."<br>";
foreach($misletras as $clave)
{
    echo $clave,'-';
}
echo "<br>".str_repeat('-',80);
echo "<br>";
sort($misletras);
echo "ARRAY CON SORT, ordena  "."<br>"; 
foreach($misletras as $clave)
{
    echo $clave."-";
}
echo "<br>";  


$nombre="pablo";
$edad=30;
$ciudad="la paz";
$pais="Bolivia";

echo "13. METODO compact----->array de variables referenciadas "."<br>"; 
echo str_repeat('-',80)."<br>";
echo "<br>";
$variables=compact('nombre','edad','ciudad','pais');

foreach($variables as $key=>$element){
    echo "$key= $element"."<br>";
}
echo "<br>"; 

echo "OTRO METODO ES EXTRACT LEER LA DOC"
?>

