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
    // Una interface especifica los metodos que deben ser usadas por una clase
    // todos los metodos de las LAS INTERFACES  deben ser PUBLICOS y solo se declaran

    interface Test{
        public function saludo1();
        
    }
    interface Test2 extends Test{
        public function saludo2();
        const P=3434663;
    }
    interface Test3 extends Test,Test2{
        public function saludo3();
    }

    class Prueba  implements  Test3{
        public function saludo1()
        {
            return "HOLA DESDE SALUDO 1";
        }
        public function saludo2()
        {
            return "HOLA DESDE SALUDO 2";
        }
        public function saludo3()
        {
            return "HOLA DESDE SALUDO 3";
        }
    }
       $prueba= new Prueba();
       echo $prueba->saludo1()."<br>";
       echo $prueba->saludo2()."<br>";
       echo $prueba->saludo3()."<br>";
       echo Test2::P."<br>";
    ?>
</section>


    
</body>
</html>