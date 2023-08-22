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
             
          function imagenesPagina($URL){
            
            $resultadoFinalURLS=[];
            $contenidoWeb=file_get_contents($URL);
            $regex ='/<img[^>]+src=["\']([^"\']+)["\'][^>]*>/';// este regex es para lo que queremos buscar, 
            // preg_match_all---> recibe 3 params: 1: regex, 2: string de texto, 3: array arrays de resultados
            if(preg_match_all($regex,$contenidoWeb,$resultado)){
                
                foreach($resultado[1] as $resultadoArraysURLS){
                    
                    array_push($resultadoFinalURLS,$resultadoArraysURLS);
                     
                    
                    
                }
            }
           return $resultadoFinalURLS;

          }  
         
          // imagenesPagina('https://www.mecavisionlab.com/');
          $arrayURLs=imagenesPagina('https://elemental-school.teachable.com/');
          foreach($arrayURLs as $url){
            echo "<img src='$url' width=20% height=auto>";
            }
            
        ?>
       
    </section>            



</body>
</html>
