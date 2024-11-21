<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $izenburua = $_POST['izenburua'];
    $testua = $_POST['testua'];
    $mota = $_POST['mota'];

    $uploadDir = 'uploads/';

    echo "Berria ondo jaso da<br>";
    echo " - Izenburua: $izenburua<br>";
    echo " - Testua: $testua<br>";
    echo " - Kategoria: $mota<br>";

    if (isset($_FILES['irudia']) && $_FILES['irudia']['error'] === UPLOAD_ERR_OK) {

        $uploadFile = $uploadDir . basename($_FILES['irudia']['name']);

        if (getimagesize($_FILES['irudia']['tmp_name']) !== false) {
            if (move_uploaded_file($_FILES['irudia']['tmp_name'], $uploadFile)) {
                echo " - Irudia: <a href='$uploadFile' download>Deskargatu irudia</a><br>";
            } else {
                echo "Argazkia ezin izan da kargatu.<br>";
            }
        } else {
            echo "Imagen artxiboa ez doa.<br>";
        }
    } else {
        echo "Ez dago argazkirik.<br>";
    }
}
?>

<a href="index.php">Beste berri bat gehitu</a>
