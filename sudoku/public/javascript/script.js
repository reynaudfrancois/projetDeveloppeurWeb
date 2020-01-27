// DEFINITION DE QUELQUES VARIABLES QUI REVIENNENT SOUVENT

var i, j, k, n, p, alea;

// PROTOCOLE DE CHOIX DU NIVEAU DE JEU

var radios = document.getElementsByClassName("radio");
function initLevelChoise() {
    for (i = 0; i < radios.length; i++) {
        if (radios[i].checked) {
            init(radios[i].value);
        }
    }
}
function levelChoise() {
    initLevelChoise();
    document.location.href = "#sudoku";
}
var validate = document.getElementById("validate");
validate.addEventListener("click", levelChoise);

// NIVEAU DE JEU INITIAL : CELUI DU NIVEAU PRECOCHE

initLevelChoise();

// FONCTION DE REMPLISSAGE DE LA GRILLE EN FONCTION DU NIVEAU

function init(nbCasesEmpty) {

    // on définit l'ensemble des chiffres qu'on trouvera dans la grille

    var figures = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    /* on progamme l'ensemble des permutations possibles pour le tableau précédent
    il y en a au total 9!, ce qui donne 362880 possibilités de grilles !!!!! */

    var line = [];
    for (i = 0; i < 9; i++) {
        alea = parseInt(Math.random() * figures.length);
        line[i] = figures[alea];
        figures.splice(alea, 1);
    }

    /* on programme la méthode permettant à partir de la permutation obtenue
    d'être sûr de respecter les règles de remplissage de la grille du sudoku
    cad jamais 2 fois le même chiffre dans la même ligne, colonne ou carré */

    var figuresChoice = line.concat(line);

    var tableComplete = [];
    for (i = 0; i < 3; i++) {
        for (j = 0; j < 3; j++) {
            n = 3 * i + j;
            tableComplete[n] = [];
            for (k = 0; k < 9; k++) {
                p = i + 3 * j + k;
                tableComplete[n][k] = figuresChoice[p];
            }
        }
    }

    /* on commence ici le programme qui permettra de vider des cases de la grille
    en fonction du niveau choisi */

    var tableEmpty = [];
    for (i = 0; i < 9; i++) {
        tableEmpty[i] = [];
        for (j = 0; j < 9; j++) {
            tableEmpty[i][j] = tableComplete[i][j];
        }
    }

    // on regroupe tous les chiffres de la grille dans le tableau grid

    var grid = [];
    for (i = 0; i < 81; i++) {
        grid[i] = i;
    }

    // on choisit aléatoirement les rangs des chiffres à retirer dans la grille

    var deleted = [];
    for (i = 0; i < nbCasesEmpty; i++) {
        alea = parseInt(Math.random() * grid.length);
        deleted[i] = grid[alea];
        grid.splice(grid.indexOf(deleted[i]), 1);
    }

    // on vide les cases concernées

    for (i = 0; i < 9; i++) {
        for (j = 0; j < 9; j++) {
            for (k = 0; k < deleted.length; k++) {
                if (9 * i + j == deleted[k]) {
                    tableEmpty[i][j] = '';
                    break;
                }
            }
        }
    }

    // on écrit le programme html pour afficher la grille prête à jouer

    var html = "<table id='sudoku'>";

    for (i = 0; i < 9; i++) {
        html += "<tr>";
        for (j = 0; j < 9; j++) {
            html += "<td>" + tableEmpty[i][j] + "</td>";
        }
        html += "</tr>";
    }

    html += "</table>";

    html += "<div id='gridOk'>";

        html += "<p><strong>";
        html += "BRAVO, VOUS AVEZ TERMINE CETTE GRILLE !";
        html += "</strong></p>";

        html += "<button id='refresh'>";
        html += "Cliquez ici pour refaire une partie";
        html += "</button>";

    html += "</div>";

    html += "<div id='gridError'>";

        html += "<p><strong>";
        html += "ATTENTION, IL Y A DES ERREURS (EN ROUGE) DANS VOTRE GRILLE<br />";
        html += "OU VOUS AVEZ LAISSE DES CASES VIDES !";
        html += "</strong></p>";

    html += "</div>";

    html += "<div id='allButtons'>";

        html += "<button id='figureChoice' class='buttons'>";
        html += "Choisissez votre chiffre";
        html += "</button>";

        html += "<button id='clear' class='buttons'>";
        html += "Effacer";
        html += "</button>";

        html += "<button id='verify' class='buttons'>";
        html += "Vérifier";
        html += "</button>";

        html += "<button id='send' class='buttons'>";
        html += "Valider";
        html += "</button>";

    html += "</div>";

    var main = document.getElementById("main");
    main.innerHTML = "";
    main.innerHTML += html;

    // PROGRAMME POUR COMPLETER UNE CASE VIDE

    // étape 1 : on sélectionne les cases vides

    var box = document.querySelectorAll("td");
    for (i = 0; i < box.length; i++) {
        if (box[i].innerHTML == "") {
            box[i].classList.add("empty");
        }
    }
    box = document.getElementsByClassName("empty");

    // étape 2 : on leur applique la fonction de sélection

    function selectBox() {
        this.setAttribute("id", "skyBlue");
        for (i = 0; i < box.length; i++) {
            if (box[i] != this) {
                (box[i]).removeAttribute("id");
            }
        }
    }
    for (i = 0; i < box.length; i++) {
        box[i].addEventListener("click", selectBox);
    }

    // étape 3 : on crée le bouton pour remplir la case

    function figureChoice() {
        var figure = parseInt(prompt("Entrez un chiffre"));
        //JE N'ARRIVE PAS A ECRIRE LA LIGNE SUIVANTE PLUS SIMPLEMENT
        //J'AI ESSAYE UN for MAIS CA NE FONCTIONNE PAS
        if (figure != 1 && figure != 2 && figure != 3 && figure != 4 && figure != 5 && figure != 6 && figure != 7 && figure != 8 && figure != 9) {
            alert("Veuillez entrer un chiffre entier allant de 1 à 9 compris !");
        } else {
            for (j = 0; j < box.length; j++) {
                if ((box[j]).id == "skyBlue") {
                    box[j].textContent = figure;
                    box[j].classList.remove("right");
                    box[j].classList.remove("false");
                }
            }
        }
    }
    var buttonChoice = document.getElementById("figureChoice");
    buttonChoice.addEventListener("click", figureChoice);

    // étape 4 : on crée le bouton pour effacer une case

    function figureClear() {
        for (j = 0; j < box.length; j++) {
            if ((box[j]).id == "skyBlue") {
                box[j].textContent = "";
                box[j].classList.remove("right");
                box[j].classList.remove("false");
            }
        }
    }
    var buttonClear = document.getElementById("clear");
    buttonClear.addEventListener("click", figureClear);

    // étape 5 : on crée le bouton pour vérifier les chiffres ajoutés

    var box = document.querySelectorAll("td");
    function verify() {
        for (i = 0; i < box.length; i++) {
            if (box[i].className == "empty" && box[i].textContent != "") {
                if (box[i].textContent == tableComplete[parseInt(i / 9)][i % 9]) {
                    box[i].classList.add("right");
                } else {
                    box[i].classList.add("false");
                }
            } else if (box[i].classList.value == "empty false") {
                if (box[i].textContent == tableComplete[parseInt(i / 9)][i % 9]) {
                    box[i].classList.remove("false");
                    box[i].classList.add("right");
                }
            } else if (box[i].classList.value == "empty right") {
                if (box[i].textContent != tableComplete[parseInt(i / 9)][i % 9]) {
                    box[i].classList.remove("right");
                    box[i].classList.add("false");
                }
            }
        }
    }
    var buttonVerify = document.getElementById("verify");
    buttonVerify.addEventListener("click", verify);

    // étape 6 : on écrit la fonction de validation ou non de la grille une fois complétée

    var allBox = document.querySelectorAll("td");
    var gridOk = document.getElementById("gridOk");
    var gridError = document.getElementById("gridError");
    var allButtons = document.getElementById("allButtons");
    function sendCompleteGrid() {
        var valid = true;
        for (i = 0; i < allBox.length; i++) {
            if (allBox[i].textContent == tableComplete[parseInt(i / 9)][i % 9]) {
                valid = true;
            } else {
                valid = false;
                break;
            }
        }
        if (valid == true) {
            verify();
            gridOk.style.display = "block";
            gridError.style.display = "none";
            allButtons.style.display = "none";
            var refresh = document.getElementById("refresh");
            refresh.addEventListener("click", levelChoise);
        } else {
            verify();
            gridError.style.display = "none";
            function errorMessage() {
                gridError.style.display = "block";
            }
            setTimeout(errorMessage, 500);
        }
    }
    var sendButton = document.getElementById("send");
    sendButton.addEventListener("click", sendCompleteGrid);
}