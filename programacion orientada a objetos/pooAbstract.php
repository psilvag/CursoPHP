<?php

// ABSTRACT SIGNIFICA QUE LA CLASE NO PUEDE SER INSTANCEADA

abstract class Padre {

    // si tienes un metodo abstracto la clase debe ser abstracto
    // las funciones abstract solo pueden declararse
    // LAS FUNCIONES ABSTRACT OBLIGATORIAMENTE TIENEN  QUE TENER HERENCIA
    abstract protected  function getValor();
    abstract protected function valor($arg);
    abstract protected function valor2($arg);

    public function imprimir() {
        echo $this->getValor();
    }  
    
}

 class Hija extends Padre{
    protected  function getValor(){
        return "Imprimiendo desde la clase hija"."<br>";
    }
    public function valor($arg){
        return "Imprimiendo el valor $arg"."<br>";
    }
    public function valor2($arg,$arg2=0){
        return "Imprimiendo el valor $arg con un valor extra $arg2"."<br>";
    }
 }
$hija= new Hija();
echo $hija->imprimir();
echo $hija->valor(43453);
echo $hija->valor2(44);







 
?>