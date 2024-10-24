<?php
    $con=mysqli_connect("localhost","root","","prueba");

    // Conección
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // Quita caracteres de escape
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($con, $_POST['apellido']);
    $edad = mysqli_real_escape_string($con, $_POST['edad']);
    $sql="INSERT INTO registro (nombre, apellido, edad)
      VALUES ('$nombre', '$apellido', '$edad');";

    if (!mysqli_query($con,$sql)) {
      die('Error: ' . mysqli_error($con));
    }
    echo "<p>Registro añadido</p>";

    mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>