<?php
    include("conexionBD.php");
    //Query
    $sql = "select compra.id as id, modelo.nombre as modelo, usuarios.nombre as usuario, compra.folio as folio from compra, modelo, usuarios where usuarios.id=compra.idUsuario and compra.idModelo=modelo.id;";
    $result = mysqli_query($con,$sql);
    mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Tabla</title>
    <link rel="stylesheet" href="estiloMT.css">
</head>
<body>
    <h1 class="center">Registro de Compras</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Modelo</th>
            <th>Usuario</th>
            <th>Folio</th>
        </tr>
        <?php
            while ($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['modelo'] . "</td>";
                echo "<td>" . $row['usuario'] . "</td>";
                echo "<td>" . $row['folio'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>