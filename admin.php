<?php 
include "header.php";
include "nav.php";
?>

<main class="container admin">
    <form action="mainImages.php?action=add" method="post">
    <input name="name" type="text" placeholder="nom">
    <input name="size" type="text" placeholder="taille en px">
    <input name="source" type="text" placeholder="source">
    <input name="href" type="text" placeholder="bigImage.php">
    <input name="alt" type="text" placeholder="texte explicatif">
    <input name="type" type="text" placeholder="type">
    <button name="" type="submit">OK</button>

    </form>
</main>
<?php

?>