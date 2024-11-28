<?php
$host = 'localhost';
$user = 'root';
$password = 'Admin123';
$dbname = 'phpariketak';

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Errorea datu basearekin konektatzerakoan: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mota = $_POST['mota'] ?? '';
    $zonaldea = $_POST['zonaldea'] ?? '';
    $helbidea = $_POST['helbidea'] ?? '';
    $logelak = $_POST['logelak'] ?? '3';
    $prezioa = $_POST['prezioa'] ?? 0;
    $tamaina = $_POST['tamaina'] ?? 0;
    $extrak = isset($_POST['extrak']) ? implode(',', $_POST['extrak']) : '';
    $irudia = $_POST['irudia'] ?? '';
    $oharrak = $_POST['oharrak'] ?? '';

    $stmt = $conn->prepare("INSERT INTO propiedades (mota, zonaldea, helbidea, logelak, prezioa, tamaina, extrak, irudia, oharrak) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssdssss", $mota, $zonaldea, $helbidea, $logelak, $prezioa, $tamaina, $extrak, $irudia, $oharrak);

    if ($stmt->execute()) {
        echo "Etxebizitza berria behar bezala gehitu da.";
    } else {
        echo "Errorea datuak gehitzerakoan: " . $stmt->error;
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="eu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beste berri bat gehitu</title>
</head>
<body>
    <h1>Beste berri bat gehitu</h1>
    <form method="POST" action="">
        <label for="mota">Mota:</label>
        <select id="mota" name="mota" required>
            <option value="Pisua">Pisua</option>
            <option value="Txaleta">Txaleta</option>
            <option value="Etxea">Etxea</option>
        </select>
        <br><br>

        <label for="zonaldea">Zonaldea:</label>
        <select id="zonaldea" name="zonaldea" required>
            <option value="Alde zaharra">Alde zaharra</option>
            <option value="Deustu">Deustu</option>
            <option value="Atxuri">Atxuri</option>
            <option value="Miribilla">Miribilla</option>
            <option value="Basurtu">Basurtu</option>
        </select>
        <br><br>

        <label for="helbidea">Helbidea:</label>
        <input type="text" id="helbidea" name="helbidea" required>
        <br><br>

        <label for="logelak">Logelak:</label>
        <select id="logelak" name="logelak">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3" selected>3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <br><br>

        <label for="prezioa">Prezioa (€):</label>
        <input type="number" id="prezioa" name="prezioa" step="0.01" required>
        <br><br>

        <label for="tamaina">Tamaina (m²):</label>
        <input type="number" id="tamaina" name="tamaina" step="0.01" required>
        <br><br>

        <label>Extrak:</label>
        <input type="checkbox" name="extrak[]" value="Igerilekua"> Igerilekua
        <input type="checkbox" name="extrak[]" value="Lorategia"> Lorategia
        <input type="checkbox" name="extrak[]" value="Garajea"> Garajea
        <br><br>

        <label for="irudia">Irudiaren izena:</label>
        <input type="text" id="irudia" name="irudia" placeholder="adibidez: irudia.jpg">
        <br><br>

        <label for="oharrak">Oharrak:</label>
        <textarea id="oharrak" name="oharrak"></textarea>
        <br><br>

        <button type="submit">Gehitu</button>
    </form>
    <br>
    [ <a href="index.php">Atzera joan</a> ]
</body>
</html>
<?php
$conn->close();
?>