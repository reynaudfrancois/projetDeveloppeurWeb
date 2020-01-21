// changement de propiétés css de la barre de navigation
/*var nav = document.querySelector("nav");
nav.style.position = "relative";
nav.style.width = "100%";*/
var addComment = document.getElementById("addComment");
var commentForm = document.getElementById("commentForm");
var faAngle = document.getElementById("faAngle");

//POURQUOI CE N'EST PAS DETECTE SI JE NE L'INITIALISE PAS ???????

var error = document.getElementById("error");
commentForm.style.display = "none";
if (error.innerHTML.trim() != "") {
	commentForm.style.display = "block";
	faAngle.classList.replace("fa-angle-down", "fa-angle-up");
    document.location.href += "#comments";
}
else {
	commentForm.style.display = "none";
    faAngle.classList.replace("fa-angle-up", "fa-angle-down");
}

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