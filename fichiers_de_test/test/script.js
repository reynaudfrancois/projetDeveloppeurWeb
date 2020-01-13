/*table = [1,2,3,8,5,6,7,8,9];
for (var i=0; i<9 ; i++) {
    for (var k=0; k<i ; k++) {
        if (table[k]!=table[i]) {
            document.write("ok");
        } else {
            document.write("error");
        }
    }
}*/

var para = document.getElementById('paragraphe');
var paraClass = para.classList;
console.log(paraClass);
console.log(paraClass.value);

for (var i=0 ; i<paraClass.length ; i++) {
	console.log(paraClass[i]);
	document.write(paraClass[i] + '<br>');
}