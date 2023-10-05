<?php
include('class_lib.php');

    $numero = $_POST['valor'];
    $cara = new carita($numero);
    $result=$cara->mostrar_cara();
    echo "<img src= $result  width='400' height='400' >";

?>