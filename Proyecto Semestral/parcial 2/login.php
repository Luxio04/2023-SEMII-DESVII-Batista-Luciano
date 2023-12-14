<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <!-- Otras etiquetas head y estilos -->
</head>
<body>
    <div class="container">
        <h1>Iniciar Sesión</h1>
        <form method="post" action="login.php">
            <label for="email">Correo:</label>
            <input type="email" id="email" name="email" placeholder="Correo electrónico" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
            <select id="role" name="role" required> seleccione la categoria
                <option value="admin">Administrador</option>
                <option value="employee">Empleado</option>
            </select>
            <button type="submit">Iniciar Sesión</button>
        </form>
        <p id="message" style="color: red;"></p>
        <a href="http://localhost/Proyecto%20Semestral/parcial%202/">Regresar a la página de inicio</a>

    </div>
</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("class/Sesion.php");
    $objeto = new Sesion();
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $resul = $objeto->validar($email, $password, $role);
    if ($resul>0) {
        echo "inicio de sesion exitoso";
    }
    else {
        echo "error de sesion";
    }

}
?>
</html>

