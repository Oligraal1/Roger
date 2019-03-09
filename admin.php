<?php 
include "header.php";

?>

<main class="container admin">
    <form action="" class="edit">
        <fieldset>
        <input type="button" value="G" style="font-weight:bold;" onclick="commande('bold');"  /> 
<input type="button" value="I" style="font-style:italic;" onclick="commande('italic');" /> 
<input type="button" value="S" style="text-decoration:underline;" onclick="commande('underline');" />  
<input type="button" value="Lien" onclick="commande('createLink');" ></code>
<input type="button" value="NoLien" onclick="commande('unLink');" ></code>
<input type="button" value="Image" onclick="commande('insertImage');" ></code>
<select onchange="commande('heading', this.value); this.selectedIndex = 0;">
    <option value="">Titre</option>
    <option value="h1">Titre 1</option>
    <option value="h2">Titre 2</option>
    <option value="h3">Titre 3</option>
    <option value="h4">Titre 4</option>
    <option value="h5">Titre 5</option>
    <option value="h6">Titre 6</option>
</select>
        </fieldset>
        

<div id="editeur" contentEditable ></div> 

<input type="button" onclick="resultat();" value="Obtenir le HTML" ></code><br />
<textarea id="resultat"></textarea>
</form>



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
<script src="editeur.js"></script>
<?php
include "footer.php"
?>