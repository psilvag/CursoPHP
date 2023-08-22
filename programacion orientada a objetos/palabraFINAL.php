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
        // LA PALABRA FINAL DELANTE DE UNA CLASE IMPIDE QUE ESA CLASE PUEDA HEREDAR
           class clasePadre{
            
            // LA PALABRA FINAL IMPIDE QUE LA FUNCION SE REDECLARE
              final public function imprimir(){
                return "Imprimiendo desde la clase padre";
               }

           }

           class Hija extends clasePadre {
             public function imprimir2(){
                return "Imprimiendo desde la clase hija modificando al padre";
             }
           }
        $padre= new clasePadre();
        $hija= new Hija();

         echo  $hija->imprimir();
      
           
        ?>



</section>
           

    
</body>
</html>