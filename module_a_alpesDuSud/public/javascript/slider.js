var nav = document.querySelector("nav");
nav.style.position = "relative";
nav.style.width = "100%";

document.getElementById("title").style.display = "none";
document.getElementById("blog").style.display = "none";

var n = 34;

var images = new Array(n);
var i, j;
for (i = 0; i < images.length; i++) {
    j = "../public/images/imgSlider/" + i.toString() + ".JPG";
    images[i] = j;
}

var i = 0;

var tableTitlesImages = ["La traversée des Alpes du Sud - Du 1er au 21 juin 2015", "Départ : port de Monaco", "Rocher et Palais Princier", "Monaco et le Cap Martin", "La Turbie", "Mont Agel", "Peillon", "Peille", "Crépuscule sur l'Arrière-Pays Niçois", "Col du Farguet"];
tableTitlesImages.push("Sospel", "Bivouac", "Pause à Moulinet", "Panorama sur l'Arrière-Pays Niçois", "Vallée de la Vésubie", "La Bollène-Vésubie", "Village de Belvédère", "Venanson", "Saint-Martin-Vésubie", "Aurore sur la Vésubie");
tableTitlesImages.push("Vallon de Bramafam", "Rimplas", "Petite pause", "Saint-Sauveur-sur-Tinée", "Roure", "Vallée de la Tinée", "Plateau de Longon", "Vallon de Vionène", "Hameau de Vignols", "Mont Longon");
tableTitlesImages.push("Vacherie de Roubion", "Col des Moulines", "Mont Mounier - Versant Sud", "Mont Mounier - Versant Nord");

var titleImage = document.getElementById("titleImage");
titleImage.innerHTML = tableTitlesImages[0];

var counterImage = document.getElementById("counterImage");
var counterDenominator = "/" + n;
var initCounter = 1 + counterDenominator;
counterImage.innerHTML = initCounter;

var before = document.getElementById("before");
var next = document.getElementById("next");

function nextImg() {
    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }
    beforeNext();
}

function beforeImg() {
    if (i > 0) {
        i--;
    } else {
        i = n - 1;
    }
    beforeNext();
}

function beforeNext() {
    document.slide.src = images[i];
    counterImage.innerHTML = (i + 1) + counterDenominator;
    titleImage.innerHTML = tableTitlesImages[i];
}

before.addEventListener("click", beforeImg);
next.addEventListener("click", nextImg);