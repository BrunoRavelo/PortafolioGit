<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Registro Realizado</h1>
    <p>Bienvenido <?php echo $_POST["name"] ?></p> <!--El post guarda la variable que se ingreso en name y aca pido que lo echo. Sirve para información sensible --> 
    <p>Su contraseña es: <?php echo $_POST["passwd"] ?></p>
    
</body>
</html>