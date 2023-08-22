<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        /* LAS COOKIES RECIBEN LOS SIGUIENTES PARAMETROS:
        1. nombre='nombre de la cookie'
        2. valor='red'
        3. expiracion= time()+n*m*p*w ejm:(60*60*24*365)     n: segundos, m:minutos, p:dias, w: años
        4. ruta: /informacion   ----> estara disponible en esta ruta y sus subrutas
        5. dominio: www.midominio.com ----> las cookies estaran disponibles para este dominio y sus subdominios
        6. segura: defecto false, para cambiar a true
        false: usa http
        true: la cocokie se crea si existe una conexion segura, osea https
        7. httponly: por defecto false, true --> la cookie solo sera leeida para http

        setcookie() lo recibimos con la global $_COOKIE['nombre_de_la_cookie']  es un array asociativo
        */




  
                                                  //time()-60
        // setcookie('prueba','esto es una prueba',time()+60);// -60 es restarle tiempo, es para eliminar
        // foreach($_COOKIE as $key =>$value){
        //     echo $key."=".$value."<br>";
        // }
        
        //EN ESTE CASO CADA ELEMENTO DE COOKIE SERIA UN ARRAY DE VALORES
        setcookie('arraycookie[valor1]','red',time()+60);
        setcookie('arraycookie[valor2]','blue',time()+60);
        setcookie('arraycookie[valor3]','green',time()+60);
        setcookie('arraycookie2[valor1]','orange',time()+60);
        setcookie('arraycookie2[valor2]','pink',time()+60);
        setcookie('arraycookie2[valor3]','purple',time()+60);
         foreach($_COOKIE as $key=>$value){
            foreach($value as $key2=>$value2){
                    echo $key2."=".$value2."<br>";
            }
        }
        // echo $_COOKIE['arraycookie']['valor2];

        //EJEMPLO DE COOKIES EN EL LA CARPETA cookies
                    
    ?>
    
</body>
</html>