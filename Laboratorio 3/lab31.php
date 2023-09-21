<?php
$diametro = $_POST['diam'];
$altu = $_POST['altu'];
$radio = $diametro/2;
$Pi = 3.141593;
$volumen = $Pi*$radio*$radio*$altu;
echo "<br/> El Volumen del cilindro es de ". $volumen. " metros cubicos";

?>