<?php

function imprimirArgumentos( ...$listArgs ) {

	echo "
        <style>
        .HelpersDump {
            background-color: white;
            height: 100% !important;
            width: 100% !important;
            z-index: 9999999;
        }

        .HelpersDump p {
            max-height: 700px;
            max-width: 700px;
            background-color: #111834;
            color: white;
            padding: 20px;
            overflow: auto;
            border-radius: 5px;
        }
        </style>
        ";

	echo "<div class=\"HelpersDump\"><p>\n";
	foreach ( $listArgs as $key => $arg ) {

		 echo $key > 0 ? "\n------------------------\n\n" : '';
		var_dump( $arg );

	}

	echo "</p></div>";

	die;

}
