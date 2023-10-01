<?php
if($_POST) {
    $valor1 = $_POST["valor1"];
	$valor2 = $_POST["valor2"];
   
    if($valor1 == $valor2){
    echo "Resultado verdadero";
	}
	else 
	{
	echo "Resultado falso";	
	}
}   
?>