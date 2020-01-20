<?php

require ("../model/commentsModel.php");
$error = postComment();
$nbTotalComments = countComments();
$reponse = displayComments();
require ("../view/comments.php");