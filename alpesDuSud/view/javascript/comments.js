var addComment = document.getElementById("addComment");
var commentForm = document.getElementById("commentForm");
var faAngle = document.getElementById("faAngle");

//POURQUOI CE N'EST PAS DETECTE SI JE NE L'INITIALISE PAS ???????
commentForm.style.display = "none";

function commentAdd() {
    if (commentForm.style.display == "none") {
        commentForm.style.display = "block";
        faAngle.classList.replace("fa-angle-down", "fa-angle-up");
    } else {
        commentForm.style.display = "none";
        faAngle.classList.replace("fa-angle-up", "fa-angle-down");
    }
}

addComment.addEventListener("click", commentAdd);