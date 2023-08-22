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
            function verificarNumero($num){
                if($num===3){
                    throw new Exception("Este es el numero 3",45);// 45 es un codigo para identificar la exception
                }
                echo "HOLA"."<br>";
            }

            try{
                verificarNumero(3);
            }catch(Exception $e){
                echo "Exception mensaje: {$e->getMessage()}"."<br>";
                echo "Codigo:{$e->getCode()}"."<br>";
                echo "Ruta de archivo {$e->getFile()}"."<br>";
                echo "Linea: {$e->getLine()}"."<br>";
            
            }finally{
                echo "FINALLY";
            }

        ?>
    </section>

    
</body>
</html>