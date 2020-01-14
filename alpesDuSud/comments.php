<?php

require ("model.php");
$error = postComment();
$nbTotalComments = countComments();
$reponse = displayComments();
require ("commentsView.php");