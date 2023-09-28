<?php
$numero = $_POST['num'];
$factorial = 1;
for ($i = $numero; $i >0; $i--) {
    $factorial = $factorial*$i;
    echo $i."X";
}
echo "<br/> El factorial de ". $numero. " es:". $factorial;
?>