<?php
/*
 * Este script es un endpoint que devuelve un array de arrays, con información
 * de distintos pokemones. El formato de retorno de este endpoint es JSON.
 */
	$pokemones = array(
		array(
			'name'=> 'Pikachu',
			'type'        => 'Eléctrico',
			'weakness'    => 'Tierra',
			'height'      => '0.40m',
			'weight'      => '6kg',
			'description' => 'Cuanto más potente es la energía eléctrica que genera este Pokémon, más suaves y elásticas se vuelven las bolsas de sus mejillas.',
			'image'       => 'https://cursos.altcooperativa.com/pokedex/img/pikachu.png',
		),
		array(
			'name'        => 'Bulbasaur',
			'type'        => 'Planta',
			'weakness'    => 'Fuego',
			'height'      => '0.70m',
			'weight'      => '6.9kg',
			'description' => 'Bulbasaur es un Pokémon de tipo planta/veneno. Este Pokémon tiene plantado un bulbo en el lomo desde que nace. Esta semilla crece y se desarrolla a lo largo del ciclo de vida de Bulbasaur a medida que suceden sus evoluciones.',
			'image'       => 'https://cursos.altcooperativa.com/pokedex/img/bulbasaur.png',
		),
		array(
			'name'        => 'Charmander',
			'type'        => 'Fuego',
			'weakness'    => 'Agua',
			'height'      => '0.60m',
			'weight'      => '8.5kg',
			'description' => 'Charmander es un pequeño lagarto bípedo. Tiene una pequeña llama en la punta de su cola. La intensidad con la que esta arde es un indicador del estado físico y emocional de este Pokémon.',
			'image'       => 'https://cursos.altcooperativa.com/pokedex/img/charmander.png',
		),
		array(
			'name'        => 'Chikorita',
			'type'        => 'Hoja',
			'weakness'    => 'Fuego/Hielo',
			'height'      => '0.90m',
			'weight'      => '6.4kg',
			'description' => 'Al luchar, Chikorita agita la hoja que tiene para mantener a raya al rival. Pero, al mismo tiempo, libera una suave fragancia que apacigua el encuentro y crea un ambiente agradable y de amistad.',
			'image'       => 'https://cursos.altcooperativa.com/pokedex/img/chikorita.png',
		),
		array(
			'name'        => 'Igglybuff',
			'type'        => 'Normal/Hada',
			'weakness'    => 'Acero/Veneno',
			'height'      => '0.30m',
			'weight'      => '1.0kg',
			'description' => 'Es suave y tierno. Emana un aroma dulce y agradable que le sirve para calmar los ánimos de sus oponentes en combate. Cuando aumenta su temperatura corporal, se va poniendo de un color rosa cada vez más intenso.',
			'image'       => 'https://cursos.altcooperativa.com/pokedex/img/igglybuff.png',
		),
	);

header( 'Content-Type: application/json' );
echo json_encode($pokemones);
?>

