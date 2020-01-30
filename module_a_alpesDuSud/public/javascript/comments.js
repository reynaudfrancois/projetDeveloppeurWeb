var nav = document.querySelector("nav");
nav.style.position = "relative";
nav.style.width = "100%";

document.getElementById("title").style.display = "none";
document.getElementById("blog").style.display = "none";

var addComment = document.getElementById("addComment");
var commentForm = document.getElementById("commentForm");
var faAngle = document.getElementById("faAngle");

var error = document.getElementById("error");
commentForm.style.display = "none";
if (error.innerHTML.trim() != "") {
	commentForm.style.display = "block";
	faAngle.classList.replace("fa-angle-down", "fa-angle-up");
}

function openForm() {
    if (commentForm.style.display == "none") {
        commentForm.style.display = "block";
        faAngle.classList.replace("fa-angle-down", "fa-angle-up");
    } else {
        commentForm.style.display = "none";
        faAngle.classList.replace("fa-angle-up", "fa-angle-down");
    }
}
addComment.addEventListener("click", openForm);