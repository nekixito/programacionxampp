<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 01</title>
</head>
<body>
    <?php
        $ancho = 10;
        $longitud = 11;
        $altura = 5;

        $area = $ancho * $longitud;
        $volumen = $area * $altura;

        echo "El area de la tapa de la caja es: " . $area;
        echo "<br>";
        echo "<br>";
        echo "El volumen de la caja es: " . $volumen;

    ?>
</body>
</html>