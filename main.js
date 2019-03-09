'use strict'

var like = document.querySelector(".like");
var liked = document.querySelector(".liked");
var hearts = document.querySelectorAll(".like");
var heartTab = Array.prototype.slice.call(hearts);
var toBigImg = document.querySelector(".toBigImg");
var homeP = document.querySelector(".homePage");
var couleurP = document.querySelector(".couleurPage");
var nbP = document.querySelector(".nbPage");
var contactP = document.querySelector(".contactPage");
var count=0;


$(document).ready(function(e) {
    //e.preventDefault(); // Le navigateur ne peut pas envoyer le formulaire
    $(".like").click(function(e) {
        e.preventDefault();
        changeToRed();
    });
    $(".blur").mouseover(function() {
        console.log("Olivia");
        hideToBigImg();
    });
})

/*$("#nav").click(function(e) {
    e.preventDefault();
    highlightNav();
})
    function highlightNav() {
        var chemin = "";
        var cheminComplet = "";
        
        // on essaye de détecter la page en cours pour modifier le style du lien actif
        if(document.getElementById("nav")) {
            console.log("Olive");
            // on récupère la page en cours
            
            // si l'URL comporte une query string, on la retire
            if(document.location.search) {
            cheminComplet = document.location.href;
               var cheminCompletSansQueryString = cheminComplet.split(document.location.search);
                cheminComplet = cheminCompletSansQueryString[0];
            } else {
                cheminComplet = document.location.href;
            }
    
            // si il n'y a pas de fichier après le dernier slash, on doit être sur la page index.php
            var cheminCompletDecoupe = cheminComplet.split("/");
            if (cheminCompletDecoupe[cheminCompletDecoupe.length-1] == "") {
                chemin = cheminComplet;
                cheminComplet += "index.php";
            } else {
                chemin = cheminCompletDecoupe.splice(0,cheminCompletDecoupe.length-1) 
                chemin = chemin.join("/");
                chemin += "/";
            }
             // on boucle sur les balises <a> pour récupérer leur href
          var listeDesLiens = document.getElementById("nav").getElementsByTagName("a");
          console.log(listeDesLiens);
            for (var i=0; i<listeDesLiens.length; i++) {
                console.log(cheminComplet);
                // on compare le href avec le chemin de la page en cours
                if(listeDesLiens[i].getAttribute("href") == cheminComplet || (chemin + listeDesLiens[i].getAttribute("href")) == cheminComplet) {
                    // on modifie le style du lien actif
                    console.log(listeDesLiens[i])
                    listeDesLiens[i].style.color = "rgb(192, 18, 47);";
    
                    // on sort de la boucle
                    break;
                }
            }
        }
    }
*/

function changeToRed() {
    like.classList.toggle("liked");
}
function hideToBigImg() {
    $(".toBigImg").fadeOut(20000, function() {
        console.log("Olivette");
        $(this).remove();
});
}
