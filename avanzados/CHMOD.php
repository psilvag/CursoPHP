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
                // niveles de aceso a los ficheros o directorios
                // read-->lectura
                // write--->escritura
                // execute----> ejecutar

                // Categorias de usuario
                // ower--> propietario
                // group---> grupo
                // other---> publico
                /*0XXX---->  x: MODIFICACION DE ACCESO A OWNER
                             X: MODIFICACION DE ACCESO A GRUPO
                             X: MODIFICACION DE ACCESO A PUBLICO*/
                 /*          0 = sin acceso
                             1 = ejecucion
                             2 = escritura 
                             4 = lectura
                */
                             
                //chmod('test.php',0111);
                //chmod('test.php',0333);// 3 suma de 1 y 2 : acceso a  ejecucio y escritura
                //chmod('test.php',0600);// 6 sumae 2 y 4 : acceso a escritura y lectura
                chmod('./hola.txt',0700);// 4 solo lectura 
                

            ?>
        </section>
    
</body>
</html>