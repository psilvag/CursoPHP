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
        //PREG_OFFSET_CAPTURE : devuelve las coincidencias  y sus indices en la cadena
        $cadena='Hola mundo';
        $regex='/mundo/';
        var_dump(preg_match($regex,$cadena,$resultado,PREG_OFFSET_CAPTURE));
        var_dump($resultado);
?>
    
</body>
</html>
