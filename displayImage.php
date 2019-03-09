<?php
include "mainController.php";
include "header.php";
?>
<main>

    <div class="container container-mobile">
        <?php if($_GET['action']=='couleur'):?>
        <h3>Voyages en couleurs</h3>
        <p>Petit aperçu de gens formidables rencontrés en Roumanie, Turquie, Chine, Maroc et Sénégal</p>
        <div class='displayPic'>

            <?php 
foreach ($allPictures as $picture):
    $pictureId=$picture->getId();
    $pictureType=$picture->getType();
    $pictureSource=$picture->getSource();
    $pictureAlt=$picture->getAlt();

    if ($pictureType=="couleur"): ?>
            <figure class="hearts">
                <a class='images' href="bigImage.php?id=<?=$pictureId?>">
                    <img class='boxshadow image blur' src=<?=$pictureSource?> alt=
                    <?=$pictureAlt?> ></a>
                <figcaption class="toBigImg">Cliquez pour en savoir plus.</figcaption>
            </figure>

            <?php endif;
    endforeach ?>
        </div>
        <?php endif ?>

        <?php if($_GET['action']=='nb'): ?>
        <h3>Voyages en Noir & Blanc</h3>
        <p>Rencontre avec les populations en guerre</p>
        <div class='displayPic'>

            <?php 
foreach ($allPictures as $picture) :
    $pictureId=$picture->getId();
    $pictureType=$picture->getType();
    $pictureSource=$picture->getSource();
    $pictureAlt=$picture->getAlt();
    if ($pictureType=="nb"): ?>
            <figure>

                <a class='images' href="bigImage.php?id=<?=$pictureId?>">
                    <img class='boxshadow image blur' src=<?=$pictureSource?> alt=
                    <?=$pictureAlt?> >

                    <figcaption class="toBigImg">Cliquez pour en savoir plus.</figcaption>
                </a>
            </figure>
            <?php endif ?>
            <?php endforeach ?>
        </div>
        <?php endif ?>
    </div>

</main>
<?php
include "footer.php";
?>