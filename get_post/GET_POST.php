<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>

<!--METODO GET EN EL FORMULARIO: ENVIA LOS DATOS DE LOS CAMPOS DE TEXTO COMO QUERY STRINGS AL LINK
DE ESTA MANERA CON EL METODO GLOBAL $_GET OBTENEMOS ESOS VALORES CON PHP
el atributo  name de los inputs son las keys con las que se hace referencia al valor del input
para el ejemplo: $_GET['nombre'] donde nombre es el el atributo name='nombre'
                 $_GET['apellido'] donde apellido es el el atributo name='apellido'

*Si no se especifica nada en action el metodo es enviado en el mismo link

*Lo mismo se puede hacer con el metodo POST, solo que POST envia los datos de forma oculta, no van a las query strings

* METODO REQUEST: Es como el padre de GET Y POST
 El metodo request de php funciona con get o post en el form de html
-->
<div class="contenedor">
    <div class="formulario">
        <form action="./privado/zonaprivada.php" method="POST" role="form"> 
            <h2>FORMULARIO</h2>
            <div class="text_button">
            <input type="text" name="nombre" id="" class="input_text" placeholder="Nombre">
            <input type="text" name="apellido" id="" class="input_text" placeholder="Apelllido">
            <button type="submit" class="btn_enviar">Enviar</button>
            </div>
        </form>
    </div>
    <div>
       <!-- <h2> Hola <?php  echo $_POST['nombre']." ".$_POST['apellido']?> como estas</h2>-->
      <!-- <h2> Hola <?php  echo $_POST['nombre']." ".$_POST['apellido']?> como estas</h2>-->
     <!--<h2> Hola <?php  echo $_REQUEST['nombre']." ".$_REQUEST['apellido']?> como estas</h2>-->
     
    </div>
</div>
    
</body>
</html>