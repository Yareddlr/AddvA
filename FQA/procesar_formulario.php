<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname,);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Procesar datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $nombre = $_POST["Nombre"];
    $email = $_POST["Email"];

    // Insertar datos en la base de datos usando prepared statements
    $stmt = $conn->prepare("INSERT INTO usuarios (nombre, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $nombre, $email);

    if ($stmt->execute()) {
    echo "Registro exitoso";
    } else {
    echo "Error: " . $stmt->error;
    }

    // Cerrar la declaración
    $stmt->close();
}

// Cerrar conexión
$conn->close();
?>
