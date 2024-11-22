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
        $zenbakia = strval(intval($_POST["zenbakia"])); 
        $alderantziz = ""; 

        for ($i = strlen($zenbakia) - 1; $i >= 0; $i--) {
            $alderantziz .= $zenbakia[$i]; 
        }

        echo "<p>Emaitza: $alderantziz</p>"; 
    }

    /* echo "Emaitza" . strrev($zenbakia); */
    ?>
</body>

</html>