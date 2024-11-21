<?php
$archivo = 'resultados.txt';

$respuesta = $_POST['respuesta'];

if (file_exists($archivo)) {
    $resultados = json_decode(file_get_contents($archivo), true);
} else {
    $resultados = ['Bai' => 0, 'Ez' => 0];
}

if (isset($resultados[$respuesta])) {
    $resultados[$respuesta]++;
}

file_put_contents($archivo, json_encode($resultados));

header("Location: resultados.php");
exit();
?>
