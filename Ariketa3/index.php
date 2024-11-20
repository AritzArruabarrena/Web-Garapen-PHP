<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ariketa3</title>
</head>
<body>
    <h2>Fitxategiak igo</h2>

    <form action="informazioa.php" method="POST" enctype="multipart/form-data">
        <p>Izenburua:</p>
        <input type="text" name="izenburua" required>

        <p>Testua</p>
        <input type="text" name="testua" required>

        <p>Mota</p>
        <select name="mota">
            <option value="Eskaintzak">Eskaintzak</option>
            <option value="Proposamenak">Proposamenak</option>
        </select>
        <br><br>
        <span>Irudia:</span>
        <input type="file" name="irudia" accept="image/*">

        <button type="submit">Bidali</button>
    </form>
</body>
</html>
