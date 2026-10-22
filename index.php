<?php

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameCheck | Quiz Gamer</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>

    <header>
        <h1>GameCheck</h1>
        <p>¿Cuánto sabés de videojuegos?</p>
    </header>

    <main>
        <section class="contenedor-quiz">

            <h2>Quiz Gamer</h2>

            <p>
                Respondé las 10 preguntas y descubrí tu rango gamer.
            </p>

            <form action="resultados.php" method="POST" class="quiz-form">

                <?php
                $preguntas = [
                    [
                        "pregunta" => "¿Cuál es el protagonista principal de The Legend of Zelda?",
                        "opciones" => ["Zelda", "Link", "Ganondorf", "Epona"],
                        "correcta" => "Link"
                    ],
                    [
                        "pregunta" => "¿Qué empresa creó la consola PlayStation?",
                        "opciones" => ["Nintendo", "Microsoft", "Sony", "Sega"],
                        "correcta" => "Sony"
                    ],
                    [
                        "pregunta" => "¿En qué videojuego aparece el personaje Steve?",
                        "opciones" => ["Terraria", "Minecraft", "Fortnite", "Roblox"],
                        "correcta" => "Minecraft"
                    ],
                    [
                        "pregunta" => "¿Cuál de estos juegos pertenece a la saga Grand Theft Auto?",
                        "opciones" => ["Vice City", "Night City", "Raccoon City", "City 17"],
                        "correcta" => "Vice City"
                    ],
                    [
                        "pregunta" => "¿Qué personaje es la mascota principal de Nintendo?",
                        "opciones" => ["Sonic", "Crash", "Mario", "Kirby"],
                        "correcta" => "Mario"
                    ],
                    [
                        "pregunta" => "¿En qué saga aparece Kratos?",
                        "opciones" => ["God of War", "Halo", "Assassin's Creed", "Dark Souls"],
                        "correcta" => "God of War"
                    ],
                    [
                        "pregunta" => "¿Qué tipo de videojuego es Counter-Strike?",
                        "opciones" => ["Carreras", "Estrategia por turnos", "Shooter", "Plataformas"],
                        "correcta" => "Shooter"
                    ],
                    [
                        "pregunta" => "¿Qué criatura amarilla es una de las más conocidas de Pokémon?",
                        "opciones" => ["Charmander", "Pikachu", "Squirtle", "Bulbasaur"],
                        "correcta" => "Pikachu"
                    ],
                    [
                        "pregunta" => "¿En qué juego aparecen los creepers?",
                        "opciones" => ["Minecraft", "Among Us", "Valorant", "Fall Guys"],
                        "correcta" => "Minecraft"
                    ],
                    [
                        "pregunta" => "¿Qué empresa desarrolla la saga Halo?",
                        "opciones" => ["Xbox Game Studios", "Nintendo", "Valve", "Rockstar Games"],
                        "correcta" => "Xbox Game Studios"
                    ]
                ];

                foreach ($preguntas as $indice => $datos) {
                    echo '<div class="pregunta">';
                    echo '<h3>' . ($indice + 1) . '. ' . $datos["pregunta"] . '</h3>';

                    foreach ($datos["opciones"] as $opcion) {
                        echo '<label>';
                        echo '<input type="radio" name="pregunta' . $indice . '" value="' . $opcion . '">';
                        echo ' ' . $opcion;
                        echo '</label>';
                    }

                    echo '</div>';
                }
                ?>

                <button type="submit" class="btn-enviar">
                    Ver resultado
                </button>

            </form>

        </section>
    </main>

</body>
</html>