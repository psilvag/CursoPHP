<?php
 // el @ omite los mensajes de error en html, como el archivo contador.txt no esta creado aun, entonces usamos @
 function contador() {
    $archivo = 'contador.txt';

    if (file_exists($archivo)) {
        $data = fopen($archivo, 'r');
        $contador = fread($data, filesize($archivo));
        fclose($data);

        $contador = intval($contador) + 1; // intval se asegura que contador sea un valor entero

        $data = fopen($archivo, 'w+');
        fwrite($data, $contador);
        fclose($data);
    } else {
        $contador = 1;

        $data = fopen($archivo, 'w+');
        fwrite($data, $contador);
        fclose($data);
    }

    return $contador;
}
?>