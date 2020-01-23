var nav = document.querySelector("nav");
nav.style.position = "relative";
nav.style.width = "100%";

document.getElementById("title").style.display = "none";
document.getElementById("blog").style.display = "none";

var n=14;

var images = new Array(n);
for (var i=0 ; i<images.length ; i++) {
    var j = "../public/images/alpiluberon/" + (i).toString() + ".JPG";
    images [i] = j;
}

var i=-1; //initialisation de i à -1 au chargement de la page
var time = 4000;

//variables du compteur d'images
var counter = document.getElementById("counter");
var counterDenominator = "/" + n;
var initCounter = 1 + "/" + n;
// initialisation du compteur d'images à 1/n au chargement de la page
counter.innerHTML = initCounter;

//variables correspondant aux boutons du slider
var before = document.getElementById("before");
var next = document.getElementById("next");
var slideshow = document.getElementById("slideshow");
var changeMode = document.getElementById("changeMode");
var stop = document.getElementById("stop");
var pause = document.getElementById("pause");
var play = document.getElementById("play");
var img = document.getElementById("imgSlider");

// pour voir l'image suivante
function nextImg() {
    if (i<images.length-1 && i>=0) {
        i++;
    } else if (i==-1)  {
        i=1;
    } else {
        i=0;
    }
    document.slide.src = images[i];
    counter.innerHTML = (i+1) + counterDenominator;
    slideshow.style.display = "none";
    changeMode.style.display = "inline-block";
}

// pour voir l'image précédente
function beforeImg() {
    if (i>0) {
        i--;
    } else {
        i=n-1;
    }
    beforeNext();
}

function beforeNext () {
    document.slide.src = images[i];
    counter.innerHTML = (i+1) + counterDenominator;
    slideshow.style.display = "none";
    changeMode.style.display = "inline-block";
}

/*function opposite(a) {
    if (a=="inline-block") {
        return "none";
    } else {
        return "inline-block";
    }
}

function play(a,b) {
    if (a=="none") {
        return "none";
    } else if (b=="none") {
        return "inline-block";
    } else {
        return "none";
    }
}

function displayButton(a,b,c) {
    before.style.display = a;
    next.style.display = a;
    slideshow.style.display = b;
    changeMode.style.display = play(a,b);
    stop.style.display = opposite(a);
    pause.style.display = c;
    play.style.display = play((opposite(a)),c);
}*/

// nécessaire pour démarrer le diaporama après avoir utilisé les boutons appelant les fonctions nextImg et beforeImg
function modeChange() {
    i--;
    changeMode.style.display = "none";
    changeImg();
}

// permet de passer à l'image suivante
// fonction utilisée directement avec le bouton "Diaporama" ayant pour id "slideshow"
function changeImg() {  
    if (i<images.length-1) {
        i++;
    } else {
        i=0;
    }
    document.slide.src = images[i];
    interval = setTimeout("changeImg()", time);
    counter.innerHTML = (i+1) + counterDenominator;
    /*displayButton("none", "none", "inline-block");*/
    console.log(pause.style.display);
    before.style.display = "none";
    next.style.display = "none";
    slideshow.style.display = "none";
    stop.style.display = "inline-block";
    pause.style.display = "inline-block";
    play.style.display = "none"; 
    img.style.border = "10px solid #77b5fe";
}

// stoppe le diaporama et revient à la première image
function stopSlider() {
    clearInterval(interval);
    document.slide.src = images[0];
    i=-1;
    counter.innerHTML = initCounter;
    before.style.display = "inline-block";
    next.style.display = "inline-block";
    slideshow.style.display = "inline-block";
    stop.style.display = "none";
    pause.style.display = "none";
    play.style.display = "none";
    img.style.border = "none";
}

// met en pause le diaporama
function pauseSlider () {
    clearInterval(interval);
    document.slide.src = images[i];
    i--;
    /*before.style.display = "none";
    next.style.display = "none";
    slideshow.style.display = "none";
    stop.style.display = "inline-block";*/
    pause.style.display = "none";
    play.style.display = "inline-block";
    img.style.border = "none";
}

// définition des événements associés à chaque bouton
before.addEventListener("click",beforeImg);
next.addEventListener("click",nextImg);
slideshow.addEventListener("click",changeImg);
changeMode.addEventListener("click",modeChange);
stop.addEventListener("click",stopSlider);
pause.addEventListener("click",pauseSlider);
play.addEventListener("click",changeImg);