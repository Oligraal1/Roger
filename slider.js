'use strict'

var button = document.querySelector(".buttonSlider");
var apres = document.querySelector(".apres");
var avant = document.querySelector(".avant");
var joue = document.querySelector(".figureSlider");
console.log(joue);
var image = document.querySelector(".picture");
console.log(image);
var figcaption = document.querySelector("figcaption");
console.log(figcaption);
var playBtn = document.querySelector(".play");
//image.src;
//image.src = $.getJSON("displayImage.php",function(){console.log(image.src)});

//image.alt;
var legend = ["jeune fille en bleu ecrivant sur un mur","rassemblement d'hommes armés","vieil homme en Chine","enfants assis sur une jeep","vieil homme au Maroc","enfants jouant avec un pneu","petite fille en Roumanie","enfants dans une ruelle"];
var imageNumber = 1;
var degres = 5;
var aleatoire = document.querySelector(".aleatoire");
var imgAleatoire = 0;
var chrono ;
var lecture = false;

function clickOnAfter() {
    imageNumber++;
    if (imageNumber > 8) {
        imageNumber = 1;
    }
    console.log(imageNumber);
    image.src = "img/slider/" + imageNumber + ".jpg";
    console.log(image.src);
    image.alt = legend[imageNumber-1];
   figcaption.innerHTML = legend[imageNumber-1];
   //degres = -degres;
   //image.style.transform = "rotate("+degres+"deg)";
}
function clickOnBefore() {
    imageNumber--;
    if (imageNumber <= 0) {
        imageNumber = 8;
    }
    image.src = "img/slider/" + imageNumber + ".jpg";
    image.alt = legend[imageNumber-1];
    figcaption.innerHTML = legend[imageNumber-1];
    //degres = -degres;
    //image.style.transform = "rotate("+degres+"deg)";

}
function ClickOnAleatoire () {   
    do {
        imgAleatoire= Math.floor(Math.random()*(8-1)+1);
    }
    while (imageNumber===imgAleatoire);
   imageNumber=imgAleatoire;
    image.src = "img/slider/" + imageNumber + ".jpg";
    image.alt = legend[imageNumber-1];
    figcaption.innerHTML = legend[imageNumber-1];
}
function ClickOnPlay(e) {
    e.preventDefault();
    if (lecture == false){
        lecture = true;
       
        $(this).fadeIn();
        chrono = setInterval(ClickOnAleatoire, 2500);
      //  degres = -degres;
   // image.style.transform = "rotate("+degres+"deg)";
    }
    else{
        lecture = false;
        clearInterval(chrono);
    }
}
function OnKeyPress(event){
    console.log(event.keyCode);
    if(event.keyCode == 37 || event.keyCode==100){
        clickOnBefore();
    }
    if (event.keyCode == 39|| event.keyCode==102){
        clickOnAfter();
    }
    if (event.keyCode==32|| event.keyCode==13) {
        ClickOnPlay();
    }
}



$(".picture").mouseover(function() {
    $(".play").fadeOut(2500, function() {
        console.log("Olivette");
        $(this).remove();
});
    console.log("Olivia");
   
})

apres.addEventListener("click", clickOnAfter);
avant.addEventListener("click", clickOnBefore);
//aleatoire.addEventListener("click", ClickOnAleatoire);
joue.addEventListener("click", ClickOnPlay);
document.addEventListener("keydown", OnKeyPress);