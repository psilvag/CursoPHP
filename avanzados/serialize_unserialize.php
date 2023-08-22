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
        // serialize:  maneja los datos con la siguiente estructura
        /**
         * caracter   Dato      Descripcion   Ejemplo
         * s          string    cadena        s:4:"hola"; (string:tamaño:valor)
         * i          integer   entero        i:5 (integer:valor)
         * d          double    decimal       d:7.0453 (double:valor)
         * a          array     arreglo       a:5:{i:3; s:4:"hola"; d:5; i:8; s:3:"php"}(array:cantidad:{definicion})
         * 
         * o          object    clase,objeto  o:4:"Test":5:{PROPIEDADES}
         *(objeto:longitudDelNombreClase:nombreClase:cantidadPropiedades:{string:tamaño:nombreKey; string:tamaño:NombreValue})

         *si hay un asterisco delante el valor es protected  "*b": serializado seria s:4:"*b"         suma mas 3 al string   
         *si manda el nombre de la clase seguido del nombre del key, es private: serializado seria s:12:"Testgenero" ; suma mas 2 al string total : Testgenero+2=12 PRIVATE  
         *si no, entonces la propiedad es public, NO SERIALIZA METODOS
         *
         * b          bool      boolean       b:1;  true    b:0; false
         * N          Null      Nulo          N:N;         
         */

         $x="hola";
         $seriado=serialize($x); 
         echo $seriado;
         $y=unserialize($seriado);
         echo "UNSERIAL:".$y."<br>";
         
         class Test{
            public $nombre="pablo";
            public $apellido="silva";
            protected $edad=30;
            private $genero="M";

        //eL ANTERIOR OBJETO SERIALIZADO QUEDARIA:
        //O:4:"Test":4:{s:6:"nombre";s:5:"pablo";s:8:"apellido";s:5:"silva";s:7:"*edad";i:30;s:12:"Testgenero";s:1:"M";}

            public function __sleep()
            {
              return ['apellido']; // antes de serializar lee este array y serializa las propiedades que esta dentro este array
            }
            // public function __wakeup()
            // {
            //  echo "Este metodo se ejecuta automaticamente solo cuando ocurre una des-serializacion ";
            // }
         }
         
         $z= new Test();
         $serializado= serialize($z);
         echo "SERIAL DE OBJETO:".$serializado."<br>";
         $un=unserialize($serializado);
         echo $un->nombre;   
        ?>
    </section>
    
</body>
</html>