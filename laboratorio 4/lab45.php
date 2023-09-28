<?php
    $valor = $_POST['numero'];
    if($valor % 2 == 0){
    for ($fila = 0; $fila < $valor; $fila++) {
        for ($columna = 0; $columna < $valor; $columna++) {
            if ($fila == $columna) {
                $matriz[$fila][$columna] = 1;
            }
            else  {
                $matriz[$fila][$columna] = 0;
            }


        }
    } 
    for ($fila = 0; $fila < $valor; $fila++) {
        echo "<br>";
        echo "<br>";
        for ($columna = 0; $columna < $valor; $columna++) {
            echo "  ".$matriz[$fila][$columna]."  ";
        }

    }
}

else{
    header("Location: lab45.html");
    exit; 

}
  ?>