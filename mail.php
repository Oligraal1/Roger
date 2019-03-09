<?php
    include "mainController.php";
    include "header.php";  
 ?>

 <main>
 <div class="container container-mobile thanks">
 <p>Merci de votre message, <?=$lastInsertId["name"]?> </p>
 <p>Je vous répondrai dans les plus brefs délais.</p>
 <a href="index.php?action=index"><i class="fas fa-undo"></i> Retour à la page d'accueil</a></div>
 <div class="showPic">
    <?php 
        foreach ($pictureRandom as $picture) :
    $picRandSource=$picture->getSource();
    $picRandAlt=$picture->getAlt();
    $picRandType=$picture->getType(); ?>
       <a href="displayImage.php?action=<?=$picRandType?>"><img class='pic boxshadow' src=<?=$picRandSource?> alt=<?=$picRandAlt?> > </a>
       <?php endforeach ?>
    </div>
 </main>

 <?php
 
 include "footer.php";
 ?>