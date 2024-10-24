<?php
    include("conexionBD.php");

    //Query
    $sql = "select * from registro;";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result)) {
      echo $row['nombre'] . " " . $row['apellido'] . " " . $row['edad'];
      echo "<br>";
    }

    mysqli_close($con);

  ?>
