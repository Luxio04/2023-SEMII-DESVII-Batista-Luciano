<?php
include('class_lib.php');
$numero = $_POST['num'];

$num = new factorial($numero);
$result=$num->mostrar_cara();

echo "<br/> El factorial de: ". $numero . " es: ". $result;

?>