
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
            // FUNCIONES QUE TRABAJAN CLASES

        echo "1. FUNCION: class_alias() : le da un alias al nombre de una clase"."<br>";
        class Test {
            public function Imprimir(){
                echo "Imprimiendo mensaje..."."<br>";
            }

        }
        // class_alias('Test','Ts');
        // $test= new Ts();
        $test= new Test();
        $test->Imprimir();


        echo str_repeat("_",50)."<br>";


        echo "2. FUNCION: class_exists() : verifica si una clase existe"."<br>";
        class Test2 {
            public   function Imprimir(){
                echo "Imprimiendo mensaje2..."."<br>";
            }
        }
        if(class_exists('Test2')){
            $test2=new Test2();
            $test2->Imprimir();
        }

        echo str_repeat("_",50)."<br>";
        
        echo "3. FUNCION: get_called_class() : obtiene el nombre de la clase, siempre y cuando se la llame desde un metodo estatico  "."<br>";
        class Test3 {
            public static  function ImprimirNombre(){
                var_dump(get_called_class());
            }
        }
        echo Test3::ImprimirNombre()."<br>";
        
        echo str_repeat("_",50)."<br>";

        echo "4. FUNCION: get_class_methods() : devuelve todos loe metodos en un array 
        NO DEVUELVE METODOS PROTECTED NI LOS PRIVATE "."<br>";
        class Test4 {
            public function metodo1 (){
                echo "METODO1"."<br>";
            }
            public function metodo2 (){
                echo "METODO2"."<br>";
            }
            public function metodo3 (){
                echo "METODO3"."<br>";
            }
            public function metodo4 (){
                echo "METODO4"."<br>";
            }
        }
        $arrayMetodos=get_class_methods("Test4");
        foreach($arrayMetodos as $metodo){
            echo $metodo."<br>";
        }

        echo str_repeat("_",50)."<br>";

        echo "5. FUNCION: get_class_vars() : devuelve todas las propiedades en un array  
        NO DEVUELVE LOS PROTECTED NI LOS PRIVATE"."<br>";
        class Test5 {
            public $a=1;
            public $b=2;
            public $c=3;
            protected $v=2;
            private $h=5;

            public function metodo1 (){
                echo "METODO1"."<br>";
            }
            public function metodo2 (){
                echo "METODO2"."<br>";
            }
            public function ObetenerVars(){
                return get_class_vars(get_class($this)); // get_class($this) obtiene el nombre de la clase, en este caso this le dice el nombre de esta clase
            }
          
        }
        $test5=new Test5();
        $arrayVars=get_class_vars("Test5");
        echo "Propiedades publicas"."<br>";
        foreach($arrayVars as $vars=>$value){
            echo "$vars=$value"."<br>";
        }
        $array=$test5->ObetenerVars();
        echo "Propiedades publicas/protected/private"."<br>";
        foreach($array as $v=>$value){
            echo "$v=$value"."<br>";
        }
        
        echo str_repeat("_",50)."<br>";

        echo "6. FUNCION: get_declared_classes(): devuelve todas las clases creadas y del lenguaje"."<br>";

         foreach(get_declared_classes() as $clase=>$valor){
            echo "$clase: $valor"."<br>";
         }
    
         echo str_repeat("_",50)."<br>";

         echo "7. FUNCION: get_declared_interfaces(): devuelve todas los interfaces declaradas y predefinidas del lenguaje"."<br>";

         echo str_repeat("_",50)."<br>";

         echo "8. FUNCION: get_declared_traits(): devuelve todas los traits declaradas en el lenguaje"."<br>";
         
         echo str_repeat("_",50)."<br>";

         echo "9. FUNCION: get_objects_vars():devuelve propiedades de un objeto instanceado, menos static"."<br>";
         class Test9 {
            public $a=1;
            public $b=2;
            static $c=5;
            protected $n=222;
            private $z=33;

            public function metodo (){
                echo "METODO"."<br>";
            }
            public function ObetenerVars(){
                return get_class_vars(get_class($this)); // get_class($this) obtiene el nombre de la clase, en este caso this le dice el nombre de esta clase
            }
            public function ObetenerObjectVars(){
                return get_object_vars($this); 
            }

          }
          $test9=new Test9();
            foreach( get_object_vars($test9) as $v=>$value){
            echo "$v=$value"."<br>";
            }
            echo "obteniendo las protected, private"."<br>";
            foreach($test9->ObetenerObjectVars() as $v=>$value){
            echo "$v=$value"."<br>";
            }

            echo str_repeat("_",50)."<br>";

            echo "10. FUNCION: get_parent_class(): devuelve el nombre de la clase padre 
            EJEMPLO: get_parent_class() "."<br>";

            echo str_repeat("_",50)."<br>";

            echo "11. FUNCION: interfaces_exists(): verifica si una interface esta definida    EJEMPLO: interfaces_exists(NOMBRE DE LA INTERFACE) "."<br>";

            echo str_repeat("_",50)."<br>";

            echo "12. FUNCION: is_subclass_of(): verifica si una clase es hija de una clase, o depende de una interface EJEMPLO: is_subclass_of(nombreClasehija, nombredeclasePadre)  o is_subclass_of(nombreClasehija, nombredeinterface)  "."<br>";

            echo str_repeat("_",50)."<br>";

            echo "13. FUNCION: method_exist(): verifica si existe el metodo en esa clase EJEMPLO: method_exist(instaceamientodelaClase, nombredelmetodo)  "."<br>";

            echo str_repeat("_",50)."<br>";

            echo "14. FUNCION: property_exist(): verifica si existe la propiedad en esa clase EJEMPLO: property_exist(instaceamientodelaClase, nombredelapropiedad)  "."<br>";

            echo str_repeat("_",50)."<br>";

            echo "15. FUNCION: trait_exists(): verifica si existe un trait definido EJMPLO: trait_exists(nombredelTRAIT)  "."<br>";

            echo str_repeat("_",50)."<br>";

            echo "16. FUNCION: instaceOf(): verifica si un objeto es instancea de una clase EJMPLO: nombredelobjeto instaceOf nombreclase  "."<br>";





        ?>

        </section>

    
</body>
</html>