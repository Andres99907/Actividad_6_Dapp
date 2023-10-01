<?php

if($_POST) {
    $nombre = $_POST["txtNombre"];
	$apellido = $_POST["txtApe"];

    echo "Hola: " . $nombre ." ".$apellido;
} else {
    echo "Escriba su nombre señor";
}

?>