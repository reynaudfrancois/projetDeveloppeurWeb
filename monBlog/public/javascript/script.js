// changement de propiétés css de la barre de navigation
/*var nav = document.querySelector("nav");
nav.style.position = "relative";
nav.style.width = "100%";*/

// supression de l'image de fond et du lien vers mon blog
/*document.getElementById("title").style.display = "none";
document.getElementById("blog").style.display = "none";*/

var addComment = document.getElementById("addComment");
var commentForm = document.getElementById("commentForm");
var faAngle = document.getElementById("faAngle");

//POURQUOI CE N'EST PAS DETECTE SI JE NE L'INITIALISE PAS ???????

var error = document.getElementById("error");
commentForm.style.display = "none";
if (error.style.color == "red") {
	commentForm.style.display = "block";
	faAngle.classList.replace("fa-angle-down", "fa-angle-up");
    document.location.href += "#comments";
}
else {
	commentForm.style.display = "none";
    faAngle.classList.replace("fa-angle-up", "fa-angle-down");
}

/*console.log(document.getElementById("error").innerHTML);*/

function commentAdd() {
    if (commentForm.style.display == "none") {
        commentForm.style.display = "block";
        faAngle.classList.replace("fa-angle-down", "fa-angle-up");
    } else {
        commentForm.style.display = "none";
        faAngle.classList.replace("fa-angle-up", "fa-angle-down");
    }
}

console.log(document.getElementById("error").innerHTML);
console.log(commentForm.style.display);

addComment.addEventListener("click", commentAdd);