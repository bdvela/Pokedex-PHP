<?php include("includes/header.php") ?>
<?php include("includes/Pokemon.php") ?>
<?php
    $name = $_GET['name'];
    $pic = $_GET['pic'];
    $ability = $_GET['ability']; 
    $description = $_GET['description'];?>
    <div class="card-poke <?=$ability?>">
        <div class="container">
            <div class="col-1">
                <img src="<?=$pic;?>" alt="<?=$name?>">
            </div>
            <div class="col-2">
                <h2 class="pokename"><?=$name;?></h2>
            <div class="abilities pokeability">
                    <?=$ability;?>
            </div>
            <div class="pokedescription">
                <p>
                    <?=$description;?>
                </p>
            </div>
        </div>
     </div>
    </div>
<?php include("includes/footer.php"); ?>