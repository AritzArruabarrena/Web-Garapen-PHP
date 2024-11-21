<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
</head>

<body>
    <h1>Encuesta</h1>
    <p>Etxebizitzaren prezioa igotzen jarraituko duela uste duzu?</p>
    <form action="procesar.php" method="POST">
        <input type="radio" name="respuesta" value="Bai" required>
        <label for="Bai">Bai</label><br>
        <input type="radio" name="respuesta" value="Ez" required>
        <label for="Ez">Ez</label><br>
        <button type="submit">Erantzun</button>
    </form>
</body>

</html>
