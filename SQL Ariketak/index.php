<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Ariketak</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Lista de Propiedades</h2>
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>Mota</th>
                    <th>Zonaldea</th>
                    <th>Helbidea</th>
                    <th>Logelak</th>
                    <th>Prezioa</th>
                    <th>Tamaina</th>
                    <th>Extrak</th>
                    <th>Irudia</th>
                    <th>Oharrak</th>
                    <th>Ezabatu</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $hostname = "localhost";
                $usuario = "root";
                $password = "Admin123";
                $basededatos = "phpariketak";

                $mysqli = new mysqli($hostname, $usuario, $password, $basededatos);
                if (mysqli_connect_errno()) {
                    echo "Error de conexión a la BD: " . mysqli_connect_error();
                    exit();
                }

                $sql = "SELECT * FROM propiedades";

                if ($result = $mysqli->query($sql)) {
                    while ($row = $result->fetch_assoc()) {
                        $mota = $row["mota"];
                        $zonaldea = $row["zonaldea"];
                        $helbidea = $row["helbidea"];
                        $logelak = $row["logelak"];
                        $prezioa = $row["prezioa"];
                        $tamaina = $row["tamaina"];
                        $extrak = $row["extrak"];
                        $irudia = $row["irudia"];
                        $oharrak = $row["oharrak"];

                        echo '<tr>
                        <td>' . $mota . '</td>
                        <td>' . $zonaldea . '</td>
                        <td>' . $helbidea . '</td>
                        <td>' . $logelak . '</td>
                        <td>' . $prezioa . '</td>
                        <td>' . $tamaina . '</td>
                        <td>' . $extrak . '</td>
                        <td>
                            <a href="download_image.php?id=' . $row["id"] . '" class="btn btn-link">Descargar</a>
                        </td>
                        <td>' . $oharrak . '</td>
                        <td><input type="checkbox"></td>
                    </tr>';
                    }
                    $result->free();
                }
                ?>
            </tbody>
        </table>
    </div>
    <a href="form.php" class="btn btn-primary">Beste bat gehitu</a>
</body>

</html>