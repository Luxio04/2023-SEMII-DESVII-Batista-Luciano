<?php
if (isset($_FILES['miArchivo']) && $_FILES['miArchivo']['error'] === 0) {
    $tamanoMaximo = 2 * 1024 * 1024; 
    $tiposPermitidos = ['image/jpeg', 'image/png'];

    $nombreDirectorio = "archivos/";
    $nombrearchivo = $_FILES['miArchivo']['name'];
    $nombreCompleto = $nombreDirectorio . $nombrearchivo;

    
    if (file_exists($nombreCompleto)) {
        $idUnico = time();
        $nombrearchivo = $idUnico . "-" . $nombrearchivo;
        echo "Archivo repetido, se cambiará el nombre a $nombrearchivo <br><br>";
    }

   
    if ($_FILES['miArchivo']['size'] <= $tamanoMaximo && in_array($_FILES['miArchivo']['type'], $tiposPermitidos)) {
        if (move_uploaded_file($_FILES['miArchivo']['tmp_name'], $nombreDirectorio . $nombrearchivo)) {
            echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
        } else {
            echo "No se ha podido subir el archivo al servidor <br>";
        }
    } else {
        echo "El archivo no cumple con los requisitos de tamaño o tipo permitido <br>";
    }
} else {
    echo "No se ha podido subir el archivo <br>";
}
?>