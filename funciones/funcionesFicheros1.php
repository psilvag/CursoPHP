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
        
          // wrappers con las que trabaja php
          foreach(stream_get_wrappers() as $fv){
            echo "$fv"."<br>";
           }


           echo "FUNCIONES PARA TRABAJAR CON FICHEROS"."<br>";

           // fileExists
           // el archivo test.php 
           // ./test.php  ---->  lo busca la carpeta en la que estamos trabajando
           // ../test.php ----> lo busca en una carpeta anterior
           // /test.php   ----> busca en la raiz de todo, en este caso C:
           // file:// test.php ----> para que funcione se debe poner toda la ruta del archivo


           // __FILE__ --> devuelve la ruta de todo el archivo 
           // dirname() -->devuelve la ruta del directorio padre (la carpeta padre donde estamos trabajando)
           // is_dir(ruta)-->  valida si existe esa ruta del directorio
           // is_file(namefile)--> verfica si es un archivo
           // is_readable() --> verifica si se tiene permiso de leer
           // is_writeable()--> verifica si se tiene permiso de escribir
           // filesize(file)---> devuelve el tamaño del archivo en bytes
           // is_executable(namefile)---> verifica si ese archivo es un ejecutable .exe
           // basename()---> devuelve el final de la ruta Ej. C:\xampp\htdocs\cursoPHP\fichero1.php devuelve fichero1.php 


           define("KB",1024);
           define("MB",pow(KB,2));
           define("GB",MB*KB);
           define("TB",GB*KB);

           

           echo __FILE__."<br>";
           //echo dirname(__FILE__,3)."<br>";  // el parametro 3 devuelve hacia atras
           echo dirname(__FILE__)."<br>";
     
           if(file_exists('file:///'.dirname(__FILE__).'/test.php')){
            echo "El archivo si existe"."<br>";
           }else{
            echo "El archivo no existe"."<br>";
           }
           if(file_exists('/test.php')){
            echo "El archivo si existe"."<br>";
           }else{
            echo "El archivo no existe"."<br>";
           }

            echo  filesize('test.php')."<br>";

            echo  "Tienes".round(disk_free_space('C:')/GB,2)."Gb libres de espacio de un total de".round(disk_total_space('C:')/GB,2)."Gb";

        ?>
        </section>

       
        
        
        
        

</body>
</html>