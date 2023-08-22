<?php  
if($_POST){
    $nombre=strtolower($_POST['nombre']); 
    $apellido=strtolower($_POST['apellido']);
   
    $campo1="pablo";
    $campo2="silva";
    if($campo1!==$nombre){
        echo "El nombre no es correcto, redireccionando...";
        echo "<meta http-equiv='Refresh' content='3; url=../GET_POST.php'>";
    }elseif($campo2!==$apellido){
        echo "El apellido no es correcto, redireccionando...";
        echo "<meta http-equiv='Refresh' content='3; url=../GET_POST.php'>";
    }else{
        echo "Bienvenido a la zona vip";
    }
}
else{
    header('Location:../GET_POST.php');
}


?>