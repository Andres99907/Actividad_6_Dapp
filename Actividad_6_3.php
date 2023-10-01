<?php
if($_POST) {
    $valor1 = $_POST["btn"];
   
    if ($valor1 === "btn1") {
            echo "btn1 presionado";
    } elseif ($valor1 === "btn2") {
            echo "btn2 presionado";
    } else {
            echo "no se que hiciste pero digamos que hay un botón 3.";
    }
}   
?>