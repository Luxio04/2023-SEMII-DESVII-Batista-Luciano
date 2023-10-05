<?php
include('class_lib.php');

$numero = $_POST['valor'];
$tabla= new matriz($numero);
$tabla->crear_arreglo();
/* for ($fila = 0; $fila < $valor; $fila++) {
    echo "<br>";
    echo "<br>";
    for ($columna = 0; $columna < $valor; $columna++) {
        $result=$tabla->mostrar_cara($fila,$columna);
        echo " ".$result." ";
    }
} */
?>