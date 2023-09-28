<?php
 $valor = $_POST['numero'];
    if($valor % 2 == 0){
        $arreglo = array();
        $contador1 = 0;
        $arreglo[$contador1]=$valor;
        $contador1=$contador1+1;
        //header("Location: lab44.html");
        for ($a = 0; $a <$contador1; $a++) {
            echo "[".$arreglo[$a]."]";
        }
    }
else {
    header("Location: lab44.html");
    echo "Ingrese un valor entero";
    exit;
}
?>