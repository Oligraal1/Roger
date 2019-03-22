<?php
include "mainController.php";
include "header.php";

$idImage=$_GET["id"];
?>
<main>
    <div class="container container-mobile">
        <div class="big">
            <?php foreach ($pictureDisplay as $picture) :
    $pictureId=$picture->getId();
    $pictureSource=$picture->getSource();
    $pictureAlt=$picture->getAlt();
    $pictureType=$picture->getType();
    if ($pictureId==$idImage): ?>
            <h3><?=$pictureAlt;?></h3>
            <a href="displayImage.php?action=<?=$pictureType?>"><i class="fas fa-undo"></i> Retour à la page précédente</a>
            <img class='bigImg boxshadow scale-in-center' src=<?=$pictureSource?> alt=
            <?=$pictureAlt?> >
            <button class="btLike"><a href="#1"><i id=<?=$pictureId?> class="like fas fa-heart"></i>    J'aime</a></button>
            <p id="1"><a href="contact.php?action=contact">Si cette photo vous intéresse, contactez-moi pour les tarifs ou pour toute autre information. <i class="far fa-envelope"></i></a></p>
            <a href="displayImage.php?action=<?=$pictureType?>"><i class="fas fa-undo"></i> Retour</a>
            <?php endif;
    endforeach; ?>
        </div>

    </div>
</main>
<?php include "footer.php";
?>