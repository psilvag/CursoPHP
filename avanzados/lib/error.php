<?php
function gestorErrores($errorNo,$errorStr,$errorFile,$errorLine){
  if(!(error_reporting()& $errorNo)){
    return;
  }
  
  switch($errorNo){
    case E_USER_ERROR :
        echo "Codigo de error:$errorNo  <br> Ruta:$errorFile <br> Linea:$errorLine <br>";
    break;
    case E_USER_WARNING:
        echo "Codigo de error:$errorNo <br> Ruta:$errorFile <br> Linea:$errorLine <br>";
    break;
    case E_USER_NOTICE:
        echo "Codigo de error:$errorNo <br> Ruta:$errorFile <br> Linea:$errorLine <br>";
    default:
    echo 'Error desconocido';
  }

}

set_error_handler('gestorErrores');
?>