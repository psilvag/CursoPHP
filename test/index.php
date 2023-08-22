<?php include 'utils/test.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./estilos.css">

</head>
<body>

    <header class="style_header">
        <h1>HEADER</h1>
    </header>

    <section class="style_section">
         <h1>SECTION</h1>      
         <h2>PAGE 1</h2>
         <p><?php saludar()?></p>
         <p><?php echo "Bienvenido $nombre" ?></p>
        

    </section>

    <footer class="style_footer">
     <h1>FOOTER</h1>
    </footer>
    
</body>
</html>