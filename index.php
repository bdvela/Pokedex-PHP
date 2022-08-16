<?php include("includes/header.php") ?>
<?php include("includes/Pokemon.php") ?>
    <?php foreach ($pokemons as $pokemon) { 
        $pic = $pokemon -> pic;
        $name = $pokemon -> name;
        $ability = $pokemon -> ability;
        $description = $pokemon ->description;?>
        
        <a href="pokeinfo.php?name=<?=$name?>&pic=<?=$pic?>&ability=<?=$ability?>&description=<?=$description?>">
            <div class="card <?php echo $ability?>">
                <img src="<?php echo $pic ?>" alt="<?php echo $name ?>" class="img">
                <div class="name"><h2><?php echo $name ?></h2></div>
                <div class="ability"><div class="chip"><p><?php echo $ability ?></p></div></div>
            </div>  
        </a>
    <?php }  ?>
</section>
    <?php include("includes/footer.php"); ?>