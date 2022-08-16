<?php
class Pokemon{
    public $name;
    public $pic;
    public $ability;
}

$pokemons = array();

//PIKACHU
$pokemons[0] = new Pokemon();
$pokemons[0]->name = 'Pikachu';
$pokemons[0]->pic = 'https://i0.wp.com/eltallerdehector.com/wp-content/uploads/2022/06/34861-pikachu-clipart-png.png?resize=900%2C900&ssl=1';
$pokemons[0]->ability = 'rayo';

//CHARMANDER
$pokemons[1] = new Pokemon();
$pokemons[1]->name = 'Charmander';
$pokemons[1]->pic = 'https://www.pngmart.com/files/13/Charmander-PNG-HD.png';
$pokemons[1]->ability = 'fuego';

//BULBASAUR
$pokemons[2] = new Pokemon();
$pokemons[2]->name = 'Bulbasaur';
$pokemons[2]->pic = 'https://www.pngmart.com/files/11/Pokemon-Bulbasaur-PNG-Clipart.png';
$pokemons[2]->ability = 'tierra';

//CHARIZARD
$pokemons[3] = new Pokemon();
$pokemons[3]->name = 'Charizard';
$pokemons[3]->pic = 'https://www.pngplay.com/wp-content/uploads/10/Charizard-Pokemon-No-Background.png';
$pokemons[3]->ability = 'fuego';

//BLASTOISE
$pokemons[4] = new Pokemon();
$pokemons[4]->name = 'Blastoise';
$pokemons[4]->pic = 'https://www.pngplay.com/wp-content/uploads/10/Blastoise-Pokemon-No-Background.png';
$pokemons[4]->ability = 'agua';

//UMBREON
$pokemons[5] = new Pokemon();
$pokemons[5]->name = 'Umbreon';
$pokemons[5]->pic = 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/197.png';
$pokemons[5]->ability = 'lunar';

//MEOWTH
$pokemons[6] = new Pokemon();
$pokemons[6]->name = 'Meowth';
$pokemons[6]->pic = 'https://www.pngplay.com/wp-content/uploads/11/Meowth-Pokemon-Background-PNG-Image.png';
$pokemons[6]->ability = 'tierra';
?>
