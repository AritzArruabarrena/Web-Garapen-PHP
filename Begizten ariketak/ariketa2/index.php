<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biderketa Taula</title>
</head>

<body>
    <form method="POST">
        <p>Sartu ezazu zenbaki bat:</p>
        <input type="number" name="zenbakia" required>
        <button type="submit">Kalkulatu</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $zenbakia = intval($_POST["zenbakia"]);
        echo "<h3>Emaitza:</h3>";
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $emaitza = $zenbakia * $i;
            echo "<li>$zenbakia x $i = $emaitza</li>";
        }
        echo "</ul>";
    }
    ?>
</body>

</html>
