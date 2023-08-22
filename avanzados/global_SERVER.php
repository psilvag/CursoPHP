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
           // $GLOBAL_SERVER: nos da info del entorno del servidor y de ejecucion, como cabeceras, rutas, IP del usuario, IP del servidor, puertos etc. ESTA INFORMACION LO PROPORCIONA EL SERVIDOR
           
           foreach($_SERVER as $key =>$value){ // ene este caso esta apuntando al servidor local XAMPP
            echo $key."=".$value."<br>";
           }
           
           $_SERVER['HTTP_X_FORWARDE_R']; // la ip del usuario por ejemplo
           
           // Funcion para extraer el ip real del usuario 
              function ip_real(){
                $header_array=[
                    'HTTP_CLIENT_IP',
                    'HTTP_PRAGMA',
                    'HTTP_XONNECTION',
                    'HTTP_CACHE_INFO',
                    'HTTP_XPROXY',
                    'HTTP_PROXY',
                    'HTTP_PROXY_CONNECTION',
                    'HTTP_VIA',
                    'HTTP_X_COMING_FROM',
                    'HTTP_X_FORWARDED_FOR',
                    'HTTP_X_FORWARDED',
                    'HTTP_X_CLUSTER_CLIENT_IP',
                    'HTPP_FORWARDED_FOR',
                    'HTPP_FORWARDED',
                    'ZHTTP_CACHE_CONTROL',
                    'REMOTE_ADDR'
                    
                ];
                foreach( $header_array as $key){
                    if(array_key_exists($key,$_SERVER)){
                        foreach(explode(',',$_SERVER[$key]) as $ip){
                            $ip=trim($ip);
                            if(filter_var($ip,FILTER_VALIDATE_IP,FILTER_FLAG_IPV4)!==false){
                                return $ip;
                            }
                        }
                    }
                }

              }
              echo ip_real()."<br>";

        ?>
    </section>

    
</body>
</html>