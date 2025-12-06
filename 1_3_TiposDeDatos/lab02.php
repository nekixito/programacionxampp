<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 02</title>
</head>
<body>
    <h3>PHP lab 02</h3>
    <?php
        $alumno1 = "Karim";
        $geometria1 = 8.5;
        $ingles1 = 7.7;
        $matematicas1 = 6.7;
        $programacion1 = 8.5;
        $basesDeDatos1 = 9.4;

        $promedio1 = ($geometria1 + $ingles1 + $matematicas1 + $programacion1 + $basesDeDatos1) / 5;
        $promedio1 = round($promedio1,1);

        $alumno2 = "Laura";
        $geometria2 = 8.9;
        $ingles2 = 8.7;
        $matematicas2 = 9.7;
        $programacion2 = 9.5;
        $basesDeDatos2 = 9.2;

        
        $promedio2 = ($geometria2 + $ingles2 + $matematicas2 + $programacion2 + $basesDeDatos2) / 5;
        $promedio2 = round($promedio2,1);

        $promedioGrupo = ($promedio1 + $promedio2) / 2;
        $promedioGrupo = round($promedioGrupo,1);

        echo("
        <table border=1>
            <caption>
                <strong>Boleta de calificaciones</strong>
            </caption>
            <thead>
                <tr>
                    <th>Alumno</th>
                    <th>Geometria</th>
                    <th>Inglés</th>
                    <th>Matematicas</th>
                    <th>Programacion</th>
                    <th>Bases de datos</th>
                    <th>Promedio</th>
                </tr>
                <tr>
                    <td>$alumno1</td>
                    <td>$geometria1</td>
                    <td>$ingles1</td>
                    <td>$matematicas1</td>
                    <td>$programacion1</td>
                    <td>$basesDeDatos1</td>
                    <td>$promedio1</td>
                </tr>
                <tr>
                    <td>$alumno2</td>
                    <td>$geometria2</td>
                    <td>$ingles2</td>
                    <td>$matematicas2</td>
                    <td>$programacion2</td>
                    <td>$basesDeDatos2</td>
                    <td>$promedio2</td>
                </tr>


                <tfoot>
                    <tr>
                        <td colspan='6'>Promedio del grupo</td>
                        <td>$promedioGrupo</td>
                    </tr>
                </tfoot>
            </thead>

        </table>
        ");
        

    ?>
</body>
</html>