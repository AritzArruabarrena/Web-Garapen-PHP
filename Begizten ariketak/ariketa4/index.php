<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa 4</title>
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
       
      echo "Emaitza" . strrev($zenbakia);
    }
    ?>
</body>

</html>
