<?php
include "mainController.php";
include "header.php";
?>
<main>
    <div  class="container container-mobile">
    <h3>Ecrivez-moi</h3>
    <form class="contact" action="mail.php?action=addContact" method="post">
        <fieldset>
            <div>
            <label for="name">Votre nom</label>
            <input id="name" name="name" type="text">
            </div>
            <div>
            <label for="email">Votre e-mail</label>
            <input id="email" name="email" type="email">
            </div>
            <div>
            <label for="question">Quelle est votre question ?</label>
            <textarea id="question" name="question" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" id="contactButton">Envoyer <i class="fas fa-dove rotateOutUpRight"></i></button>
        </fieldset>
    </form>
    </div>    
</main>
<?php
include "footer.php";
?>