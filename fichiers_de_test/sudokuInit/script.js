var j;
var i;

var table = new Array();
var line = new Array();
var column = new Array();
var square = new Array();

for (i=1; i<=9 ; i++) {
    table[i]=new Array();
    for (j=1 ; j<=9 ; j++) {
        table[i][j] = 0;
    }
}


// SI A LA LIGNE 19, JE FIXE i<= A 1 OU 2, CA FONCTIONNE, A 3 OU 4, CA DEPEND
// A PARTIR DE 5, CA NE MARCHE PLUS : CA TOURNE DANS LE VIDE
for (i=1 ; i<=2 ; i++) {
    //console.log("I(LIGNE) VAUT " + i);
    line[i]=[1,2,3,4,5,6,7,8,9];
    for (j=1;j<=9;j++) {
        var differentsColumnCases = false;
        //console.log (differentsColumnCases);
        while (differentsColumnCases == false) {
            //console.log("i(ligne) et j(colonne) valent " + i + " et " + j);
            var k = Math.trunc(Math.random()*line[i].length);
            //console.log("k vaut " + k);
            table[i][j] = line[i][k];
            //console.log("tableIJ vaut " + table[i][j]);
            for (var l=1 ; l<=i; l++) {
                //console.log("i vaut " + i + " et l vaut " + l);
                if (l==i) {
                    differentsColumnCases=true;
                    //console.log("differentsColumnCases vaut " + differentsColumnCases);
                } else if (table[i][j] != table[l][j]) {
                    differentsColumnCases=true;
                    //console.log("differentsColumnCases vaut " + differentsColumnCases);
                } else {
                    differentsColumnCases=false;
                    //console.log("differentsColumnCases vaut " + differentsColumnCases);
                    break;
                }
            }
            //console.log("FIN DE BOUCLE l !!!!!");
            //console.log("differentsColumnCases vaut " + differentsColumnCases);
        }
        line[i].splice(k,1);
    }
}

var html = "<table>";

for (i=1 ; i<=9 ; i++) {
    html += "<tr>";
    for (j=1;j<=9;j++) {
        html +="<td>" + table[i][j] + "</td>";
        
    }
    html += "</tr>";
}

html += "</table>";

html += "<div id='figureChoice'>";


    html += "<button id='figeurChoice'>" ;
    html += "Choisissez votre chiffre";
    html += "</button>";


html += "</div>";

document.write(html);



var box = document.querySelectorAll('td');
var i;
var j;

function selectBox() {
    this.setAttribute('id', 'skyBlue');
    for (i=0; i<box.length; i++) {
        if (box[i]!=this) {
            (box[i]).removeAttribute('id');
        }
    }
}

for (i=0; i<box.length; i++) {
box[i].addEventListener('click', selectBox);
}

var button = document.getElementById('figureChoice');
button.addEventListener('click', figureChoice);
function figureChoice() {
    i=parseInt(prompt("Entrez un chiffre"));
    for(j=0; j<box.length; j++) {
        if ((box[j]).id == 'skyBlue') {
            (box[j]).textContent = i;
        }
    }
}