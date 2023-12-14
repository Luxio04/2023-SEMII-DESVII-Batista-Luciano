
<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuario</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>
    <div class="container">
        <h1>Registro de Usuario</h1>
        <form method="post" action="register.php">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="username" placeholder="Nombre de usuario" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" placeholder="Contraseña" required>
            <label for="email">Correo:</label>
            <input type="email" id="email" name="email" placeholder="Escribe tu correo" required>
            <div></div>
            <select id="role" name="role" required> seleccione la categoria
                <option value="admin">Administrador</option>
                <option value="employee">Empleado</option>
            </select>
            <button type="submit">Registrar</button>
        </form>
        <p id="message" style="color: red;"></p>
        <a href="http://localhost/Proyecto%20Semestral/parcial%202/">Regresar a la página de inicio</a>
        </div>

</body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("class/Sesion.php");
    $objeto = new Sesion();
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

   
    $resultado = $objeto->Registrar($username, $email, $password,$role);
    
    if ($resultado) {
        echo "Valores agregados correctamente a la base de datos.";
    } else {
        echo "Hubo un error al agregar los valores a la base de datos.";
    }
}   
?>
</html>
