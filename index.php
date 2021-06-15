<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
        <title>Document</title>
    </head>
    <body>
        <?php

        ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );

        $res = file_get_contents('http://localhost/php/practicas/pokedex/api.php');
        if (!empty( $res )){
            $array_pokeapi = json_decode($res, true);
        }
        ?>

        <header>
            <h1>Pokédex</h1>
        </header>

        <main>
            <?php
            for ($i = 0; $i < count( $array_pokeapi ); $i++){
                echo "
                    <article>
                        <h2>" . $array_pokeapi[$i]['name'] . "</h2>
                        <figure>
                            <img src='" . $array_pokeapi[$i]['image'] . "'>
                        </figure>
                        <ul>
                            <li>
                                <strong>Tipo:</strong> " . $array_pokeapi[$i]['type'] . "
                            </li>
                            <li>
                                <strong>Debilidad:</strong> " . $array_pokeapi[$i]['weakness'] . "
                            </li>
                            <li>
                                <strong>Altura:</strong> " . $array_pokeapi[$i]['height'] . "
                             </li>
                             <li>
                                <strong>Peso:</strong> " . $array_pokeapi[$i]['weight'] . "
                            </li>
                             <li>
                                <strong>Descripción:</strong>" . $array_pokeapi[$i]['description'] . "
                            </li>
                        </ul>
                    </article>";
            };
            ?>;

        </main>
        <footer>
            Desarrollo Full Stack 2021 ALT Cooperativa
        </footer>        
    </body>
</html>