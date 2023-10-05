<?php
class factorial
{
    protected $numero;


    function __construct($num){
        $this->numero = $num;

    }

    function calcular_fact(){
        $factorial=1;
        for ($i = $this->numero; $i >0; $i--) {
            $factorial = $factorial*$i;
            
        }
    return $factorial;
    }
}

class carita
{
  protected $valor;    
    function __construct($v){
      $this->valor=$v;
    }
    function mostrar_cara(){
        $ruta=" ";
        if($this->valor>=80 && $this->valor<=100)
            $ruta="feliz.png";
        if($this->valor>=50 && $this->valor<=79)
            $ruta="normal.png";
        if($this->valor<50)
            $ruta="triste.png";
    return $ruta;
    }
}

class matriz
{
    protected $numero;
    function __construct($num){
        $this->numero=$num;
      }

    function crear_arreglo(){
        for ($fila = 0; $fila < $this->numero; $fila++) {
            echo "<br>";
            echo "<br>";
            for ($columna = 0; $columna < $this->numero; $columna++) {
                if ($fila == $columna) {
                    $matriz[$fila][$columna] = 1;
                }
                else  {
                    $matriz[$fila][$columna] = 0;
                    
                }
                echo "  ".$matriz[$fila][$columna]."  ";
            }
        }
    }


}
?>