<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <? 
       include './avanzados/lib/error.php';
            // MANEJO DE ERRORES CON:
            // die: imprime un mensaje y sale del script actual, corta el flujo de ejecucion
            // exit es el alias de la funcion die, hace lo mismo

            /*function test($n){
                if($n===5){
                    echo 'n no puede ser igual a 5';
                    die; // o exit;
                }
            }
            test(5);
            echo 'cualquier texto'; // ya no se imprime porque die  corta   el flujo
           
            // tambien se puede usar de la siguiente forma
            $mysql->connect() or die('no se puede conectar a la base de datos')*/; // ejecuta uno u otro



            // LANZAR ERRORES:
            //set_error_handler(): 
         
            function test($n){
                if($n===5){
                    trigger_error('n no puede ser igual a 5',E_USER_DEPRECATED) ;
                    
                }else{
                    echo 'perfecto'."<br>";
                }
            }
            test(9);


        ?>
</body>
</html>