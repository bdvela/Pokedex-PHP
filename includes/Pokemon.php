<?php
class Pokemon{
    public $name;
    public $pic;
    public $ability;
    public $description;
}

$pokemons = array();

//PIKACHU
$pokemons[0] = new Pokemon();
$pokemons[0]->name = 'Pikachu';
$pokemons[0]->pic = './assets/pokemons/pikachu.png';
$pokemons[0]->ability = 'rayo';
$pokemons[0] ->description = 'Pikachu es un Pokémon de tipo eléctrico introducido en la primera generación. Es el Pokémon más conocido de la historia, mayormente por ser el acompañante del protagonista del anime, Ash Ketchum y la mascota representante de la franquicia Pokémon.';

//CHARMANDER
$pokemons[1] = new Pokemon();
$pokemons[1]->name = 'Charmander';
$pokemons[1]->pic = './assets/pokemons/charmander.png';
$pokemons[1]->ability = 'fuego';
$pokemons[1] ->description = 'Charmander es un pequeño lagarto bípedo. Sus características de fuego son resaltadas por su color de piel anaranjado y su cola con la punta envuelta en llamas. Charmander, como sus evoluciones Charmeleon y Charizard, tiene una pequeña llama en la punta de su cola.';

//BULBASAUR
$pokemons[2] = new Pokemon();
$pokemons[2]->name = 'Bulbasaur';
$pokemons[2]->pic = './assets/pokemons/bulbasaur.png';
$pokemons[2]->ability = 'tierra';
$pokemons[2] ->description = 'Bulbasaur es un Pokémon de tipo planta/veneno introducido en la primera generación. Es uno de los Pokémon iniciales que pueden elegir los entrenadores que empiezan su aventura en la región Kanto, junto a Squirtle y Charmander (excepto en Pokémon Amarillo).';

//CHARIZARD
$pokemons[3] = new Pokemon();
$pokemons[3]->name = 'Charizard';
$pokemons[3]->pic = './assets/pokemons/charizard.png';
$pokemons[3]->ability = 'fuego';
$pokemons[3] ->description = 'La figura de Charizard es la de un dragón erguido sobre sus dos patas traseras, que sostienen su peso. Posee unas poderosas alas y un abrasador aliento de fuego. También posee un predominante cuello y una poderosa cola terminada en una llama que arde con más fuerza si ha vivido duras batallas.';

//BLASTOISE
$pokemons[4] = new Pokemon();
$pokemons[4]->name = 'Blastoise';
$pokemons[4]->pic = './assets/pokemons/blastoise.png';
$pokemons[4]->ability = 'agua';
$pokemons[4] ->description = 'Blastoise es una enorme tortuga bípeda, que puede extender unos poderosos cañones situados en su espalda para disparar potentes chorros de agua, con la fuerza suficiente para quebrar muros de cemento o metales delgados. Pueden disparar balas de agua con suficiente precisión para golpear latas a 50 metros de distancia.';

//UMBREON
$pokemons[5] = new Pokemon();
$pokemons[5]->name = 'Umbreon';
$pokemons[5]->pic = './assets/pokemons/umbreon.png';
$pokemons[5]->ability = 'lunar';
$pokemons[5] ->description = 'Umbreon evolucionó tras haber estado expuesto a ondas lunares. Suele esconderse en la oscuridad en silencio y esperar a que su presa se mueva. Cuando se lanza al ataque, le brillan los anillos del cuerpo. Cuando se enfurece, secreta un sudor venenoso por los poros que lanza a los ojos de sus enemigos.';

//MEOWTH
$pokemons[6] = new Pokemon();
$pokemons[6]->name = 'Meowth';
$pokemons[6]->pic = './assets/pokemons/meowth.png';
$pokemons[6]->ability = 'tierra';
$pokemons[6] ->description = 'Meowth es uno de los pokémon más conocidos por formar parte del Team Rocket (Jessie, James y Meowth) y también es muy juguetón. Tiene aspecto de gato, un amuleto dorado en la frente y una cola enroscada.';
?>
