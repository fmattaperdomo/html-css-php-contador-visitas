<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contador de visitas</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <h1>Contador de Visitas</h1>
    <div class="visitantes">
        <p class="numero"><?php echo contar_usuarios();  ?></p>
        <p class="texto">Visitas</p>
    </div>
</body>
</html>