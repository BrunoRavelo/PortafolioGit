<?php
    include("conexionBD.php");

    //Query
    $sql = "select * from registro;";
    $result = mysqli_query($con,$sql);
    mysqli_close($con);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Tabla</title>
    <link rel="stylesheet" href="practica7.css">
</head>
<body>
    <h6><a href="bienvenida.html">Regresar al inicio </a></h6>
    <h1 class="center">Consulta de usuarios</h1>
    <p class="center">Listado de usuarios.</p>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
        </tr>
        <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['nombre'] . "</td>";
                echo "<td>" . $row['apellido'] . "</td>";
                echo "<td>" . $row['edad'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>