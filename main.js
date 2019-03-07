'use strict'
var contact = document.querySelector(".contact");
var hide = document.querySelector(".hide");
var hidePic= document.querySelector(".hidePic");

// $(document).ready(function () {
//     $("#contactButton").click(function (e) { // à la soumission du formulaire

//         e.preventDefault(); // Le navigateur ne peut pas envoyer le formulaire
//         $.post(
//             'mainImages.php?action=addContact',

//             {
//                 'name': $("#name").val(),
//                 'email': $("#email").val(), // Nous récupérons la valeur de nos input que l'on fait passer à page php

//                 'question': $("#question").val()

//             },
//             //'json',
//             function (data) { // si l'appel a bien fonctionné

//                 var contacts = JSON.parse(data);
                
//                 if (contacts) // si la connexion en php a fonctionné
//                 {
                    
//                     var thanks = $(".thanks");
//                     var p = $('<p>');
//                     var p2 = $('<p>');
//                     var a = $('<a>').attr("href", "index.php");
//                     thanks.append(p);
//                     thanks.append(p2);
//                     thanks.append(a);
//                     $(p).text("Merci de votre message, " + contacts.name + ".");
//                     $(p2).text("Je vous répondrai dans les plus brefs délais.");
//                     $(a).text("Retour à la page d'accueil")
                    
//                     hideForm();
//                     showPics();
//                 } else // si la connexion en php n'a pas fonctionnée
//                 {
//                     $(".thanks").html("Vous n'avez pas rempli correctement tous les champs.");
               
//                 }
//             }

//         );

//     });
// })

function hideForm() {
    contact.classList.remove("contact");
    contact.classList.add("hide");
}
function showPics(){
    hidePic.classList.remove("hide");
    hidePic.classList.add("showPic");
    }
//function showThanks(){
//  thanks.classList.remove("hide");
//thanks.classList.add("thanks");
//}

