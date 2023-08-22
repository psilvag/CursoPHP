
<?php
    if($_POST){
    $color=$_POST['color'];
    setcookie('colorDeFondo',$color,time()+60*60);
  }elseif(isset($_COOKIE['colorDeFondo'])){
    $color=$_COOKIE['colorDeFondo'];
  }else{
    $color='#ffffff'; //#19656B
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">

   
</head>
<body style="background-color:<?php echo $color?>">

<div class="contenedor">
    <div class="formulario">
        <form action="" method="POST" role="form">
         <h2>Cambiar color a la pagina</h2>
         <select name="color" id="">
            <option value="" <?php if($color==''){ echo 'selected'; } ?>></option>
            <option value="red" <?php if($color=='red'){ echo 'selected'; } ?>>Rojo</option>
            <option value="purple"<?php if($color=='purple'){ echo 'selected'; } ?>>Morado</option>
            <option value="orange"<?php if($color=='orange'){ echo 'selected'; } ?>>Naranja</option>
            <option value="blue"<?php if($color=='blue'){ echo 'selected'; } ?>>Azul</option>
            <option value="pink"<?php if($color=='pink'){ echo 'selected'; } ?>>Rosado</option>
            <option value="green"<?php if($color=='green'){ echo 'selected'; } ?>>Verde</option>
         </select>
         <button type="submit" class="btn_enviar">Cambiar color</button>
        </form>
    </div>
</div>
    
</body>
</html>