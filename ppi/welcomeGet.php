<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
</head>
<body>
    <h1>Registro Realizado</h1>
    <p>Bienvenido <?php echo $_GET["name"] ?></p> <!--El get almacena la info en la url. Siver para información funcional --> 
    <p>Su contraseña es: <?php echo $_GET["passwd"] ?></p>
    
</body>
</html>