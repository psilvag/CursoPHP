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
     // trait
    trait  A{
      public function funcionA1(){
        echo "Hola soy la funcion A1 trait A"."<br>";
      }
      public function funcionA2(){
        echo "Hola soy la funcion A2 trait A"."<br>";
      }
      protected function funcionProtegida(){
        echo "Esto es una funcion protegida trait A"."<br>";
      }
    }
    trait B{
      public function funcionA1(){
        echo "Hola soy la funcion A1 trait B"."<br>";
      }
      public function funcionA2(){
        echo "Hola soy la funcion A2 trait B"."<br>";
      }
    }

    trait C{
      use A,B{
      A::funcionA1  insteadOf B; // le decimos que la funcion1 de A tenga prioridad sobre B
      A::funcionA2 insteadOf B; // le decimos que la funcion2 de A tenga prioridad sobre B
      B::funcionA1 as f1;
      B::funcionA2 as f2;
      funcionProtegida as  public FP;  // podemos cambiar el modificador de acceso
      }
    }

    class Ejemplo{
        use C;
        
       
    }
    $ejemplo= new Ejemplo();
    $ejemplo->funcionA1();
    $ejemplo->funcionA2();
    $ejemplo->f1();
    $ejemplo->f2();
    $ejemplo->FP();

    ?>
   
    <section>
      <?php
          trait Hola{
             abstract public function obtenerMundo();

             public function decirHolaMundo(){
                echo "hola planeta {$this->obtenerMundo()}";
             }
         }

         class HolaMundo{
          private $mundo;
          use Hola;
          public function obtenerMundo(){
            return $this->mundo;
          }
          public function asignarMundo($valor){
            return $this->mundo=$valor;
          }
         }

         $clase =new HolaMundo();
         $clase->asignarMundo('venus');
         $clase->decirHolaMundo();



      ?>

    </section>


    <section>
      <?php
         trait contador{
           public function iniciar(){
             static $n=0;  // con static n=0 una sola vez, sin eso siempre que llamen a iniciar() n=0
            $n++;         // aqui ya incrementa en mas uno 
            echo $n."<br>";
           }
           public static function saludar(){
            echo "HOLA A TODOS";
           }
         }

         class Contar{
          use contador;

         }
         $contar=new Contar();
         $contar->iniciar();
         $contar->iniciar();
         $contar->iniciar();
         $contar->iniciar();
         $contar::saludar();

      ?>
    </section>

    

</body>
</html>