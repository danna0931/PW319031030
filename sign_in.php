<?php
// Validar las credenciales de usuario
include "conexion.php"; // Incluye tu archivo de conexión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Verificar las credenciales en la base de datos
    $consulta_verificacion = "SELECT * FROM usuarios WHERE nombre_usuario='$usuario' AND password='$password'";
    $resultado = mysqli_query($conexion, $consulta_verificacion);

    // Verificar si hay resultados
    if ($resultado && mysqli_num_rows($resultado) > 0) {
        echo "<link rel='stylesheet' href='style.css'>";
        echo "<h1 class='title'>Home</h1>";
        echo "<button class='back'><a href='login.html'>Regresar</a></button>";
    } else {
        echo "<link rel='stylesheet' href='style.css'>";
        echo "<h1 class='title'>Usuario no encontrado/h1>";
    }
}

mysqli_close($conexion);
?>
