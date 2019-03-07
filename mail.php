<?php
include 'mainImages.php';
 include "header.php";  
 ?>

 <main>
 <div class="container container-mobile thanks">
 <p>Merci de votre message, <?=$lastInsertId["name"]?> </p>
 <p>Je vous répondrai dans les plus brefs délais.</p>
 <a href="index.php"><i class="fas fa-undo"></i> Retour à la page d'accueil</a></div>
 <div class="showPic">
    <?php 
        foreach ($pictureRandom as $picture) :
    $picRandSource=$picture->getSource();
    $picRandAlt=$picture->getAlt(); ?>
        <img class='pic boxshadow' src=<?=$picRandSource?> alt=<?=$picRandAlt?> > 
    <?php endforeach ?>
    </div>
 </main>

 <?php
 
 include "footer.php";
 ?>