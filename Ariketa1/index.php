<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 1</title>
</head>

<body>
    <?php
    $resultado = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST["valor"];
        $figura = $_POST["figura"];

        switch ($figura) {
            case "Karratua":
                $resultado = "Azalera (Karratua): " . ($valor * $valor);
                break;
            case "Irukia":
                $resultado = "Azalera (Irukia): " . (sqrt(3) / 4 * $valor * $valor);
                break;
            case "Borobila":
                $resultado = "Azalera (Borobila): " . (pi() * $valor * $valor);
                break;
            default:
                $resultado = "Aukeratu figura bat.";
                break;
        }
    }
    ?>
    <h1>Irudiaren azalera kalkulatu</h1>
    <form action="" method="post">
        <p>Aldena/Erradioa:</p>
        <input type="number" name="valor" min="1" required>
        <p>Irudia</p>
        <select name="figura">
            <option value="Karratua">Karratua</option>
            <option value="Irukia">Irukia</option>
            <option value="Borobila">Borobila</option>
        </select>
        <button type="submit">Kalkulatu</button>
    </form>

    <?php
    if ($resultado) {
        echo "<p><strong>$resultado</strong></p>";
    }
    ?>
</body>

</html>
