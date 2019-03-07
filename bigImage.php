<?php
include "mainImages.php";
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
            <h3>
                <?=$pictureAlt;?>
            </h3>
            <a href="displayImage.php?action=<?=$pictureType?>"><i class="fas fa-undo"></i></a>
            <img class='bigImg boxshadow' src=<?=$pictureSource?> alt=
            <?=$pictureAlt?> >
            <?php endif;
    endforeach; ?>
        </div>

    </div>
</main>
<?php include "footer.php";
?>