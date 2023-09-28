<html>
<head>
 <title>laboratorio 4.1 </title>
</head>
</body>

<?php
$Valor = $_POST['valor'];
if($Valor>=80 && $Valor<=100)
    echo '<img src="feliz.png"  width="400" height="400" >';
if($Valor>=50 && $Valor<=79)
    echo '<img src="normal.png"  width="400" height="400" >';
    if($Valor<50)
    echo '<img src="triste.png"  width="400" height="400" >';
?>

</html>
<body>