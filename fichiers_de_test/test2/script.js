var i, j, alea;

var grid = new Array();
for (i=0 ; i<81 ; i++) {
	grid[i] = i;
}

var deleted = new Array();
var nbCasesVides = 30;
for (i=0 ; i<nbCasesVides ; i++) {
	alea = Math.trunc(Math.random()*grid.length);
	deleted[i] = grid[alea];
	grid.splice(grid.indexOf(deleted[i]),1);
}