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
     // Manejo de directorios: cuando se realice un proyecto y necesitemos rutas para almacenar archivos por ejemplo fotos de perfil del usuario etc

     //mkdir() : crear directorios mkdir('nombre y ubicacion del archivo',permisos,true) true permite crear anidados
     //rmdir(): elimina directorios mrdir('ruta del archivo'),nuevo1/nuevo2/nuevo3 elimina 1 por 1 primero eliminaria la ruta nueva3, luego nueva2 y quedaria nueva/
     //rename(): renombre, cambia de lugar el archivo
     //dirname(): devuelve la ruta padre 
     //isdir(): verifica si existe el directorio
     //getcwd(): devuelve la ruta del directorio donde estamos 
     //opendir(): abre un directorio
     //closedir(): cierra el directorio
     // chdir(): cambio de directorio
     //rewindir(): colocar la posicion del puntero al inicio
     //scandir(): devuelve lo que hay en el directorio y lo devuelve como un array
     // dirc(): crea una instancia de la variable 
       




    //mkdir('./nueva_carpeta/nivel1/nivel2/nivel3',0777,true);
    //rmdir('./nueva_carpeta/nivel1');
    //rename('./nueva_carpeta','./nuevo_nombre');

    //  chdir(dirname(__FILE__,1));
    //  mkdir('../nueva'); // .. significa que vaya 2 espacios atras
    //  echo getcwd();
     
    echo getcwd()."<br>"; 

    $directorio=opendir('..');
    echo getcwd()."<br>";
    while(($data=readdir($directorio))==true){
        echo $data."<br>";
    }

    // $directorio ='.';// retrocederia a htdocs
    //  $data=scandir($directorio);
    //  foreach($data as $key=>$value){
    //     echo $value."<br>";
    // }
    

    // $data=dir(dirname(__FILE__));
    // echo "$data->handle"."<br>";
    // echo "$data->path"."<br>";

           // MUESTRA TODOS ARCHIVOS Y CARPETAS QUE EHAY DENTRO DEL DIRECTORIO
    // while(($lectura=$data->read())!==false){
    //     if($lectura!='.' && $lectura!='..'){
    //         echo $lectura."<br>";
    //     }
    
    // }
    // $data->close();
    
      
     ?>    

</body>
</html>

