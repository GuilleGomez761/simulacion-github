<?php

$respuestasCorrectas = [
    "Link",
    "Sony",
    "Minecraft",
    "Vice City",
    "Mario",
    "God of War",
    "Shooter",
    "Pikachu",
    "Minecraft",
    "Xbox Game Studios"
];

$puntaje = 0;

foreach ($respuestasCorrectas as $indice => $respuestaCorrecta) {

    $pregunta = "pregunta" . $indice;

    if (isset($_POST[$pregunta]) && $_POST[$pregunta] === $respuestaCorrecta) {
        $puntaje++;
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado | GameCheck</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <main class="resultado">

        <h1>Resultado</h1>

        <p class="puntaje">
            Obtuviste <?php echo $puntaje; ?> / 10 puntos
        </p>

    </main>

</body>

</html>
