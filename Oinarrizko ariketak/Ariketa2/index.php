<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 2</title>
</head>

<body>
    <?php
    $resultado = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor = $_POST["valor"];
        $txanpona = $_POST["txanpona"];
        $guztira = 0;

        switch ($txanpona) {
            case "Dolar-amerikarra":
                $guztira = $valor * 1.08;
                $resultado = "$valor euro, dolar amerikar dira $guztira";
                break;
            case "libera-britaniarra":
                $guztira = $valor * 0.83;
                $resultado = "$valor euro, libera britaniar dira $guztira";
                break;
            case "Yen-japoniarra":
                $guztira = $valor * 164.3;
                $resultado = "$valor euro, yen japoniarra dira $guztira";
                break;
            case "Franko-suitzarra":
                $guztira = $valor * 0.94;
                $resultado = "$valor euro, franko suitzarra dira $guztira";
                break;
            default:
                $resultado = "Aukeratu txanpona bat.";
                break;
        }
    }
    ?>
    <h1>Txanpon bihurgailua</h1>
    <form action="" method="post">
        <p>Euro kantitatea</p>
        <input type="number" name="valor" min="1" required>
        <select name="txanpona">
            <option value="Dolar-amerikarra">Dolar amerikarra</option>
            <option value="libera-britaniarra">libera britaniarra</option>
            <option value="Yen-japoniarra">Yen japoniarra</option>
            <option value="Franko-suitzarra">Franko suitzarra</option>
        </select>
        <button type="submit">Bihurtu</button>
    </form>

    <?php
    if ($resultado) {
        echo "<p><strong>$resultado</strong></p>";
    }
    ?>
</body>

</html>