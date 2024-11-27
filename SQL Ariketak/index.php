<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SQL Ariketak</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <form action="">

    </form>


    <?php

    $hostname = "localhost";
    $usuario = "root";
    $password = "Admin123";
    $basededatos = "phpariketak";


    $mysqli = new mysqli($hostname, $usuario, $password, $basededatos);
    if (mysqli_connect_errno()) {
        echo "Error de conexión a la BD: " . mysqli_connect_error();
        exit();
    }

    $sql = "SELECT * FROM propiedades";


    echo '<table border="0" cellspacing="2" cellpadding="2"> 
    <tr> 
        <td> Value1</td> 
        <td> Value2</td> 
        <td> Value3</td> 
        <td> Value4</td> 
        <td> Value5</td>
        <td> Value6</td> 
        <td> Value7</td> 
        <td> Value8</td> 
        <td> Value9</td> 
    </tr>';

if ($result = $mysqli->query($sql)) {
  while ($row = $result->fetch_assoc()) {
      $field1name = $row["mota"];
      $field2name = $row["zonaldea"];
      $field3name = $row["helbidea"];
      $field4name = $row["logelak"];
      $field5name = $row["prezioa"]; 
      $field6name = $row["tamaina"]; 
      $field7name = $row["extrak"];
      $field8name = $row["irudia"]; 
      $field9name = $row["oharrak"]; 



      echo '<tr> 
                <td>'.$field1name.'</td> 
                <td>'.$field2name.'</td> 
                <td>'.$field3name.'</td> 
                <td>'.$field4name.'</td> 
                <td>'.$field5name.'</td> 
                <td>'.$field6name.'</td> 
                <td>'.$field7name.'</td> 
                <td>'.$field8name.'</td> 
                <td>'.$field9name.'</td> 
            </tr>';
  }
  $result->free();
} 
    ?>
</body>

</html>