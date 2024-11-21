<?php
$archivo = 'resultados.txt';
if (file_exists($archivo)) {
    $resultados = json_decode(file_get_contents($archivo), true);
} else {
    $resultados = ['Bai' => 0, 'Ez' => 0];
}


$total = array_sum($resultados);
$bai = isset($resultados['Bai']) ? $resultados['Bai'] : 0;
$ez = isset($resultados['Ez']) ? $resultados['Ez'] : 0;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la Encuesta</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Chart.js -->
</head>

<body>
    <h1>Inkestaren emaitzak</h1>
    <p>Jasotako bozkak guztira: <?php echo $total; ?></p>

    <div style="width: 500px;">
    <canvas id="graficoResultados" width="400" height="400"></canvas>

    <a href="index.php">Bueltatu bozkatzeko orrira</a>

    <script>
        const data = {
            labels: ['Bai', 'Ez'], 
            datasets: [{
                label: 'Inkestaren emaitzak',
                data: [<?php echo $bai; ?>, <?php echo $ez; ?>], 
                backgroundColor: ['#4CAF50', '#FF5252'], 
                hoverOffset: 4
            }]
        };


        const config = {
            type: 'pie', 
            data: data,
        };


        const ctx = document.getElementById('graficoResultados').getContext('2d');
        new Chart(ctx, config);
    </script>
    </div>
</body>

</html>
