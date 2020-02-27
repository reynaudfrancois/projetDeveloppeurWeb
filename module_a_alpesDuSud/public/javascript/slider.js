var nav = document.querySelector("nav");
nav.style.position = "relative";
nav.style.width = "100%";

document.getElementById("title").style.display = "none";
document.getElementById("blog").style.display = "none";

var n = 77;

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
tableTitlesImages.push("Vacherie de Roubion", "Col des Moulines", "Mont Mounier - Versant Sud", "Mont Mounier - Versant Nord", "Roya", "Vallon de Roya", "Cime de Las Donnas", "Auron", "Saint-Etienne-de-Tinée", "Aurore sur la Tinée");
tableTitlesImages.push("Cime de la Bercha", "Saint-Dalmas-le-Selvage", "Vallon de Saint-Dalmas", "Vallon de Gialorgues", "Bousiéyas", "Ruines du Camp des Fourches", "Lac de derrière la Croix", "Descente sur névé", "Pas de la Cavale", "Sale temps pour marcher");
tableTitlesImages.push("Larche", "Tête de Viraysse", "Haute vallée de l'Ubayette", "Fort de Mallemort", "Saint-Ours", "A l'attaque du Col de Mirandol", "Arrivée au Col de Mirandol", "Pont du Châtelet", "Haute vallée de l'Ubaye", "Mauvais temps de  retour");
tableTitlesImages.push("Col Tronchet", "Cascade de la Pisse", "Anes", "Ceillac", "Bramousse", "En route vers Furfande", "Combe du Queyras", "Alpage de Furfande", "Refuge de Furfande", "Balcon de Furfande");
tableTitlesImages.push("Hauts sommets du Queyras", "Chalets de Furfande", "Lac du Lauzet", "Vallée de la Durance", "Mont-Dauphin", "Le Guil en dessous de Guillestre", "Le Guil en dessous de Mont-Dauphin");

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