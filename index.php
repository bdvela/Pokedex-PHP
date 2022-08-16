<?php include("includes/header.php") ?>
<?php include("includes/Pokemon.php") ?>
    <h1>Pokedex</h1>
    <?php foreach ($pokemons as $pokemon) { ?>
    <div class="card <?php echo $pokemon -> ability?>">
        <img src="<?php echo $pokemon -> pic ?>" alt="<?php echo $pokemon->name ?>" class="img">
        <div class="name"><h2><?php echo $pokemon->name ?></h2></div>
        <div class="ability"><div class="chip"><p><?php echo $pokemon->ability ?></p></div></div>
        
    </div>  
    <?php }  ?>
<?php include("includes/footer.php"); ?>