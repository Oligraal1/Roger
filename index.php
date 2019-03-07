<?php
include "mainImages.php";

include "header.php";

?>
<main>
    <div class='container container-mobile'>
<div class="index">
<?php 
        foreach ($pictureRandom as $picture) :
    $picRandSource=$picture->getSource();
    $picRandAlt=$picture->getAlt(); ?>
        <h3>Qui suis-je ?</h3>
        
        <article>
        <img class='indexImg boxshadow images' src=<?=$picRandSource?> alt=
        <?=$picRandAlt?>>
        <div>
        <p>Issu du terroir isérois, j'ai, très jeune, découvert les voyages.</p>
        <p>D'abord l'Afrique, puis la Chine, le Maroc, la Turquie, la Hongrie...</p>
        <p>De ces voyages, j'ai ramené des photos pris au détours de rencontres avec des gens fantastiques.</p>
        <p>Les voyages continuent et de nouveaux projets fleurissent...</p>
        <p>Si vous êtes intéressés, vous pouvez me contacter <a href="contact.php">ici.</a></p>
        </div>
       
        </article>
        
        <?php endforeach; ?>
</div>
       
   
    </div>
   <?php include "slider.php"?>
</main>
<?php
include "footer.php";
?>