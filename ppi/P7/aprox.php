<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estiloMT.css"> 
    <title>Aproximaciones de Pi y e</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = intval($_POST['n']);
    $tipo_calculo = $_POST['calcular'];

    if ($n <= 0) {
        echo "El valor de n debe ser mayor que cero.";
        exit();
    }

    // Función para calcular Pi
    function aproximarPi($n) {
        $pi = 0;
        echo "<table>
                <tr><th>n</th><th>Aproximación de Pi</th></tr>";
        for ($i = 0; $i <= $n; $i++) {
            $pi += pow(-1, $i) / (2 * $i + 1);
            echo "<tr><td>$i</td><td>" . (4 * $pi) . "</td></tr>";
        }
        echo "</table>";
        return 4 * $pi;
    }

    // Función para calcular el factorial
    function factorial($num) {
        if ($num == 0 || $num == 1) return 1;
        return $num * factorial($num - 1);
    }

    // Función para calcular e
    function aproximarE($n) {
        $e = 0;
        echo "<table>
                <tr><th>n</th><th>Aproximación de e</th></tr>";
        for ($i = 0; $i <= $n; $i++) {
            $e += 1 / factorial($i);
            echo "<tr><td>$i</td><td>$e</td></tr>";
        }
        echo "</table>";
        return $e;
    }
    // Verificar si se quiere calcular Pi o e
    if ($tipo_calculo == "pi") {
        echo "<h2>Aproximación de Pi hasta n=$n</h2>";
        $pi_aprox = aproximarPi($n);
        echo "<p>Valor aproximado de Pi: $pi_aprox</p>";
    } elseif ($tipo_calculo == "e") {
        echo "<h2>Aproximación de e hasta n=$n</h2>";
        $e_aprox = aproximarE($n);
        echo "<p>Valor aproximado de e: $e_aprox</p>";
    }
}
?>
</body>
</html>