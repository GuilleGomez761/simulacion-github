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

if ($puntaje <= 3) {
    $rango = "Novato";
    $mensaje = "Recién empieza la aventura. ¡Seguí jugando y volvé a intentarlo!";
} elseif ($puntaje <= 6) {
    $rango = "Gamer Casual";
    $mensaje = "Tenés buenos conocimientos gamer, pero todavía queda camino por recorrer.";
} elseif ($puntaje <= 8) {
    $rango = "Gamer Veterano";
    $mensaje = "Se nota que llevás varias partidas encima. ¡Muy buen resultado!";
} else {
    $rango = "Leyenda Gamer";
    $mensaje = "Dominaste el GameCheck. Tus conocimientos gamer están a otro nivel.";
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

        <h2 class="rango">
            <?php echo $rango; ?>
        </h2>

        <p class="mensaje-rango">
            <?php echo $mensaje; ?>
        </p>

        <a href="index.php" class="btn-reintentar">
            Volver a intentar
        </a>

    </main>

</body>

</html>