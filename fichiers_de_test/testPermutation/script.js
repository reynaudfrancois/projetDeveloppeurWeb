var table = [1,2,3,4,5,6,7,8,9];

var line = new Array();
for (var i=0 ; i<9 ; i++) {
	console.log("I VAUT " + i);
	k = Math.trunc(Math.random()*table.length);
	console.log("K vaut " + k);
	line[i]=table[k];
	console.log("le chiffre choisi est line[" + i + "]=" + line[i]);
	table.splice(k,1);
	for (j=0 ; j<table.length ; j++) {
		console.log(table[j]);
	}

}

for (i=0 ; i<line.length ; i++) {
	document.write(line[i]);
}

