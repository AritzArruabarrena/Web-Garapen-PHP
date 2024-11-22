<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenbaki Lehenak</title>
</head>

<body>
    <form method="POST">
        <p>Sartu ezazu zenbaki bat:</p>
        <input type="number" name="zenbakia1" required>
        <p>Sartu ezazu zenbaki handiago bat:</p>
        <input type="number" name="zenbakia2" required>
        <button type="submit">Kalkulatu</button>
    </form>

    <?php
    function lehenZenbakiaDa($zenbakia) {
        if ($zenbakia < 2) return false;
        for ($i = 2; $i <= sqrt($zenbakia); $i++) {
            if ($zenbakia % $i == 0) return false;
        }
        return true;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $zenbakia1 = intval($_POST["zenbakia1"]);
        $zenbakia2 = intval($_POST["zenbakia2"]);

       
        if ($zenbakia1 >= $zenbakia2) {
            echo "<p>Mesedez, sartu bigarren zenbaki handiago bat lehenengo zenbakia baino.</p>";
        } else {
            $lehenZenbakiak = [];
            for ($i = $zenbakia1; $i <= $zenbakia2; $i++) {
                if (lehenZenbakiaDa($i)) {
                    $lehenZenbakiak[] = $i;
                }
            }

            
            if (count($lehenZenbakiak) > 0) {
                echo "<p>Emaitza: " . implode(", ", $lehenZenbakiak) . "</p>";
            } else {
                echo "<p>Ez dago zenbaki lehenik tarte horretan.</p>";
            }
        }
    }
    ?>
</body>

</html>
