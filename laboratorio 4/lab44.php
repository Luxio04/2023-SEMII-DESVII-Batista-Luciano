<!DOCTYPE html>
<html>
<head>
    <title>laboratorio 4.4</title>
</head>
<body>
    <form method="post" action="">
        <label>Introduce un número par:</label>
        <input type="text" name="numero">
        <button type="submit"> Agregar número par </button>
    </form>

    <?php
    $numeros_pares = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];

        if ($numero % 2 == 0) {
            
            $numeros_pares[] = $numero;
            echo "<p>Número par agregado: $numero</p>";
        } else {
            echo "<p>Por favor, introduce un número par.</p>";
        }
    }
    ?>

    <h2>Números pares ingresados:</h2>
    <ul>
        <?php
        foreach ($numeros_pares as $numero_par) {
            echo "<li>$numero_par</li>";
        }
        ?>
    </ul>
</body>
</html>