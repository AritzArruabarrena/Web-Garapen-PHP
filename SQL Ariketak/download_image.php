<?php
$hostname = "localhost";
$usuario = "root";
$password = "Admin123";
$basededatos = "phpariketak";

$conn = new mysqli($hostname, $usuario, $password, $basededatos);
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $stmt = $conn->prepare("SELECT irudia FROM propiedades WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($irudia);
    $stmt->fetch();

    if ($irudia) {
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=imagen_$id.jpg");
        echo $irudia;
    } else {
        echo "Imagen no encontrada.";
    }

    $stmt->close();
}

$conn->close();
?>
