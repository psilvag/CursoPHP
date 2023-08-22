<?php

// =========================METODOS DE STRINGS==========================

//=======METODO explode() -----> CONVIERTE A UN ARRAY
// estructura: explode(sepracion,string,limite)
// el limite indica dividir el array en ese numero de partes 
echo "METODOS DE STRINGS"."<br>"."<br>";

echo "1. METODO explode-----> convierte string a un array"."<br>";
$palabra1="esta es una palabra para convertir a un array";
$palabraArray=explode(' ',$palabra1,4);
// divide la cadena en 4 partes: esta | es | una | palabra para convertir a un array
echo $palabra1."<br>";
echo "Res: $palabraArray[2]"."<br>"; // retorna una

echo "2. METODO implode-----> convierte un array a string"."<br>";
$miarray=['este','es','un','array','de','ejemplo','para','convertirlo','a','string'];
$palabra2=implode("_",$miarray);
echo "Res: $palabra2"."<br>"; // retorna string

echo "3. METODO lcfirst-----> coloca a miniscula el primer caracter"."<br>";
$palabra3="Mi palabra";
echo $palabra3."<br>";
$res3=lcfirst($palabra3);
echo "res: $res3"."<br>"; // retorna mi palabra

echo "4. METODO md5----->  devuelve una encriptacion de la palabra"."<br>"; // no se usa mucho
$palabra4="micontraseñaf5454//";
echo $palabra4."<br>";
$res4=md5($palabra4);
echo "res: $res4"."<br>"; // retorna cadena de caracteres b9003759aed31fdf0910d6085213d618

echo "5. METODO parse_str----->compara y devuelve el valor de una variable asignada"."<br>"; 
$palabra5="mivariable=ejemplo1&array[]=valor1&array[]=valo2";
echo $palabra5."<br>";
parse_str($palabra5,$res5);
echo "res: ".$res5['mivariable']."<br>"; // retorna ejemplo1
echo "res: ".$res5['array'][0]."<br>"; // retorna valor 1
echo "res: ".$res5['array'][1]."<br>"; // retorna valor 2

echo "6. METODO str_replace----->reemplaza la palabra que queremos"."<br>"; 
$palabra6="esta es la palabra feliz feliz feliz";
echo $palabra6."<br>";
echo "res: ".str_replace('feliz','reemplazada',$palabra6,$cont)."<br>"; // retorna esta es la palabra reemplazada
echo "encontre".$cont."veces la palabra reemplazada"."<br>";

echo "7. METODO str_repeat----->copia la frase la cantidad de veces que se desee"."<br>"; 
$palabra7="chanchito feliz";
echo $palabra7."<br>";
echo str_repeat($palabra7."<br>",4); // retorna 10 veces la palabra7


echo "8. METODO str_split----->convierte el string a un array de caracteres"."<br>"; 
$palabra8="chanchito feliz y chanchito veloz";
echo $palabra8."<br>";
$res9=str_split($palabra8,4);// el 2 significa que cada elemento del array son grupos de 2
echo "res: $res9[0]"."<br>"; // retorna chan

echo "9. METODO strlen----->devuelve la cantidad de caracteres en string"."<br>"; 
$palabra9="chanchito feliz y chanchito veloz";
echo $palabra9."<br>";
echo "la palabra $palabra9 tiene".strlen($palabra9)."letras"."<br>"; // retorna cantidad de letras contando los espacios del string

echo "10. METODO strrev----->devuelve la frase al reves"."<br>"; 
$palabra10="chanchito feliz y chanchito veloz";
echo $palabra10."<br>";
$res10=strrev($palabra10);
echo "palabra invertida: $res10"."<br>"; // retorna la palabra invertida


echo "11. METODO strtolower o strtoupper----->convierte todas las letras a minuscula"."<br>"; 
$palabra11="ESTE ES UN CHANCHITO VELOZ";
echo $palabra11."<br>";
$res11=strtolower($palabra11);
echo "palabra to lower case: $res11"."<br>"; // retorna chan


echo "12. METODO substr_count -----> retorna la cantidad de veces que aparece de la subcadena"."<br>"; 
$palabra12="ESTE ES UN CHANCHITO VELOZ Y TAMBIEN ES UN CHANCHITO TRISTE EN EL CORRAL ";
echo $palabra12."<br>";
$res12=substr_count($palabra12,'EN');
$res12_1=substr_count($palabra12,'EN',5);// BUSCA A PARTIR DEL CARACTER 5 EN ADELANTE
$res12_2=substr_count($palabra12,'UN',5,8);// CUENTA HASTA EL CARACTER 5 Y BUSCA ENTRE LAS SIGUIENTES 8 
echo "res: $res12"."<br>"; // retorna 2
echo "res: $res12_1"."<br>"; // retorna 2
echo "res: $res12_2"."<br>"; // retorna 1

echo "13. METODO substr----->extrae un pedazo de cadena"."<br>"; 
$palabra13="ESTE+ES UN CHANCHITO VELOZ Y TAMBIEN UN CHANCHITO FELIZ";
echo $palabra13."<br>";
$res13=substr($palabra13,4);// recorta todo a partir del caracter 4
$res13_1=substr($palabra13,4,9); // recorta desde 4 y muestra los siguientes 9 caracteres
echo "SUBCADENA: $res13"."<br>"; // +ES UN CHANCHITO VELOZ Y TAMBIEN UN CHANCHITO FELIZ
echo "SUBCADENA: $res13_1"."<br>"; // +ES UN CH





?>