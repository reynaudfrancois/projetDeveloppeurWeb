var table = new Array();
var line = new Array();
var i;
line = [1,2,3,4,5,6,7,8,9];
for (i=0 ; i<line.length ; i++) {
    console.log(line[i]);
    document.write(line[i] + "<br>");
}


//var differentsColumnCases = false;
for (i=0; i<line.length ; i++) {
    var differentsColumnCases = false;
    while (differentsColumnCases == false) {
        console.log("i vaut " + i);
        var k = Math.trunc(Math.random()*line.length);
        console.log("k vaut " + k);
        table[i] = line[k];
        console.log("tableI vaut " + table[i]);
        for (var l=0 ; l<=i; l++) {
            console.log("i vaut " + i + " et l vaut " + l);
            if (l==i) {
                differentsColumnCases=true;
                console.log("verite vaut " + differentsColumnCases);
            } else if (table[i] != table[l]) {
                differentsColumnCases=true;
                console.log("verite vaut " + differentsColumnCases);
            } else {
                differentsColumnCases=false;
                console.log("verite vaut " + differentsColumnCases);
                break;
            }
        }
        //document.write(table[i]);
    }
    document.write(table[i]);
}
