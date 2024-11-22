<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 1</title>
</head>

<body>
    <form method="POST">
        <p>Sartu zenbaki bat faktoriala kalkulatzeko:</p>
        <input type="number" name="zenbakia" required>
        <button type="submit">Kalkulatu</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $zenbakia = intval($_POST["zenbakia"]);
        $faktoriala = 1;

        for ($i = 1; $i <= $zenbakia; $i++) {
            $faktoriala *= $i; 
        }

        echo "<p>Zenbakia: $zenbakia</p>";
        echo "<p>Faktoriala: $faktoriala</p>";
    }
    ?>
</body>

</html>
