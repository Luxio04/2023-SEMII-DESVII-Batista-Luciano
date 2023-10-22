<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Laboratorio 9.1</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <h1>Consulta de noticias</h1>

    <?php
        require_once("class/noticias.php");
        $comienzo = isset($_GET['comienzo']) ? $_GET['comienzo'] : 0;
        $num = 5;

        $obj_noticia = new noticia();
        $noticias = $obj_noticia->consultar_noticias();

        $nfilas = count($noticias);

        // Mostrar información de paginación
        $totalRegistros = $nfilas; // Reemplaza con el total de registros en la base de datos
        $paginaActual = ($comienzo / $num) + 1;
        $paginaAnterior = max(1, $paginaActual - 1);
        $paginaSiguiente = min(ceil($totalRegistros / $num), $paginaActual + 1);


        
        if($nfilas > 0){
            printf("<TABLE>\n");
            printf("<TR>\n");
            printf("<TH>Titulo</TH>\n");
            printf("<TH>Texto</TH>\n");
            printf("<TH>Categoria</TH>\n");
            printf("<TH>Fecha</TH>\n");
            printf("<TH>Imagen</TH>\n");
            printf("</TR>\n");
            if ($paginaAnterior != $paginaActual) {
                echo "Mostrando noticias " . (6) . " a " . (7) . " de un total de $totalRegistros. ";
                echo "[ <a href='" . $_SERVER['PHP_SELF'] . "?comienzo=" . ($paginaAnterior - 1) * $num . "'>Anterior</a> | Siguiente ]";
                for ($i = 5; $i < 7; $i++) {
                    $resultado = $noticias[$i];
                    
                    echo "<TR>\n";
                    echo "<TD>" . $resultado['titulo'] . "</TD>\n";
                    echo "<TD>" . $resultado['texto'] . "</TD>\n";
                    echo "<TD>" . $resultado['categoria'] . "</TD>\n";
                    echo "<TD>" . date("j/n/Y", strtotime($resultado['fecha'])) . "</TD>\n";
                
                    if ($resultado['imagen'] != "") {
                        echo "<TD><A TARGET='_blank' HREF='img/" . $resultado['imagen'] . "'><IMG BORDER='0' SRC='img/iconotexto.gif'></A></TD>\n";
                    } else {
                        echo "<TD>&nbsp;</TD>\n";
                    }
                    echo "</TR>\n";
                }
            }else{
                echo "Mostrando noticias " . ($comienzo + 1) . " a " . ($comienzo + 5) . " de un total de $totalRegistros. ";
                echo "[ Anterior | <a href='" . $_SERVER['PHP_SELF'] . "?comienzo=" . ($paginaSiguiente - 1) * $num . "'>Siguiente</a> ]";
                for ($i = 0; $i < 5; $i++) {
                    $resultado = $noticias[$i];
                    
                    echo "<TR>\n";
                    echo "<TD>" . $resultado['titulo'] . "</TD>\n";
                    echo "<TD>" . $resultado['texto'] . "</TD>\n";
                    echo "<TD>" . $resultado['categoria'] . "</TD>\n";
                    echo "<TD>" . date("j/n/Y", strtotime($resultado['fecha'])) . "</TD>\n";
                
                    if ($resultado['imagen'] != "") {
                        echo "<TD><A TARGET='_blank' HREF='img/" . $resultado['imagen'] . "'><IMG BORDER='0' SRC='img/iconotexto.gif'></A></TD>\n";
                    } else {
                        echo "<TD>&nbsp;</TD>\n";
                    }
                    echo "</TR>\n";
                }
            }
            printf("</TABLE>\n");
        }else{
            printf("No hay noticias disponibles");
        }
    ?>
</body>

</html>