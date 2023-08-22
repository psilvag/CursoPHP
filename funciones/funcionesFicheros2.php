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
       // copy()
          copy('hola.txt','copia_Hola.txt');

       // rename()---> si esta en la misma carpeta lo renombra, sino lo cambia de lugar a la otra ruta con otro nombre
           
         // cambia de nombre un archivo
         //rename('copia_Hola.txt','copiaHola.txt');

         // lo lleva a otro directorio con otro nombre
         //rename('copia_Hola.txt','../copiade_Hola.txt');

         // lo cambia de directorio
         //rename('../copiade_Hola.txt','copiade_Hola.txt');

         // unlink()--> remueve un archivo
         //unlink('copiade_Hola.txt');

         //fopen()---->abre un archivo o un directorio
         /* 
            'r'  = abre el archivo en modo lectura   y  ubica el puntero al principio del fichero
            'r+' = abre el archivo en modo escritura y  lectura
            'w'  = abre el archivo en modo lectura,  lo trunca  longitud 0 y si no existe lo crea
            'w+' = abre el archivo en modo escritura y  lectura y lo mismo que 'w' 
            'a'  = abre el archivo en modo lectura,  si no existe lo crea,ubica el puntero al final del fichero
            'a+' = abre el archivo en modo escritura y  lectura, lo mismo que 'a'
            'x'  = abre el archivo en modo lectura   y  lo crea, si existe fopen() devolvera false o warning
            'x+' = abre el archivo en modo escritura y  lectura, lo mismo que 'x'
            'c'  = abre el archivo en modo lectura,  y  sino existe lo crea, no lo trunca,ubica el puntero al principio del fichero
            'c+' = abre el archivo en modo escritura y  lectura, y lo mismo que 'c'

         */ 

         /*
            fopen() abre el archivo con los accesos de arriba
            fgets() obtiene linea por linea el contenido del fichero
            fputs()  escribe sobre el archivo
            
          */
        $archivo=fopen('hola.txt','w');

        //fputs($archivo,'imprimiendo la primera linea'); 


        while($lectura=fgets($archivo)){
                echo $lectura."<br>";
            }
        fclose($archivo);

          
          
       ?>
    </section>

</body>
</html>