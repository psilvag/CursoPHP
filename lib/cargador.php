<?php
        // SE RECOMIENDA CREAR UN ARCHIVO PARA CADA CLASE   --->clase1.php,clase2.php etc
        // pero para no importar las clases uno por uno utilizamos lo siguiente:
function clasesRegistradas($clase){
               require "lib/$clase.php";   // especificar la ruta
            }
        spl_autoload_register("clasesRegistradas");
         

            $hola=new Hola();
            $mundo=new Mundo();
?>