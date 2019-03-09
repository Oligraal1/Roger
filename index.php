<?php
include "mainController.php";
include "header.php";
?>
<main>
    <div class='container container-mobile'>
        <div class="index">
            <?php 
        foreach ($pictureRandom as $picture) :
    $picRandSource=$picture->getSource();
    $picRandAlt=$picture->getAlt(); ?>
            <h3>Roger Harle, photographe de l'humain</h3>

            <article>
                <img class='indexImg boxshadow images' src=<?=$picRandSource?> alt=
                <?=$picRandAlt?>>
                <div>
                    <p>Issu du terroir isérois, j'ai possédé longtemps une exploitation de pommes. L'attachement à ses racines est donc un thème qui me touche particulièrement.</p>
                    <p>A travers différents voyages, d'abord l'Afrique, puis la Chine, le Maroc, la Turquie, la Hongrie..., j'ai essayé de rencontrer les populations et de capter ce qui fait leurs cultures et leurs racines.</p>
                    <p>De ces expéditions, j'ai ramené des photos pris au détours de rencontres avec des gens fantastiques.</p>
                    <p>Les voyages continuent et de nouveaux projets fleurissent...</p>
                </div>
                
            </article>
            <div class="citation">
                    <blockquote>
                    <p><i class="fas fa-quote-left"></i> Comme les muses, les racines inspirent, mais elles ne sauraient donner à quiconque le souffle nécessaire à sa propre course. <i class="fas fa-quote-right"></i></p>
                    </blockquote>
            <cite><i class="fas fa-minus"></i>&nbsp;Fatou Diome, Impossible de grandir&nbsp;<i class="fas fa-minus"></i></cite>
        </div>
            <?php include "slider.php"?>
            <?php endforeach; ?>
            <p class="contactMe"><a href="contact.php?action=contact">N'hésitez pas à me contacter ! <i class="far fa-grin"></i></a></p>
        </div> 
    </div>
</main>
<?php
include "footer.php";
?>