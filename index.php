<?php
session_start();
// https://www.edureka.co/blog/header-location-in-php/
// https://codes-sources.commentcamarche.net/forum/affich-468530-comment-executer-une-fonction-php-en-appuyant-sur-un-bouton-formulaire
// https://forum.hardware.fr/hfr/Programmation/PHP/executer-fonction-bouton-sujet_147048_1.htm
// http://sdz.tdct.org/sdz/rogrammez-en-oriente-objet-en-php.html#Creretmanipulerunobjet
require("templates/header.php");

$file = file_get_contents('characters.json');
$characters = json_decode($file);
?>

<h3>selection du personnage</h3>


<div class="container">
    <?php
   foreach($characters as $character){
    ?>
        <div class="char_container">
            <a href="duel.php?id=<?=$character->id?>">
                <img src="img/characters/<?=$character->id?>.jpg" alt="">
                <div class="stat">
                    <img src="./img/<?=$character->type?>saber.svg" alt="">
                    <p><?=$character->puissance?></p> 
                   <!-- <hr class="color-<?=$character->type?>"> -->
                </div>
            </a>
        </div>
    <?php 
    }
    ?>
        
 
</div>





<?php
// require("templates/footer.php");
?>