<?php $navOn="";
include "navController.php"; ?>
<div class="container container-mobile">
    <nav>
        <ul id="nav">
            <li class="homePage"><a href="index.php?action=index" <?php if ($navOn=='index') {echo ' id="navOn"' ;} ?>><i class="fas fa-home"></i></a></li>
            <li class="couleurPage"><a href="displayImage.php?action=couleur" <?php if ($navOn=='couleur' ) {echo ' id="navOn"' ;} ?>>Couleur</a></li>
            <li class="nbPage"><a href="displayImage.php?action=nb" <?php if ($navOn=='nb' ) {echo ' id="navOn"' ;} ?>>Noir & Blanc</a></li>
            <li class="contactPage"><a href="contact.php?action=contact" <?php if ($navOn=='contact' ) {echo ' id="navOn"' ;} ?>>Contactez-moi</a></li>
            
        </ul>
    </nav>
</div>

<script src="main.js"></script>