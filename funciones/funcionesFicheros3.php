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
        // header()---> descarga el archivo con la extension del fichero
        // readfile() funcion abre el archivo y lo escribe en el buffer de salida
        // feof()---> verifica si el puntero esta en la ultima linea del fichero
        // file()-----> devuelve el contenido en una array, cada linea del fichero es un indice del array
        // si el fichero es una url, cada linea es interpretada como HTML y el navegador lo ejecuta entonces devuelve la pagina como tal, para convertirlo a texto plano necesitamos usar:
        // htmlspecialchars()----> convierte los caracteres especiales a entidades HTML
        // htmlentities()----> convierte todos los caracteres aplicables a entidades HTML

        //file_get_contents()---> devuelve el archivo en un solo string
        //file_put_contents()---> abre el archivo y SOBREESCRIBE SOBRE EL ARCHIVO
        //              file_put_contents(nombrearchivo o ruta, lo que escribira, FILE_APPEND) FILEAPPEND LE DICE QUE NO SOBREESCRIBA TODO SI EL ARCHIVO EXISTE, SINO QUE AÑADA LO ESCRITO

        // rewind()----> devuelve el puntero al inicio del archivo
        // ftell() ---> devuelve la posicion actual del puntero, EL PUNTERO EMPIEZA EN 0
        // fseek()---> posiciona el puntero en el lugar que deseas fseek(arhivo,4), el puntero en pos 4

        
        $fichero='hola.txt';
        //   header('Content-Disposition:attachment; filename="'.basename($fichero).'"');
        //   readfile($fichero);
        // _______________________________________________________________________________

        // $archivo=fopen('hola.txt','r');
        // while(!feof($archivo)){
        //     echo fgets($archivo)."<br>";
        // }
        // fclose($archivo);
        // _______________________________________________________________________________

        // $lineas=file($fichero);
        // foreach($lineas as $linea){
        //     echo $linea."<br>";
        // }
        
        // _______________________________________________________________________________
        // $ficheroRemoto=file('https://google.com.bo');
        //  foreach($ficheroRemoto as $linea){
        //     echo htmlspecialchars($linea)."<br>";
        // }
        // _______________________________________________________________________________
        // header('Content-Type:text/plain');
        // echo file_get_contents('https://google.com.bo');
        // _______________________________________________________________________________
        
         $lectura= fopen($fichero,'r+');
         echo fread($lectura,15);
         fseek($lectura,4);
         echo "Posicion del puntero".ftell($lectura);


        

        
       



        
          
        ?>
    </section>
    
</body>
</html>