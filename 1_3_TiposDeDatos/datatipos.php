<?php
    $nombre = "Carlos";
    $direccion = "Calle A No. 111";
    $ciudad = "Viejo Leon";

    $datos = $nombre . "   " . $direccion . "   " . $ciudad;
    echo "Datos: $datos <br>";

    echo <<<TextoLargo
    <br>Salario asignado para $nombre: 2000 euros
    <br>Mes: Noviembre
    <br>Año: 2020<br>
    TextoLargo;

    $tarifa = 1000;
    $temperatura = -8;

    $tarifa = 13.637;
    printf("<br> tarifa es: %.2f", $tarifa);

    echo "<br>";

    $tarifa = 13.637;
    $tarifa = intval($tarifa);

    echo $tarifa;
    echo gettype($tarifa);
    echo "<br>";

    $tarifa = 13.637;
    $tarifa = round($tarifa);

    echo $tarifa;
    echo "<br>";

    $tarifa = 13.637;
    $tarifa = round($tarifa, 2);

    echo $tarifa;
    echo "<br>";

    $tarifa = "13.99";
    $tarifa = doubleval($tarifa);

    echo $tarifa;
    echo gettype($tarifa);
    echo "<br>";

    $menor_de_edad = true;
    $deportista = false;

    $tarifa = 13.0;
    echo "$tarifa ";
    echo gettype($tarifa);
    echo "<br>";

    $tarifa = "diez";
    echo "$tarifa ";
    echo gettype($tarifa);
    echo "<br>";

    $tarifa = 13.0;
    settype($tarifa,"string");
    echo "$tarifa ";
    echo gettype($tarifa);
    echo "<br>";

    $tarifa = "33.99diez";
    settype($tarifa,"double");
    echo "$tarifa ";
    echo gettype($tarifa);
    echo "<br>";
    echo "<br>";
    echo "<br>";

    $dolares = 999.99;
    $tipoDeCambio = 1.2;
    $euros = $dolares * $tipoDeCambio;
    printf("El importe en euros es: %.2f <br>",$euros);

    echo "<br>";
    $dolares = 999.99;
    $tipoDeCambio = 1.2;
    $euros = $dolares * $tipoDeCambio;
    $euros = round($euros , 2);
    echo "El importe en euros es: $euros <br>";

    echo "<br>";


    
?>