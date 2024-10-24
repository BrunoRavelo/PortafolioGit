<!DOCTYPE HTML>
  <html>
    <head>
      <title>Validación de Formulario en PHP</title>
      <meta charset="utf-8">
    </head>
    <body>
      <?php
        // define variables and set to empty values
        $name = $email = $gender = $comment = $website = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = test_input($_POST["name"]); //test limpia la entrada del formulario
          $email = test_input($_POST["email"]);
          $website = test_input($_POST["website"]);
          $comment = test_input($_POST["comment"]);
          $gender = test_input($_POST["gender"]);
        }
        function test_input($data) { //Aqui lo limpia 
          $data = trim($data); //quita los espacios innecesarios
          $data = stripslashes($data);//desactivar los slashes 
          $data = htmlspecialchars($data);//convertir los caracteres especiales a sus codigos ASCII 
          return $data;
        }
      ?>
      <h2>Ejemplo de validación de Formularios con PHP</h2>
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> <!--limpia la url del archivo a donde apunta el formulario. En este caso es ValidacionFormulario --> 
        Nombre: <input type="text" name="name">
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        Sitio Web: <input type="text" name="website">
        <br><br>
        Comentarios: <textarea name="comment" rows="5" cols="40"></textarea> <!--TextBox--> 
        <br><br>
        Género:
        <input type="radio" name="gender" value="female">Femenino
        <input type="radio" name="gender" value="male">Masculino
        <br><br>
        <input type="submit" name="submit" value="Submit">
      </form>
      <?php
        echo "<h2>Usted Ingresó:</h2>";
        echo "<p>" . $name . "</p>";
        echo "<p>" . $email . "</p>";
        echo "<p>" . $website . "</p>";
        echo "<p>" . $comment . "</p>";
        echo "<p>" . $gender . "</p>";
      ?>
    </body>
  </html>